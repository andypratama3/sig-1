<div class="table-responsive">
    <table class="table" id="petanis-table">
        <thead>
        <tr>
            <th>Nama</th>
        <th>Alamat</th>
        <th>Kontak</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($petanis as $petani)
            <tr>
                <td>{{ $petani->nama }}</td>
            <td>{{ $petani->alamat }}</td>
            <td>{{ $petani->kontak }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['petanis.destroy', $petani->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('petanis.show', [$petani->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('petanis.edit', [$petani->id]) }}"
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
