<div>
    <x-slot name="header">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Upload Dokumen</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Upload Dokumen</a></li>
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
                                                <div class="col-md-6">
                                                    <div class="mb-2 row">
                                                        <label for=""
                                                            class="col-sm-3 col-form-label">KTP</label>
                                                        <div class="col-md-9">
                                                            @if ($info['ktp'] ?? '' != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $info['ktp'])) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                            <input type="file" class="form-control" wire:model="ktp"
                                                                accept="image/png, image/gif, image/jpeg">
                                                            @error('ktp')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">KK</label>
                                                        <div class="col-md-9">
                                                            @if ($info['kk'] ?? '' != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $info['kk'])) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                            <input type="file" class="form-control" wire:model="kk"
                                                                accept="image/png, image/gif, image/jpeg">
                                                            @error('kk')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">Akta
                                                            Lahir</label>
                                                        <div class="col-md-9">
                                                            @if ($info['akta'] ?? '' != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $info['akta'])) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                            <input type="file" class="form-control" wire:model="akta"
                                                                accept="image/png, image/gif, image/jpeg">
                                                            @error('akta')
                                                                <span
                                                                    class="form-text text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-2 row">
                                                        <label for="" class="col-sm-3 col-form-label">MCU
                                                            Awal</label>
                                                        <div class="col-md-9">
                                                            @if ($info['mcu'] ?? '' != null)
                                                                <img src="{{ asset('storage' . str_replace('public', '', $info['mcu'])) }}"
                                                                    style="max-width: 200px;">
                                                            @endif
                                                            <input type="file" class="form-control" wire:model="mcu"
                                                                accept="image/png, image/gif, image/jpeg">
                                                            @error('mcu')
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
                                                <button type="button" class="float-right btn btn-default"
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
