@extends('layouts.app')
@section('content')


<h1 class="text-center mt-2">All Participant</h1>
<hr>
<br>



<div class="container">
    <div class="row">
      @if(count($pesertas) === 0)
        <h5 style="text-align: center; padding: 2rem 0 ; color: #ffffff79;">No participant</h5>
      @endif
        <div class="col-md-6" style="display: flex">
            @foreach ($pesertas as $peserta)
            <div class="card m-2 p-2 card-box" >
                @if ($peserta->category === "Drawing")
                  <img src="{{ asset('files/'.$peserta->picture) }}" class="card-img" alt="...">
                @endif
                @if ($peserta->category === "Singing")
                  <audio controls class="card-img">
                    <source src="{{ asset('files/'.$peserta->picture) }}">
                  </audio>
                @endif
                @if ($peserta->category === "Dancing")
                  <video controls class="card-img">
                    <source src="{{ asset('files/'.$peserta->picture) }}">
                  </video>
                @endif
                
                
                <div class="card-body">
                  <div class="card-text">
                    <h5 class="card-category">{{ $peserta->category }}</h5>
                    <h5 class="card-title">{{ $peserta->Nama }}</h5>
                    <h5 class="card-creator">By {{ $peserta->creator }}</h5>
                    <hr>
                    <p class="card-desc">{{ $peserta->desc}} </p>
                  </div>
                  <div class="group-button">
                      <a href="{{ route('peserta.show',$peserta->id) }}" class="btn btn-primary view-button">View Detail</a>
                      <form action="{{ route('peserta.delete', $peserta->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
        <a href="{{ route('peserta.create') }}" class="btn btn-primary add-button">Add Participant</a>
    </div>
</div>


@endsection