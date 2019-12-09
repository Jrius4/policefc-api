<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">

        <div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
            {!! Form::label('firstname') !!}
            {!! Form::text('firstname', null, ['class' => 'form-control']) !!}

            @if($errors->has('firstname'))
                <span class="help-block">{{ $errors->first('firstname') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
            {!! Form::label('lastname') !!}
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}

            @if($errors->has('lastname'))
                <span class="help-block">{{ $errors->first('lastname') }}</span>
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
                <a href="{{ route('backend.support-members.index') }}" class="btn btn-default">Cancel</a>
            </div>
            <div class="pull-right">
                @if ($supportMember->exists )
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}                    
                @else
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                @endif
            </div>
        
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Positions</h3>
            <h4><a href="{{ route('backend.support-member-positions.index') }}">Add Position</a></h4>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('support_member_position_id') ? 'has-error' : '' }}">
                {!! Form::select('support_member_position_id', App\SoccerModels\SupportMemberPosition::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose position']) !!}

                @if($errors->has('support_member_position_id'))
                    <span class="help-block">{{ $errors->first('support_member_position_id') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Section</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('support_member_position_id') ? 'has-error' : '' }}">
                {!! Form::select('is_executive',[App\SoccerModels\SupportMember::Executive_Member=>"Exectuive",App\SoccerModels\SupportMember::TECHNICAL_Member=>"Technical"], null, ['class' => 'form-control', 'placeholder' => 'Choose position']) !!}

                @if($errors->has('support_member_position_id'))
                    <span class="help-block">{{ $errors->first('support_member_position_id') }}</span>
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
                    <img src="{{ ($supportMember->profilePicThumbUrl) ? $supportMember->profilePicThumbUrl : 'http://placehold.it/200x150&text=No+Image' }}" alt="...">
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
