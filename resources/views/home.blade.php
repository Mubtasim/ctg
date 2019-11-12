@extends('layout/master')

@section('content')

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
      <div class="mt-2">
        <a href="{{ route('add.show') }}" class="btn btn-lg btn-primary">Add Category</a>
      </div>
    </div>
  </section>

  <div class="album py-2">
    <div class="container">

      <div class="row">

        @foreach($data as $category)

        <div class="col-md-3 col-sm-4 col-6">
          <a href="{{ route('category',['category_name'=>$category->category_name]) }}">

            <div class="card mb-4 shadow-sm bg-info text-white">
              <img src="{{ asset('images/categories/hospital.jpg') }}" alt="{{$category->category_name}}"
                class="img-fluid">
              <div class="card-body">
                <p class="card-text text-center">{{ strtoupper($category->category_name) }}</p>
              </div>
            </div>

          </a>
        </div>

        @endforeach

      </div>
    </div>
  </div>

</main>
@endsection