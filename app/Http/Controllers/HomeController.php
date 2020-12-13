<?php


namespace App\Http\Controllers;


use App\Models\News;
use App\Models\Page;
use Symfony\Component\HttpFoundation\Request;

class HomeController
{
    public function index() {
        $pages = Page::all();
        $news = News::all();
        return view('home', compact('pages', 'news'));
    }

    public function contacts() {
        return view('contacts');
    }
}