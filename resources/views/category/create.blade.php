@extends('layouts.appp')
@section('content')
 <form method="post" action="{{route('category.store')}}">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    

    
    <button type="submit" class="btn btn-success">create category</button>
 </form>
@endsection