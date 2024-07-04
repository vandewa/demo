<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Tagihan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tagihan</a></li>
                    {{-- <li class="breadcrumb-item active">Tagihan</li> --}}
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-pane fade active show">
                        <div class="tab-pane active show fade" id="custom-tabs-one-rm" role="tabpanel"
                            aria-labelledby="custom-tabs-one-rm-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-content" id="custom-tabs-six-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-six-riwayat-rm"
                                            role="tabpanel" aria-labelledby="custom-tabs-six-riwayat-rm-tab">
                                            <div class="card-body">

                                                <div class="card card-success card-outline">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            Tagihan
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <th>#</th>
                                                                    <th>Layanan</th>
                                                                    <th>Tgl Tagihan</th>
                                                                    <th>Nama Tagihan</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Status</th>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($post as $index => $item)
                                                                        <tr wire:key='{{ $item->id }}'>
                                                                            <td>
                                                                                <div
                                                                                    class="gap-3 table-actions d-flex align-items-center fs-6">
                                                                                    <div class="mr-2">
                                                                                        @if (auth()->user()->isAbleTo(['keuangan-read'], true))
                                                                                            <a href="{{ route('pendaftaran.bukti-bayar', $item->id) }}"
                                                                                                class="btn btn-success btn-flat btn-sm"></i>
                                                                                                Konfirmasi Pembayaran
                                                                                            </a>
                                                                                        @else
                                                                                            <a href="{{ route('pendaftaran.bukti-bayar', $item->id) }}"
                                                                                                class="btn btn-info btn-flat btn-sm"></i>
                                                                                                Upload Bukti Bayar
                                                                                            </a>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $index = $index + 1 }}</td>
                                                                            <td>{{ $item->tanggal_tagihan }}</td>
                                                                            <td>{{ $item->nama_tagihan }}</td>
                                                                            <td>{{ 'Rp. ' . number_format($item->jumlah ?? 0) }}
                                                                            </td>
                                                                            <td>
                                                                                @if ($item->status == 'Belum Lunas')
                                                                                    <span
                                                                                        class="right badge badge-info">
                                                                                        {{ $item->status }}</span>
                                                                                @elseif($item->status == 'Lunas')
                                                                                    <span
                                                                                        class="right badge badge-success">
                                                                                        {{ $item->status }}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="right badge badge-danger">
                                                                                        {{ $item->status }}</span>
                                                                                @endif
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
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
