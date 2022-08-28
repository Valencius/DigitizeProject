@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All peserta Peserta</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($pesertas as $peserta)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="{{ asset('files/'.$peserta->picture) }}" class="card-img-top" alt="...">
                <td>{{$peserta->picture}}</td>
                <div class="card-body">
                  <h5 class="card-title">{{ $peserta->Nama }}</h5>
                  <h5 class="card-title">{{ $peserta->category }}</h5>
                  <h5 class="card-title">Creator: {{ $peserta->creator }}</h5>
                  <hr>
                  <p class="card-text">{{ $peserta->desc}} </p>
                  <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary">View Detail</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>


@endsection