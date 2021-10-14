@extends('layouts.app')

@section('title','Home-Page')


@section('content')

<h1 style="position:relative; left:500px">Home Page Clothings</h1>
<img style="position: relative; left:400px;" src="https://cdn.pixabay.com/photo/2016/11/22/19/08/hangers-1850082__340.jpg" alt="">
@if (session('status'))
<div class="alert alert-success">
 {{session('status')}}
</div>
    
@endif
<div class="container-fluid">
    <p><a href="{{ route('dresses.create')}}">Add a New Dress</a></p>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Date Created</th>
            <th scope="col">Date Updated</th>
            <th scope="col">Operations</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $item)
            <tr>
                <th scope="row">{{ $item->id}}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->color }}</td>
                <td>{{ $item->size }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                {{-- <td> <a  href="{{route('dresses.destroy' ,['dress' => $item->id])}}">Delete</a></td> --}}
                {{-- we use the link below to get the specific id of various clothes in the database on base of selection --}}
                <td> <a href="{{ route('dresses.show' , ['dress' => $item->id])}} " class="btn btn-info">Details</a> 
                
                    <a href="{{ route('dresses.edit' , ['dress' => $item->id])}} " class="btn btn-warning">Edit</a> 

                   <form action="{{ route('dresses.destroy' ,  $item->id)}}" method="post" class="d-inline-block">
                       @csrf
                       @method('DELETE')
                       <button class="btn btn-danger">Delete</button>
                   </form>

                </td>
              </tr>
            @endforeach
          
          
        </tbody>
      </table>

</div>



@endsection