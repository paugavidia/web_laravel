@extends('blog.layout')
@section('content')
    <x-blog.post.index :posts="$posts">   
       --Post/Articulo--
        @slot('header')
            Header
        @endslot
        @slot('extra')
            Extra
        @endslot
     </x-blog.post.index >
@endsection