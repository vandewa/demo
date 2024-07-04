<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Registrasi Rawat Inap</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Registrasi</a></li>
                    <li class="breadcrumb-item active">Rawat Inap</li>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Pasien</label>
                                        <div class="col-md-9">
                                            <div class="input-group ">
                                                <p class="form-control"> {{ $pasien->no_rm ?? '' }} @if ($pasien)
                                                        |
                                                    @endif {{ $pasien->pasien_nm ?? '' }}</p>
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-info btn-flat"
                                                        wire:click="$dispatch('show-modal-pasien')">Cari</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Jenis</label>
                                        <div class="col-md-9">
                                            <select name="" id="" class="form-control"
                                                wire:model.live='form.pasien_tp'
                                                @if (strtoupper($pasien->pasien_tp ?? '') == 'PASIEN_TP_01') disabled @endif>
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($jenisPasien ?? [] as $item)
                                                    <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Alasan</label>
                                        <div class="col-md-9">
                                            <select name="" id="" class="form-control"
                                                wire:model.live='form.visit_tp'>
                                                <option value="">Pilih Alasan</option>
                                                @foreach ($alasan ?? [] as $item)
                                                    <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Diagnosa Masuk</label>
                                        <div class="col-md-9">
                                            <div class="input-group ">
                                                <p class="form-control">{{ $diagnosa->icd_nm ?? '' }}</p>
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-info btn-flat"
                                                        wire:click="$dispatch('show-modal-diagnosa')">Cari</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Rujukan</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Kelas</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="">-- Pilih Kelas --</option>
                                                @foreach ($kelas ?? [] as $item)
                                                    <option value="{{ $item['kelas_cd'] }}">{{ $item['kelas_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Ruang Perawatan</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                                <option value="">-- Pilih Ruang --</option>
                                                @foreach ($ruang ?? [] as $item)
                                                    <option value="{{ $item['kamar_cd'] }}">{{ $item['kamar_nm'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Keterangan
                                            Diagnosa</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-flat btn-success btn-lg    "
                                        onclick="panggil()"><i class="fa fa-volume-up"></i> Panggil</button>
                                </div>
                                <button type="button" class="btn btn-flat btn-info btn-lg   "
                                    onclick="panggilUlang()"><i class="fa fa-volume-down"></i> Panggil Ulang</button>
                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Kelas</th>
                                    <th>Bangsal</th>
                                    <th>Kamar</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td>{{ $item->kelas->kelas_nm }}</td>
                                            <td>{{ $item->bangsal->bangsal_nm }}</td>
                                            <td>{{ $item->kamar->kamar_nm }}</td>
                                            <td>
                                                <a href="" wire:navigate class="btn btn-success btn-flat btn-sm"
                                                    data-toggle="tooltip" data-placement="left" title="Daftar"><i
                                                        class="fas fa-bed"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
    <livewire:component.modal-pasien wire:key='modal-pasien'>
        <livewire:component.modal-diagnosa wire:key='modal-diagnosa'>
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
