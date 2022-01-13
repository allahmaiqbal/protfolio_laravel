
{{-- {{ print_r($my_pro['OTHERS_SKILLS']['language']) }} --}}
{{-- {{ print_r($my_edu['hsc']['start_year']) }} --}}
{{-- {{ print_r($employment['job_1']['company_name']) }} --}}

 <!--Resume-->
 <section id="resume" class="container section">
    <!--     <div class="row">
        <div class="col-md-10">
            <h2 id="resume_header" class="section__title">Resume_</h2>
            <p class="section__description">
                As a self-motivated and responsible person, I believe on one sentence, &quot;The riskiest
                thing is to take no risks.&quot; Therefore, I love problem solving, taking risk, trying to be bold
                and explore myself at technological ﬁeld. At the same time, I am looking forward to
                challenging and growth oriented tasks that help to prove the best of my ability in achieving
                the objective of the job.
            </p>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-8 section__resume resume-list">
            <h3 class="resume-list_title">Education</h3>
            <div class="resume-list__block">
                <p class="resume-list__block-title"><a target="_blank" href="https://bup.edu.bd/">{{$my_edu['masters']['institute_name']}}</a></p>
                <p class="resume-list__block-date">{{$my_edu['masters']['start_year']}} -{{$my_edu['masters']['end_year']}}</p>
                <p class="education_details">
                    <a target="_blank" href="https://bup.edu.bd/programs/23/details-academics?program_type=graduate_program">{{$my_edu['masters']['cirtification_name']}}</a>
                                                                                                                                                                               
                </p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title"><a target="_blank" href="http://www.bu.edu.bd">{{$my_edu['honours']['institute_name']}}</a></p>
                <p class="resume-list__block-date">{{$my_edu['honours']['start_year']}} - {{$my_edu['honours']['end_year']}}</p>
                <p class="education_details">
                    <a target="_blank" href="https://en.wikipedia.org/wiki/Computer_Science_and_Engineering">{{$my_edu['honours']['cirtification_name']}} </a>
                </p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title"><a target="_blank" href="https://rumdo.edu.bd/">{{$my_edu['hsc']['institute_name']}}</a></p>
                <p class="resume-list__block-date">{{$my_edu['hsc']['start_year']}} - {{$my_edu['hsc']['end_year']}}</p>
                <p class="education_details">
                    <a target="_blank" href="https://rumdo.edu.bd/">{{$my_edu['hsc']['cirtification_name']}}</a>
                </p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title">{{$my_edu['ssc']['institute_name']}}</p>
                <p class="resume-list__block-date">{{$my_edu['ssc']['start_year']}} - {{$my_edu['ssc']['end_year']}}</p>
                <p>
                    {{$my_edu['ssc']['cirtification_name']}}
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-8 section__resume resume-list">
            <h3 class="resume-list_title">employment</h3>
            
            <div class="resume-list__block">
                <p class="resume-list__block-title"><a href="https://maxsop.com/">{{$employment['job_3']['company_name']}}</a></p>
                <p class="resume-list__block-date">{{$employment['job_3']['start_year']}} - {{$employment['job_3']['end_year']}} </p>
                <p>{{$employment['job_3']['positon']}}</p>
            </div>
            
            <div class="resume-list__block">
                <p class="resume-list__block-title"><a href="http://usitsolution.net/">{{$employment['job_2']['company_name']}} </a></p>
                <p class="resume-list__block-date">{{$employment['job_2']['start_year']}}  - {{$employment['job_2']['end_year']}} </p>
                <p>{{$employment['job_2']['positon']}} </p>
            </div>
            
            <div class="resume-list__block">
                <p class="resume-list__block-title"><a href="https://freelanceitlab.com/">{{$employment['job_1']['company_name']}}</a></p>
                <p class="resume-list__block-date">{{$employment['job_1']['start_year']}}  - {{$employment['job_1']['end_year']}} </p>
                <p>{{$employment['job_1']['positon']}} </p>
            </div>
        </div>
    </div>
    <div class="row section__resume progress-list js-progress-list">
        <div class="col-md-12">
            <h3 class="progress-list__title">skills frontend</h3>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_1']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_1']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_1']}}" aria-valuemin="0" aria-valuemax="100" >
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_2']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_2']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_2']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_3']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_3']}}</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_3']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_4']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_4']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_4']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_5']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_5']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_5']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_6']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_6']}}</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_6']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_7']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_7']}}</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_FRONTEND']['skill_7']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row section__resume progress-list js-progress-list">
        <div class="col-md-12">
            <h3 class="progress-list__title">skills Server Side</h3>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_SERVER_SIDE']['language_1']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_1']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_1']}}" aria-valuemin="0" aria-valuemax="100" >
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_SERVER_SIDE']['language_2']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_2']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_2']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_SERVER_SIDE']['language_3']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_3']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_3']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_SERVER_SIDE']['language_4']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_4']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['SKILLS_SERVER_SIDE']['skill_4']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row section__resume progress-list js-progress-list">
        <div class="col-md-12">
            <h3 class="progress-list__title">Others Skills</h3>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['SKILLS_FRONTEND']['language_1']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['SKILLS_FRONTEND']['skill_1']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['OTHERS_SKILLS']['skill_1']}}" aria-valuemin="0" aria-valuemax="100" >
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">{{ $progress_bar['OTHERS_SKILLS']['language_2']}}</span>
                    <span class="progress-list__skill-value">{{ $progress_bar['OTHERS_SKILLS']['skill_2']}}%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $progress_bar['OTHERS_SKILLS']['skill_2']}}" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Resume-->
   