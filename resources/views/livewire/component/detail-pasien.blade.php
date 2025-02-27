 {{-- DETAIL PASIEN --}}
 <div class="detail-pasien mb-4">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group row margin-bawah">
                <label class="col-sm-5 control-label pasien">Nama Pasien</label>
                <label class="col-sm-1 control-label pasien">:</label>
                <div class="col-sm-6">
                    <label for="pasien_nm" class="control-label pasien">{{ $item->pasien->pasien_nm }}</label>
                </div>
            </div>
            <div class="form-group row margin-bawah">
                <label class="col-sm-5 control-label pasien">Jenis Rawat</label>
                <label class="col-sm-1 control-label pasien">:</label>
                <div class="col-sm-6">
                    <label for="pasien_nm" class="control-label pasien">{{ $item->jenisRawat->code_nm }}</label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row margin-bawah">
                <label class="col-sm-5 control-label pasien">No RM</label>
                <label class="col-sm-1 control-label pasien">:</label>
                <div class="col-sm-6">
                    <label for="pasien_nm" class="control-label pasien">{{ $item->pasien->no_rm }}</label>
                </div>
            </div>
            <div class="form-group row margin-bawah">
                <label class="col-sm-5 control-label pasien">Unit</label>
                <label class="col-sm-1 control-label pasien">:</label>
                <div class="col-sm-6">
                    <label for="pasien_nm" class="control-label pasien">{{ $item->poli->medunit_nm }}</label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row margin-bawah">
                <label class="col-sm-5 control-label pasien">Usia</label>
                <label class="col-sm-1 control-label pasien">:</label>
                <div class="col-sm-6">
                    <label for="pasien_nm" class="control-label pasien">{{ hitung_umur($item->pasien->birth_date) }}</label>
                </div>
            </div>
            <div class="form-group row margin-bawah">
                <label class="col-sm-5 control-label pasien">Unit</label>
                <label class="col-sm-1 control-label pasien">:</label>
                <div class="col-sm-6">
                    <label for="pasien_nm" class="control-label pasien">{{ $item->dokter->dr_nm }}</label>
                </div>
            </div>
        </div>
    </div>
</div>
