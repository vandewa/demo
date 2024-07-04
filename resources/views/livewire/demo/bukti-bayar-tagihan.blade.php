<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Upload Bukti Bayar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
                    <li class="breadcrumb-item active">Upload Bukti Bayar</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Upload Bukti Bayar</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">

                            <div class="card-body row">
                                <div class="text-left col-md-5 col-sm-12">
                                    <div class="">
                                        <h2>BCA<strong> 5660485343</strong></h2>
                                        <p class="mb-5 lead"> <strong>An. Riphani Nurasifa Munawar</strong> <br>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Tanggal Tagihan</td>
                                                    <td>: {{ $pembayaran->tanggal_tagihan ?? '' }}</td>
                                                <tr>
                                                    <td>Nama Layanan</td>
                                                    <td>: {{ $pembayaran->nama_tagihan ?? '' }}</td>
                                                <tr>
                                                    <td>Jumlah Tagihan</td>
                                                    <td>: {{ 'Rp. ' . number_format($pembayaran->jumlah ?? 0) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>: {{ $pembayaran->status ?? '' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                    </div>

                                </div>
                                <div class="col-md-7 col-sm-12">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    @if (!$pembayaran->bukti_bayar)
                                        <form wire:submit="storeUpdate">
                                            <div class="form-group">
                                                <label for="inputName">Bukti Bayar </label>
                                                <input type="file" id="inputName"
                                                    class="form-control @error('bukti') is-invalid @enderror"
                                                    wire:model='bukti_bayar'>
                                                @error('bukti-bayar')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Simpan">
                                            </div>
                                        </form>
                                    @else
                                        <div class="text-center col-md-12">
                                            <img src="{{ asset('storage/' . $pembayaran->bukti_bayar) }}"
                                                class="img-thumbnail" alt="{{ $pembayaran->nama_tagihan ?? '' }}">
                                        </div>
                                        @permission(['keuangan-update'])
                                            @if ($pembayaran->status == 'Belum Lunas')
                                                <div class="mt-3 row">
                                                    <div class="col-md-3">Lokasi</div>
                                                    <div class="col-md-9"><input type="text" wire:model.live='lokasi'
                                                            class="form-control"></div>
                                                </div>
                                                <div class="mt-2 row">
                                                    <div class="col-md-3">Tanggal Mulai</div>
                                                    <div class="col-md-9"><input type="date" wire:model.live='mulai'
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-2 row">
                                                    <div class="col-md-3">Tanggal Selesai</div>
                                                    <div class="col-md-9"><input type="date" wire:model.live='selesai'
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="text-right card-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        wire:click='confirmTolak()'>Tolak</button>
                                                    <button type="button" class="btn btn-info"
                                                        wire:click='confirmBayar()'>Terima</button>
                                                </div>
                                            @endif
                                        @endpermission
                                    @endif
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
