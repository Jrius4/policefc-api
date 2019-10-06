@extends('layouts.backend.main')

@section('title', 'Police F.C | Players index')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
            {{$supportMembersCounter->count()}} Support Members
          <small>Display All Police F.C Executive & Technical Members</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.support-members.index') }}">Support Members</a></li>
          <li class="active">All players</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header clearfix">
                    <div class="pull-left">
                        <a href="{{ route('backend.support-members.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    @include('backend.partials.message')

                    @if (! $supportMembers->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                            @include('backend.support-members.table')
                    @endif
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pull-left">
                        {{ $supportMembers->appends( Request::query() )->render() }}
                    </div>
                    <div class="pull-right">
                        <small>{{ $supportMembersCount }} {{ str_plural('Item', $supportMembersCount) }}</small>
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
