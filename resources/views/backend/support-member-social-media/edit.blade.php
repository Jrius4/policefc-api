@extends('layouts.backend.main')

@section('title', 'POLICE F.C | Edit Member')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Me
          <small>Edit Member Link</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.support-member-social-media.index') }}">Social media links</a></li>
          <li class="active">Edit Link</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($supportMemberSocialMediaLink, [
                  'method' => 'PUT',
                  'route'  => ['backend.support-member-social-media.update', $supportMemberSocialMediaLink->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
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
