<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('section_name') ? 'has-error' : '' }}">
            {!! Form::label('section_name') !!}
            {!! Form::text('section_name', null, ['class' => 'form-control']) !!}

            @if($errors->has('section_name'))
                <span class="help-block">{{ $errors->first('section_name') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $playerCategory->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.player-categories.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
