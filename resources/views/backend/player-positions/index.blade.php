@extends('layouts.backend.main')

@section('title', 'Police F.C. | Player Position')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Player
          <small>Display All Player Postions</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.player-positions.index') }}">Player Position</a></li>
          <li class="active">All player position</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header clearfix">
                    <div class="pull-left">
                        <a href="{{ route('backend.player-positions.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    @include('backend.partials.message')

                    @if (! $playerPositions->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        @include('backend.player-positions.table')
                    @endif
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pull-left">
                        {{ $playerPositions->appends( Request::query() )->render() }}
                    </div>
                    <div class="pull-right">
                        <small>{{ $playerPositionsCount }} {{ str_plural('Item', $playerPositionsCount) }}</small>
                    </div>
                </div>
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
