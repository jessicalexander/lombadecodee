@extends('components.public')

@section('addition_css')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/aboutUs.css') }}">
@endsection

@section('content')
<div id="banner">
    <img id="img-banner"src="{{asset('assets/images/banner-about-us.svg')}}">
    <div id="center">
        <h1 id="banner-text">About Us</h1>
    </div>
</div>
        <div class="team my-5 mx-5">
            <h2 style="color: #735e59">Our Team</h2>
            <div class="diagram mx-auto text-center">
                <img src="{{asset('assets/images/diagram.svg')}}" alt="">
            </div>
        </div>

        <div class="goals">
            <div class="goal text-center mx-auto">
                <h2 class="mb-5" style="color: #735e59">Our Mission</h2>
            </div>
            <div class="content-section">
                <div class="text-mission text-justify">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="image">
                    <img src="assets/images/gambar_pohonTangan.jpg" alt="Hands holding puzzle pieces">
                </div>
            </div>
        </div>



@endsection