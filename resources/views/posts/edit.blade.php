@extends('layouts.appp')
@section('content')
<form method="post" action="{{route('posts.update',['post' =>$post->id])}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label  class="form-label">Title</label>
        <input name="title" type="text" class="form-control"   value="{{$post->title}}">
    </div>
    
   

    <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea name="description" class="form-control"  rows="2" >{{$post->description}}</textarea >
    </div>

    <div class="mb-3">
        <label  class="form-label">show Categories</label>
        <select name="category_id" class="form-control"  >
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>

   

  

    <button type="submit" class="btn btn-primary">Update post</button>
 </form>
@endsection