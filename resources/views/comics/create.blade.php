@extends('layouts.app')

@section('title', 'Create a new element')

@section('main_content')
<form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')

    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="edition">Edition</label>
        <input type="text" name="edition">
    </div>

    <div>
        <label for="pubblished">Date pubblished</label>
        <input type="date" name="pubblished">
    </div>

    <div>
        <label for="author">Author</label>
        <input type="text" name="author">
    </div>

    <div>
        <label for="thumb">Image</label>
        <input type="text" name="thumb">
    </div>

    <div>
        <input type="submit" value="Add new element">
    </div>

</form>

<a href="{{route('comics.index')}}">
    Return to Comics list
</a>
@endsection