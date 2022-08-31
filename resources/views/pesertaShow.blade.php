@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-9 detail-view" >

            <div class="container m-2 p-2 up-view-box">
            @if ($peserta->category === "Drawing")
              <img src="{{ asset('files/'.$peserta->picture) }}" class="card-img-top view-box" alt="...">
            @endif
            @if ($peserta->category === "Singing")
              <audio controls class="card-img-top view-box">
                <source src="{{ asset('files/'.$peserta->picture) }}">
              </audio>
            @endif
            @if ($peserta->category === "Dancing")
              <video controls class="view-box">
                <source src="{{ asset('files/'.$peserta->picture) }}">
              </video>
            @endif
                <div class="container m-2 p-2">
                  <h2 class="details card-creator">{{ $peserta->creator }}</h2>
                  <h3 class="details card-category">Category: {{ $peserta->category }}</h3>
                  <hr>
                  <p class=" details card-desc">{{ $peserta->desc }}</p>
                  <p class="details">Total Votes : {{ $peserta->TotalVote }}</p>
                <div class="button-group">
                  <a href="{{route('peserta.index')}}" class="btn btn-success view-button">Go Home</a>
                  <a href="{{route('peserta.edit',$peserta->id)}}" class="btn btn-primary">Edit</a>
                </div>
                  @if ($peserta->category === "Drawing")
                  <form action="{{ route('peserta.voteDrawing', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button type="submit"  class="form-control add-button" name="pesertaDrawing_id" id="pesertaDrawing_id" value="{{ $peserta->id }}" >Vote</button>
                  </form>
                  @endif

                  @if ($peserta->category === "Singing")
                  <form action="{{ route('peserta.voteSinging', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button type="submit"  class="form-control" name="pesertaSinging_id" id="pesertaSinging_id" value="{{ $peserta->id }}" >Vote</button>
                  </form>
                  @endif

                  @if ($peserta->category === "Dancing")
                  <form action="{{ route('peserta.voteDancing', Auth::user()->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button type="submit"  class="form-control" name="pesertaDancing_id" id="pesertaDancing_id" value="{{ $peserta->id }}" >Vote</button>
                  </form>
                  @endif

                  
                </div>
              </div>

        </div>
    </div>
</div>




@endsection

