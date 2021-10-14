@extends('layouts.app')

@section('title','Create a New Dress')


@section('content')
<div class="container">
    <h1 style="padding-left:430px;"> Inserisci il tuo Vestito</h1>
    {{-- we added this pattern if error happens we have an alert message --}}
    
    {{-- we have to pass the root when updating or editing or form for it to work properly --}}
    <form method="post" action=" {{ route('dresses.update' , $vestito->id)}} ">
        {{-- must be included when creating a form & method must be Post--}}
        @method('PUT')
        @csrf
    
        <div class="form-group col-md-3">
            <label for="inputVestito">Nome Vestito</label>
            <input type="text" class="form-control"  name="name" id="inputVesito" value="{{ $vestito->name }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group col-md-2 mt-4">
            <label for="inputColor">Color</label>
            <input type="text" class="form-control"  name="color" id="inputColor" placeholder="Color" value="{{ $vestito->color }}">
        </div>
        <div class="form-group col-md-2 ">
            <label for="inputSize">Size</label>
            <input type="text" class="form-control"   name="size" id="inputSize" placeholder="Size" value="{{ $vestito->size }}">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPrice">Price</label>
            <input type="text" class="form-control"   name="price" id="inputPrice" placeholder="Price" value="{{ $vestito->price }}">
        </div>
        <div class="form-group col-md-8">
            <label for="inputDescription">Description</label>
            <input type="text" class="form-control" rows="3" name="description" required id="inputDescription" placeholder="Description" value="{{ $vestito->description }}">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        

    </form>

</div>





@endsection