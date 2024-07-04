<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-success card-outline">
                        <form class="form-horizontal mt-2" wire:submit="save">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">No.
                                                RM</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model="form.no_rm" readonly>
                                                @error('form.no_rm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">Nama
                                                Pasien</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model="form.pasien_nm">
                                                @error('form.pasien_nm')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control"
                                                    wire:model.live="form.birth_date">
                                                @error('form.birth_date')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Umur</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model="form.age" readonly>
                                                @error('age')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">Jenis
                                                Kelamin</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.gender_tp">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    @foreach ($jk as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>

                                                @error('form.gender_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="2" wire.model="form.address" id="alamat"></textarea>
                                                @error('form.address')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">Cari
                                                Kelurahan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model="form.cari_kelurahan">
                                                @error('cari_kelurahan')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Provinsi</label>
                                            <div class="col-sm-9">
                                               <select name="" id="" class="form-control" wire:model.live='form.region_prop'>
                                                    <option value="">Pilih Provinsi</option>
                                                @foreach ($prop as $item )
                                                    <option value="{{ $item['region_cd'] }}">{{ $item['region_nm'] }}</option>
                                                @endforeach
                                               </select>
                                                @error('form.region_prop')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Kabupaten</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model.live='form.region_kab'>
                                                    <option value="">Pilih Kabupaten</option>
                                                @foreach ($kab??[] as $item )
                                                    <option value="{{ $item['region_cd'] }}">{{ $item['region_nm'] }}</option>
                                                @endforeach
                                               </select>
                                                @error('form.region_kab')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Kecamatan</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model.live='form.region_kec'>
                                                    <option value="">Pilih Kecamatan</option>
                                                @foreach ($kec??[] as $item )
                                                    <option value="{{ $item['region_cd'] }}">{{ $item['region_nm'] }}</option>
                                                @endforeach
                                               </select>
                                                @error('form.region_kec')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Kelurahan</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model.live='form.region_kel'>
                                                    <option value="">Pilih Keliurahan</option>
                                                @foreach ($kel??[] as $item )
                                                    <option value="{{ $item['region_cd'] }}">{{ $item['region_nm'] }}</option>
                                                @endforeach
                                               </select>
                                                @error('form.region_kel')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" wire:model="form.phone">
                                                @error('form.phone')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">HP</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" wire:model="form.mobile1">
                                                @error('form.mobile1')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Tipe
                                                Pasien</label>
                                            <div class="col-sm-9">
                                                <select name="" wire:model.live='form.pasien_tp' id="" class="form-control">
                                                    <option value="">Pilih Jenis Pasien</option>
                                                    @foreach ($tppasien??[] as $item )
                                                    <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.pasien_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Jenis Jaminan</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model.live='insurance.insurance_tp'  @if($form['pasien_tp'] != 'PASIEN_TP_02')disabled @endif>
                                                    <option value="">Pilih Jaminan</option>
                                                    @foreach ($tpjaminan??[] as $item)
                                                        <option value="{{ $item['insurance_cd']}}">{{ $item['insurance_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('insurance.insurance_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">No Peserta</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model.live="insurance.insurance_no" @if($form['pasien_tp'] != 'PASIEN_TP_02')disabled @endif>
                                                @error('insurance.insurance_no')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Status</label>
                                            <div class="col-sm-9">

                                                <select name="" id="" class="form-control" wire:model="form.marital_tp">
                                                    <option value="">Pilih Status</option>
                                                    @foreach ($status??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.marital_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Pendidikan</label>
                                            <div class="col-sm-9">
                                                    <select name="" id="" class="form-control" wire:model="form.education_cd">
                                                        <option value="">Pilih Pendidikan</option>
                                                        @foreach ($pendidikan??[] as $item)
                                                            <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                        @endforeach
                                                    </select>
                                                @error('form.education_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Pekerjaan</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.occupation_cd">
                                                    <option value="">Pilih Pendidikan</option>
                                                    @foreach ($pekerjaan??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>

                                                @error('form.occupation_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Suku</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.race_cd">
                                                    <option value="">Pilih Suku</option>
                                                    @foreach ($suku??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.race_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Agama</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.religion_cd">
                                                    <option value="">Pilih Agama</option>
                                                    @foreach ($agama??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.religion_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Identitas</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.identity_tp">
                                                    <option value="">Pilih Jenis Identitas</option>
                                                    @foreach ($tipeIdentitas??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('form.identity_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label empatbelas">No.
                                                Identitas</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model="form.identity_no">
                                                @error('form.identity_no')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Warga Negara</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.nation_cd">
                                                    <option value="">Pilih Negara</option>
                                                    @foreach ($negara??[] as $item)
                                                        <option value="{{ $item['nation_cd'] }}">{{ $item['nation_nm'] }}</option>
                                                    @endforeach
                                                </select>

                                                @error('form.nation_cd')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Gol.
                                                Darah</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.blood_tp">
                                                    <option value="">Pilih Golongan Darah</option>
                                                    @foreach ($goldarah??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>

                                                @error('form.blood_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Berat</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model="form.weight">
                                                @error('form.weight')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Tinggi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model="form.height">
                                                @error('form.height')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" wire:model="form.email">
                                                @error('form.email')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Kode
                                                Pos</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model="form.postcode">
                                                @error('form.postcode')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Nama
                                                Ayah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model="form.dad_name">
                                                @error('form.dad_name')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Nama
                                                Ibu</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model="form.mom_name">
                                                @error('form.mom_name')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label empatbelas">Penanggung Jawab</label>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control"
                                                    wire:model="form.pj_name">
                                                @error('form.pj_name')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputEmail3"
                                                class="col-sm-3 col-form-label empatbelas">Hubungan</label>
                                            <div class="col-sm-9">
                                                <select name="" id="" class="form-control" wire:model="form.pj_tp">
                                                    <option value="">Jenis Hubunngan Keluarga</option>
                                                    @foreach ($family??[] as $item)
                                                        <option value="{{ $item['com_cd'] }}">{{ $item['code_nm'] }}</option>
                                                    @endforeach
                                                </select>

                                                @error('form.pj_tp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Alamat</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="2" wire.model="form.pj_address" id="alamat_keluarga"></textarea>
                                                @error('form.pj_address')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control"
                                                    wire:model="form.pj_telp">
                                                @error('form.pj_telp')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row margin-bawah">
                                            <label for="inputPassword3"
                                                class="col-sm-3 col-form-label empatbelas">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control"
                                                    wire:model="form.pj_date_birth">
                                                @error('form.pj_date_birth')
                                                    <span class="form-text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a  href="{{ route('pasien.index') }}" wire:navigate class="btn btn-default float-right">Batalkan</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.card-header -->
                        <!-- form start -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>

</div>

@push('css')
    <style>
        .margin-bawah {
            margin-bottom: 0.5rem;
        }

        .empatbelas {
            font-size: 14px;
        }
    </style>
@endpush
