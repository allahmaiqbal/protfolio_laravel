@extends('layout.app')

@section('title', "Hello")

@section('content')
    {{-- main menu --}}
    @include('partial.menu')

    <!--Header-->
    <header class="main-header" style="background-image: url({{ $data2['profile_background_image'] }})">
        <div class="container">
            <div class="row personal-profile">
                <div class="col-md-4 personal-profile__avatar">
                    <img class="" src="{{ $data2['personal_profile_avatar'] }}" alt="{{ $data2['profile_name'] }}">
                </div>
                <div class="col-md-8">
                    <p class="personal-profile__name">{{ $data2['profile_name']}}</p>
                    <p class="personal-profile__work">{{ $data2['proffession']}}</p>
                    <div class="personal-profile__contacts">
                        <dl class="contact-list contact-list__opacity-titles">
                            <dt>Age:</dt>
                            <dd>{{ $data2['age']}}</dd>
                            <dt>Phone:</dt>
                            <dd><a href="tel:82344563333">{{ $data2['phone']}}</a></dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:mail@mail.com">{{ $data2['email']}}</a></dd>
                            <dt>Address:</dt>
                            <dd>{{ $data2['address']}}</dd>
                        </dl>
                    </div>
                    <p class="personal-profile__social">
                        <a href="https://github.com/marufhasan1" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/emarufhasan" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://facebook.com/emarufhasan" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!--Header-->
    @include('partial.resume') 
    @include('partial.protfolio')
    @include('partial.contact')


   
    

    
    
@endsection