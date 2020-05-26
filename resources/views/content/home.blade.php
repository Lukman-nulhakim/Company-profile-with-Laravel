@extends('master')
@section('title','HOME')
@section('Home','active')
@section('content')
    
{{-- Content --}}



    {{-- begin list of cliens --}}

    <section class="home-cliens p-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                <img src="{{ asset('img/home-metro.jpg') }}" alt="" width="1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                <img src="{{ asset('img/home-goal.jpg') }}" alt="" width="1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                <img src="{{ asset('img/home-net.png') }}" alt="" width="1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                <img src="{{ asset('img/home-niaga.jpg') }}" alt="" width="1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                <img src="{{ asset('img/home-tokopedia.jpg') }}" alt="" width="1" class="img-fluid">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                <img src="{{ asset('img/home-alibabalogo.png') }}" alt="" width="1" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{-- end list of cliens --}}

    <br><br><br>

    {{-- begin about us --}}


    <section class="home-about">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-12">
                <h1>ABOUT US.</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                <p class="tеxt-juѕtіfу-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sunt molestiae, perspiciatis, expedita eius iusto velit voluptatibus exercitationem veritatis, ipsum temporibus a doloremque ipsa. Maxime recusandae, omnis necessitatibus laboriosam vero eaque placeat, sit repellendus, ducimus ad aperiam fuga non esse nulla animi? Reiciendis nobis voluptatem, perferendis illum dicta iure porro.
                </p>
                <br>
                <p>
                    vitae sit, maiores amet beatae asperiores tenetur modi. Velit doloribus, harum quia alias voluptatem praesentium tenetur iste accusamus magnam dolorem, expedita aut aliquam sapiente, quaerat quisquam quae dolor aliquid exercitationem ipsa.
                </p>
                </div>
                <div class="col-lg-6">
                <div class="home-about-img text-center">
                    <img src="{{ asset('img/home-pc.png') }}" alt="">
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="container-fluid home-about-2 p-4 pt-5">
            <div class="row home-about-2">
                <div class="col-lg-6">
                    <div class="home-about-img text-center">
                        <img src="{{ asset('img/home-why.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h2>
                        <strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    </h2>
                    <ul>
                        <li><i class="fas fa-arrow-circle-right"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <br>
                        <li><i class="fas fa-arrow-circle-right"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <br>
                        <li><i class="fas fa-arrow-circle-right"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <br>
                        <li><i class="fas fa-arrow-circle-right"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="container-fluid">
            <div class="row home-about-3  p-4 pt-5">
                <div class="col-lg-6 col-md-12">
                <h3><strong>Skill Programer Kami</strong> incididunt ut labore et dolore magna aliqua.</h3>
                    <p>HTML 100%</p>
                    <div class="home-persentase">
                        <div class="home-skala"></div>
                    </div>
                
                        <p>CSS 100%</p>
                        <div class="home-persentase">
                            <div class="home-skala"></div>
                        </div>
                    
                        <p>java Script 90%</p>
                        <div class="home-persentase">
                            <div class="home-skala-90"></div>
                        </div>
                    
                        <p>PHP 80%</p>
                        <div class="home-persentase">
                            <div class="home-skala-80"></div>
                        </div>
                    
                        <p>lARAVEL 60%</p>
                        <div class="home-persentase">
                            <div class="home-skala-60"></div>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-about-img text-center">
                        <img src="{{ asset('img/home-project.png') }}" alt="">
                    </div>
                </div>
            </div><br><br>
        </div>
    </section>


    {{-- end about us --}}

    {{-- begin team --}}

    <section class="home-team">
        <div class="container-fluid  pt-5">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-12 text-center">
                    <h1>TEAM.</h1>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-4 align-items-center">
                    <div class="home-team-list  align-items-center text-center p-2">
                        <img src="{{ asset('img/home-lukman.jpg') }}" alt="" class="rounded-circle img-fluid" width="100">
                        <div class="member-info">
                            <h4><strong>Lukman Nur Hakim</strong></h4>
                            <u><span><strong> Chief Executive Officer</strong></span></u>
                            <br>
                            <div class="social">
                                <br>
                                <p> Experience as : 
                                    <br>
                                    <u><strong>Consultant IT Lippo Group</strong></u>
                                </p>
                                <p> Qoutes : 
                                    <br>
                                    <p>"Hidup yang lurus-lurus aja"</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 align-items-center">
                    <div class="home-team-list  align-items-center text-center p-2">
                        <img src="{{ asset('img/home-rangga.jpg') }}" alt="" class="rounded-circle img-fluid" width="100">
                        <div class="member-info">
                            <h4><strong>Rangga</strong></h4>
                            <u><span><strong> Manager of Front-end Develpor</strong></span></u>
                            <br>
                            <div class="social">
                                <br>
                                <p> Experience as : 
                                    <br>
                                    <u><strong>Dosen Teknik Informatika ITB</strong></u>
                                </p>
                                <p> Qoutes : 
                                    <br>
                                    <p>"Hidup jangan belok-belok"</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 align-items-center">
                    <div class="home-team-list  align-items-center text-center p-2">
                        <img src="{{ asset('img/home-rafif2.jpg') }}" alt="" class="rounded-circle img-fluid" width="100">
                        <div class="member-info">
                            <h4><strong>Rafif Setia</strong></h4>
                            <u><span><strong> Manager of Back-End Developer</strong></span></u>
                            <br>
                            <div class="social">
                                <br>
                                <p> Experience as : 
                                    <br>
                                    <u><strong>Consultant IT Goal.com</strong></u>
                                </p>
                                <p> Qoutes : 
                                    <br>
                                    <p>"Hidup lu dah belok mesti dilurussin"</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>


    {{-- end team --}}

{{-- endContent --}}
    
@endsection