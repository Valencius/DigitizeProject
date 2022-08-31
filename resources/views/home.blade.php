{{-- css tambahin di app.blade.php --}}
{{-- buat ornamennya, kalo buat page lain boleh copy aja code img nya--}}
<img src="{{ asset('asset/ellipse.png')}}" id="ellipse2">
<img src="{{ asset('asset/ellipse.png')}}" id="ellipse1"> 
<img src="{{ asset('asset/triangle1.png')}}" id="triangle1">
<img src="{{ asset('asset/triangle2.png')}}" id="triangle2">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="home">
            <div class="hero">
                <h1 style="color: #DFC1FE">Digitize Fest 2022</h1>
                <p>Cast your votes for the best entrants!</p>
                <a href="{{ route('home') }}" class="btn" id="letsvote">Let's Vote</a>
            </div>

            <div class="competition">
                <h1>Vote for your favorite entries!</h1>
                <div class="category">
                    <div class="category-card">
                        <img src="{{ asset('asset/palette.png')}}">
                        <h2>Drawing</h2>
                        <a href="#" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('asset/microphone.png')}}">
                        <h2>Singing</h2>
                        <a href="#" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('asset/dancing.png')}}">
                        <h2>Dancing</h2>
                        <a href="#" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection
