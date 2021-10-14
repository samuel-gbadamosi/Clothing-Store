@extends('layouts.app')

@section('title',' Clothings')


@section('content')

<h1>Your Item  {{ $vestito->name}}</h1>
<img src="https://cdn.pixabay.com/photo/2016/11/22/19/08/hangers-1850082__340.jpg" alt="">

<div class="container-fluid">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Color</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Date Begin</th>
            <th scope="col">Action</th>





    
          </tr>
        </thead>
        <tbody>
                
            <tr>
                <th scope="row">{{ $vestito->id }}</th>
                <td>{{ $vestito->name }}</td>
                <td>{{ $vestito->color }}</td>
                <td>{{ $vestito->size }}</td>
                <td>{{ $vestito->price }}</td>
                <td>{{ $vestito->description }}</td>
                <td>{{ $vestito->created_at }}</td>
                
                <td>
                    <a href="{{ route('dresses.edit' , ['dress' => $vestito->id])}} " class="btn btn-warning">Edit</a> 

                    <form action="{{ route('dresses.destroy' ,  $vestito->id)}}" method="post" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    


               
            </tr>

          
          
        </tbody>
      </table>


</div>



@endsection