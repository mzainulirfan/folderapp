<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('home/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('home/contact', $data);
    }
    public function blog()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('home/blog', $data);
    }
    public function shop()
    {
        $data = [
            'title' => 'shop'
        ];
        return view('home/shop', $data);
    }
    public function apps()
    {
        $data = [
            'title' => 'apps'
        ];
        return view('home/apps', $data);
    }
}
