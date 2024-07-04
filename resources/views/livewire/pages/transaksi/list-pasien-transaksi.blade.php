<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Transaksi Rawat Jalan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Rawat Jalan</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                       <label for="" class="col-sm-3 col-form-label">No RM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" wire:model.live='rm' placeholder="Ketik No RM">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="" class="col-sm-3 col-form-label">PoliKlinik</label>
                                        <div class="col-md-9" wire:ignore>
                                            <select name="" class="form-control select2bs4" id="select2" wire:model.live='poliklinik'>
                                                @foreach ($poli??[] as $item)
                                                <option value="{{ $item['medunit_cd'] }}">{{ $item['medunit_nm'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                                         <div class="col-md-9">
                                            <input type="date" class="form-control" wire:model.live='tanggal'>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Dokter</label>
                                         <div class="col-md-9" wire:ignore>
                                            <select name="" class="form-control select2bs4" id="select3" wire:model.live='dokter'>
                                                @foreach ($listDokter??[] as $item)
                                                <option value="{{ $item['dr_cd'] }}">{{ $item['dr_nm'] }}</option>
                                                @endforeach
                                            </select>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <livewire:component.table-pasien :rm="$rm" :poliklinik="$poliklinik" :tanggal="$tanggal" :dokter="$dokter" :url="$url">
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>

@push('js')

    <script>
        $(document).ready(function () {
            $('#select2').select2({
                theme: 'bootstrap4',
                placeholder: "Pilih Poliklinik",
                allowClear: true
            });
            $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
            @this.set('poliklinik', data);
            });
            $('#select3').select2({
                theme: 'bootstrap4',
                placeholder: "Pilih Dokter",
                allowClear: true
            });
            $('#select3').on('change', function (e) {
                var data = $('#select3').select2("val");
            @this.set('dokter', data);
            });
        });
    </script>

@endpush
