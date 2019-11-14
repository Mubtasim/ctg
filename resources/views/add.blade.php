@extends('layout.master')

@section('content')

<div class="container">
    <form action="{{route('add.show')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id="category" name="category">
                {{-- <option>1</option>
                <option>2</option>
                <option>3</option>ho
                <option>4</option>
                <option>5</option> --}}
                @foreach ($categories as $category)
                <option value="{{$category->category_name}}">{{ucfirst($category->category_name)}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category-name">Category Name</label>
            <input type="text" class="form-control" id="category-name" name="category-name"
                placeholder="Name of the category">
        </div>
        <div class="form-group">
            <label for="location">Select Location</label>
            <select class="form-control" id="location" name="location">
                {{-- <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option> --}}
                @foreach ($locations as $location)
                <option value="{{$location->location_name}}">{{ucfirst($location->location_name)}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Give an image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ route('home') }}" class="btn btn-success mt-2">Home</a>
</div>

@endsection