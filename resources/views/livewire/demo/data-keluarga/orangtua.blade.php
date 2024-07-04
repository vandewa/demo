<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Keluarga</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Keluarga</a></li>
                    <li class="breadcrumb-item active">Orangtua</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi :idnya="$idnya">
                            <div class="card-body">
                                <div class="tab-pane fade active show">
                                    <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-rm-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-success card-tabs">
                                                    <livewire:demo.data-keluarga.list-transaksi :idnya="$idnya">

                                                        <div class="tab-content" id="custom-tabs-six-tabContent">
                                                            <div class="tab-pane fade show active"
                                                                id="custom-tabs-six-riwayat-rm" role="tabpanel"
                                                                aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                                                <div class="card-body">
                                                                    <div class="col-md-12">
                                                                        {{-- <div class="card card-success card-outline"> --}}
                                                                        <form class="form-horizontal mt-2"
                                                                            wire:submit='save'>
                                                                            <div class="card-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Nama</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.nama">
                                                                                                @error('form.nama')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Nomor
                                                                                                Telepon</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.telepon">
                                                                                                @error('form.telepon')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Jenis
                                                                                                Kelamin</label>
                                                                                            <div class="col-md-9">
                                                                                                <select
                                                                                                    class="form-control"
                                                                                                    wire:model.live="form.gender_tp">
                                                                                                    <option
                                                                                                        value="">
                                                                                                        -- Pilih Jenis
                                                                                                        Kelamin --
                                                                                                    </option>
                                                                                                    @foreach ($listJenisKelamin ?? [] as $item)
                                                                                                        <option
                                                                                                            value="{{ $item['com_cd'] }}">
                                                                                                            {{ $item['code_nm'] }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                                @error('form.gender_tp')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Tempat
                                                                                                Lahir</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.tempat_lahir">
                                                                                                @error('form.tempat_lahir')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">

                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Tanggal
                                                                                                Lahir</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="date"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.tgl_lahir">
                                                                                                @error('form.tgl_lahir')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-2 row">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Pendidikan
                                                                                                Terakhir</label>
                                                                                            <div class="col-md-9">
                                                                                                <select
                                                                                                    class="form-control"
                                                                                                    wire:model="form.education_tp">
                                                                                                    <option
                                                                                                        value="">
                                                                                                        -- Pilih
                                                                                                        Pendidikan --
                                                                                                    </option>
                                                                                                    @foreach ($listPendidikan ?? [] as $item)
                                                                                                        <option
                                                                                                            value="{{ $item['com_cd'] }}">
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
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Alamat</label>
                                                                                            <div class="col-md-9">
                                                                                                <textarea rows="2" wire:model="form.alamat" class="form-control"></textarea>
                                                                                                @error('form.alamat')
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
                                                                                    <button type="submit"
                                                                                        class="btn btn-info">Simpan</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-default float-right"
                                                                                        wire:click='batal'>Batal</button>
                                                                                </div>
                                                                            @endif
                                                                        </form>
                                                                    </div>
                                                                    <br>

                                                                    <div class="card card-success card-outline">
                                                                        <div class="card-header">
                                                                            <div class="card-title">
                                                                                Data Orangtua
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="cari"
                                                                                        wire:model.live='cari'>
                                                                                </div>
                                                                            </div>

                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <th>Nama</th>
                                                                                        <th>Tanggal Lahir</th>
                                                                                        <th>Pendidikan</th>
                                                                                        <th>Action</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach ($post as $item)
                                                                                            <tr
                                                                                                wire:key='{{ $item->id }}'>
                                                                                                <td> {{ $item->nama ?? '' }}
                                                                                                </td>
                                                                                                <td> {{ $item->tgl_lahir ?? '' }}
                                                                                                </td>
                                                                                                <td> {{ $item->pendidikannya->code_nm ?? '' }}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="gap-3 table-actions d-flex align-items-center fs-6">
                                                                                                        <div
                                                                                                            class="mr-2">
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                wire:click="getEdit('{{ $item->id }}')"
                                                                                                                class="btn btn-warning btn-flat btn-sm"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="left"
                                                                                                                title="Edit"><i
                                                                                                                    class="fas fa-pencil-alt"></i>
                                                                                                            </button>
                                                                                                        </div>

                                                                                                        @if (!auth()->user()->hasRole('superadministrator'))
                                                                                                            <div>
                                                                                                                <button
                                                                                                                    type="button"
                                                                                                                    class="btn btn-danger btn-flat btn-sm"
                                                                                                                    wire:click="delete('{{ $item->id }}')"><i
                                                                                                                        class="fas fa-trash"></i>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    </div>

                                                                                                </td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            {{ $post->links() }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
