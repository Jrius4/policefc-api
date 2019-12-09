@extends('layouts.backend.main')

@section('title', 'Police F.C | Add new category')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Member Social Media
          <small>Add new Member Social Media</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.support-member-social-media.index') }}">Member Social Media</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($supportMemberSocialMediaLink, [
                  'method' => 'POST',
                  'route'  => 'backend.support-member-social-media.store',
                  'files'  => TRUE,
                  'id' => 'category-form'
              ]) !!}

              @include('backend.support-member-social-media.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.support-member-social-media.script')
