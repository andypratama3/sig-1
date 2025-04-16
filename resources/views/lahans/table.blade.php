<div class="table-responsive">
    <table class="table" id="lahans-table">
        <thead>
        <tr>
            <th>Desa</th>
        <th>Tanaman</th>
        <th>Tanggal Penanaman</th>
        <th>Tanggal Panen</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Luas Lahan</th>
        <th>Petani Id</th>
        <th>Jenis Tanaman Id</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lahans as $lahan)
            <tr>
                <td>{{ $lahan->desa }}</td>
            <td>{{ $lahan->tanaman }}</td>
            <td>{{ $lahan->tanggal_penanaman }}</td>
            <td>{{ $lahan->tanggal_panen }}</td>
            <td>{{ $lahan->latitude }}</td>
            <td>{{ $lahan->longitude }}</td>
            <td>{{ $lahan->luas_lahan }}</td>
            <td>{{ $lahan->petani_id }}</td>
            <td>{{ $lahan->jenis_tanaman_id }}</td>
            <td>{{ $lahan->status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['lahans.destroy', $lahan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lahans.show', [$lahan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('lahans.edit', [$lahan->id]) }}"
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
