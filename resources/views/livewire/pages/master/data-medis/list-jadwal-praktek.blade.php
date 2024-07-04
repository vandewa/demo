<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Jadwal Praktek</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <a href="{{ route('master.jadwal-praktek') }}" wire:navigate class="btn btn-success"><i
                                    class="fas fa-plus mr-2"></i> Tambah Jadwal</a>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Poliklinik</label>
                                        <div class="col-md-9">
                                            {{-- <input type="text" class="form-control" wire:model.live='searchRm'> --}}
                                            <select class="form-control" wire:model.live="searchPoli">
                                                <option value="">-- Pilih Poliklinik --</option>
                                                @foreach ($poli ?? [] as $item)
                                                    <option value="{{ $item['medunit_cd'] }}">{{ $item['medunit_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Dokter</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='searchDr'>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Hari</label>
                                        <div class="col-md-9">
                                            {{-- <input type="text" class="form-control" wire:model.live='searchPasien'> --}}
                                            <select class="form-control" wire:model.live="searchHari">
                                                <option value="">-- Pilih Hari --</option>
                                                @foreach ($hari ?? [] as $item)
                                                    <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Hari</th>
                                    <th>Nama Poli</th>
                                    <th>Waktu</th>
                                    <th>Dokter</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->seq_no }}'>
                                            <td>{{ $item->hari->code_nm ?? '-' }}</td>
                                            <td>{{ $item->poli->medunit_nm ?? '-' }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $item->time_start)->format('H:i') . ' - ' . \Carbon\Carbon::createFromFormat('H:i:s', $item->time_end)->format('H:i') }}
                                            </td>
                                            <td>{{ $item->dokter->dr_nm ?? '' }}</td>
                                            <td>
                                                {{-- <button type="button" wire:click="getEdit('{{ $item->seq_no }}')"
                                                    class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></button> --}}
                                                <a href="{{ route('master.jadwal-praktek', $item->seq_no) }}"
                                                    wire:navigate class="btn btn-warning btn-flat btn-sm"
                                                    data-toggle="tooltip" data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    data-toggle="modal" data-target="#modal-default"
                                                    wire:click="setDelete('{{ $item->seq_no }}')"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $post->links() }}
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-default" wire:ignore>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Konformasi Hapus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data yang dihapus tidak dapat dikembalikan!
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click='delete'>Ya
                        Hapus</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@push('css')
    <style>
        .margin-bawah {
            margin-bottom: 0.5rem;
        }

        .empatbelas {
            font-size: 14px;
        }
    </style>
@endpush
