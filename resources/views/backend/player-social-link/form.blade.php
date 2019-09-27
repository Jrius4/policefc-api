<div class="col-xs-3">
       
        <div class="box">
            <div  class="box-body">
                    <div class="form-group {{ $errors->has('player_id') ? 'has-error' : '' }}">
                            {!! Form::label('Player') !!}
                        {!! Form::select('player_id', App\SoccerModels\Player::pluck('last_name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Player']) !!}
                        
                
                            @if($errors->has('player_id'))
                                <span class="help-block">{{ $errors->first('player_id') }}</span>
                            @endif
                        </div>
            </div>
        </div>
        <div class="box">
                <div  class="box-body">
                        <div class="form-group {{ $errors->has('social_media_name_id') ? 'has-error' : '' }}">
                                {!! Form::label('social_media_name') !!}
                            {!! Form::select('social_media_name_id', App\SoccerModels\SocialMediaName::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose media name']) !!}
                            
                    
                                @if($errors->has('social_media_name_id'))
                                    <span class="help-block">{{ $errors->first('social_media_name_id') }}</span>
                                @endif
                            </div>
                </div>
            </div>
        <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ $playerSocialMediaLink->exists ? 'Update' : 'Save' }}</button>
                <a href="{{ route('backend.player-social-media.index') }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
<div class="col-xs-9">
  <div class="box">
    <div class="box-body">

        <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
            {!! Form::label('url') !!}
            {!! Form::text('url', null, ['class' => 'form-control']) !!}

            @if($errors->has('url'))
                <span class="help-block">{{ $errors->first('url') }}</span>
            @endif
        </div>
        
    </div>
    <!-- /.box-body -->
    
  </div>
  <!-- /.box -->
</div>

