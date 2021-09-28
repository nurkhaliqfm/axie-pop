<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'heroes' => [
                [
                    'cover' => 'Axie 1.png',
                    'heroes_name' => 'Axie 1',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 2.png',
                    'heroes_name' => 'Axie 2',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 14.png',
                    'heroes_name' => 'Axie 14',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 15.png',
                    'heroes_name' => 'Axie 15',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 16.png',
                    'heroes_name' => 'Axie 16',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 17.png',
                    'heroes_name' => 'Axie 17',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 18.png',
                    'heroes_name' => 'Axie 18',
                    'speciality' => 'Inteligence',
                ],
                [
                    'cover' => 'Axie 19.png',
                    'heroes_name' => 'Axie 19',
                    'speciality' => 'Inteligence',
                ]
            ],
        ];
        return view('home/index', $data);
    }
}
