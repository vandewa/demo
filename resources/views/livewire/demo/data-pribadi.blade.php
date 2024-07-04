<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pribadi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Pribadi</a></li>
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
                                    <form class="form-horizontal mt-2" wire:submit='save'>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Tinggi
                                                            Badan <small>(cm)</small></label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.tinggi" placeholder="cm">
                                                            @error('form.tinggi')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Berat
                                                            Badan <small>(kg)</small></label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.berat" placeholder="kg">
                                                            @error('form.berat')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Hobby</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.hoby" placeholder="Masukkan Hobby">
                                                            @error('form.hoby')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Macam
                                                            kegiatan olah raga yang dikuasai </label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.or_yg_dikuasai"
                                                                placeholder="Sepakbola, Voli">
                                                            @error('form.or_yg_dikuasai')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            sakit keras ?</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live='form.sakit'>
                                                                <option value="">Pilih</option>
                                                                <option value="1">Ya</option>
                                                                <option value="0">Tidak</option>
                                                            </select>
                                                            @error('form.sakit')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @if ($form['sakit'] ?? '' == 1)
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Kapan</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.sakit_kapan" placeholder="Tahun">
                                                                @error('form.sakit_kapan')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for="" class="col-sm-3 col-form-label">Sakit
                                                                Apa</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.sakit_apa" placeholder="Jelaskan">
                                                                @error('form.sakit_apa')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            mendapat kecelakaan ?</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control"
                                                                wire:model.live='form.kecelakaan'>
                                                                <option value="">Pilih</option>
                                                                <option value="1">Ya</option>
                                                                <option value="0">Tidak</option>
                                                            </select>
                                                            @error('form.kecelakaan')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @if ($form['kecelakaan'] ?? '' == 1)
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Kapan</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.kecelakaan_kapan"
                                                                    placeholder="Tahun">
                                                                @error('form.kecelakaan_kapan')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Kecelakaan
                                                                Apa</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.kecelakaan_apa"
                                                                    placeholder="Jelaskan">
                                                                @error('form.kecelakaan_apa')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Akibat
                                                                Kecelakaan
                                                            </label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.kecelakaan_akibat"
                                                                    placeholder="Jelaskan">
                                                                @error('form.kecelakaan_akibat')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            terlibat kegiatan terlarang ?</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control"
                                                                wire:model.live='form.kegiatan_terlarang'>
                                                                <option value="">Pilih</option>
                                                                <option value="1">Ya</option>
                                                                <option value="0">Tidak</option>
                                                            </select>
                                                            @error('form.kegiatan_terlarang')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">


                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            tersangkut urusan dengan pihak kepolisian ?</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control"
                                                                wire:model.live='form.polisi'>
                                                                <option value="">Pilih</option>
                                                                <option value="1">Ya</option>
                                                                <option value="0">Tidak</option>
                                                            </select>
                                                            @error('form.polisi')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @if ($form['polisi'] ?? '' == 1)
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Jelaskan</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.polisi_ket"
                                                                    placeholder="Jelaskan">
                                                                @error('form.polisi_ket')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row mb-2">
                                                        <label for="" class="col-sm-3 col-form-label">Pernah
                                                            terdaftar sebagai peserta/anggota program ASTEK ?</label>
                                                        <div class="col-md-9">
                                                            <select class="form-control" wire:model.live='form.astek'>
                                                                <option value="">Pilih</option>
                                                                <option value="1">Ya</option>
                                                                <option value="0">Tidak</option>
                                                            </select>
                                                            @error('form.astek')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @if ($form['astek'] ?? '' == 1)
                                                        <div class="row mb-2">
                                                            <label for="" class="col-sm-3 col-form-label">No.
                                                                Peserta/KPA</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.no_kpa" placeholder="Nomor">
                                                                @error('form.no_kpa')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Pernah
                                                                mengikuti Penataran P4</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.penataran"
                                                                    placeholder="Ya / Tidak">
                                                                @error('form.penataran')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Kapan</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.penataran_kapan"
                                                                    placeholder="Tahun">
                                                                @error('form.penataran_kapan')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Pola/Type</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.penataran_pola"
                                                                    placeholder="Masukkan Pola/Type">
                                                                @error('form.penataran_pola')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for=""
                                                                class="col-sm-3 col-form-label">Penyelenggara</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control"
                                                                    wire:model="form.penataran_penyelenggara"
                                                                    placeholder="Nama Penyelenggara">
                                                                @error('form.penataran_penyelenggara')
                                                                    <span
                                                                        class="form-text text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">SIM</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.sim" placeholder="Nomor SIM">
                                                            @error('form.sim')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">Kecakapan Bahasa</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control"
                                                                wire:model="form.bahasa_1"
                                                                placeholder="Contoh: Inggris (aktif), Mandarin (pasif)">
                                                            @error('form.bahasa_1')
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
                                                <button type="submit" class="btn btn-info">Simpan</button>
                                                <button type="button" class="btn btn-default float-right"
                                                    wire:click='batal'>Batal</button>
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
