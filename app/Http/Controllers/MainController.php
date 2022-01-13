<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
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
            'proffession' => 'Software Engineer',
            'age' =>'50',
             'phone' =>'01767586443',
             'email' =>'joy@gmail.com',
             'address' =>'dhaka,bangladesh'
            
        ];

        $educations= [
            "ssc"=> [
                "institute_name"=>"Ichail Heigh School,Fulbaria",
                "start_year"=>"2000",
                "end_year"=>"2005",
                "cirtification_name"=>"Secondary School Certificate Examination"
            ],
              "hsc"=> [
                  "institute_name"=>"Mymensingh polytechnic institute",
                  "start_year"=>"2005",
                  "end_year"=>"2010",
                  "cirtification_name"=>"Diploma Engineering in Computer Technology"
                ],
              "honours"=> [
                  "institute_name"=>"Dhaka Internatinal University(D.I.U)",
                  "start_year"=>"2010",
                  "end_year"=>"2015",
                  "cirtification_name"=>"Computer Science And Engineering (CSE)"
                ],
              "masters"=> [
                  "institute_name"=>"Dhaka Internatinal University(D.I.U)",
                  "start_year"=>"2015",
                  "end_year"=>"2016",
                  "cirtification_name"=>"Master of Science in Computer Science (MSc in CS)"
                  ]
        ];


        $employment= [
            "job_1"=> [
                "company_name"=>"Microsoft",
                "start_year"=>"2005",
                "end_year"=>"2010",
                "positon"=>"Senior Web Developer"
            ],
              "job_2"=> [
                "company_name"=>"facebook",
                "start_year"=>"2010",
                "end_year"=>"2019",
                "positon"=>"Senior Web Developer"
                ],
              "job_3"=> [
                "company_name"=>"Google",
                "start_year"=>"2019",
                "end_year"=>"Count .",
                "positon"=>"software engineer"
                ],
             
        ];
     
     


        $progress_bar= [
            "SKILLS_FRONTEND"=> [
                "language_1"=>"HTML 5",
                "skill_1"=>"90",
                "language_2"=>"CSS 3",
                "skill_2"=>"90",
                "language_3"=>"BOOTSTRAP 5",
                "skill_3"=>"90",
                "language_4"=>"JAVA SCRIPT",
                "skill_4"=>"90",
                "language_5"=>"JQUERY",
                "skill_5"=>"90",
                "language_6"=>"VUE JS",
                "skill_6"=>"90",
                "language_7"=>"ANGULAR JS",
                "skill_7"=>"90"
            ],
              "SKILLS_SERVER_SIDE"=> [
                "language_1"=>"PHP",
                "skill_1"=>"90",
                "language_2"=>"MY SQL",
                "skill_2"=>"90",
                "language_3"=>"LARAVEL 8",
                "skill_3"=>"90",
                "language_4"=>"CODEIGNITER",
                "skill_4"=>"90"
                ],
              "OTHERS_SKILLS"=> [
                "language_1"=>"ADOBE PHOTOSHOP",
                "skill_1"=>"90",
                "language_2"=>"ADOBE ILLUSTRATOR",
                "skill_2"=>"90"
                ]
              
        ];
     
      

        return view('welcome', compact('data','data2','educations','progress_bar','employment'));
    }
  
}

