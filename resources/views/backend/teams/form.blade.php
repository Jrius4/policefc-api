<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('home_stadium') ? 'has-error' : '' }}">
            {!! Form::label('home_stadium') !!}
            {!! Form::text('home_stadium', null, ['class' => 'form-control']) !!}

            @if($errors->has('home_stadium'))
                <span class="help-block">{{ $errors->first('home_stadium') }}</span>
            @endif
        </div>  
        
        <div class="form-group {{ $errors->has('slogan') ? 'has-error' : '' }}">
            {!! Form::label('slogan') !!}
            {!! Form::textarea('slogan', null, ['class' => 'form-control']) !!}

            @if($errors->has('slogan'))
                <span class="help-block">{{ $errors->first('slogan') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>

<div class="col-xs-3">
    <div class="box">
       
        <div class="box-footer clearfix">
            <div class="pull-left">
                <a href="{{ route('backend.teams.index') }}" class="btn btn-default">Cancel</a>
            </div>
            <div class="pull-right">
                @if ($team->exists )
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}                    
                @else
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                @endif
            </div>
        
        </div>
    </div>




    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Logo</h3>
        </div>
        <div class="box-body text-center">
            <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="{{ ($team->logoThumbUrl) ? $team->logoThumbUrl : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                  <div>
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('logo') !!}</span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>

                @if($errors->has('logo'))
                    <span class="help-block">{{ $errors->first('logo') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
