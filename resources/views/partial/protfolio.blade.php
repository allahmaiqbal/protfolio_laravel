

{{ print_r($my_prot['project_1']['project_title'])}} 

 <!--Portfolio-->
 @section('title', "protfilio")
 <section id="portfolio" class="container section">
    <div class="row">
        <div class="col-md-12">
            <h2 id="portfolio_header" class="section__title">My projects_</h2>
            <p>The following project are developed by me recently.</p>
        </div>
    </div>
<!--                 <div class="row portfolio-menu">
        <div class="col-md-12">
            <nav>
                <ul>
                    <li><a href="#" data-portfolio-target-tag="e_commerce">E-Commerce</a></li>
                    <li><a href="#" data-portfolio-target-tag="web-application">Web Application</a></li>
                    <li><a href="#" data-portfolio-target-tag="dynamic_website">Dynamic Website</a></li>
                </ul>
            </nav>
        </div>
    </div> -->
    <div class="portfolio-cards">
        <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="e_commerce">
            <div class="col-md-6 col-lg-5 project-card__img">
                <img class="" src="{{$my_prot['project_1']['project_image']}}" alt="project-img">
            </div>
            <div class="col-md-6 col-lg-7 project-card__info">
                <h3 class="project-card__title">{{$my_prot['project_1']['project_title']}}</h3>
                <p class="project-card__description">
                    It's a restaurent based e-commerce website developed by me for <a href="{{$my_prot['project_1']['project_description_link']}}">{{$my_prot['project_1']['project_description_name']}}</a>.
                    I lead and developed this projet with my own hand, DB Design and Backend Development was my main responsibility on it.
                </p>
                <p class="project-card__stack">Used stack:</p>
                <ul class="tags">
                    <li>{{$my_prot['project_1']['language_1']}}</li>
                    <li>{{$my_prot['project_1']['language_2']}}</li>
                    <li>{{$my_prot['project_1']['language_3']}}</li>
                    <li>{{$my_prot['project_1']['language_4']}}</li>
                    <li>{{$my_prot['project_1']['language_5']}}</li>
                    <li>{{$my_prot['project_1']['language_6']}}</li>
                </ul>
                <a href="{{$my_prot['project_1']['project_link']}}" class="project-card__link">{{$my_prot['project_1']['project_name']}}</a>
            </div>
        </div>


        <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="e_commerce">
            <div class="col-md-6 col-lg-5 project-card__img">
                <img class="" src="{{$my_prot['project_2']['project_image']}}" alt="project-img">
            </div>
            <div class="col-md-6 col-lg-7 project-card__info">
                <h3 class="project-card__title">{{$my_prot['project_2']['project_title']}}</h3>
                <p class="project-card__description">
                    It's a restaurent based e-commerce website developed by me for <a href="{{$my_prot['project_2']['project_description_link']}}">{{$my_prot['project_2']['project_description_name']}}</a>.
                    I lead and developed this projet with my own hand, DB Design and Backend Development was my main responsibility on it.
                </p>
                <p class="project-card__stack">Used stack:</p>
                <ul class="tags">
                    <li>{{$my_prot['project_2']['language_1']}}</li>
                    <li>{{$my_prot['project_2']['language_2']}}</li>
                    <li>{{$my_prot['project_2']['language_3']}}</li>
                    <li>{{$my_prot['project_2']['language_4']}}</li>
                    <li>{{$my_prot['project_2']['language_5']}}</li>
                    <li>{{$my_prot['project_2']['language_6']}}</li>
                </ul>
                <a href="{{$my_prot['project_2']['project_name']}}" class="project-card__link">{{$my_prot['project_2']['project_link']}}</a>
            </div>
        </div>


    <div class="portfolio-cards">
        <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="dynamic_website">
            <div class="col-md-6 col-lg-5 project-card__img">
                <img class="" src="{{$my_prot['project_3']['project_image']}}" alt="project-img">
            </div>
            <div class="col-md-6 col-lg-7 project-card__info">
                <h3 class="project-card__title">{{$my_prot['project_3']['project_title']}}</h3>
                <p class="project-card__description">
                    It's a Dynamic website for old car parts shop developed by me for <a href="{{$my_prot['project_3']['project_description_link']}}">{{$my_prot['project_3']['project_description_name']}}</a>
                </p>
                <p class="project-card__stack">Used stack:</p>
                <ul class="tags">
                    <li>{{$my_prot['project_3']['language_1']}}</li>
                    <li>{{$my_prot['project_3']['language_2']}}</li>
                    <li>{{$my_prot['project_3']['language_3']}}</li>
                    <li>{{$my_prot['project_3']['language_4']}}</li>
                    <li>{{$my_prot['project_3']['language_5']}}</li>
                    <li>{{$my_prot['project_3']['language_6']}}</li>
                </ul>
                <a href="{{$my_prot['project_3']['project_name']}}" class="project-card__link">{{$my_prot['project_3']['project_name']}}</a>
            </div>
        </div>


        <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="dynamic_website">
            <div class="col-md-6 col-lg-5 project-card__img">
                <img class="" src="{{$my_prot['project_4']['project_image']}}" alt="project-img">
            </div>
            <div class="col-md-6 col-lg-7 project-card__info">
                <h3 class="project-card__title">{{$my_prot['project_4']['project_title']}}</h3>
                <p class="project-card__description">
                    It's a Dynamic website for mobile phone shop developed by me for <a href="{{$my_prot['project_4']['project_description_link']}}">{{$my_prot['project_4']['project_description_name']}}</a>
                </p>
                <p class="project-card__stack">Used stack:</p>
                <ul class="tags">
                    <li>{{$my_prot['project_4']['language_1']}}</li>
                    <li>{{$my_prot['project_4']['language_2']}}</li>
                    <li>{{$my_prot['project_4']['language_3']}}</li>
                    <li>{{$my_prot['project_4']['language_4']}}</li>
                    <li>{{$my_prot['project_4']['language_5']}}</li>
                    <li>{{$my_prot['project_4']['language_6']}}</li>
                </ul>
                <a href="{{$my_prot['project_4']['project_name']}}" class="project-card__link">{{$my_prot['project_4']['project_name']}}</a>
            </div>
        </div>

        <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="dynamic_website">
            <div class="col-md-6 col-lg-5 project-card__img">
                <img class="" src="{{$my_prot['project_5']['project_image']}}" alt="project-img">
            </div>
            <div class="col-md-6 col-lg-7 project-card__info">
                <h3 class="project-card__title">{{$my_prot['project_5']['project_title']}}</h3>
                <p class="project-card__description">
                    It's a Dynamic website for mobile phone sels and service center developed by me for <a href="{{$my_prot['project_5']['project_description_link']}}">{{$my_prot['project_5']['project_description_name']}}</a>
                </p>
                <p class="project-card__stack">Used stack:</p>
                <ul class="tags">
                    <li>{{$my_prot['project_5']['language_1']}}</li>
                    <li>{{$my_prot['project_5']['language_2']}}</li>
                    <li>{{$my_prot['project_5']['language_3']}}</li>
                    <li>{{$my_prot['project_5']['language_4']}}</li>
                    <li>{{$my_prot['project_5']['language_5']}}</li>
                    <li>{{$my_prot['project_5']['language_6']}}</li>
                </ul>
                <a href="{{$my_prot['project_4']['project_name']}}" class="project-card__link">{{$my_prot['project_4']['project_name']}}</a>
            </div>
        </div>

    </div>
