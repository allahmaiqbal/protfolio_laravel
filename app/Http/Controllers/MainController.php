<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function hello() {

      //welcome_part_start
      
      $title = [
        'title_name' => 'Mobarok Hossain Joy',
      
        
    ];
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
            'personal_profile_avatar' => 'assets/img/joy.webp',
            'profile_name' => 'Mobarok Hossaion Joy',
            'proffession' => 'Software Engineer',
            'age' =>'50',
             'phone' =>'01767586443',
             'email' =>'joy@gmail.com',
             'address' =>'dhaka,bangladesh'
            
        ];
           //welcome_part_start 
          // ========resume_part_start========

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
         // ========rssume_part_start========

          // ========protfoliio_part_start========
         

        $protfoliio= [
          "project_1"=> [
              "project_image"=>"assets/img/google1.jpg",
              "project_title"=>"DYNAMIC WEBSITE FOR USA OLD CAR PARTS SHOP",
              "project_description_name"=>"USIT Solution LLC",
              "project_description_link"=>"https://www.google.com",
              "project_name"=>"www.google.com. ",
              "project_link"=>"https://www.google.com",
              "language_1"=>"HTML",
              "language_2"=>"CSS",
              "language_3"=>"JAVA SCRIPT",
              "language_4"=>"JQUERY",
              "language_5"=>"VUE JS",
              "language_6"=>"ANGULAR JS"
             
          ],
          "project_2"=> [
            "project_image"=>"assets/img/facebook.jpg",
            "project_title"=>"RESTAURENT BASED E-COMMERCE WEBSITE",
            "project_description_name"=>"USIT Solution LLC",
            "project_description_link"=>"https://www.couscouscafeokc.com",
            "project_name"=>"www.facebook.com ",
            "project_link"=>"https://www.facebook.com",
            "language_1"=>"HTML",
            "language_2"=>"CSS",
            "language_3"=>"JAVA SCRIPT",
            "language_4"=>"JQUERY",
            "language_5"=>"VUE JS",
            "language_6"=>"ANGULAR JS"
           
        ],
        "project_3"=> [
          "project_image"=>"assets/img/microsoft.png",
          "project_title"=>"DYNAMIC WEBSITE FOR USA OLD CAR PARTS SHOP",
          "project_description_name"=>"USIT Solution LLC",
          "project_description_link"=>"https://www.couscouscafeokc.com",
          "project_name"=>"www.microsoft.com ",
          "project_link"=>"https://www.microsoft.com",
          "language_1"=>"HTML",
          "language_2"=>"CSS",
          "language_3"=>"JAVA SCRIPT",
          "language_4"=>"JQUERY",
          "language_5"=>"VUE JS",
          "language_6"=>"ANGULAR JS"
         
      ],

      "project_4"=> [
        "project_image"=>"assets/img/twisterokc.jpg",
        "project_title"=>"DYNAMIC WEBSITE FOR USA OLD CAR PARTS SHOP",
        "project_description_name"=>"USIT Solution LLC",
        "project_description_link"=>"http://usitsolution.net",
        "project_name"=>"www.twisterokc.com ",
        "project_link"=>"https://twisterokc.com/",
        "language_1"=>"HTML",
        "language_2"=>"CSS",
        "language_3"=>"JQuery",
        "language_4"=>"PHP (Laravel)",
        "language_5"=>"VUE JS",
        "language_6"=>"ANGULAR JS"
       
    ],

    "project_5"=> [
      "project_image"=>"assets/img/twisterokc.jpg",
      "project_title"=>"DYNAMIC WEBSITE FOR USA OLD CAR PARTS SHOP",
      "project_description_name"=>"USIT Solution LLC",
      "project_description_link"=>"http://usitsolution.net",
      "project_name"=>"www.499cellular.com ",
      "project_link"=>"http://499cellular.com/",
      "language_1"=>"HTML",
      "language_2"=>"CSS",
      "language_3"=>"JAVA SCRIPT",
      "language_4"=>"JQUERY",
      "language_5"=>"VUE JS",
      "language_6"=>"ANGULAR JS"
     
  ],
            
      ];
   
      // ========protfoliio_part_end========
           // ========contact_part_start========
           $contact = [
            'phone_number' => '01756349856',
            'skype' => 'maruf.hasan68',
            'email' =>'emarufhasan@gmail.com',
            'phone_number_link' => 'tel:01756349856',
            'skype_link' => 'skype:maruf.hasan68',
            'email_link' =>'mailto:emarufhasan@gmail.com',
            'facebook_link' =>'https://facebook.com/emarufhasan',
            'linkedin_link' =>'https://www.linkedin.com/in/maruf-hasan-2283a580',
            'github_link' =>'https://github.com/marufhasan1',
            'footer_name' => 'Mobarok Hossaion Joy'

            
        ];              
                
           // ========contact_part_end========
      

        return view('welcome', compact('title','data','data2','educations','progress_bar','employment','protfoliio','contact'));
    }
  
}

