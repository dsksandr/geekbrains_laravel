<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = [
            'is_auth' => false
        ];

        $html = "";

        if ($data['is_auth']) {

            return;

        } else {
            $html .= "<form><fieldset>";
            $html .= "<legend>Авторизуйтесь!</legend>";

            $html .= "<label> Введите логин";
            $html .= "<input type=\"text\">";
            $html .= "</label>";

            $html .= "<label> Введите пароль";
            $html .= "<input type=\"password\">";
            $html .= "</label>";

            $html .= "<label>";
            $html .= "<input type=\"submit\" value=\"Отправить\">";
            $html .= "</label>";
            $html .= "</fieldset></form>";

            $back_url = url()->previous();

            $html .= "<a href=\"{$back_url}\">Назад</a>";
        }

        echo $html;
    }
}
