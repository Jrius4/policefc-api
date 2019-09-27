@extends('layouts.backend.main')

@section('title', 'Police F.C | Edit player position')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Player Positions
          <small>Edit Position</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.categories.index') }}">Player Position</a></li>
          <li class="active">Edit Position</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($supportMemberPosition, [
                  'method' => 'PUT',
                  'route'  => ['backend.support-member-positions.update', $supportMemberPosition->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.support-member-positions.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.support-member-positions.script')
