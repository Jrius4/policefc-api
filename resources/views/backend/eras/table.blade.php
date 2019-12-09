<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Title</td>
            <td width="150">Category</td>
            <td width="170">Date</td>
        </tr>
    </thead>
    <tbody>
        <?php $request = request(); ?>

        @foreach($eras as $era)

            <tr>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['backend.backend-eras.destroy', $era->id]]) !!}
                            <a href="{{ route('backend.backend-eras.edit', $era->id) }}" class="btn btn-xs btn-default">
                                <i class="fa fa-edit"></i>
                            </a>
                        

                       
                            <button type="submit" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                       
                    {!! Form::close() !!}
                </td>
                <td>{{ $era->title }}</td>
                <td>{{ $era->eraCategory->title }}</td>
                <td>
                    <abbr title="{{ $era->dateFormatted(true) }}">{{ $era->dateFormatted() }}</abbr> |
                    {!! $era->occuranceLabel() !!}
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
