<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Kamar</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit='save'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kode</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.kamar_cd'
                                                    placeholder="Kode Ruangan">
                                                @error('form.kamar_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model='form.kamar_nm'
                                                    placeholder="Nama Kamar">
                                                @error('form.kamar_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Kelas</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model='form.kelas_cd'>
                                                    <option value="">Pilih Kelas</option>
                                                    @foreach ($listKelas ?? [] as $item)
                                                        <option value="{{ $item['kelas_cd'] }}">
                                                            {{ $item['kelas_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.kelas_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Bangsal</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model='form.bangsal_cd'>
                                                    <option value="">Pilih Bangsal</option>
                                                    @foreach ($listBangsal ?? [] as $item)
                                                        <option value="{{ $item['bangsal_cd'] }}">
                                                            {{ $item['bangsal_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.bangsal_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat
                                                Tidur</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" wire:model=''
                                                    placeholder="Jumlah">
                                                @error('')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <button type="button" class="btn btn-default float-right"
                                    wire:click='batal'>Batal</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.card-header -->
                        <!-- form start -->
                    </div>

                    <!-- /.card -->

                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <div class="card-title">
                                Data Kamar
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="cari"
                                        wire:model.live='cari'>
                                </div>
                            </div>

                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Jml Tempat Tidur</th>
                                    <th>Bangsal</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($post as $item)
                                        <tr wire:key='{{ $item->kamar_cd }}'>

                                            <td>{{ $loop->index + $post->firstItem() }}</td>
                                            <td>{{ $item->kamar_cd }}</td>
                                            <td>{{ $item->kamar_nm }}</td>
                                            <td>{{ $item->kamar_nm }}</td>
                                            <td>{{ $item->bangsal->bangsal_nm ?? '' }}</td>
                                            <td>
                                                <button type="button" wire:click="getEdit('{{ $item->kamar_cd }}')"
                                                    class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></button>
                                                <button type="button" class="btn btn-danger btn-flat btn-sm"
                                                    data-toggle="modal" data-target="#modal-default"
                                                    wire:click="setDelete('{{ $item->kamar_cd }}')"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $post->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="modal fade" id="modal-default" wire:ignore>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Konformasi Hapus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data yang dihapus tidak dapat dikembalikan!
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click='delete'>Ya
                        Hapus</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