</section>
<!--Portfolio-->
<!--Testimonials-->
<!--   <div id="testimonials" class="section">
    <div class="background slider-carousel" style="background-image: url(assets/img/img_bg_main.jpg);">
        <div class="container">
            <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselTestimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselTestimonials" data-slide-to="1"></li>
                    <li data-target="#carouselTestimonials" data-slide-to="2"></li>
                    <li data-target="#carouselTestimonials" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                <p class="slider-carousel__title">Antonio Anderson</p>
                                <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                                <hr>
                                <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                cease too the decay. </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                <p class="slider-carousel__title">Antonio Anderson</p>
                                <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                                <hr>
                                <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                cease too the decay. </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                <p class="slider-carousel__title">Antonio Anderson</p>
                                <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                                <hr>
                                <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                cease too the decay. </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                <p class="slider-carousel__title">Antonio Anderson</p>
                                <p class="slider-carousel__caption">Project: Landin page for travel company</p>
                                <hr>
                                <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                    sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                    it match. By or blushes between besides offices noisier as. Sending do brought winding
                                    compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                cease too the decay. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonials" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonials" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="slider-carousel__circle">
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--Testimonials-->
<!--Blog-->
<!--   <section id="blog" class="container section">
    <div class="row">
        <div class="col-md-12">
            <h2 id="blog_header" class="section__title">Latest Posts_</h2>
        </div>
    </div>
    <div class="row post-cards">
        <div class="col-md-4">
            <a href="blog.html">
                <div class="post-cards__card">
                    <div class="post-cards__img">
                        <img src="assets/img/img_blog_1.png" alt="blog_img">
                    </div>
                    <div class="post-cards__info">
                        <p class="post-cards__date">October 22, 2017</p>
                        <h3 class="post-cards_title">How to use css-preprocessor</h3>
                        <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempr incididunt...
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="blog.html">
                <div class="post-cards__card">
                    <div class="post-cards__img">
                        <img src="assets/img/img_blog_2.png" alt="blog_img">
                    </div>
                    <div class="post-cards__info">
                        <p class="post-cards__date">October 22, 2017</p>
                        <h3 class="post-cards_title">How I organize my work with code</h3>
                        <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempr incididu...
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="blog.html">
                <div class="post-cards__card">
                    <div class="post-cards__img">
                        <img src="assets/img/img_blog_3.png" alt="blog_img">
                    </div>
                    <div class="post-cards__info">
                        <p class="post-cards__date">October 22, 2017</p>
                        <h3 class="post-cards_title">SVG sprites vs Icon Font</h3>
                        <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempr incididu...
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section> -->
<!--Blog-->


