@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Dancing Peserta</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($pesertas as $peserta)
            @if($peserta->category === "Singing")
            <div class="card m-2 p-2" style="width: 18rem;">
                
               
              <video controls>
                <source src="{{ asset('files/'.$peserta->picture) }}">
              </video>
                
                
                
                <td>{{$peserta->picture}}</td>
                <div class="card-body">
                  <h5 class="card-title">{{ $peserta->Nama }}</h5>
                  <h5 class="card-title">{{ $peserta->category }}</h5>
                  <h5 class="card-title">Creator: {{ $peserta->creator }}</h5>
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
              @endif
            @endforeach
        </div>
    </div>
</div>


@endsection