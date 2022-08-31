@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Participant</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display: flex">
            @foreach ($pesertas as $peserta)
            <div class="card m-2 p-2 card-box" >
                @if ($peserta->category === "Drawing")
                  <img src="{{ asset('files/'.$peserta->picture) }}" class="card-img-top" alt="...">
                @endif
                @if ($peserta->category === "Singing")
                  <audio controls>
                    <source src="{{ asset('files/'.$peserta->picture) }}">
                  </audio>
                @endif
                @if ($peserta->category === "Dancing")
                  <video controls>
                    <source src="{{ asset('files/'.$peserta->picture) }}">
                  </video>
                @endif
                
                <td text="none">{{$peserta->picture}}</td>
                <div class="card-body">
                  <h5 class="card-title">{{ $peserta->Nama }}</h5>
                  <h5 class="card-category">{{ $peserta->category }}</h5>
                  <h5 class="card-creator">Creator: {{ $peserta->creator }}</h5>
                  <hr>
                  <p class="card-text">{{ $peserta->desc}} </p>
                  <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary">View Detail</a>
                  <form action="{{ route('peserta.delete', $peserta->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </div>
              </div>
            @endforeach
        </div>
        <a href="{{ route('peserta.create') }}" class="btn btn-primary">Add Participant</a>
    </div>
</div>


@endsection