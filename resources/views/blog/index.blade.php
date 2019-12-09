@extends('layouts.home.main')

@section('title', 'Blog')

@section('content')

@include('layouts.inc.header-section')
    <div class="container">
        <div class="row">

            @include('layouts.inc.blogs')

            

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
