<div class="col-xs-9">
  <div class="box">
    <div class="box-body ">
            <div class='input-group date  {{ $errors->has('date') ? 'has-error' : '' }}' id='datetimepicker1'>
                  
                        
                        
                    
                        {!! Form::label('Match date') !!}<small>format Y-m-d H:m:s  [2019-07-15 15:45:00]</small>
                            {!! Form::text('date', $match->exists ? null : date("Y-m-d H:i:s"), ['class' => 'form-control', 'placeholder' => 'Y-m-d H:i:s']) !!}
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            @if($errors->has('date'))
                        <span class="help-block">{{ $errors->first('date') }}</span>
                
            @endif
                    
                </div>

        <div class="form-group {{ $errors->has('venue') ? 'has-error' : '' }}">
            {!! Form::label('venue') !!}
            {!! Form::text('venue', null, ['class' => 'form-control']) !!}

            @if($errors->has('venue'))
                <span class="help-block">{{ $errors->first('venue') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('home_team_score') ? 'has-error' : '' }}">
            {!! Form::label('home_team_score') !!}
            {!! Form::text('home_team_score', null, ['class' => 'form-control']) !!}

            @if($errors->has('home_team_score'))
                <span class="help-block">{{ $errors->first('home_team_score') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('away_team_score') ? 'has-error' : '' }}">
            {!! Form::label('away_team_score') !!}
            {!! Form::text('away_team_score', null, ['class' => 'form-control']) !!}

            @if($errors->has('away_team_score'))
                <span class="help-block">{{ $errors->first('away_team_score') }}</span>
            @endif
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ $match->exists ? 'Update' : 'Save' }}</button>
        <a href="{{ route('backend.matches.index') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
  <!-- /.box -->
</div>
<div class="col-xs-3">
    


        <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Home Team</h3>
                </div>
                <div class="box-body">
                    <div class="form-group {{ $errors->has('home_team_id') ? 'has-error' : '' }}">
                        {!! Form::select('home_team_id', App\SoccerModels\Team::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose away team']) !!}
        
                        @if($errors->has('home_team_id'))
                            <span class="help-block">{{ $errors->first('home_team_id') }}</span>
                        @endif
                    </div>
                </div>
            </div>

        <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Away Team</h3>
                </div>
                <div class="box-body">
                    <div class="form-group {{ $errors->has('away_team_id') ? 'has-error' : '' }}">
                        {!! Form::select('away_team_id', App\SoccerModels\Team::pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose away team']) !!}
        
                        @if($errors->has('away_team_id'))
                            <span class="help-block">{{ $errors->first('away_team_id') }}</span>
                        @endif
                    </div>
                </div>
            </div>


</div>
