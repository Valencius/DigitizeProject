@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2 detail-name" >{{ $peserta->Nama}}</h1>
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
                  
                  @if ($peserta->category === "Drawing")
                  <form action="{{ route('peserta.voteDrawing', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button type="submit"  class="form-control" name="pesertaDrawing_id" id="pesertaDrawing_id" value="{{ $peserta->id }}" >Vote 1</button>
                  </form>
                  @endif

                  @if ($peserta->category === "Singing")
                  <form action="{{ route('peserta.voteSinging', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button type="submit"  class="form-control" name="pesertaSinging_id" id="pesertaSinging_id" value="{{ $peserta->id }}" >Vote 2</button>
                  </form>
                  @endif

                  @if ($peserta->category === "Dancing")
                  <form action="{{ route('peserta.voteDancing', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button type="submit"  class="form-control" name="pesertaDancing_id" id="pesertaDancing_id" value="{{ $peserta->id }}" >Vote 3</button>
                  </form>
                  @endif

                  {{ $peserta->id }}
                </div>
              </div>

        </div>
    </div>
</div>




@endsection

