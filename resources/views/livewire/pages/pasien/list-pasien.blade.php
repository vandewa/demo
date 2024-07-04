<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pasien</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item active">Pasien</li>
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
                            <a href="{{ route('pasien.pendaftaran') }}" wire:navigate class="btn btn-success"><i
                                    class="fas fa-plus-square mr-2"></i>Tambah
                                Pasien</a>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">No. RM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='searchRm'>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='searchPasien'>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='searchAlamat'>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-md-9">
                                            <input type="date" class="form-control" wire:model.live='searchTanggal'>
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row margin-bawah">
                                        <label for="" class="col-sm-3 col-form-label">No BPJS</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="d-flex justify-content-end">
                                        <div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark">Cetak</button>
                                                <button type="button" class="btn btn-dark dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary">Rekam Medis</button>
                                            <a href="{{ route('pasien.pendaftaran', $selected) }}" wire:navigate
                                                class="btn btn-warning">Ubah Data Pasien</a>
                                            <button class="btn btn-danger">Hapus Data Pasien</button>
                                            <a href="{{ route('registrasi.rawat-jalan', $selected) }}" wire:navigate
                                                class="btn btn-info">Daftar Rawat Jalan</a>
                                            <a href="{{ route('registrasi.rawat-inap', $selected) }}"
                                                class="btn btn-success" wire:navigate>Daftar Rawat Inap</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    Pendaftaran pasienber dilakukan
                                </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <th>No RM</th>
                                    <th>Nama Pasien</th>
                                    <th>Tgl Lahir</th>
                                    <th>Alamat</th>
                                    <th>No BPJS</th>
                                    <th>No Identitas</th>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr wire:click='pilih({{ $item->pasien_cd }})'
                                            @if ($selected == $item->pasien_cd) class="bg-secondary" @endif
                                            wire:key='{{ $item->pasien_cd }}'>
                                            <td>{{ $item->no_rm }}</td>
                                            <td>{{ $item->pasien_nm }}</td>
                                            <td>{{ $item->birth_date }}
                                                @php
                                                    $date = new \DateTime($item->birth_date);
                                                    $now = new \DateTime();
                                                    $interval = $now->diff($date);
                                                    
                                                @endphp
                                                ({{ $interval->y }})
                                                Th</td>
                                            <td>
                                                {{ $item->provinsi->region_nm }},
                                                {{ $item->kabupaten->region_nm ?? '' }},
                                                {{ $item->kecamatan->region_nm ?? '' }},
                                                {{ $item->kelurahan->region_nm ?? '' }}
                                                {{ $item->address }}
                                            </td>
                                            <td>{{ $item->asuransi->insurance_no ?? '-' }}</td>
                                            <td>{{ $item->identity_no ?? '-' }}</td>
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

</div>
