
@extends('layouts/app')

@section('title')
    AstonAdoptAnimals
@endsection
@section('content')

    <h1>Edit profile page</h1>
    <h5>Edit Animal profile with title: {{$animal->nameTitle}}</h5>
    
    <form action="/Animal/{{ $animal->id }}" method="POST">
         <!-- Text input-->
         @method('PUT')
         @csrf
 
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control" name="title" id="title"  placeholder="title" value="{{$animal->nameTitle}}">
            </div>
            
            <div class="form-group">
                <label for="body">Post Body</label>
                <textarea class="form-control" id="article-ckeditor" name="body" cols="30" rows="10"  value="{{$animal->description}}">{{$animal->description}}</textarea>
            </div>
 

            <!-- Drop down list-->
            <div class="form-group">
                <label for="body">Animal Type</label>
                <select id="sadsad" name="animaltype" class="form-control">
                    <option value="Bird">Bird</option>
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                    <option value="Fish">Fish</option>
                    <option value="Horse">Horse</option>
                    <option value="Reptile">Reptile</option>
                </select>
             </div>
             
             <!-- date of birth picker -->
             @include('partials/dob')

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>


 @endsection