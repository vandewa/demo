<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Data Diri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Diri</a></li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi :idnya="$idnya" :ceklunas="$ceklunas">
                            <div class="card-body">
                                <div class="col-md-12">
                                    {{-- <div class="card card-success card-outline"> --}}
                                    <form class="mt-2 form-horizontal" wire:submit='save'>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-2 row">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Nama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.nama">
                                                            @error('form.nama')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Tempat
                                                            Lahir</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.tempat_lahir">
                                                            @error('form.tempat_lahir')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Tanggal
                                                            Lahir</label>
                                                        <div class="col-md-9">
                                                            <input type="date" class="form-control"
                                                                wire:model.live="form.tgl_lahir">
                                                            @error('form.tgl_lahir')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                            {{-- @if ($umur > 30)
                                                                <span class="text-danger">Umur lebih dari 30 tahun tidak
                                                                    bisa submit</span>
                                                            @endif --}}
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Status</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control"
                                                                wire:model.live="form.marital_tp">
                                                                <option value="">-- Pilih Status --</option>
                                                                @foreach ($listStatus ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.marital_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Jenis
                                                            Kelamin</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live="form.sex_tp">
                                                                <option value="">-- Pilih Jenis Kelamin --
                                                                </option>
                                                                @foreach ($listJenisKelamin ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.sex_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Agama</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.agama">
                                                            @error('form.agama')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">No
                                                            KTP</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"
                                                                wire:model="form.ktp">
                                                            @error('form.ktp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Telepon</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"
                                                                wire:model="form.telepon">
                                                            @error('form.telepon')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Nama
                                                            Wali</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.nama_wali">
                                                            @error('form.nama_wali')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Telepon
                                                            Wali</label>
                                                        <div class="col-md-9">
                                                            <input type="number" class="form-control"
                                                                wire:model="form.telepon_wali">
                                                            @error('form.telepon_wali')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Golongan
                                                            Darah</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control"
                                                                wire:model.defer="form.blood_tp">
                                                                <option value="">-- Pilih Golongan Darah --
                                                                </option>
                                                                @foreach ($listDarah ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.blood_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Ukuran
                                                            Sepatu</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.ukuran_sepatu">
                                                            @error('form.ukuran_sepatu')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Ukuran
                                                            Baju</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.ukuran_baju">
                                                            @error('form.ukuran_baju')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Alamat
                                                            Sekarang</label>
                                                        <div class="col-md-9">
                                                            <textarea wire:model='form.alamat_sekarang' class="form-control" rows="2"></textarea>
                                                            @error('form.alamat_sekarang')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Alamat
                                                            Orangtua</label>
                                                        <div class="col-md-9">
                                                            <textarea wire:model='form.alamat_wali' class="form-control" rows="2"></textarea>
                                                            @error('form.alamat_sekarang')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control"
                                                                wire:model="form.education_tp">
                                                                <option value="">-- Pilih Pendidikan --</option>
                                                                @foreach ($listPendidikan ?? [] as $item)
                                                                    <option value="{{ $item['com_cd'] }}">
                                                                        {{ $item['code_nm'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('form.education_tp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Keahlian
                                                            Yang Dikuasai</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.keterampilan">
                                                            @error('form.keterampilan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        @if (!auth()->user()->hasRole('superadministrator'))
                                            <div class="card-footer">
                                                {{-- @if ($umur < 30) --}}
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                {{-- @endif --}}
                                                <button type="button" class="float-right btn btn-default"
                                                    wire:click='batal'>Batal</button>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </section>
</div>
