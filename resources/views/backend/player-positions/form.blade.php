<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}

            @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('abbrev') ? 'has-error' : '' }}">
            {!! Form::label('abbrev') !!}
            {!! Form::text('abbrev', null, ['class' => 'form-control']) !!}

            @if($errors->has('abbrev'))
                <span class="help-block">{{ $errors->first('abbrev') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $playerPosition->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.player-positions.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
