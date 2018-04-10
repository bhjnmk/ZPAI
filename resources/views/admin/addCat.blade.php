@extends('layouts.navbar')

@section('title','Add new category');

@section('content')
    <h3>Adding new category</h3>
    <form action="{{route('admin.saveCat')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Category title">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
    <button class="btn btn-primary" onclick="window.location.href='/view'">Back to view</button>
@endsection