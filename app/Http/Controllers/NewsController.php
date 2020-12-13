<?php


namespace App\Http\Controllers;


use App\Models\News;
use App\Models\Page;

class NewsController
{

    public function index() {
        $news = News::all('created_at', 'DESC');

        return view('news.index', compact('news'));
    }

    public function show($slug) {
        $page = News::find($slug, 'slug');

        if(count($page) == 0) {
            return view('errors.404');
        }

        $page = $page[0];

        return view('pages.general', compact('page'));
    }

}