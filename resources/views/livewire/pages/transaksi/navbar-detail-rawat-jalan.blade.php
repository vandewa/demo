<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Master Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active">Paramedis</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-transaksi-tab" data-toggle="pill"
                                        href="#custom-tabs-one-transaksi" role="tab"
                                        aria-controls="custom-tabs-one-transaksi" aria-selected="true">Data
                                        Transaksi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-rm-tab" data-toggle="pill"
                                        href="#custom-tabs-one-rm" role="tab" aria-controls="custom-tabs-one-rm"
                                        aria-selected="false">Rekam Medis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-tindakan-tab" data-toggle="pill"
                                        href="#custom-tabs-one-tindakan" role="tab"
                                        aria-controls="custom-tabs-one-tindakan" aria-selected="false">Tindakan
                                        Medis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-lab-tab" data-toggle="pill"
                                        href="#custom-tabs-one-lab" role="tab" aria-controls="custom-tabs-one-lab"
                                        aria-selected="false">Laboratorium</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-radiologi-tab" data-toggle="pill"
                                        href="#custom-tabs-one-radiologi" role="tab"
                                        aria-controls="custom-tabs-one-radiologi" aria-selected="false">Radiologi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-one-resep-tab" data-toggle="pill"
                                        href="#custom-tabs-one-resep" role="tab"
                                        aria-controls="custom-tabs-one-resep" aria-selected="false">Resep/Obat</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-transaksi" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-transaksi-tab">
                                    TRANSAKSI
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-rm" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-rm-tab">
                                    REKAM MEDIS
                                   <livewire:component.detail-pasien :medicalcd="$pasien->pasien_cd">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-dark card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-two-transaksi-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                                id="custom-tabs-two-riwayat-kunjungan-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-two-riwayat-kunjungan" role="tab"
                                                                aria-controls="custom-tabs-two-riwayat-kunjungan"
                                                                aria-selected="true">Riwayat Kunjungan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-two-data-rekam-medis-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-two-data-rekam-medis" role="tab"
                                                                aria-controls="custom-tabs-two-data-rekam-medis"
                                                                aria-selected="false">Data Rekam Medis</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-two-riwayat-rekam-medis-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-two-riwayat-rekam-medis"
                                                                role="tab"
                                                                aria-controls="custom-tabs-two-riwayat-rekam-medis"
                                                                aria-selected="false">Riwayat Rekam
                                                                Medis</a>
                                                        </li>
                                                        <li class="nav-item"
                                                            style="margin-left: auto; background:yellow;">
                                                            <a class="nav-link"
                                                                href="#custom-tabs-six-template-resep"><i
                                                                    class="fas fa-plus-square mr-2"
                                                                    style="color:black"></i><span
                                                                    style="color:black">Tambah Rekam Medis</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-two-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="custom-tabs-two-riwayat-kunjungan" role="tabpanel"
                                                            aria-labelledby="custom-tabs-two-riwayat-kunjungan-tab">
                                                            RIWAYAT KUNJUNGAN
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-two-data-rekam-medis" role="tabpanel"
                                                            aria-labelledby="custom-tabs-two-data-rekam-medis-tab">
                                                            DATA REKAM MEDIS
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-two-riwayat-rekam-medis" role="tabpanel"
                                                            aria-labelledby="custom-tabs-two-riwayat-rekam-medis-tab">
                                                            RIWAYAT REKAM MEDIS
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-tindakan" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-tindakan-tab">
                                    TINDAKAN MEDIS
                                    @include('livewire.global.detail-pasien')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-dark card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-three-transaksi-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                                id="custom-tabs-three-permintaan-lab-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-three-permintaan-tindakan"
                                                                role="tab"
                                                                aria-controls="custom-tabs-three-permintaan-tindakan"
                                                                aria-selected="true">Permintaan Tindakan</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-three-proses-lab-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-three-tindakan-diproses"
                                                                role="tab"
                                                                aria-controls="custom-tabs-three-proses-lab"
                                                                aria-selected="false">Tindakan Diproses</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-three-riwayat-tindakan-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-three-riwayat-tindakan"
                                                                role="tab"
                                                                aria-controls="custom-tabs-three-riwayat-tindakan"
                                                                aria-selected="false">Riwayat Tindakan</a>
                                                        </li>
                                                        <li class="nav-item"
                                                            style="margin-left: auto; background:yellow;">
                                                            <a class="nav-link"
                                                                href="#custom-tabs-six-template-resep"><i
                                                                    class="fas fa-plus-square mr-2"
                                                                    style="color:black"></i><span
                                                                    style="color:black">Tambah Tindakan</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="custom-tabs-three-permintaan-tindakan" role="tabpanel"
                                                            aria-labelledby="custom-tabs-three-permintaan-tindakan-tab">
                                                            PERMINTAAN TINDAKAN
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-three-tindakan-diproses" role="tabpanel"
                                                            aria-labelledby="custom-tabs-three-tindakan-diproses-tab">
                                                            TINDAKAN DIPROSES
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-three-riwayat-tindakan" role="tabpanel"
                                                            aria-labelledby="custom-tabs-three-riwayat-tindakan-tab">
                                                            RIWAYAT TINDAKAN
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-lab" role="tabpanel"
                                    aria-labelledby="ustom-tabs-one-lab-tab">
                                    LABORATORIUM
                                    @include('livewire.global.detail-pasien')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-dark card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-four-transaksi-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                                id="custom-tabs-four-permintaan-lab-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-four-permintaan-lab" role="tab"
                                                                aria-controls="custom-tabs-four-permintaan-lab"
                                                                aria-selected="true">Permintaan Lab</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-four-proses-lab-tab"
                                                                data-toggle="pill" href="#custom-tabs-four-proses-lab"
                                                                role="tab"
                                                                aria-controls="custom-tabs-four-proses-lab"
                                                                aria-selected="false">Proses Lab</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-four-riwayat-lab-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-four-riwayat-lab" role="tab"
                                                                aria-controls="custom-tabs-four-riwayat-lab"
                                                                aria-selected="false">Riwayat Lab</a>
                                                        </li>
                                                        <li class="nav-item"
                                                            style="margin-left: auto; background:yellow;">
                                                            <a class="nav-link"
                                                                href="#custom-tabs-six-template-resep"><i
                                                                    class="fas fa-plus-square mr-2"
                                                                    style="color:black"></i><span
                                                                    style="color:black">Tambah Pemeriksaan</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="custom-tabs-four-permintaan-lab" role="tabpanel"
                                                            aria-labelledby="custom-tabs-four-permintaan-lab-tab">
                                                            PERMINTAAN LAB
                                                        </div>
                                                        <div class="tab-pane fade" id="custom-tabs-four-proses-lab"
                                                            role="tabpanel"
                                                            aria-labelledby="custom-tabs-four-proses-lab-tab">
                                                            PROSES LAB
                                                        </div>
                                                        <div class="tab-pane fade" id="custom-tabs-four-riwayat-lab"
                                                            role="tabpanel"
                                                            aria-labelledby="custom-tabs-four-riwayat-lab-tab">
                                                            RIWAYAT LAB
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-radiologi" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-radiologi-tab">
                                    RADIOLOGI
                                    @include('livewire.global.detail-pasien')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-dark card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-five-transaksi-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                                id="custom-tabs-five-permintaan-radiologi-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-five-permintaan-radiologi"
                                                                role="tab"
                                                                aria-controls="custom-tabs-five-permintaan-radiologi"
                                                                aria-selected="true">Permintaan Radiologi</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-five-proses-radiologi-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-five-proses-radiologi"
                                                                role="tab"
                                                                aria-controls="custom-tabs-five-proses-radiologi"
                                                                aria-selected="false">Radiologi Diproses</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-five-riwayat-radiologi-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-five-riwayat-radiologi"
                                                                role="tab"
                                                                aria-controls="custom-tabs-five-riwayat-radiologi"
                                                                aria-selected="false">Riwayat Radiologi</a>
                                                        </li>
                                                        <li class="nav-item"
                                                            style="margin-left: auto; background:yellow;">
                                                            <a class="nav-link"
                                                                href="#custom-tabs-six-template-resep"><i
                                                                    class="fas fa-plus-square mr-2"
                                                                    style="color:black"></i><span
                                                                    style="color:black">Tambah Pemeriksaan</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-five-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="custom-tabs-five-permintaan-radiologi" role="tabpanel"
                                                            aria-labelledby="custom-tabs-five-permintaan-radiologi-tab">
                                                            PERMINTAAN RADIOLOGI
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-five-proses-radiologi" role="tabpanel"
                                                            aria-labelledby="custom-tabs-five-proses-radiologi-tab">
                                                            RADIOLOGI DIPROSES
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="custom-tabs-five-riwayat-radiologi" role="tabpanel"
                                                            aria-labelledby="custom-tabs-five-riwayat-radiologi-tab">
                                                            RIWAYAT RADIOLOGI
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-resep" role="tabpanel"
                                    aria-labelledby="custom-tabs-one-resep-tab">
                                    RESEP
                                    @include('livewire.global.detail-pasien')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-dark card-tabs">
                                                <div class="card-header p-0 pt-1">
                                                    <ul class="nav nav-tabs" id="custom-tabs-six-transaksi-tab"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                                id="custom-tabs-six-data-resep-tab" data-toggle="pill"
                                                                href="#custom-tabs-six-data-resep" role="tab"
                                                                aria-controls="custom-tabs-six-data-resep"
                                                                aria-selected="true">Data Resep</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="custom-tabs-six-riwayat-resep-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-six-riwayat-resep" role="tab"
                                                                aria-controls="custom-tabs-six-riwayat-resep"
                                                                aria-selected="false">Riwayat Resep</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                id="custom-tabs-six-template-resep-tab"
                                                                data-toggle="pill"
                                                                href="#custom-tabs-six-template-resep" role="tab"
                                                                aria-controls="custom-tabs-six-template-resep"
                                                                aria-selected="false">Template Resep</a>
                                                        </li>
                                                        <li class="nav-item"
                                                            style="margin-left: auto; background:yellow;">
                                                            <a class="nav-link"
                                                                href="#custom-tabs-six-template-resep"><i
                                                                    class="fas fa-plus-square mr-2"
                                                                    style="color:black"></i><span
                                                                    style="color:black">Tambah Resep</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-six-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="custom-tabs-six-data-resep" role="tabpanel"
                                                            aria-labelledby="custom-tabs-six-data-resep-tab">
                                                            DATA RESEP
                                                        </div>
                                                        <div class="tab-pane fade" id="custom-tabs-six-riwayat-resep"
                                                            role="tabpanel"
                                                            aria-labelledby="custom-tabs-six-riwayat-resep-tab">
                                                            RIWAYAT RESEP
                                                        </div>
                                                        <div class="tab-pane fade" id="custom-tabs-six-template-resep"
                                                            role="tabpanel"
                                                            aria-labelledby="custom-tabs-six-template-resep-tab">
                                                            TEMPLATE RESEP
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
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
</div>
</section>
</div>

@push('css')
    <style>
        .detail-pasien {
            background: #00a350;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 15px;
            text-align: left;
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom: 5px;
            padding-right: 10px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .margin-bawah {
            margin-bottom: 0.2rem;
        }
    </style>
@endpush
