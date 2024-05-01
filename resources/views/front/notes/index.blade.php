@extends('front.layouts.master')

@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <h1>NOTLARIM</h1>
    <br>

    @if($notes->count() > 0)

            @foreach($notes as $note)
                <div class="bg-white border-b shadow-sm rounded-3 mb-3 p-4">
                    <h2 class="font-bold">{{$note->title}}</h2>
                    <p class="mt-3">{{Str::limit($note->content,50) }}</p>
                    <span class="opacity-50 text-muted">{{$note->updated_at->diffForHumans()}}</span>

                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $notes->links()}}
            </div>


    @else
        Henüz hiç notunuz yok
    @endif




    <a href="{{route('notes_create')}}" class="btn btn-success">Not Oluştur</a>

@endsection
