@extends('layouts.backend.main')

@section('title', 'Police F.C | Add new category')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Matches
          <small>Add new category</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.matches.index') }}">Matches</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($match, [
                'method' => 'POST',
                'route'  => 'backend.matches.store',
                'files'  => TRUE,
                'id' => 'post-form'
            ]) !!}

              @include('backend.matches.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.matches.script')
