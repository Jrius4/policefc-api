@extends('layouts.backend.main')

@section('title', 'Police F.C | Edit Players')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Players
          <small>Edit Player</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.players.index') }}">Players</a></li>
          <li class="active">Edit Player</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($player, [
                  'method' => 'PUT',
                  'route'  => ['backend.players.update', $player->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

              @include('backend.players.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.players.script')
