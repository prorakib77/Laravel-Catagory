@extends('layouts.dashboardmaster')
@section('content')
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

                <h6 class="card-title">Add Catagory</h6>

                <form class="forms-sample" action="{{ route('catagory.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">catagory Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="catagory Name" name="catagory_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" placeholder="slug" name="catagory_slug">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Catagory Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Catagory Image" name="catagory_image">
                    </div>
                    
                    {{-- <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Remember me
                        </label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    {{-- <button class="btn btn-secondary">Cancel</button> --}}
                </form>

</div>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- row -->
@endsection