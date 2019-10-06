@extends('layouts.backend.main')

@section('title', 'Police F.C | Add new player')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Players
          <small>Add new Player</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.support-members.index') }}">Support Members</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($supportMember, [
                  'method' => 'POST',
                  'route'  => 'backend.support-members.store',
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.support-members.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.support-members.script')
