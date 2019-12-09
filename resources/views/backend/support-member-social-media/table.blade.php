<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Support Member Name</td>
            <td>Link</td>
            <td width="120">Social Platform</td>
        </tr>
    </thead>
    <tbody>
        @foreach($supportMemberSocialMediaLinks as $link)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.support-member-social-media.destroy', $link->id]]) !!}
                        <a href="{{ route('backend.support-member-social-media.edit', $link->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        {{-- @if($link->id == config('cms.default_category_id'))
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
                <td>{{ $link->supportMember->lastname }}</td>
                <td>{{ $link->url}}</td>
                <td>{{ $link->media_name}}</td>
                
            </tr>

        @endforeach
    </tbody>
</table>
