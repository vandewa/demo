<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Detail Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Detail Pengguna</a></li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <legend>Data Diri</legend>
                                            <hr>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" wire:model="form.nama"
                                                        disabled>
                                                    @error('form.nama')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Tempat
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="form.tempat_lahir" disabled>
                                                    @error('form.tempat_lahir')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Tanggal
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control"
                                                        wire:model="form.tgl_lahir" disabled>
                                                    @error('form.tgl_lahir')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Status</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" wire:model.defer="form.marital_tp"
                                                        disabled>
                                                        <option value="">-- Pilih Status --</option>
                                                        @foreach ($listStatus ?? [] as $item)
                                                            <option value="{{ $item['com_cd'] }}">
                                                                {{ $item['code_nm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('form.marital_tp')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Jenis
                                                    Kelamin</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" wire:model.defer="form.sex_tp"
                                                        disabled>
                                                        <option value="">-- Pilih Jenis Kelamin --
                                                        </option>
                                                        @foreach ($listJenisKelamin ?? [] as $item)
                                                            <option value="{{ $item['com_cd'] }}">
                                                                {{ $item['code_nm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('form.sex_tp')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Agama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" wire:model="form.agama"
                                                        disabled>
                                                    @error('form.agama')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">No
                                                    KTP</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" wire:model="form.ktp"
                                                        disabled>
                                                    @error('form.ktp')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Telepon</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" wire:model="form.telepon"
                                                        disabled>
                                                    @error('form.telepon')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Telepon
                                                    Wali</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control"
                                                        wire:model="form.telepon_wali" disabled>
                                                    @error('form.telepon_wali')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Golongan
                                                    Darah</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" wire:model.defer="form.blood_tp"
                                                        disabled>
                                                        <option value="">-- Pilih Golongan Darah --
                                                        </option>
                                                        @foreach ($listDarah ?? [] as $item)
                                                            <option value="{{ $item['com_cd'] }}">
                                                                {{ $item['code_nm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('form.blood_tp')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Ukuran
                                                    Sepatu</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="form.ukuran_sepatu" disabled>
                                                    @error('form.ukuran_sepatu')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Ukuran
                                                    Baju</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="form.ukuran_baju" disabled>
                                                    @error('form.ukuran_baju')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Alamat
                                                    Sekarang</label>
                                                <div class="col-md-9">
                                                    <textarea wire:model='form.alamat_sekarang' class="form-control" rows="2" disabled></textarea>
                                                    @error('form.alamat_sekarang')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Alamat
                                                    Orangtua</label>
                                                <div class="col-md-9">
                                                    <textarea wire:model='form.alamat_wali' class="form-control" rows="2" disabled></textarea>
                                                    @error('form.alamat_sekarang')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Pendidikan
                                                    Terakhir</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" wire:model="form.education_tp"
                                                        disabled>
                                                        <option value="">-- Pilih Pendidikan --</option>
                                                        @foreach ($listPendidikan ?? [] as $item)
                                                            <option value="{{ $item['com_cd'] }}">
                                                                {{ $item['code_nm'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('form.education_tp')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Keahlian
                                                    Yang Dikuasai</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="form.keterampilan" disabled>
                                                    @error('form.keterampilan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <legend>Data Pribadi</legend>
                                            <hr>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Tinggi
                                                    Badan <small>(cm)</small></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.tinggi" placeholder="cm" disabled>
                                                    @error('formDataPribadi.tinggi')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Berat
                                                    Badan <small>(kg)</small></label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.berat" placeholder="kg" disabled>
                                                    @error('formDataPribadi.berat')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Hobby</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.hoby" placeholder="Masukkan Hobby"
                                                        disabled>
                                                    @error('formDataPribadi.hoby')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Macam
                                                    kegiatan olah raga yang dikuasai </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.or_yg_dikuasai"
                                                        placeholder="Sepakbola, Voli" disabled>
                                                    @error('formDataPribadi.or_yg_dikuasai')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Pernah
                                                    sakit keras ?</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.sakit" placeholder="Ya / Tidak"
                                                        disabled>
                                                    @error('formDataPribadi.sakit')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Kapan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.sakit_kapan" placeholder="Tahun"
                                                        disabled>
                                                    @error('formDataPribadi.sakit_kapan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Sakit
                                                    Apa</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.sakit_apa" placeholder="Jelaskan"
                                                        disabled>
                                                    @error('formDataPribadi.sakit_apa')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Pernah
                                                    mendapat kecelakaan ?</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.kecelakaan"
                                                        placeholder="Ya / Tidak" disabled>
                                                    @error('formDataPribadi.kecelakaan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Kapan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.kecelakaan_kapan"
                                                        placeholder="Tahun" disabled>
                                                    @error('formDataPribadi.kecelakaan_kapan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Kecelakaan
                                                    Apa</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.kecelakaan_apa"
                                                        placeholder="Jelaskan" disabled>
                                                    @error('formDataPribadi.kecelakaan_apa')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Akibat
                                                    Kecelakaan
                                                </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.kecelakaan_akibat"
                                                        placeholder="Jelaskan" disabled>
                                                    @error('formDataPribadi.kecelakaan_akibat')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="" class="col-sm-3 col-form-label">Pernah
                                                    terlibat kegiatan terlarang ?</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formDataPribadi.kegiatan_terlarang"
                                                        placeholder="Ya / Tidak" disabled>
                                                    @error('form.kegiatan_terlarang')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Dokumen</legend>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2 row">
                                                    <label for="" class="col-sm-3 col-form-label">KTP</label>
                                                    <div class="col-md-9">
                                                        @if ($dataDokumen)
                                                            @if ($dataDokumen->ktp != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $dataDokumen->ktp)) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2 row">
                                                    <label for="" class="col-sm-3 col-form-label">KK</label>
                                                    <div class="col-md-9">
                                                        @if ($dataDokumen)
                                                            @if ($dataDokumen->kk != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $dataDokumen->kk)) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Dokumen</legend>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2 row">
                                                    <label for="" class="col-sm-3 col-form-label">Akta
                                                        Lahir</label>
                                                    <div class="col-md-9">
                                                        @if ($dataDokumen)
                                                            @if ($dataDokumen->akta != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $dataDokumen->akta)) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-2 row">
                                                    <label for="" class="col-sm-3 col-form-label">MCU
                                                        Awal</label>
                                                    <div class="col-md-9">
                                                        @if ($dataDokumen)
                                                            @if ($dataDokumen->mcu != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $dataDokumen->mcu)) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Suami/Istri</legend>
                                            </div>
                                            <hr>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formSuamiIstri.nama" disabled>
                                                    @error('formSuamiIstri.nama')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Tempat
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formSuamiIstri.tempat_lahir" disabled>
                                                    @error('formSuamiIstri.tempat_lahir')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-3 col-form-label">Tanggal
                                                    Lahir</label>
                                                <div class="col-md-9">
                                                    <input type="date" class="form-control"
                                                        wire:model="formSuamiIstri.tgl_lahir" disabled>
                                                    @error('formSuamiIstri.tgl_lahir')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for=""
                                                    class="col-sm-3 col-form-label">Pendidikan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formSuamiIstri.pendidikan" disabled>
                                                    @error('formSuamiIstri.pendidikan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for=""
                                                    class="col-sm-3 col-form-label">Pekerjaan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"
                                                        wire:model="formSuamiIstri.pekerjaan" disabled>
                                                    @error('formSuamiIstri.pekerjaan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Anak</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nama</th>
                                                            <th>JK</th>
                                                            <th>Tempat Lahir</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Pendidikan</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataAnak as $itemDataAnak)
                                                                <tr wire:key='{{ $itemDataAnak->id }}'>
                                                                    <td> {{ $itemDataAnak->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataAnak->jenisKelamin->code_nm ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataAnak->tgl_lahir ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataAnak->pendidikan ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Orangtua</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nama</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Pendidikan</th>
                                                            <th>Pekerjaan</th>
                                                            <th>Alamat</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataOrangtua as $itemDataOrangtua)
                                                                <tr wire:key='{{ $itemDataOrangtua->id }}'>
                                                                    <td> {{ $itemDataOrangtua->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataOrangtua->tgl_lahir ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataOrangtua->pendidikan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataOrangtua->pekerjaan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataOrangtua->alamat ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Saudara Kandung</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Tanggal Lahir</th>
                                                            <th>Pendidikan</th>
                                                            <th>Pekerjaan</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataSaudara as $itemDataSaudara)
                                                                <tr wire:key='{{ $itemDataSaudara->id }}'>
                                                                    <td> {{ $itemDataSaudara->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSaudara->jenisKelamin->code_nm ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSaudara->tgl_lahir ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSaudara->pendidikan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSaudara->pekerjaan ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Keluarga / Kenalan</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Instansi</th>
                                                            <th>Hubungan</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataKenalan as $itemDataKenalan)
                                                                <tr wire:key='{{ $itemDataKenalan->id }}'>
                                                                    <td> {{ $itemDataKenalan->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataKenalan->jabatan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataKenalan->instansi ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataKenalan->hubungan ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Sekolah</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nama Sekolah</th>
                                                            <th>Tempat/Kota</th>
                                                            <th>Sampai Kelas</th>
                                                            <th>Dari/Sampai Tahun</th>
                                                            <th>Jurusan</th>
                                                            <th>Tahun Ijazah</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataSekolah as $itemDataSekolah)
                                                                <tr wire:key='{{ $itemDataSekolah->id }}'>
                                                                    <td> {{ $itemDataSekolah->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSekolah->kota ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSekolah->sampai_kls ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSekolah->dari_sampai_tahun ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSekolah->jurusan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemDataSekolah->ijazah ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Kursus</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Macam Kurus</th>
                                                            <th>Lama Kursus</th>
                                                            <th>Dari/Sampai</th>
                                                            <th>Sertifikat/Ket</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataKursus as $itemdataKursus)
                                                                <tr wire:key='{{ $itemdataKursus->id }}'>
                                                                    <td> {{ $itemdataKursus->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataKursus->lama_kursus ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataKursus->dari_sampai_tahun ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataKursus->sertifikat ?? '-' }}
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Pengalaman Kerja</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Instansi/Perusahaan</th>
                                                            <th>Jabatan</th>
                                                            <th>Dari/Sampai</th>
                                                            <th>Gaji</th>
                                                            <th>Tunjangan</th>
                                                            <th>Alasan Berhenti</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataPengalamanKerja as $itemdataPengalamanKerja)
                                                                <tr wire:key='{{ $itemdataPengalamanKerja->id }}'>
                                                                    <td> {{ $itemdataPengalamanKerja->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanKerja->jabatan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanKerja->dari_sampai_tahun ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanKerja->gaji ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanKerja->tunjangan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanKerja->alasan_berhenti ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Pengalaman di Luar Negeri</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Dari/Sampai</th>
                                                            <th>Negara</th>
                                                            <th>Tujuan/Keterangan</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataPengalamanLuarNegeri as $itemdataPengalamanLuarNegeri)
                                                                <tr
                                                                    wire:key='{{ $itemdataPengalamanLuarNegeri->id }}'>
                                                                    <td> {{ $itemdataPengalamanLuarNegeri->dari_sampai_tahun ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanLuarNegeri->negara ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataPengalamanLuarNegeri->tujuan ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Data Referensi</legend>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Hubungan</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($dataPengalamanOrganisasi as $itemdataOrganisasi)
                                                                <tr wire:key='{{ $itemdataOrganisasi->id }}'>
                                                                    <td> {{ $itemdataOrganisasi->nama ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataOrganisasi->jabatan ?? '-' }}
                                                                    </td>
                                                                    <td> {{ $itemdataOrganisasi->hubungan ?? '-' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-4">
                                                <legend>Keterangan Lain</legend>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-5 col-form-label">Tunjangan
                                                    / fasilitas yang diterima sekarang dan sumber pendapatan
                                                    yang lain</label>
                                                <div class="col-md-7">

                                                    <input type="text" class="form-control"
                                                        wire:model="formKeteranganLain.tunjangan_diterima" disabled>
                                                    @error('formKeteranganLain.tunjangan_diterima')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-5 col-form-label">Gaji dan
                                                    fasilitas / tunjangan yang diharap</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"
                                                        wire:model="formKeteranganLain.gaji_diharap" disabled>
                                                    @error('formKeteranganLain.gaji_diharap')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-5 col-form-label">Bersedia
                                                    ditempatkan dimana saja di seluruh wilayah operasi
                                                    perusahaan</label>
                                                <div class="col-md-7">
                                                    <select class="form-control"
                                                        wire:model.live="formKeteranganLain.bersedia_ditempatkan"
                                                        disabled>
                                                        <option value="">
                                                            -- Pilih --
                                                        </option>
                                                        <option value="1">
                                                            Ya
                                                        </option>
                                                        <option value="0">
                                                            Tidak
                                                        </option>
                                                    </select>
                                                    @error('formKeteranganLain.bersedia_ditempatkan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-5 col-form-label">Bersedia
                                                    mematuhi segala peraturan perusahaan yang berlaku maupun
                                                    yang akan dikeluarkan oleh perusahaan </label>
                                                <div class="col-md-7">
                                                    <select class="form-control"
                                                        wire:model.live="formKeteranganLain.mematuhi_peraturan"
                                                        disabled>
                                                        <option value="">
                                                            -- Pilih --
                                                        </option>
                                                        <option value="1">
                                                            Ya
                                                        </option>
                                                        <option value="0">
                                                            Tidak
                                                        </option>
                                                    </select>
                                                    @error('formKeteranganLain.mematuhi_peraturan')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-2 row">
                                                <label for="" class="col-sm-5 col-form-label">Keterangan
                                                    lain yang ingin
                                                    Saudara kemukakan</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control"
                                                        wire:model="formKeteranganLain.keterangan_lain" disabled>
                                                    @error('formKeteranganLain.keterangan_lain')
                                                        <span class="form-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
