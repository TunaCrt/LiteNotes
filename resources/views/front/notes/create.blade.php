@extends('front.layouts.master')

@section('content')

    <form action="{{route('notes_addNote')}}" method="post" >
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Başlık</label>
            <input  type="Text" name="title" placeholder="lütfen başlık giriniz!" class="form-control"  aria-describedby="emailHelp">
            <!--  name->key    içeriği->value  -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Not</label>
            <textarea  class="form-control" name="content" placeholder="İçerik Giriniz" id="floatingTextarea"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Gönder</button>
    </form>
@endsection
