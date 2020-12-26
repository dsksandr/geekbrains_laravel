<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $data = [
            'page_title' => 'Личный кабинет',
            'is_auth' => false
        ];

        return view('pages.profile', ['page_data' => $data]);
    }
}
