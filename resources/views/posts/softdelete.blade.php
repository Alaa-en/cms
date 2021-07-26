@extends('layouts.appp')
@section('content')

        <table class="table ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">User</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
              <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post->Category->name}}</td>
                <td>{{$post['description']}}</td>
                <td>{{$post->User->name}}</td>
                <td> 
                   <a  href="{{route('posts.restore',['post'=> $post->id])}}" type="button" class="btn btn-primary">restore</a>
                   <form style="display:inline;" method="post" action="{{route('posts.hdestroy',['post'=> $post->id])}}">
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