<?php

namespace App\Http\Controllers;

use Feeds;
use DOMXPath;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next) {
            if (!session('lang')){
                session(['lang' => 'en']);
                App::setLocale('en');
            }

            $this->lang = session('lang');

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
                'kor' =>  [
                    'title' => 'Korean',
                    'code' => 'kr'
                ]
            ];

            return $next($request);
        });
    }

    public function home()
    {
        $feed = $this->getMediumRSSFeed();

        view()->share('feed', $feed);
        view()->share('languages', $this->languages);

        return view('public.dashboard');
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
}
