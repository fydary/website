<?php

namespace App\Http\Controllers;

use Feeds;
use DOMXPath;
use DOMDocument;

class AppController extends Controller
{
    public function home()
    {
        $feed = $this->getMediumRSSFeed();

        view()->share('feed', $feed);
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
}
