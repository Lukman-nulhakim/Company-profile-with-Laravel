@extends('master')
@section('title','PORTFOLIO')
@section('Portfolio','active')
@section('content')


{{-- Content --}}

{{-- Button --}}
    <div class="container-fluid">
        <div class="row text-center my-5">
            <div class="col">
                <button type="button" class="btn btn-info rounded-pill mx-1 my-1">All Project</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">Web Develop</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">UI/UX</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">Frontend</button>
                <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">Backend</button>
            </div>
        </div>
    </div>

    {{-- Gallery-1 --}}

    <div class="container-fluid bg-light py-5 text-center">
        <p style="color: peru; font-style: italic; font-family:'Times New Roman', Times, serif; font-size: 50px;">Gallery 1</p>
        <hr>   
        <div class="row justify-content-center">            
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx2.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx4.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Full Stack Dev</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx1.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Front-end</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx3.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Back-end</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx5.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Digital Marketing</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx6.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Consultant</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx8.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>UI/UX</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx7.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Data Scientist</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx9.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx11.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Full Stack Dev</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx10.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Front-End</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx12.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Back-End</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
        </div>
    </div>
        
{{-- About Company --}}

    <div class="container my-5">
        <div class="row text-center">
            <div class="col">
                <h1 style="color: peru; font-style: italic; font-family:'Times New Roman', Times, serif; font-size: 50px;">About Our Company</h1>
                <hr>
            </div>
        </div>
        <div class="row text-center my-5">
            <div class="col-12 col-sm-6 col-md-3 float-right">
                <i class="fa-10x fas fa-award"></i>
                <p><h2 style="color: peru; font-family:'Times New Roman', Times, serif;">Award</h2></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, eius hic! Cupiditate vitae aspernatur rerum alias at, inventore quam minima!</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <i class="fa-10x fas fa-shield-alt"></i>
                <p><h2 style="color: peru; font-family:'Times New Roman', Times, serif;">Shield</h2></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, eius hic! Cupiditate vitae aspernatur rerum alias at, inventore quam minima!</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <i class="fa-10x fas fa-user-tie"></i>
                <p><h2 style="color: peru; font-family:'Times New Roman', Times, serif;">People</h2></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, eius hic! Cupiditate vitae aspernatur rerum alias at, inventore quam minima!</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <i class="fa-10x fas fa-network-wired"></i>
                <p><h2 style="color: peru; font-family:'Times New Roman', Times, serif;">Network</h2></p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, eius hic! Cupiditate vitae aspernatur rerum alias at, inventore quam minima!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <p><h1 style="color: peru; font-family:'Times New Roman', Times, serif; text-align: center;">Company Overview</h1></p>
                <p><h4 style="font-family: 'Times New Roman', Times, serif">FIDI IT KREATIF adalah sebuah Perusahaan yang bergerak dibidang IT yang memiliki keunggulan dalam hal dedikasi, inovatif, kreatif serta komitmen penuh dan pengalaman di dalam bidang IT Development. Hingga saat inipun kami masih terus mengembangkan kompetensi dalam produk dan layanan lain sebagai solusi yang dibutuhkan oleh Corporate, Industrial, dan masyarakat umum Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat tenetur optio odit sunt nihil libero fugiat sequi ullam quae alias.</h4></p>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <p><h1 style="color: peru; font-family:'Times New Roman', Times, serif; text-align:center;">Visi/Misi</h1></p>
                <h4 style="font-family: 'Times New Roman', Times, serif;">
                    <ol>
                        <li>Inovatif dan Kreatif dalam mengembangkan aplikasi yang terdepan dan kompetitif.</li>
                        <li>Mengembangkan aplikasi yang efektif, efisien dan mudah digunakan oleh user.</li>
                        <li>Mengembangkan aplikasi sesuai dengan kebutuhan user dan masyarakat secara luas.</li>
                        <li>Mengembangkan kerjasama kemitraan di bidang IT</li>
                        <li>Profesionalisme individu maupun team dalam pengembangan produk dan Meningkatkan skill dan knowledge di bidang IT.</li>
                    </ol>
                </h4>
            </div>
        </div>
    </div>

    {{-- Attachment fixed --}}
    <div class="jumbotronPort">
    </div>

    {{-- Gallery-2 --}}

    <div class="container-fluid bg-light py-5 text-center">
        <p style="color: peru; font-style: italic; font-family:'Times New Roman', Times, serif; font-size: 50px;">Gallery 2</p>
        <hr>   
        <div class="row justify-content-center">
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx13.png') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx14.png') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Digital Marketing</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx4.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>UI/UX</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx15.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx7.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Data Scientist</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx17.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Consultant</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx18.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Data Analist</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx20.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Back-End</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>
            <div class="boxx1">
                <div class="fot-1">
                    <img src="{{ asset('img/xxx19.jpg') }}"  alt="Responsive image">
                </div>
                <div class="content">
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus dolores vero enim aliquam maxime soluta non.</p>
                </div>
            </div>            
        </div>
    </div>


    {{-- Testimoni --}}
    <section class="service-testimoni" style="background-image: url('img/service-black.jpg'); background-repaet">
        <div class="container-fluid" >
            <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-12">
                    <h1>TESTIMONI.</h1>
                    </div>
            </div>
            <br><br>
            <div class="row service-testimoni-carosel" >
                
                <div class="col-lg-2"></div>
                <div id="demo" class="carousel slide col-md-8 mt-3" data-ride="carousel">

                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <!-- Ganti gambar dengan file gambar kalian -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="service-member d-flex justify-content-center">
                                <img src="{{ asset('img/home-rafif2.jpg') }}" alt="" class="rounded-circle" width="100" height="100">
                                <div class="service-caption">
                                    <h2>Liverpool FC</h2>
                                    <br>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident culpa beatae explicabo amet minima sed facilis ea aliquam, ad necessitatibus unde ipsum. Itaque, nihil. Quia nihil aliquid possimus eaque facilis.</p>
                                </div>
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <div class="service-member d-flex justify-content-center">
                                <img src="{{ asset('img/home-rangga.jpg') }}" alt="" class="rounded-circle" width="100" height="100">
                                <div class="service-caption">
                                    <h2>Master Rangga</h2>
                                    <br>
                                    <p>Amet consectetur adipisicing elit. Provident culpa beatae explicabo amet minima sed facilis ea aliquam, ad necessitatibus unde ipsum. Itaque, nihil. Quia nihil aliquid possimus eaque facilis.</p>
                                </div>
                            </div>   
                        </div>
                    <div class="carousel-item">
                        <div class="service-member d-flex justify-content-center">
                            <img src="{{ asset('img/home-lukman.jpg') }}" alt="" class="rounded-circle" width="100" height="100">
                            <div class="service-caption">
                                <h2>Master Lukman</h2>
                                <br>
                                <p>Provident culpa beatae explicabo amet minima sed facilis ea aliquam, ad necessitatibus unde ipsum. Itaque, nihil. Quia nihil aliquid possimus eaque facilis.</p>
                            </div>
                        </div>   
                    </div>
                    </div>
                    
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>  
            </div>
        </div>
    </section>


{{-- endContent --}}

@endsection