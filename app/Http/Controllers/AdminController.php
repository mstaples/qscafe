<?php

namespace App\Http\Controllers;

use FilesystemIterator;

class AdminController extends Controller
{
    public function index()
    {
        $features = [
            0 => [
                'url' => 'http://twitter.com',
                'title' => 'Welcome to Q\'s Cafe',
                'image' => 'pic01.jpg',
                'body' => 'Coming soon to Denton! We\'ll be offering food, drink, live entertainment, and so much more!'
            ],
            1 => [
                'url' => 'http://twitter.com',
                'title' => 'When is Q\'s open?',
                'image' => 'pic02.jpg',
                'body' => 'Our launch party will be the evening of May 15th. We\'ll be open 6pm - 6am for the rest of May, but starting in June you\'ll find us open 24 hours a day, 7 days a week.'
            ],
            2 => [
                'url' => 'http://twitter.com',
                'title' => 'Entertainment!',
                'image' => 'pic03.jpg',
                'body' => 'For our launch party we\'re excited to welcome the delightful and talented Some Local Group, followed by the deliciously stunning Local Burlesque Troupe!'
            ],
            3 => [
                'url' => 'http://twitter.com',
                'title' => 'Nom Nom Noms',
                'image' => 'pic04.jpg',
                'body' => 'Our brief but super yum seasonal menu is bound to satisfy your cravings any time of day or night!',
            ]
        ];

        $fi = new FilesystemIterator(public_path('/images/banners'), FilesystemIterator::SKIP_DOTS);
        $banner = 'banner' . rand(1,iterator_count($fi)) . '.jpg';

        return view('welcome', ['features' => $features, 'banner' => $banner]);
    }

    public function manageImages()
    {
        $activeBanners = [];
        $fi = new FilesystemIterator(public_path('/images/banners'), FilesystemIterator::SKIP_DOTS);
        for ($i = 1; $i <= iterator_count($fi); $i++) {
            $bannerImages[] = 'banner' . $i . '.jpg';
        }

        $inactiveBanners = [];
    }

    public function changeBanners($banners)
    {

    }
}
