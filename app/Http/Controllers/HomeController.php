<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Мы рады приветствовать Вас на нашем портале!'
        ];

        $html = "<h1>{$data['title']}</h1>";

        $html .= "<nav><ul>";
        $html .= "<li><a href=\"courses\">Наши курсы</a></li>";
        $html .= "<li><a href=\"profile\">Личный кабинет</a></li>";
        $html .= "</ul></nav>";

        echo $html;
    }
}
