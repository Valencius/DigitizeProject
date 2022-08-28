@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update peserta</h2>
    <hr>

    <form action="{{ route('peserta.update', $peserta->id) }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="Nama" class="form-label">Title</label>
            <input type="text" class="form-control" name="Nama" id="Nama" value="{{ $peserta->Nama }}" placeholder="Enter Title">
          </div>

          <div class="mb-3">
            <label for="creator" class="form-label">Creator</label>
            <input type="text" class="form-control" name="creator" id="creator" value="{{ $peserta->creator }}" placeholder="Enter Creator">
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" name="category" id="category" value="{{ $peserta->category }}" placeholder="Enter Category">
          </div>

          <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" name="desc" id="desc" placeholder="Enter Description">{{ $peserta->desc }}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Update peserta</button>

    </form>

</div>


@endsection

