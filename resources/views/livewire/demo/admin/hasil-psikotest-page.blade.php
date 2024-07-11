<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Hasil Psikotest</li>
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
                                                                                    class="col-sm-3 col-form-label">Dokumen</label>
                                                                                <div class="col-md-9">
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        wire:model="path" >
                                                                                    @error('path')
                                                                                        <span
                                                                                            class="form-text text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-info">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <br>

                                                        <div class="card card-success card-outline">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    Data Kategori
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
                                                                            <th>No</th>
                                                                            <th>Email</th>
                                                                            <th>Psikotest</th>
                                                                            <th>Logika</th>
                                                                            <th>TIU</th>
                                                                            <th>Skolastik</th>
                                                                            <th>Action</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($post as $item)
                                                                                <tr wire:key='{{ $item->id }}'>
                                                                                    <td>{{ $loop->index + $post->firstItem() }}
                                                                                    </td>
                                                                                    <td> {{ $item->email ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->psikotes ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->logika ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->tiu ?? '-' }}
                                                                                    </td>
                                                                                    <td> {{ $item->skolastik ?? '-' }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="gap-3 table-actions d-flex align-items-center fs-6">



                                                                                                <div>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-danger btn-flat btn-sm"
                                                                                                        wire:click="delete('{{ $item->id }}')"><i
                                                                                                            class="fas fa-trash"></i>
                                                                                                    </button>
                                                                                                </div>


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
