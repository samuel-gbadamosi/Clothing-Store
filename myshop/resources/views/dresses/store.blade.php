@extends('layouts.app')

@section('title','Store')


@section('content')

<h1> Clothings in Store</h1>
<img style="position: relative; left:400px;" src="https://cdn.pixabay.com/photo/2016/11/22/19/08/hangers-1850082__340.jpg" alt="">

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

          </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $item)
            <tr>
                
             

                
              </tr>
            @endforeach
          
          
        </tbody>
      </table>

</div>



@endsection