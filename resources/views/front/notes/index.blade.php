@extends('front.layouts.master')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <h1>Hello, world!</h1>
    <a href="{{route('notes_create')}}" class="btn btn-success">Not Oluştur</a>

@endsection
