<div class="col-xs-3">
       
        <div class="box">
            <div  class="box-body">
                    <div class="form-group {{ $errors->has('support_member_id') ? 'has-error' : '' }}">
                            {!! Form::label('Support Member') !!}
                        {!! Form::select('support_member_id', App\SoccerModels\SupportMember::pluck('lastname', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose Member']) !!}
                        
                
                            @if($errors->has('support_member_id'))
                                <span class="help-block">{{ $errors->first('support_member_id') }}</span>
                            @endif
                        </div>
            </div>
        </div>
        <div class="box">
                <div  class="box-body">
                        <div class="form-group {{ $errors->has('media_name') ? 'has-error' : '' }}">
                                
                                {!! Form::label('media_name') !!}<div><a href="{{ route('backend.social-media-names.index') }}">Add Social Media Name</a></div>
                            {!! Form::select('media_name', App\SoccerModels\SocialMediaName::pluck('name', 'name'), null, ['class' => 'form-control', 'placeholder' => 'Choose media name']) !!}
                            
                    
                                @if($errors->has('media_name'))
                                    <span class="help-block">{{ $errors->first('media_name') }}</span>
                                @endif
                            </div>
                </div>
            </div>
        <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ $supportMemberSocialMediaLink->exists ? 'Update' : 'Save' }}</button>
                <a href="{{ route('backend.support-member-social-media.index') }}" class="btn btn-default">Cancel</a>
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

