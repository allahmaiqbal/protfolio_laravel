<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        $data = [
            'profile_background_image' => 'assets/img/499.jpg',
            'personal_profile_avatar' => 'assets/img/img_bg_main.jpg',
            'profile_name' => ' Allahma Iqbal',
            'age' =>'70',
            'phone' =>'01767586443',
            'email' =>'iqbal@gmail.com',
            'address' =>'dhaka,bangladesh'
            
        ];
        $data2 = [
            'profile_background_image' => 'assets/img/499.jpg',
            'personal_profile_avatar' => 'assets/img/img_bg_main.jpg',
            'profile_name' => 'Mobarok Hossaion Joy',
            'proffession' => 'Web Developer',
            'age' =>'50',
             'phone' =>'01767586443',
             'email' =>'joy@gmail.com',
             'address' =>'dhaka,bangladesh'
            
        ];
        

        

        return view('welcome', compact('data','data2'));
    }
}
