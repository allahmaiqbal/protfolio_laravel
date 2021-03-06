<!--Contact-->
 <div class="background" style="background-image: url(assets/img/img_bg_main.jpg)">
    <div id="contact" class="container section">
        <div class="row">
            <div class="col-md-12">
                <p id="contacts_header" class="section__title">Get in touch_</p>
            </div>
        </div>
        <div class="row contacts">
            <div class="col-md-5 col-lg-4">
                <div class="contacts__list">
                    <dl class="contact-list">
                        <dt>Phone:</dt>
                        <dd><a href="{{$my_contact['phone_number_link']}}">{{$my_contact['phone_number']}}</a></dd>
                        <dt>Skype:</dt>
                        <dd><a href="{{$my_contact['skype_link']}}">{{$my_contact['skype']}}</a></dd>
                        <dt>Email:</dt>
                        <dd><a href="{{$my_contact['email_link']}}">{{$my_contact['email']}}</a></dd>
                    </dl>
                </div>
                <div class="contacts__social">
                    <ul>
                        <li><a href="{{$my_contact['facebook_link']}}">Facebook</a></li>
                        <li><a href="{{$my_contact['linkedin_link']}}">Linkedin</a></li>
                        <li><a href="{{$my_contact['github_link']}}">GitHub</a></li>
                        <!-- <li><a href="#">Bitbucket</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-7 col-lg-5">
                <div class="contacts__form">
                    <p class="contacts__form-title">Or just write me a letter here_</p>
                    <form class="js-form">
                        <div class="form-group">
                            <input class="form-field js-field-name" type="text" placeholder="Your name" required>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                        </div>
                        <div class="form-group">
                            <input class="form-field js-field-email" type="email"  placeholder="Your e-mail" required>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                        </div>
                        <div class="form-group">
                            <textarea class="form-field js-field-message" placeholder="Type the message here" required></textarea>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
                        </div>
                        <button class="site-btn site-btn--form" type="submit" value="Send">Send</button>
                    </form>
                </div>
                <div class="footer">
                    <p>?? {{ $my_contact['footer_name']}} All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact-->