<div class="modal fade show" id="modal-default"
    @if ($modal) style="display: block;" @else style="display: none;" @endif>
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal mt-2" wire:submit='save'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pilih Pemasukan / Pengeluaran</h4>
                    <button type="button" wire:click='closeModal' class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Jenis</label>
                                <div class="col-md-9">
                                    <select class="form-control" wire:model='form.pengeluaran_tp'>
                                        <option value="">-- Pilih
                                            --</option>

                                        @foreach ($jenis ?? [] as $item)
                                            <option value="{{ $item->com_cd }}">
                                                {{ $item->code_nm }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Tanggal
                                </label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" wire:model="form.tanggal_transaksi">
                                    @error('form.tanggal_transaksi')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" wire:model="form.name">
                                    @error('form.name')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label">Nominal
                                    {{ $form['nominal'] }}</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" wire:model.live="form.nominal">
                                    @error('form.nominal')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        wire:click='closeModal'>Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
