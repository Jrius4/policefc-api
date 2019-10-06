<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td width="250">Picture</td>
            <td width="100">First Name</td>
            <td width="100">Last Name</td>
            <td width="120">Position</td>
            <td width="80">Section</td>
        </tr>
    </thead>
    <tbody>
        <?php $request = request(); ?>

        @foreach($supportMembers as $member)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.support-members.destroy', $member->id]]) !!}
                        <a href="{{ route('backend.support-members.edit', $member->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        {{-- @if($member->id == config('cms.default_category_id'))
                            <button onclick="return false" type="submit" class="btn btn-xs btn-danger disabled">
                                <i class="fa fa-times"></i>
                            </button>
                        @else --}}
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        {{-- @endif --}}
                    {!! Form::close() !!}
                </td>
                <td>
                <img with="150"height="150" src="{{$member->profilePicUrl}}" alt=""/>
                </td>
                <td>{{ $member->firstname }}</td>
                <td>{{ $member->lastname }}</td>
                {{-- <td>{{ $member->supportMemberPosition->title }}</td> --}}
                <td>
                    @foreach (App\SoccerModels\SupportMemberPosition::get() as $item)
                        @if ($item->id == $member->support_member_position_id)
                            {{$item->title}}
                        @endif
                    @endforeach
                 </td>
                <td>
                    @if ($member->is_executive)
                        {{"Executive"}}
                    @else
                    {{"Technical"}}
                    @endif
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
