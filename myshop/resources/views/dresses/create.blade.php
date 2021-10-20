@extends('layouts.app')

@section('title','Create a New Dress')


@section('content')
<div class="container">
    <h1 style="padding-left:480px;  color:lightblue "> Insert your new Item</h1>
    {{-- we added this pattern if error happens we have an alert message --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            
            @endforeach
        </ul>

    </div>
        
    @endif
        {{-- we added this pattern if error happens we have an alert message --}}
    <form action="{{ route('dresses.store')}}" method="post">
        {{-- must be included when creating a form & method must be Post--}}
        @method('POST')
        @csrf
    
        <div class="form-group col-md-3 col-md-12">
            <label for="inputVestito">Nome Vestito</label>
            {{-- we addede the value{{ old('price')}} so it doesnt make us repeat same info in Db --}}
            <input type="text" class="form-control"  name="name" id="inputVesito" value="{{ old('name')}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group col-md-6 mt-2">
            <label for="inputColor">Color</label>
            <input type="text" class="form-control"  name="color" id="inputColor" placeholder="Color" value="{{ old('color')}}">
        </div>
        <div class="form-group col-md-2 ">
            <label for="inputSize">Size</label>
            <input type="text" class="form-control"   name="size" id="inputSize" placeholder="Size" value="{{ old('size')}}">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPrice">Price</label>
            <input type="text" class="form-control"   name="price" id="inputPrice" placeholder="Price" value="{{ old('price')}}">
        </div>
        <div class="form-group col-md-8 h-200">
            <label for="inputDescription">Description</label>
            <input type="text" class="form-control" name="description" required id="inputDescription" placeholder="Description" value="{{ old('description')}}">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check out</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
        

    </form>

</div>





@endsection