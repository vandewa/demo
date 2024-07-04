<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Siswa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Siswa
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">



                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"> Siswa</h3>


                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="float-right form-control "
                                        placeholder="Search" wire:model.live='cari'>

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


                            <div class="row">

                                <div class="p-0 table-responsive">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Telepon</th>
                                                <th>Status</th>
                                                <th>Role</th>
                                                <th>Tanggal Pendaftaran</th>
                                                <th>Tanggal Aktivasi</th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->telepon }}</td>
                                                    <td>
                                                        @if ($item->active_st)
                                                            <span class="badge bg-primary">Active</span>
                                                        @else
                                                            <span class="badge bg-warning">Non Active</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->roles()->first()->name ?? '-' }}</td>
                                                    <td>{{ date('Y-m-d', strtotime($item->created_at)) }}</td>
                                                    <td>{{ $item->tanggal_upload }}</td>
                                                    <td>
                                                        <a href="{{ route('pendaftaran.detail-pengguna', $item->id) }}"
                                                            class="btn btn-sm btn-primary">Detail</button>
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
