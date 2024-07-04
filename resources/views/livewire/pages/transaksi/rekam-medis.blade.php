<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit='save'>
                            @if ($edit)
                                <input type="hidden" value="{{ $form['seq_no'] }}" wire:model="form.seq_no">
                            @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Anamnesa</label>
                                            <div class="col-md-9">
                                                <textarea wire:model="form.anamnesa" class="form-control" rows="2"></textarea>
                                                @error('form.anamnesa')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Pencarian ICD</label>
                                            <div class="col-md-9">
                                                <div class="input-group ">
                                                    <p class="form-control">{{ $icd->icd_nm ?? '' }}</p>
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-info btn-flat"
                                                            wire:click="$dispatch('show-modal-diagnosa')">Cari</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Diagnosa</label>
                                            <div class="col-md-9">
                                                <textarea wire:model="form.medical_data" class="form-control" rows="2"></textarea>
                                                @error('form.medical_data')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis Diagnosa</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.rm_tp">
                                                    @foreach ($diagnosa ?? [] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.rm_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" value="{{ now() }}"
                                                    wire:model='form.datetime_record'>
                                                @error('form.datetime_record')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Dokter</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.dr_cd">
                                                    <option value="">-- Pilih Dokter --</option>
                                                    @foreach ($dokter ?? [] as $item)
                                                        <option value="{{ $item['dr_cd'] }}">{{ $item['dr_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.dr_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Jenis Kasus</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.case_tp">
                                                    <option value="">-- Pilih Jenis Diagnosa --</option>
                                                    @foreach ($kasus ?? [] as $item)
                                                        <option value="{{ $item['com_cd'] }}">Kasus
                                                            {{ $item['code_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.case_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Pemeriksaan
                                                Fisik</label>
                                            <div class="col-md-9">
                                                <textarea wire:model="form.pemeriksaan_fisik" class="form-control" rows="2"></textarea>
                                                @error('form.pemeriksaan_fisik')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Pemeriksaan
                                                Penunjang</label>
                                            <div class="col-md-9">
                                                <textarea wire:model="form.pemeriksaan_penunjang" class="form-control" rows="2"></textarea>
                                                @error('form.pemeriksaan_penunjang')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Catatan</label>
                                            <div class="col-md-9">
                                                <textarea rows="2" class="form-control" wire:model='form.medical_note'></textarea>
                                                @error('form.medical_note')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{ route('master.jadwal-praktek.index') }}"
                                    class="btn btn-default float-right">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
