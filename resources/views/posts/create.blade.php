@extends('layouts.appp')
@section('content')
 <form method="post" action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input name="description" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>


    <div class="mb-3">
        <label  class="form-label">show Categories</label>
        <select name="category_id" class="form-control"  >
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Add Post</button>
 </form>
@endsection