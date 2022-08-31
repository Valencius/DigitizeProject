@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5" id="create-peserta-box" >
    <h2 class="py-3">Create Peserta</h2>
    <hr>
    <div class="form-box">
      <form action="{{ route('peserta.store') }}" enctype="multipart/form-data" method="POST" id="formCreate" >
          @csrf

          <div class="mb-3 mx-5">
              <label for="picture" class="form-label">Choose Picture</label>
              <input class="form-control" type="file" name="picture" id="picture">
            </div>

          <div class="mb-3 mx-5">
              <label for="Nama" class="form-label">Name</label>
              <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Enter Name">
            </div>

            <div class="mb-3 mx-5">
              <label for="creator" class="form-label">Creator</label>
              <input type="text" class="form-control" name="creator" id="creator" placeholder="Enter Creator">
            </div>

            <div class="mb-3 mx-5">
              <label for="category" class="form-label">Competition Category</label>
              <select class="form-select" name="category" id="category">
                {{-- <option selected hidden value="" disabled >Choose a competition</option> --}}
                <option value="Drawing">Drawing</option>
                <option value="Singing">Singing</option>
                <option value="Dancing">Dancing</option>
              </select>
            </div>

            <div class="mb-3 mx-5">
              <label for="desc" class="form-label">Description</label>
              <textarea class="form-control" name="desc" id="desc" placeholder="Enter Description"></textarea>
            </div>

            
          </form>
          <button type="submit" class="btn btn-primary mx-5" id="create-btn">Create Peserta</button>
    </div>
  </div>
</div>


@endsection