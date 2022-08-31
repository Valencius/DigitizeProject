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
                        <a href="#drawing-heading" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('asset/microphone.png')}}">
                        <h3>Singing</h3>
                        <a href="#singing-heading" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                    <div class="category-card">
                        <img src="{{ asset('asset/dancing.png')}}">
                        <h3>Dancing</h3>
                        <a href="#dancing-heading" class="btn" id="category-btn">Jump to this category</a>
                    </div>
                </div>
            </div>

            <div class="drawing-comp" id="#drawing-section">
                <div id="drawing-heading">
                    <h2>Drawing Competition</h2>
                    <a id="see-all-link" href="#">See all</a>
                </div>
                <div class="list-home">
                    <?php $count = 0; ?>
                    @foreach ($pesertas as $peserta)
                        <?php if($count == 3) break; ?>
                        @if($peserta->category === "Drawing")
                            <div class="card-drawing" style="background-image: linear-gradient(36.07deg, rgba(0, 0, 0, 0.6) 3.45%, rgba(0, 0, 0, 0) 97.47%), url({{ asset('files/'.$peserta->picture) }})">
                                <div class="card-body-drawing">
                                    <div class="card-detail">
                                        <h4 class="card-title">{{ $peserta->creator }}</h4>
                                        <h5 class="card-title">{{ $peserta->Nama }}</h5>
                                    </div>
                                    <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary" id="vote">Vote</a>
                                </div>
                            </div>
                        <?php $count++; ?>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <div class="singing-comp">
                <div id="singing-heading">
                    <h2>Singing Competition</h2>
                    <a id="see-all-link" href="#">See all</a>
                </div>
                <div class="list-home-singing">
                    <?php $count = 0; ?>
                    @foreach ($pesertas as $peserta)
                        <?php if($count == 3) break; ?>
                        @if($peserta->category === "Singing")
                            <div class="card-singing" style="background: radial-gradient(127.68% 13497.49% at 1.6% 8.93%, rgba(255, 255, 255, 0.37) 0%, rgba(255, 255, 255, 0) 100%)">
                                <div class="card-body-singing">
                                    <div class="card-detail">
                                        <h4 class="card-title">{{ $peserta->creator }}</h4>
                                        <h5 class="card-title">{{ $peserta->Nama }}</h5>
                                    </div>
                                    <audio controls style="width: 100%">
                                        <source src="{{ asset('files/'.$peserta->picture) }}">
                                    </audio>
                                    <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary" id="vote">Vote</a>
                                </div>
                            </div>
                        <?php $count++; ?>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="dancing-comp">
                <div id="dancing-heading">
                    <h2>Dancing Competition</h2>
                    <a id="see-all-link" href="#">See all</a>
                </div>
                <div class="list-home">
                    <?php $count = 0; ?>
                    @foreach ($pesertas as $peserta)
                        <?php if($count == 3) break; ?>
                        @if($peserta->category === "Dancing")
                            <div class="card-dancing" style="background: radial-gradient(127.68% 13497.49% at 1.6% 8.93%, rgba(255, 255, 255, 0.37) 0%, rgba(255, 255, 255, 0) 100%)">
                                <div class="dancing-card">
                                    <video controls>
                                        <source src="{{ asset('files/'.$peserta->picture) }}">
                                    </video>
                                    <div class="card-body-dancing">
                                        <div class="card-detail">
                                            <h4 class="card-title">{{ $peserta->creator }}</h4>
                                            <h5 class="card-title">{{ $peserta->Nama }}</h5>
                                        </div>
                                        <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary" id="vote">Vote</a>
                                    </div>
                                </div>
                            </div>
                        <?php $count++; ?>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
