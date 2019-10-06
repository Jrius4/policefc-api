@extends('layouts.backend.main')

@section('title', 'Police F.C | Edit Players')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Support Members
          <small>Edit Member</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.support-members.index') }}">Members</a></li>
          <li class="active">Edit Member</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($supportMember, [
                  'method' => 'PUT',
                  'route'  => ['backend.support-members.update', $supportMember->id],
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
