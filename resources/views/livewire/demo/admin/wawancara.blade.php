<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Wawancara</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Wawancara</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if ($pilih)
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Proses Lamaran ({{ $info->no_reg }})</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" wire:submit="simpan">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-md-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="radio1" wire:model.live="persetujuan">
                                                <label class="form-check-label">Wawancara berhasil dan bisa dilakukan
                                                    proses selanjutnya</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" value="0" type="radio"
                                                    name="radio1" wire:model.live="persetujuan">
                                                <label class="form-check-label">Wawancara gagal proses
                                                    dihentikan</label>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($persetujuan)
                                        <h4>Pendidikan</h4>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control @error('lokasi') is-invalid @enderror"
                                                    id="inputEmail3" wire:model='lokasi' placeholder="Lokasi">
                                                @error('lokasi')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal
                                                Mulai</label>
                                            <div class="col-sm-10">
                                                <input type="datetime-local"
                                                    class="form-control @error('tanggalmulai') is-invalid @enderror"
                                                    id="inputPassword3" wire:model='tanggalmulai'
                                                    placeholder="Password">
                                                @error('tanggalmulai')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal
                                                Selesai</label>
                                            <div class="col-sm-10">
                                                <input type="datetime-local"
                                                    class="form-control @error('tanggalselesai') is-invalid @enderror"
                                                    id="inputPassword3" wire:model='tanggalselesai'
                                                    placeholder="Password">
                                                @error('tanggalselesai')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Pesan <small
                                                    class="text-danger">(*WhastApp)</small></label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" cols="30" rows="2"
                                                    class="form-control @error('pesan') is-invalid @enderror" wire:model='pesan'></textarea>
                                                @error('keterangan')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    @endif
                                    @if ($persetujuan === '0')
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Alasan</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" cols="30" rows="2"
                                                    class="form-control @error('keterangan') is-invalid @enderror" wire:model='keterangan'></textarea>
                                                @error('keterangan')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Pesan <small
                                                    class="text-danger">(*WhatsApp)</small></label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" cols="30" rows="2"
                                                    class="form-control @error('pesan') is-invalid @enderror" wire:model='pesan'></textarea>
                                                @error('keterangan')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                    @endif

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                    <button type="button" class="float-right btn btn-default"
                                        wire:click='clear'>Batalkan</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    @endif
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Wawancara</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="float-right form-control "
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">


                            <div class="p-0 table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No Pendaftaran</th>
                                            <th>Nama Pendaftar</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>Status</th>
                                            <th>Tahapan</th>
                                            <th>Info</th>
                                            <th>Komentar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $item)
                                            <tr @if ($pilih == $item->id) class=bg-red @endif>
                                                <td>{{ $item->no_reg }}</td>
                                                <td>{{ $item->user->name ?? '-' }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    @if ($item->status == 'Dibatalkan')
                                                        <span class="badge rounded-pill bg-danger text-dark">
                                                            {{ $item->status }}</span>
                                                    @else
                                                        <span class="badge rounded-pill bg-info text-dark">
                                                            {{ $item->status }}</span>
                                                    @endif

                                                </td>
                                                <td>{{ $item->tahapan->name ?? '-' }}</td>
                                                <td>
                                                    <p> <span class="fas fa-landmark"></span> Lokasi:
                                                        {{ $item->wawancara->lokasi ?? '-' }}</p>
                                                    <p><span class="fas fa-calendar-check"></span> Tanggal Mulai:
                                                        {{ $item->wawancara->tanggal_mulai ?? '-' }}</p>
                                                    <p><span class="fas fa-calendar-minus"></span> Tanggal Selesai:
                                                        {{ $item->wawancara->tanggal_selesai ?? '-' }}</p>
                                                </td>
                                                <td>{{ $item->wawancara->komentar ?? '-' }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-success"
                                                        wire:click='beriKomentar({{ $item->wawancara->id }})'>Komentar</button>
                                                    <button class="btn btn-sm btn-primary"
                                                        wire:click='proses({{ $item->id }})'>Proses</button>
                                                    <a href="{{ route('pendaftaran.detail-pengguna', $item->user_id) }}"
                                                        target="_blank" class="btn btn-sm btn-warning">Detail Info</a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                {{ $posts->links() }}
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade @if ($showModal) show @endif" id="modal-default"
        @if ($showModal) style="display: block;" @else style="display: none;" @endif>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Komentar</h4>
                    <button type="button" wire:click='tampilModal' data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" wire:submit="saveHasil({{ $pilihHasil }})">
                    <div class="modal-body">
                        <div class="row mb-2">
                            <div class="col-md-3">Komentar </div>
                            <div class="col-md-9">
                                <textarea class="form-control" wire:model="komentar" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" wire:click='tampilModal'>Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
