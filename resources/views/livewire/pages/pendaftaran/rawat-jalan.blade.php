<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Registrasi Rawat Jalan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Registrasi</a></li>
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
                                       <label for="" class="col-sm-3 col-form-label">Pasien</label>
                                        <div class="col-md-9">
                                            <div class="input-group ">
                                              <p class="form-control"> {{ $pasien->no_rm??"" }} @if($pasien)|@endif {{ $pasien->pasien_nm??"" }}</p>
                                                <span class="input-group-append">
                                                  <button type="button" class="btn btn-info btn-flat" wire:click="$dispatch('show-modal-pasien')">Cari</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="" class="col-sm-3 col-form-label">Jenis Pasien</label>
                                        <div class="col-md-9">
                                            <select name="" id="" class="form-control" wire:model.live='form.pasien_tp' @if(strtoupper($pasien->pasien_tp??"") == 'PASIEN_TP_01') disabled @endif >
                                                <option value="">Pilih Jenis</option>
                                                @foreach ($jenisPasien??[] as $item)
                                                <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                @endforeach
                                             </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Alasan</label>
                                         <div class="col-md-9">
                                             <select name="" id="" class="form-control" wire:model.live='form.visit_tp'>
                                                <option value="">Pilih Alasan</option>
                                                @foreach ($alasan??[] as $item)
                                                <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                @endforeach

                                             </select>
                                         </div>
                                     </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Diagnosa Masuk</label>
                                         <div class="col-md-9">
                                            <div class="input-group ">
                                                <p class="form-control">{{ $diagnosa->icd_nm??"" }}</p>
                                                <span class="input-group-append">
                                                  <button type="button" class="btn btn-info btn-flat" wire:click="$dispatch('show-modal-diagnosa')">Cari</button>
                                                </span>
                                            </div>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Catatan</label>
                                         <div class="col-md-9">
                                             <textarea name="" wire:model.live='medicalRecord.medical_note' id="" class="form-control" rows="2"></textarea>
                                         </div>
                                     </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        @if($pasien)
                                        <label for="" class="col-sm-3 col-form-label">Detail Pasien:</label>
                                         <div class="col-md-9">

                                             <div class="" style="overflow:hidden;">
                                                 <div>
                                                     <strong>{{ $pasien->pasien_nm }}  </strong> <br>
                                                     ( RM:{{ $pasien->no_rm }} || KTP :{{ $pasien->identity_no??"-" }} )
                                                 </div>
                                             <div class="row" style="margin-top:5px;">
                                                 <div class="col-md-3">
                                                     <i class="fa fa-calendar"></i> {{ $pasien->birth_date }}
                                                 </div>
                                                 <div class="col-md-9">
                                                     <i class="fa fa-map-marker"></i>  {{ $pasien->provinsi->region_nm }} {{ $pasien->kabupaten->region_nm??"" }} {{ $pasien->kecamatan->region_nm??"" }} {{ $pasien->kelurahan->region_nm ??""}}
                                                     {{ $pasien->address }}</div>
                                                 </div>
                                             </div>

                                         </div>
                                         @endif
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <th>Nama Poli</th>
                                    <th>Waktu</th>
                                    <th>Nama Dokter</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $item->poli->medunit_nm }}</td>
                                        <td>{{ $item->time_start }} - {{ $item->time_end }}</td>
                                        <td>{{ $item->dokter->dr_nm }}</td>
                                        <td>
                                            <button type="button" wire:click='pilih("{{ $item->seq_no }}")' id="daftar" class="btn btn-success btn-flat btn-sm" data-toggle="tooltip" data-placement="left" title="Daftar"><i class="fa fa-user-md"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
<livewire:component.modal-pasien wire:key='modal-pasien'>
<livewire:component.modal-diagnosa wire:key='modal-diagnosa'>
</div>
