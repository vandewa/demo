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
                                            <label for="" class="col-sm-3 col-form-label">Poliklinik</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.medunit_cd">
                                                    <option value="">-- Pilih Poliklinik --</option>
                                                    @foreach ($poli ?? [] as $item)
                                                        <option value="{{ $item['medunit_cd'] }}">
                                                            {{ $item['medunit_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.medunit_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Hari</label>
                                            <div class="col-md-9">
                                                <select class="form-control" wire:model="form.day_tp">
                                                    <option value="">-- Pilih Hari --</option>
                                                    @foreach ($hari ?? [] as $item)
                                                        <option value="{{ $item['com_cd'] }}">
                                                            {{ $item['code_nm'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('form.day_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Jam Mulai</label>
                                            <div class="col-md-9">
                                                <input type="time" class="form-control" wire:model='form.time_start'>
                                                @error('form.time_start')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Jam Selesai</label>
                                            <div class="col-md-9">
                                                <input type="time" class="form-control" wire:model='form.time_end'>
                                                @error('form.time_end')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-md-9">
                                                <textarea rows="2" class="form-control" wire:model='form.note'></textarea>
                                                @error('form.note')
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
