@extends('layout.master')

@section('content')

<div class="container-fluid text-center">
      <a href="{{ route('home') }}" class="btn btn-lg btn-primary btn-block mt-1">Home</a>
      <div class="row mt-2">
            @foreach ($categories as $category)
            <div class="col-md-2 col-sm-4">
                  <a href="{{ route('details',['name'=>$category_name,'details'=>$category->name]) }}">
                        <div class="card mb-4 shadow-sm bg-info text-white">
                              <img src="http://images.pexels.com/photos/236380/pexels-photo-236380.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                                    alt="{{$category->name}}" class="img-fluid">
                              <div class="card-body">
                                    <p class="card-text text-center">{{ strtoupper($category->name) }}</p>
                              </div>
                        </div>
                  </a>
            </div>
            @endforeach
      </div>
</div>


@endsection