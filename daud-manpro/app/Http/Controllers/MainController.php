<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data['cards'] = [
            [
                'title' => 'Ibadah Paskah 2024',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Ibadah Natal 2024',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Kegiatan Senam Bersama',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Main Demo',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Main Demo',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Main Demo',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Main Demo',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Main Demo',
                'img' => 'assets/card-img.jpg'
            ],
            [
                'title' => 'Main Demo',
                'img' => 'assets/card-img.jpg'
            ],
        ];
        return view('home', $data);
    }
}
