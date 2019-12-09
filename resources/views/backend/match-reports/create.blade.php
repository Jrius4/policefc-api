@extends('layouts.backend.main')

@section('title', 'Police F.C | Add new category')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Match Reports
          <small>Add new Match Reports</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.categories.index') }}">Match Reports</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($matchReport, [
                  'method' => 'POST',
                  'route'  => 'backend.match-reports.store',
                  'files'  => TRUE,
                  'id' => 'category-form'
              ]) !!}

              @include('backend.match-reports.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.match-reports.script')
