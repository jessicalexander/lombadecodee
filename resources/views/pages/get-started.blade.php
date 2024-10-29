@extends('components.public')
@section('addition_css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/get-started.css') }}">
@endsection
@section('content')
<div id="banner">
    <img id="img-banner"src="{{asset('assets/images/banner-get-start.svg')}}">
    <div id="center">
        <h1 style="color: #735e59" id="banner-text">Get Started</h1>
    </div>
</div>
<div class="timeline">
    <div class="cont left-cont">
        <img src="{{asset('assets/images/leaf.gif')}}" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 1</h2>
            <small  style="color: #337b3c">Join a community</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="left-cont-arrow"></span>
        </div>
    </div>
    <div class="cont right-cont">
        <img src="{{asset('assets/images/leaf.gif')}}" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 2</h2>
            <small style="color: #337b3c">Do what you can</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="right-cont-arrow"></span>
        </div>
    </div>
    <div class="cont left-cont">
        <img src="{{asset('assets/images/leaf.gif')}}" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 3</h2>
            <small style="color: #337b3c">Plant some plants</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="left-cont-arrow"></span>
        </div>
    </div>
    <div class="cont right-cont">
        <img src="{{asset('assets/images/leaf.gif')}}" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 4</h2>
            <small  style="color: #337b3c">Plant trees</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="right-cont-arrow"></span>
        </div>
    </div>
    <div class="cont left-cont">
        <img src="{{asset('assets/images/leaf.gif')}}" alt="" class="icon">
        <div class="text-box">
            <h2 style="color: #735e59">Step 5</h2>
            <small  style="color: #337b3c">Join Us!!</small>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eaque ullam beatae at pariatur dignissimos cumque labore, ducimus, eum aperiam similique enim laborum accusantium corrupti dolor rem. Alias, obcaecati repellendus!</p>
            <span class="left-cont-arrow"></span>
        </div>
    </div>
</div>
@endsection
@section('addition_js')
<script src="{{ asset('pages/js/get-started.js') }}"></script>
@endsection