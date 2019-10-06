@extends('layouts.backend.main')

@section('title', 'Police F.C | Edit Teams')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Teams
          <small>Edit Team</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.teams.index') }}">Teams</a></li>
          <li class="active">Edit Player</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($team, [
                  'method' => 'PUT',
                  'route'  => ['backend.teams.update', $team->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.teams.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.teams.script')
