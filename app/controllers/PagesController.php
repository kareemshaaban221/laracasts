<?php

namespace App\Controllers;

class PagesController {

    public function home() {
        return view('index');
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }

    public function notFound() {
        return view('notFound');
    }

}