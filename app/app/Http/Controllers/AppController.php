<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateEmail;
use App\Mail\TermsAndConditions;
use App\Visits;
use Feeds;
use DOMXPath;
use DOMDocument;
use Illuminate\Support\Facades\Mail;
use Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!session('lang')) {
                session(['lang' => 'en']);
            }

            $this->lang = session('lang');

            App::setLocale($this->lang);

            $this->languages = [
                'en' => [
                    'title' => 'English',
                    'code' => 'gb'
                ],
                'ger' => [
                    'title' => 'German',
                    'code' => 'de'
                ],
                'jap' => [
                    'title' => 'Japanese',
                    'code' => 'jp'
                ],
                'kor' => [
                    'title' => 'Korean',
                    'code' => 'kr'
                ]
            ];

            return $next($request);
        });
    }

    public function home(Request $request)
    {
        $feed = $this->getMediumRSSFeed();

        view()->share('feed', $feed);
        view()->share('languages', $this->languages);
        view()->share('terms', 0);

        Visits::create(geoip($request->ip())->toArray());

        return view('public.dashboard');
    }

    public function termsAndConditions(Request $request)
    {
        $feed = $this->getMediumRSSFeed();

        view()->share('feed', $feed);
        view()->share('languages', $this->languages);
        view()->share('terms', 1);

        $data = [
            'ip' => $request->ip(),
            'user_agent' => $request->headers->get('user_agent'),
            'dark_mode' => session('dark_mode'),
            'language' => session('lang')
        ];

        Mail::to(config('mail.contact_email_to'))->send(new TermsAndConditions($data));

        return view('public.terms');
    }

    public function getMediumRSSFeed()
    {
        $data = [];
        try {
            $feed = Feeds::make(config('feeds.default_feed'));

            foreach ($feed->get_items() as $item) {
                $xpath = new DOMXPath(@DOMDocument::loadHTML($item->get_content()));
                $src = $xpath->evaluate("string(//img/@src)");

                $data[] = [
                    'title' => $item->get_title(),
                    'content' => $content = strip_tags($item->get_content()),
                    'thumbnail' => $src,
                    'link' => $item->get_permalink(),
                    'date' => $item->get_date('j M Y')
                ];
            }
        } catch (\Exception $exception) {
            return [];
        }

        return $data;
    }

    public function changeLanguage(Request $request)
    {
        session(['lang' => $request['lang']]);
        $this->lang = session('lang');
        App::setLocale($this->lang);

        return redirect()->back();

    }

    public function downloadWhitepaper(ValidateEmail $request)
    {
        Newsletter::subscribe($request->input('email'), [], 'pre-sign-ups');

        return response()->download(storage_path("app/") . config('app.whitepaper'));
    }

    public function getTranslations(Request $request)
    {
        return response()->json(__('dashboard'));
    }

    public function changeMode(Request $request)
    {
        session(['dark_mode' => $request->input('dark_mode')]);
        return response()->json('ok');
    }

    public function subscribe(Request $request)
    {
        Newsletter::subscribe($request->input('email'));

        return response()->json('ok');
    }
}
