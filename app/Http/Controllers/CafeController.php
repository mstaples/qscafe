<?php

namespace App\Http\Controllers;

use FilesystemIterator;

class CafeController extends Controller
{
    public function index()
    {
        $images = [];
        for ($i = 1; $i < 5; $i++) {
            $fi = new FilesystemIterator(public_path('/images/section'.$i), FilesystemIterator::SKIP_DOTS);
            $images[$i] = 'header' . rand(1,iterator_count($fi)) . '.jpg';
        }

        $features = [
            0 => [
                'route' => 'news',
                'title' => 'Welcome to Q\'s Cafe',
                'image' => 'section1/'.$images[1],
                'body' => 'Coming soon to Denton! We\'ll be offering food, drink, live entertainment, and so much more!'
            ],
            1 => [
                'route' => 'swag',
                'title' => 'When is Q\'s open?',
                'image' => 'section2/'.$images[2],
                'body' => 'Our launch party will be the evening of May 15th. We\'ll be open 6pm - 6am for the rest of May, but starting in June you\'ll find us open 24 hours a day, 7 days a week.'
            ],
            2 => [
                'route' => 'schedule',
                'title' => 'Entertainment!',
                'image' => 'section3/'.$images[3],
                'body' => 'For our launch party we\'re excited to welcome the delightful and talented Some Local Group, followed by the shamelessly stunning Local Burlesque Troupe!'
            ],
            3 => [
                'route' => 'menu',
                'title' => 'Nom Nom Noms',
                'image' => 'section4/'.$images[4],
                'body' => 'Our brief but super yum seasonal menu is bound to satisfy your cravings any time of day or night!',
            ]
        ];

        $fi = new FilesystemIterator(public_path('/images/banners'), FilesystemIterator::SKIP_DOTS);
        $banner = 'banner' . rand(1,iterator_count($fi)) . '.jpg';

        return view('welcome', [
            'features' => $features,
            'banner' => $banner
        ]);
    }

    public function swag(){
        return view('swag');
    }

    public function menu(){
        return view('menu');
    }

    public function news(){
        return view('news');
    }

    public function schedule(){
        return view('schedule');
    }
}
