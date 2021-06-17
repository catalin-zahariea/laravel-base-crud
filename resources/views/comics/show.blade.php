@extends('layouts.app')

@section('title', "$comic->name")

@section('main_content')
    <h1>Title: {{$comic->name}} </h1>
    <div>Edition: {{$comic->edition}}</div>
    <div>Pubblished: {{$comic->pubblished}}</div>
    <div>Author: {{$comic->author}}</div>
@endsection