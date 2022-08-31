@extends('layouts.app')
{{-- css tambahin di app.blade.php --}}
{{-- buat ornamennya, kalo buat page lain boleh copy aja code img nya--}}
<img src="{{ asset('asset/ellipse.png')}}" id="ellipse2">
<img src="{{ asset('asset/ellipse.png')}}" id="ellipse1"> 
<img src="{{ asset('asset/triangle1.png')}}" id="triangle1">
<img src="{{ asset('asset/triangle2.png')}}" id="triangle2">

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
                <h1 id="competitionHeading">Vote for your favorite entries!</h1>
                <div class="category">
                    <div class="category-card">
                        <img src="{{ asset('asset/palette.png')}}">
                        <h3>Drawing</h3>
                        <a href="#" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('asset/microphone.png')}}">
                        <h3>Singing</h3>
                        <a href="#" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('asset/dancing.png')}}">
                        <h3>Dancing</h3>
                        <a href="#" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                </div>
            </div>

            <div class="drawing-comp">
                <div id="drawing-heading">
                    <h2>Drawing Competition</h2>
                    <a id="see-all-link">See all</a>
                </div>
                <div class="list-home">
                    @foreach ($pesertas as $peserta)
                    @if($peserta->category === "Drawing")
                    <div class="card-drawing" style="background-image: linear-gradient(36.07deg, rgba(0, 0, 0, 0.6) 3.45%, rgba(0, 0, 0, 0) 97.47%), url({{ asset('files/'.$peserta->picture) }})">
                
                        {{-- <img src="{{ asset('files/'.$peserta->picture) }}" class="card-img-top" alt="..."> --}}
                        <div class="card-body-drawing">
                            <div class="card-detail">
                                <h4 class="card-title">{{ $peserta->creator }}</h4>
                                <h5 class="card-title">{{ $peserta->Nama }}</h5>
                            </div>
                            <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary">Vote</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
