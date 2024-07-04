<div>
    <table class="table table-stripe">
        <thead>
            <th>Poliklinik</th>
            <th>Dokter</th>
            <th>No. RM</th>
            <th>Nama Pasien</th>
            <th>Tanggal Lahir</th>
            <th>No Antrian</th>
            <th>Jenis</th>
            <th>Tindakan</th>
        </thead>
        <tbody>
            @foreach ($posts as $item)
            <tr>
                <td>{{ $item->poli->medunit_nm }}</td>
                <td>{{ $item->dokter->dr_nm }}</td>
                <td>{{ $item->pasien->no_rm }}</td>
                <td>{{ $item->pasien->pasien_nm }}</td>
                <td>{{ $item->pasien->birth_date }}</td>
                <td>{{ $item->queue_no }}</td>
                <td>{{ $item->jenisPasien->code_nm }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info btn-sm btn-flat"><i class="fa fa-print"></i></button>
                        <button type="button" class="btn btn-info btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="print-antrian" onclick="cetak(`180000003`)">Antrian</a></li>
                            <li><a id="print-label" onclick="cetakLabel(`180000003`)">Label RM</a></li>
                        </ul>
                    </div><button type="button" onclick="panggil(`180000003`)" class="btn btn-default btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Panggil"><i class="fa fa-volume-up"></i></button>
                    <a href="{{ route($url, $item->medical_cd) }}" class="btn btn-success btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Detail"><i class="fa fa-stethoscope"></i></a>
                    <button type="button" class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Mutasi"><i class="fa fa-building"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>
