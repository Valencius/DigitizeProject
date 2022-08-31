@extends('layouts.app')

@section('content')

<h2 class="text-center mt-2 " style="color: white; font-weight: 800; ">Dancing Competition</h1>
<h4 class="text-center mt-2 " style="color: white; font-weight: 600; font-size: 32px;">Vote Your Favourite Video</h1>

<br>


<div class="container pt-5">
  <div class="col-md-12">
      <div class="home">
          <div>
            <div class="list-home">
              
              @foreach ($pesertas as $peserta)
                  
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
                  
                  @endif
              @endforeach
          </div>
          </div>
      </div>
  </div>
</div>
@endsection
