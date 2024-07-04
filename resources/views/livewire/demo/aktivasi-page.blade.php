<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Aktivasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Pendaftaran</a></li>
                    <li class="breadcrumb-item active">Aktivasi</li>
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
                            <h3 class="card-title"> Aktivasi</h3>


                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">

                            <div class="card-body row">
                                <div
                                    class="text-center col-md-5 col-sm-12 d-flex align-items-center justify-content-center">
                                    <div class="">
                                        <h2>BCA<strong> 5660485343</strong></h2>
                                        <h2><strong> Rp 300.000 </strong></h2>
                                        <p class="mb-5 lead"> <strong>An. Riphani Nurasifa Munawar</strong> <br>
                                            Lakukan Pembayaran Untuk aktivasi akun. <br>
                                            Silahkan upload bukti bayar.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    @if ($aktivasi)
                                        <form action="" wire:submit="save">
                                            <div class="form-group">
                                                <label for="inputName">Bukti Bayar </label>
                                                <input type="file" id="inputName"
                                                    class="form-control @error('bukti') is-invalid @enderror"
                                                    wire:model='bukti'>
                                                @error('bukti')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Simpan">
                                            </div>
                                        </form>
                                    @else
                                        @if (auth()->user()->active_st)
                                            <div class="text-center d-flex align-items-center justify-content-center">
                                                <h4>Pembayaran telah diterima akun anda telah aktif
                                                </h4>
                                            </div>
                                            <div
                                                class="text-center d-flex align-items-center justify-content-center mt-3">
                                                <a href="{{ route('pendaftaran.data-diri') }}"
                                                    class="btn btn-primary btn-lg">
                                                    Silahkan klik disini
                                                </a>
                                            </div>
                                        @else
                                            <h4>Aktivasi akun anda sedang dalam proses ...</h4>
                                        @endif
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
