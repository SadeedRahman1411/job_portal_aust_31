<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredJobs = [
            (object)[ 
                'id'=>1, 
                'title'=>"Senior Frontend Developer", 
                'company'=>"TechCorp", 
                'location'=>"Dhaka, Bangladesh", 
                'salary'=>"৳80k - ৳120k", 
                'type'=>"Full-time", 
                'tags'=>["React","TypeScript","Remote"]
            ],
            (object)[ 
                'id'=>2, 
                'title'=>"Product Manager", 
                'company'=>"InnovateLabs", 
                'location'=>"Chittagong, Bangladesh", 
                'salary'=>"৳90k - ৳140k", 
                'type'=>"Full-time", 
                'tags'=>["Strategy","Analytics","Leadership"]
            ],
            // ... add more jobs here
        ];

        return view('home', compact('featuredJobs'));
    }
}
