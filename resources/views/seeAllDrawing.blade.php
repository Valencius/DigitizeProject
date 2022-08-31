@extends('layouts.app')

@section('content')

<h2 class="text-center mt-2 " style="color: white; font-weight: 800; ">Drawing Competition</h1>
<h4 class="text-center mt-2 " style="color: white; font-weight: 600; font-size: 32px;">Vote Your Favourite Drawing</h1>

<br>


<div class="container pt-5">
  <div class="col-md-12">
      <div class="home">
          <div>
              <div class="list-home">
                  @foreach ($pesertas as $peserta)
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
                      @endif
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
