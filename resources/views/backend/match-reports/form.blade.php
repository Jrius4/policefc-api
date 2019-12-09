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
        <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
            {!! Form::label('slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}

            @if($errors->has('slug'))
                <span class="help-block">{{ $errors->first('slug') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {!! Form::label('body') !!}
            {!! Form::textarea('body', null, ['id'=>'article-ckeditor','class' => 'form-control']) !!}

            @if($errors->has('body'))
                <span class="help-block">{{ $errors->first('body') }}</span>
            @endif
        </div>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Match date</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('match_id') ? 'has-error' : '' }}">
                {!! Form::select('match_id', App\SoccerModels\Match::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose match day']) !!}

                @if($errors->has('match_id'))
                    <span class="help-block">{{ $errors->first('match_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Image</h3>
        </div>
        <div class="box-body text-center">
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="{{ ($matchReport->imageThumbUrl) ? $matchReport->imageThumbUrl : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                  <div>
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>



                @if($errors->has('image'))
                    <span class="help-block">{{ $errors->first('image') }}</span>
                @endif
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $matchReport->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.match-reports.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
