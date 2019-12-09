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
        <div class="form-group excerpt">
            {!! Form::label('excerpt') !!}
            {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {!! Form::label('body') !!}
            {!! Form::textarea('body', null, ['id'=>'article-ckeditor','class' => 'form-control']) !!}

            @if($errors->has('body'))
                <span class="help-block">{{ $errors->first('body') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>

<div class="col-xs-3">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Occurance Date</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('occurance_date') ? 'has-error' : '' }}">
                {!! Form::label('occurance_date', 'Publish Date') !!}
                <div class='input-group date' id='datetimepicker1'>
                    {!! Form::text('occurance_date', $era->exists ? null : date("Y-m-d H:i:s"), ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>


                @if($errors->has('occurance_date'))
                    <span class="help-block">{{ $errors->first('occurance_date') }}</span>
                @endif
            </div>
        </div>
        <div class="box-footer clearfix">
            <div class="pull-left">
                <a  href="{{route('backend.backend-eras.index')}}" class="btn-sm btn-warning">Cancel</a>
            </div>
            <div class="pull-left">
                <a id="draft-btn" class="btn-sm btn-default">Save Draft</a>
            </div>
            <div class="pull-right">
                {!! Form::submit('Publish', ['class' => 'btn-sm btn-primary']) !!}
            </div>
            
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Category</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('era_category_id') ? 'has-error' : '' }}">
                {!! Form::select('era_category_id', App\EraCategory::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}

                @if($errors->has('era_category_id'))
                    <span class="help-block">{{ $errors->first('era_category_id') }}</span>
                @endif
            </div>
        </div>
    </div>


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Feature Image</h3>
        </div>
        <div class="box-body text-center">
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="{{ ($era->image_thumb_url) ? $era->image_thumb_url : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
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
</div>
