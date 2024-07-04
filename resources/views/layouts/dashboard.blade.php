@extends('layouts.partial.template')
@section('content')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <<img src="{{ asset('background/faktanya.jpeg') }}">
            </div>
            <div class="carousel-item">
                <<<img src="{{ asset('background/Berbisa.jpeg') }}">
            </div>
            <div class="carousel-item">
                <<<img src="{{ asset('background/Peta USHD.jpeg') }}">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>
        <h3 class="mt-5 m-3">
            Hallo Selamat Datang di Website Magang JSH
        </h3>
        <div class="copyright py-4">
            <div class="container">
                <div class="row">
                    <div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                        <!-- <medium>Copyright © Jabar Saber Hoaks 2020. All Rights Reserved</medium> -->
                        <medium>Jabar Saber Hoaks 2024</medium>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
