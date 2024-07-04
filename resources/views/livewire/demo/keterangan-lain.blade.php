<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Keterangan Lain</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Keterangan Lain</a></li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi :idnya="$idnya">
                            <div class="card-body">
                                <div class="col-md-12">
                                    {{-- <div class="card card-success card-outline"> --}}
                                    <form class="mt-2 form-horizontal" wire:submit='save'>
                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-5 col-form-label">Tunjangan
                                                            / fasilitas yang diterima sekarang dan sumber pendapatan
                                                            yang lain</label>
                                                        <div class="col-md-7">

                                                            <input type="text" class="form-control"
                                                                wire:model="form.tunjangan_diterima"
                                                                @if ($form['status'] ?? '' == true) disabled @endif>
                                                            @error('form.tunjangan_diterima')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-5 col-form-label">Gaji dan
                                                            fasilitas / tunjangan yang diharap</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.gaji_diharap"
                                                                @if ($form['status'] ?? '' == true) disabled @endif>
                                                            @error('form.gaji_diharap')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-5 col-form-label">Bersedia
                                                            ditempatkan dimana saja di seluruh wilayah operasi
                                                            perusahaan</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control"
                                                                wire:model.live="form.bersedia_ditempatkan"
                                                                @if ($form['status'] ?? '' == true) disabled @endif>
                                                                <option value="">
                                                                    -- Pilih --
                                                                </option>
                                                                <option value="1">
                                                                    Ya
                                                                </option>
                                                                <option value="0">
                                                                    Tidak
                                                                </option>
                                                            </select>
                                                            @error('form.bersedia_ditempatkan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-5 col-form-label">Bersedia
                                                            mematuhi segala peraturan perusahaan yang berlaku maupun
                                                            yang akan dikeluarkan oleh perusahaan </label>
                                                        <div class="col-md-7">
                                                            <select class="form-control"
                                                                wire:model.live="form.mematuhi_peraturan"
                                                                @if ($form['status'] ?? '' == true) disabled @endif>
                                                                <option value="">
                                                                    -- Pilih --
                                                                </option>
                                                                <option value="1">
                                                                    Ya
                                                                </option>
                                                                <option value="0">
                                                                    Tidak
                                                                </option>
                                                            </select>
                                                            @error('form.mematuhi_peraturan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-5 col-form-label">Keterangan
                                                            lain yang ingin
                                                            Saudara kemukakan</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.keterangan_lain"
                                                                @if ($form['status'] ?? '' == true) disabled @endif>
                                                            @error('form.keterangan_lain')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        @if (!auth()->user()->hasRole('superadministrator'))
                                            <div class="card-footer">
                                                @if ($form['status'] ?? '' == true)
                                                @else
                                                    <button type="submit" class="btn btn-info">Simpan</button>
                                                @endif
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </section>
</div>
