<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                {{-- <h1 class="m-0">Seleksi    Berkas</h1> --}}
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Aktivasi
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">



                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Aktivasi</h3>


                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">


                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-center">
                                        Aktivasi Pengguna
                                    </h4>
                                    @if ($info)
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label> Nama</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>: {{ $info->name }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <Label> Email</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>: {{ $info->email }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <Label> Telepon</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>: {{ $info->telepon }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <Label> Lihat Bukti</Label>
                                            </div>
                                            <div class="col-md-9 col-sm-12">:

                                                <img class="img-fluid"
                                                    src="{{ asset('storage' . str_replace('public', '', $info->path_dokumen)) }}"
                                                    width="300px" height="200px" alt="Photo">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mt-3 text-right col-md-12">
                                                <button class="btn btn-primary"
                                                    wire:click='save({{ $pilih }})'>Terima</button>
                                                <button class="btn btn-danger" wire:click='tolak'>Tolak</button>
                                                <button class="btn btn-warning" wire:click='cancel'>Cancel</button>
                                            </div>
                                        </div>
                                    @endif


                                </div>
                                <div class="mt-3 col-sm-12">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="p-0 table-responsive">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Tanggal Upload</th>

                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($posts as $item)
                                                    <tr @if ($pilih == $item->id) class=bg-red @endif>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->tanggal_upload }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary"
                                                                wire:click='proses({{ $item->id }})'>Proses</button>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                        {{ $posts->links() }}
                                    </div>
                                </div>

                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
