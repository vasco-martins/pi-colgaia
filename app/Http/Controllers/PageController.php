<?php


namespace App\Http\Controllers;


use App\Models\Message;
use App\Models\Page;

class PageController
{

    public function show($slug) {

        $page = Page::find($slug, 'slug');

        if(count($page) == 0) {
            return view('errors.404');
        }

        $page = $page[0];
        $viewName = $page->template()->slug;

        return view('pages.' . $viewName, compact('page'));
    }


}