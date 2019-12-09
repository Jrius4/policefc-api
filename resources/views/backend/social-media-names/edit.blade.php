@extends('layouts.backend.main')

@section('title', 'Police F.C | Edit Social Media Name')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Social Media Names
          <small>Edit Social Media Name</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.social-media-names.index') }}">Social Media Names</a></li>
          <li class="active">Edit Social Media Name</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($socialMediaName, [
                  'method' => 'PUT',
                  'route'  => ['backend.social-media-names.update', $socialMediaName->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.social-media-names.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.social-media-names.script')
