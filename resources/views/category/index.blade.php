@extends('layouts.appp')
@section('content')
        <a href="{{route('category.create')}}" class="btn btn-success mb-2">Create category</a>

        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                
                
              </tr>
            </thead>
            <tbody>
                @foreach($category as $categor)
              <tr>
                <th scope="row">{{$categor['id']}}</th>
                <td>{{$categor['name']}}</td>
                <td>
                  <form style="display:inline;" method="post" action="{{route('category.destroy',['id'=> $categor->id])}}">
                    @csrf
                    @method('DELETE')
                  <button   type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
               
            
              </tr>
              @endforeach
            </tbody>
          </table>
  


 @endsection