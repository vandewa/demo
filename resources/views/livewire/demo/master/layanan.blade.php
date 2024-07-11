<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Layanan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Layanan</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="tab-pane fade active show">
                            <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                                aria-labelledby="custom-tabs-one-rm-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-success card-outline   card-tabs">
                                            <div class="tab-content" id="custom-tabs-six-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-six-riwayat-rm"
                                                    role="tabpanel" aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                                    <div class="card-body">
                                                        <div class="col-md-12">
                                                            {{-- <div class="card card-success card-outline"> --}}
                                                            <form class="form-horizontal mt-2" wire:submit='save'>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-2">
                                                                                <label for=""
                                                                                    class="col-sm-3 col-form-label">Nama</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        wire:model="form.name">
                                                                                    @error('form.name')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-2">
                                                                                <label for=""
                                                                                    class="col-sm-3 col-form-label">Kategori</label>
                                                                                <div class="col-md-9">
                                                                                    <select name=""
                                                                                        class="form-control"
                                                                                        id=""
                                                                                        wire:model='form.kategori_id'>
                                                                                        <option value="">Pilih
                                                                                            Kategori</option>
                                                                                        @foreach ($kategori as $item)
                                                                                            <option
                                                                                                value="{{ $item->id }}">
                                                                                                {{ $item->nama }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    @error('form.kategori_id')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-2">
                                                                                <label for=""
                                                                                    class="col-sm-3 col-form-label">Deskripsi</label>
                                                                                <div class="col-md-9">
                                                                                    <textarea rows="2" class="form-control" wire:model="form.description"></textarea>
                                                                                    @error('form.description')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="row mb-2">
                                                                                <label for=""
                                                                                    class="col-sm-4 col-form-label">Harga</label>
                                                                                <div class="col-md-8">
                                                                                    <input type="number"
                                                                                        class="form-control"
                                                                                        wire:model="form.harga">
                                                                                    @error('form.harga')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-2">
                                                                                <label for=""
                                                                                    class="col-sm-4 col-form-label">Foto</label>
                                                                                <div class="col-md-8">

                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        wire:model="photo"
                                                                                        accept="image/png, image/gif, image/jpeg">
                                                                                    @error('photo')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror

                                                                                    @if ($photo)
                                                                                        <img src="{{ $photo->temporaryUrl() }}"
                                                                                            style="max-width: 250px;" class="mt-2">
                                                                                    @endif

                                                                                    @if ($form['path'] && !$photo)
                                                                                        <img src="{{ asset('storage/' . $form['path']) }}"
                                                                                            style="max-width: 250px;" class="mt-2">
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- @if (!auth()->user()->hasRole('superadministrator')) --}}
                                                                <div class="card-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-info">Simpan</button>
                                                                    {{-- <button type="button"
                                                                                    class="btn btn-default float-right"
                                                                                    wire:click='batal'>Batal</button> --}}
                                                                </div>
                                                                {{-- @endif --}}
                                                            </form>
                                                        </div>
                                                        <br>

                                                        <div class="card card-success card-outline">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    Data Layanan
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="cari" wire:model.live='cari'>
                                                                    </div>
                                                                </div>

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <th>Nama</th>
                                                                            <th>Kategori</th>
                                                                            <th>Deskripsi</th>
                                                                            <th>Harga</th>
                                                                            <th>Action</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($post as $item)
                                                                                <tr wire:key='{{ $item->id }}'>
                                                                                    <td> {{ $item->name ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->kategori->nama ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->description ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->harga ?? '-' }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="gap-3 table-actions d-flex align-items-center fs-6">
                                                                                            <div class="mr-2">
                                                                                                <button type="button"
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
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
