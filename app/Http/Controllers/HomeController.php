<?php

namespace App\Http\Controllers;

// use Facade\FlareClient\View;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'page_title' => 'Главная',
            'title' => 'Мы рады приветствовать Вас на нашем портале!'
        ];

        return view('pages.home', ['page_data' => $data]);
    }
}
