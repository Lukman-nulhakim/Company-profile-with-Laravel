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
                    <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">Web Devlop</button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">UI/UX</button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">Frontend</button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill mx-1 my-1">Backend</button>
                </div>
            </div>
        

        {{-- Gallery-1 --}}
        <div class="row bg-light pt-5">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx2.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx4.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx1.jpg" class="img-thumbnail" alt="Responsive image"></div>
        </div>
        <div class="row bg-light">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx3.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx6.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx5.jpg" class="img-thumbnail" alt="Responsive image"></div>
        </div>
        <div class="row bg-light">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx8.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx7.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx9.jpg" class="img-thumbnail" alt="Responsive image"></div>
        </div>
        <div class="row bg-light pb-5 mb-5">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx11.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx10.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx12.jpg" class="img-thumbnail" alt="Responsive image"></div>
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
    <div class="container-fluid">
        <div class="row bg-light pt-5">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx13.png" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx14.png" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx4.jpg" class="img-thumbnail" alt="Responsive image"></div>
        </div>
        <div class="row bg-light">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx15.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx7.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx17.jpg" class="img-thumbnail" alt="Responsive image"></div>
        </div>
        <div class="row bg-light">
            <div class="col-12 col-md-6 col-lg-4"><img src="img/xxx18.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx20.jpg" class="img-thumbnail" alt="Responsive image"></div>
            <div class="col"><img src="img/xxx19.jpg" class="img-thumbnail" alt="Responsive image"></div>
        </div>
    </div>


{{-- endContent --}}

@endsection