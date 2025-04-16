<div class="table-responsive">
    <table class="table" id="jenisTanamen-table">
        <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jenisTanamen as $jenisTanaman)
            <tr>
                <td>{{ $jenisTanaman->nama }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['jenisTanamen.destroy', $jenisTanaman->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('jenisTanamen.show', [$jenisTanaman->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('jenisTanamen.edit', [$jenisTanaman->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
