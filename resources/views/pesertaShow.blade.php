@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">{{ $peserta->Nama }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-9" style="display:flex">

            <div class="container m-2 p-2">
              @if ($peserta->category === "Drawing")
              <img src="{{ asset('files/'.$peserta->picture) }}" class="card-img-top" alt="...">
            @endif
            @if ($peserta->category === "Singing")
              <audio controls class="card-img-top">
                <source src="{{ asset('files/'.$peserta->picture) }}">
              </audio>
            @endif
            @if ($peserta->category === "Dancing")
              <video controls>
                <source src="{{ asset('files/'.$peserta->picture) }}">
              </video>
            @endif
                <div class="container m-2 p-2">
                  <h2>{{ $peserta->creator }}</h2>
                  <h3>Category: {{ $peserta->category }}</h3>
                  <hr>
                  <p>{{ $peserta->desc }}</p>
                  <p>Total Votes : {{ $peserta->TotalVote }}</p>
                  <a href="{{route('peserta.index')}}" class="btn btn-success">Go Home</a>
                  <a href="{{route('peserta.edit',$peserta->id)}}" class="btn btn-primary">Edit</a>
                </div>
              </div>

        </div>
    </div>
</div>




@endsection

