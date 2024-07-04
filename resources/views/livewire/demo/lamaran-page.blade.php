<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Lamar Pekerjaan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Lamar</a></li>
                    <li class="breadcrumb-item active">Lamar</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(!$cek)
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Pendaftaran Pelatihan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form wire:submit='simpan'>

                          <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <select name="" class="form-control" id="" wire:model.live='kategori_id'>
                                            <option value="">Pilih Kategori</option>
                                            @foreach ($kategori??[] as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                            @endforeach
                                          </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pelatihan</label>
                                          <select name="" class="form-control" id="" wire:model.live='layanan_id'>
                                              <option value="">Pilih Jenis Pelatihan</option>
                                             @foreach ($layanan??[] as $a)
                                             <option value="{{ $a->id }}">{{ $a->name }}</option>
                                             @endforeach
                                          </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Metode Bayar</label>
                                          <select name="" class="form-control" id="" wire:model='metode_bayar'>
                                            <option value="Manual">Manual</option>
                                            <option value="Online">Online</option>
                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Termin Pembayaran</label>
                                          <select name="" class="form-control" id="" wire:model='termin'>
                                            <option value="1"> 1 Kali</option>
                                            <option value="2"> 2 Kali</option>
                                          </select>
                                    </div>
                                    {{-- <h5 class="text-center">Pilih Kelas</h5>
                                    <table class="table">
                                        <thead>
                                            <th>No</th>
                                            <th>Waktu Pelatihan</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>

                                            @foreach ($kelas??[] as $index => $item)
                                            <tr @if($pilihkelas) class="bg-secondary"@endif>
                                                <td>{{  $index = $index+1 }}</td>
                                                <td>{{ $item->tanggal_mulai }} - {{ $item->tanggal_selesai }} </td>
                                                <td><button type="button" class="btn btn-sm btn-primary" wire:click='ambilKelas({{ $item->id }})'>Pilih</button></td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table> --}}
                                </div>
                                <div class="col-md-6">
                                    @if( $detailLayanan)
                                    <div class="mt-3 alert alert-info alert-dismissible">
                                        {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> --}}
                                        <h5><i class="icon fas fa-info"></i> Informasi Penting!</h5>
                                        <p>Biaya: {{  "Rp " . number_format( $detailLayanan->harga??"",0,',','.'); }}</p>

                                      <p>{{ $detailLayanan->description??"" }}</p>
                                      </div>

                                    @endif



                                </div>
                            </div>





                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pelatihan Yang diikuti</h3>
                            {{-- @role('user')
                                <h3 class="card-title"> <button class="btn btn-primary" wire:click='simpan()'> Lamar
                                        Sekarang</button> </h3>
                            @endrole --}}
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="float-right form-control" wire:model.live='cari'
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">



                        <div class="row">
                            {{-- @foreach ($layanan as $a) --}}
                            {{-- <div class="col-lg-4 col-6" wire:click="simpan({{ $a->id }})">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h4>Program Ginoujissusei</h4>
                                        <p>Pemagangan</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endforeach


                            <div class="col-lg-4 col-6" wire:click="simpan('Program Tokuteiginou')">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h4>Program Tokuteiginou</h4>
                                        <p>Visa Kerja</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-6" wire:click="simpan('Nihonggo Gakko')">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h5>Nihonggo Gakko</h5>
                                        <p>Sekolah Bahasa Jepang Di Negara Jepang</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">Daftar Sekarang <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div> --}}


                            </div>
                        </div>
                                                <!-- /.card-header -->

                            <div class="p-0 card-body table-responsive">
                                <form action="">

                                </form>
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No Pendaftaran</th>
                                        <th>Nama Pendaftar</th>
                                        <th>Jenis Lamaran</th>
                                        <th>Tanggal Pendaftaran</th>
                                        <th>Status</th>
                                        <th>Tahapan</th>
                                        <th>Tagihan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td>{{ $item->no_reg }}</td>
                                            <td>{{ $item->user->name ?? '-' }}</td>
                                            <td>{{ $item->lamaran_tp ?? '-' }}</td>
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
                                                @foreach ($item->pembayaran as $i )
                                                <li>{{ $i->nama_tagihan }} | {{ $i->jumlah }} | {{ $i->status }}</li>
                                                @endforeach
                                            </td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
