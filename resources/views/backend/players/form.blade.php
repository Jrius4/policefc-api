<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            {!! Form::label('first_name') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}

            @if($errors->has('first_name'))
                <span class="help-block">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
            {!! Form::label('last_name') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}

            @if($errors->has('last_name'))
                <span class="help-block">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('shirt_no') ? 'has-error' : '' }}">
            {!! Form::label('shirt_no') !!}
            {!! Form::text('shirt_no', null, ['class' => 'form-control']) !!}

            @if($errors->has('shirt_no'))
                <span class="help-block">{{ $errors->first('shirt_no') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
            {!! Form::label('age') !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}

            @if($errors->has('age'))
                <span class="help-block">{{ $errors->first('age') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('nationality') ? 'has-error' : '' }}">
            {!! Form::label('nationality') !!}
            {!! Form::text('nationality', null, ['class' => 'form-control']) !!}

            @if($errors->has('nationality'))
                <span class="help-block">{{ $errors->first('nationality') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('previous_club') ? 'has-error' : '' }}">
            {!! Form::label('previous_club') !!}
            {!! Form::text('previous_club', null, ['class' => 'form-control']) !!}

            @if($errors->has('previous_club'))
                <span class="help-block">{{ $errors->first('previous_club') }}</span>
            @endif
        </div>
        
        <div class="form-group {{ $errors->has('bio') ? 'has-error' : '' }}">
            {!! Form::label('bio') !!}
            {!! Form::textarea('bio', null, ['id'=>'article-ckeditor','class' => 'form-control']) !!}

            @if($errors->has('bio'))
                <span class="help-block">{{ $errors->first('bio') }}</span>
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
                <a href="{{ route('backend.players.index') }}" class="btn btn-default">Cancel</a>
            </div>
            <div class="pull-right">
                @if ($player->exists )
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}                    
                @else
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                @endif
            </div>
        
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Player Foot</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('strong_foot_id') ? 'has-error' : '' }}">
                {!! Form::select('strong_foot_id', App\SoccerModels\PlayerFoot::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Player strong foot']) !!}

                @if($errors->has('strong_foot_id'))
                    <span class="help-block">{{ $errors->first('strong_foot_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Player Category</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('player_category_id') ? 'has-error' : '' }}">
                {!! Form::select('player_category_id', App\PlayerCategory::pluck('section_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Player category']) !!}

                @if($errors->has('player_category_id'))
                    <span class="help-block">{{ $errors->first('player_category_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Player Team Position</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('player_position_id') ? 'has-error' : '' }}">
                {!! Form::select('player_position_id', App\SoccerModels\PlayerPosition::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose player position']) !!}

                @if($errors->has('player_position_id'))
                    <span class="help-block">{{ $errors->first('player_position_id') }}</span>
                @endif
            </div>
        </div>
    </div>


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Profile Picture</h3>
        </div>
        <div class="box-body text-center">
            <div class="form-group {{ $errors->has('profile_pic') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="{{ ($player->profilePicThumbUrl) ? $player->profilePicThumbUrl : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                  <div>
                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('profile_pic') !!}</span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                </div>

                

                @if($errors->has('profile_pic'))
                    <span class="help-block">{{ $errors->first('profile_pic') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
