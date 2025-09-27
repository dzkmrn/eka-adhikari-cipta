<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teamMembers = [
            [
                'name' => 'CEO',
                'position' => 'Chief Executive Officer',
                'image' => 'CEO.png'
            ],
            [
                'name' => 'CFO',
                'position' => 'Chief Financial Officer',
                'image' => 'CFO.png'
            ],
            [
                'name' => 'CIO',
                'position' => 'Chief Information Officer',
                'image' => 'CIO.png'
            ],
            [
                'name' => 'CMO',
                'position' => 'Chief Marketing Officer',
                'image' => 'CMO.png'
            ],
            [
                'name' => 'COO',
                'position' => 'Chief Operating Officer',
                'image' => 'COO.png'
            ]
        ];

        return view('about', compact('teamMembers'));
    }
}
