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
                <h1>Digitize Fest 2022</h1>
                <p>Cast your votes for the best entrants!</p>
                <a href="{{ route('home') }}" class="btn" id="letsvote">Let's Vote</a>
            </div>
        </div>
    </div>
</div>
@endsection
