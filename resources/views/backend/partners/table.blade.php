<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td width="150">Logo</td>
            <td>Name</td>
            <td>Slogan</td>
            <td>Home Stadium</td>
            <td width="80">Number Of Matches</td>
        </tr>
    </thead>
    <tbody>
        <?php $request = request(); ?>

        @foreach($partners as $partner)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.partners.destroy', $partner->id]]) !!}
                        <a href="{{ route('backend.partners.edit', $partner->id) }}" class="btn btn-xs btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                            <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        
                    {!! Form::close() !!}
                </td>
                <td>
                <img with="50"height="50" src="{{$partner->logoUrl}}" alt=""/>
                </td>
                <td>{{ $partner->name }}</td>
            </tr>

        @endforeach
    </tbody>
</table>
