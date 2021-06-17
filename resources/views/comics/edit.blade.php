@extends('layouts.app')

@section('title', 'Edit element')

@section('main_content')
    <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$comic->name}}">
        </div>

        <div>
            <label for="edition">Edition</label>
            <input type="text" name="edition" value="{{$comic->edition}}">
        </div>

        <div>
            <label for="pubblished">Date pubblished</label>
            <input type="date" name="pubblished" value="{{$comic->pubblished}}">
        </div>

        <div>
            <label for="author">Author</label>
            <input type="text" name="author" value="{{$comic->author}}">
        </div>

        <div>
            <label for="thumb">Image</label>
            <input type="text" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div>
            <input type="submit" value="Edit">
        </div>

    </form>
@endsection

