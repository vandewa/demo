<div>

<div class="row"  wire:keydown.shift.up.window="$dispatch('show-modal-pasien')">
    <div id="div-form" class="col-sm-6">
        <form class="form-horizontal" method="post" id="form-resep" novalidate="" action="" enctype="multipart/form-data">

          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">No Resep</label>
              <div class="col-sm-5">
                 <input type="text" name="no_resep" class="form-control" id="no_resep" style="width: 100%;" wire:model='form.resep_no' readonly="">
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">Obat</label>
              <div class="col-sm-6">
                 <!-- <select name="obat_cd" id="obat_cd" class="form-control select2-obat_cd" id="e7" style="width: 100%;"></select> -->
                 <div class="input-group mb-3">
                    <p class="form-control">{{ $obat->barcode??"Tekan Shift + Up" }}</p>
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-search" wire:click="$dispatch('show-modal-pasien')"> Cari</i></span>
                    </div>
                  </div>
              </div>
              <div class="col-sm-3">
                  <label class="col-form-label">
                      <input type="checkbox" class="form-check-label" name="resep_tp" id="racik">
                      Racik
                  </label>
              </div>

          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-8">
                 <textarea id="obat_nm" name="obat_nm" class="form-control" readonly="readonly">{{ $obat->item_nm??"" }}</textarea>
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">Jumlah</label>
              <div class="col-sm-2">
                 <input type="number" name="jumlah" wire:model.live='jumlah' class="form-control" id="jumlah" style="width: 100%;" min="0">
                 @error('jumlah')
                 <span class="form-text text-danger">{{ $message }}</span>
                 @enderror
              </div>
              <label for="satuan_jumlah" class="col-form-label"><p>{{ $obat->satuan->unit_nm??"" }}</p></label>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">Dosis</label>
              <div class="col-sm-2">
                 <input name="dosis_1" wire:model.live='dosisdepan' class="form-control" id="" style="width: 100%;">
                 @error('dosisdepan')
                 <span class="form-text text-danger">{{ $message }}</span>
             @enderror
              </div>
              <label class="col-sm-1 col-form-label">dd</label>
              <div class="col-sm-2">
                 <input name="dosis_2" wire:model.live='dosisbelakang' class="form-control" id="e7" style="width: 100%;">
                @error('dosisbelakang')
                    <span class="form-text text-danger">{{ $message }}</span>
                @enderror
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-8">
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Sebelum Makan"> AC
                  </label>
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Bersama Makan"> DC
                  </label>
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Sesudah Makan"> PC
                  </label>
                  <label class="radio-inline">
                      <input name="consumption_type" type="radio" wire:model.live='hari' id="inlineRadio1" value="Bila perlu"> PRN
                  </label>
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-md-2 col-form-label"></label>
              <div class="col-sm-8">
                  <label class="checkbox-inline">
                      <input type="checkbox" value="Pagi" wire:model.live='pagi'  name=""> Pagi
                  </label>

                  <label class="checkbox-inline">
                      <input type="checkbox" wire:model.live='siang' value="Siang"  name="consumption_day_2"> Siang
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" wire:model.live='sore' value="Sore" name="consumption_day_3"> Sore
                  </label>
                  <label class="checkbox-inline">
                      <input type="checkbox" wire:model.live='malam' value="Malam"  name="consumption_day_4"> Malam
                  </label>
              </div>
          </div>
          <div class=" row mb-1">
              <label class="col-md-2 col-form-label"></label>
                  <div class="col-sm-8">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" value="habiskan" wire:model.live='habiskan' name="consumption_finished">
                              <span style="font-weight: bold;"> Habiskan</span>
                          </label>
                      </div>
                  </div>
                  <div class="clearfix"></div>
          </div>

          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-8">
                 <textarea id="dosis_akhir" name="dosis_akhir" class="form-control">{{ $this->catatan }}</textarea>
              </div>
          </div>
          <div class="mt-2 col-md-10">
              <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-primary btn-sm btn-flat btn-tambah" wire:click='tambah'><i class="fa fa-plus"></i> Tambah</button>
                  <button type="button" class="btn btn-default btn-sm btn-flat btn-kembali"><i class="fa fa-mail-reply"></i> Kembali</button>
              </div>
          </div>
      </form>
    </div>
    <div class="col-sm-6">
        <form id="form-isian" class="form-horizontal" method="post" novalidate="" action="" enctype="multipart/form-data">
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-8">
                  <input type="date" id="datetime_trx" required="required" name="datetime_trx" wire:model.live='form.tanggal' value="" class="form-control jqui-datepicker" readonly="readonly">
              </div>
          </div>
          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">Dokter</label>
              <div class="col-sm-8">
                <select name="" id="" class="form-control" wire:model.live='form.dr_cd'>
                    <option value="">Pilih Dokter</option>
                    @foreach ($dokter ??[] as $item)
                        <option value="{{ $item['dr_cd'] }}">{{ $item['dr_nm'] }}</option>
                    @endforeach
                </select>
              </div>
          </div>
          <input name="medical_cd" type="text" value="180000003" hidden="">

          <div class=" mb-1 row">
              <label class="col-sm-2 col-form-label">Catatan</label>
              <div class="col-sm-8">
                 <textarea name="note" id="note" class="form-control"></textarea>
              </div>
          </div>

      </form>

      <br>

        <div class=" mb-1">
            <div class="col-sm-2 col-sm-offset-10">
              <label class="checkbox-inline">
                  <input type="checkbox" name="kronis" id="kronis">
                  <b class="text-danger">KRONIS</b>
              </label>
          </div>

        </div>

        <br>

        <div id="table-resep_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4 no-footer"><div class="top"></div>
        <table id="table-resep" class="table table-bordered dataTable no-footer" style="height: 200px" role="grid">
            <thead>
              <tr role="row"><th class="sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Nama Obat: activate to sort column ascending">Nama Obat</th><th class="table-cell-edit sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Jumlah: activate to sort column ascending">Jumlah</th><th class="table-cell-edit sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Dosis: activate to sort column ascending">Dosis</th><th class="sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label="Satuan: activate to sort column ascending">Satuan</th><th class="sorting" tabindex="0" aria-controls="table-resep" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th></tr>
            </thead>
            <tbody>
               @foreach ($obatTable??[] as $item)
                <tr>
                    <td>{{ $item['item_cd'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['data_nm'] }}</td>
                    <td>{{ $item['info_01'] }}</td>
                    <td><button class="btn btn-danger"><span class="fas fa-trash"></span></button></td>
                </tr>
               @endforeach
            </tbody>
        </table>
            <div class="bottom"></div>
            <div class="clear"></div>
</div>
      <div class="pull-right">

          <button type="submit" class="btn btn-primary btn-sm btn-flat btn-simpan"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </div>
</div>
<livewire:component.modal-obat>
</div>
