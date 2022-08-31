@extends('layouts.app')

@section('content')

<div class="containerCreate container mt-5 mb-5 " >
  {{-- <div class="containerCreate"> --}}
    <h2>Create Peserta</h2>
    <hr>

    <form action="{{ route('peserta.store') }}" enctype="multipart/form-data" method="POST" id="formCreate" >
        @csrf

        <div class="mb-3 mx-5">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3 mx-5">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Enter Nama">
          </div>

          <div class="mb-3 mx-5">
            <label for="creator" class="form-label">Creator</label>
            <input type="text" class="form-control" name="creator" id="creator" placeholder="Enter creator">
          </div>

          <div class="mb-3 mx-5">
            <label for="category" class="form-label">Category Lomba</label>
            <select class="form-select" name="category" id="category">
              <option value="Drawing">Drawing</option>
              <option value="Singing">Singing</option>
              <option value="Dancing">Dancing</option>
            </select>
          </div>

          <div class="mb-3 mx-5">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control" name="desc" id="desc" placeholder="Enter Description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Create Peserta</button>

    </form>
  {{-- </div> --}}
</div>


@endsection