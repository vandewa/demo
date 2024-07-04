<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat Hidup</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Riwayat Hidup</a></li>
                    <li class="breadcrumb-item active">Sekolah</li>
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
                                                    <livewire:demo.riwayat-hidup.list-transaksi :idnya="$idnya">

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
                                                                                        <div class="row mb-2">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Nama
                                                                                                Sekolah</label>
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
                                                                                        <div class="row mb-2">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Tempat/Kota</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.kota">
                                                                                                @error('form.kota')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row mb-2">
                                                                                            <label for=""
                                                                                                class="col-sm-3 col-form-label">Sampai
                                                                                                Kelas</label>
                                                                                            <div class="col-md-9">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.sampai_kls">
                                                                                                @error('form.sampai_kls')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="row mb-2">
                                                                                            <label for=""
                                                                                                class="col-sm-4 col-form-label">Dari/Sampai
                                                                                                Tahun </label>
                                                                                            <div class="col-md-8">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.dari_sampai_tahun">
                                                                                                @error('form.dari_sampai_tahun')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mb-2">
                                                                                            <label for=""
                                                                                                class="col-sm-4 col-form-label">Jurusan</label>
                                                                                            <div class="col-md-8">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.jurusan">
                                                                                                @error('form.jurusan')
                                                                                                    <span
                                                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                                                @enderror
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row mb-2">
                                                                                            <label for=""
                                                                                                class="col-sm-4 col-form-label">Tahun
                                                                                                Ijazah</label>
                                                                                            <div class="col-md-8">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    wire:model="form.ijazah">
                                                                                                @error('form.ijazah')
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
                                                                                    {{-- <button type="button"
                                                                                    class="btn btn-default float-right"
                                                                                    wire:click='batal'>Batal</button> --}}
                                                                                </div>
                                                                            @endif
                                                                        </form>
                                                                    </div>
                                                                    <br>

                                                                    <div class="card card-success card-outline">
                                                                        <div class="card-header">
                                                                            <div class="card-title">
                                                                                Data Sekolah
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
                                                                                        <th>Nama Sekolah</th>
                                                                                        <th>Tempat/Kota</th>
                                                                                        <th>Jurusan</th>
                                                                                        <th>Tahun</th>
                                                                                        <th>Action</th>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach ($post as $item)
                                                                                            <tr
                                                                                                wire:key='{{ $item->id }}'>
                                                                                                <td> {{ $item->nama ?? '-' }}
                                                                                                </td>
                                                                                                <td> {{ $item->kota ?? '-' }}
                                                                                                </td>
                                                                                                <td> {{ $item->jurusan ?? '-' }}
                                                                                                </td>
                                                                                                <td> {{ $item->ijazah ?? '-' }}
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
