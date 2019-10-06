@extends('layouts.backend.main')

@section('title', 'Police F.C | Add new Team')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Teams
          <small>Add new Team</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.teams.index') }}">Teams</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($team, [
                  'method' => 'POST',
                  'route'  => 'backend.teams.store',
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
