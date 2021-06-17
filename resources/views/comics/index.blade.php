@extends('layouts.app')

@section('title', 'Comics')

@section('main_content')
    <h1>Comics List</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <div>Name: {{$comic->name}}</div>
                @if ($comic->edition)
                    <div>Edition: {{$comic->edition}}</div>
                @endif               
                <div>Pubblished: {{$comic->pubblished}}</div>
                <div>Author: {{$comic->Author}}</div>
                <img src="{{$comic->thumb}}" alt="{{$comic->name}}">

                {{-- Modify --}}
                <a href="{{route('comics.edit', ['comic' => $comic->id])}}">
                    Modify element
                </a>
                {{-- End Modify --}}

                {{-- Fake Destroy --}}
                <button class='destroy_element'>Destroy element</button>

                <div id="destroy_popup" class="hidden">
                    {{-- Destroy --}}
                    <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="post">
                        @csrf
                        @method('DELETE')

                        <input type="submit" value="Delete element">
                    </form>
                    <button id="no_destroy">No</button>
                    {{-- End Destroy --}}
                </div>
            </li>

            
           
        @endforeach

        <a href="{{route('comics.create')}}">
            Create a new element
        </a>
    </ul>

    

    <script src="{{asset('js/script.js')}}"></script>

    

@endsection
    