<div class="modal fade show" id="modal-default" @if($modal) style="display: block;" @else style="display: none;" @endif>
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Pasien</h4>
          <button type="button" wire:click='showModal' class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="text" id="search-pasien" class="form-control" wire:model.live='search' autofocus>
            <table class="table">
                <thead>
                    <th>No RM</th>
                    <th>Nama Pasien</th>
                    <th>Tgl Lahir</th>
                    <th>Alamat</th>

                    <th>No Identitas</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                    <tr>
                        <td>{{ $item->no_rm }}</td>
                        <td>{{ $item->pasien_nm }}</td>
                        <td>{{ $item->birth_date }}
                            @php
                                  $date = new \DateTime($item->birth_date);
                                    $now = new \DateTime();
                                    $interval = $now->diff($date);

                            @endphp
                            ({{ $interval->y }}) Th</td>
                        <td>
                            {{ $item->provinsi->region_nm }}, {{ $item->kabupaten->region_nm??"" }}, {{ $item->kecamatan->region_nm??"" }}, {{ $item->kelurahan->region_nm ??""}}
                            {{ $item->address }}
                        </td>

                        <td>{{ $item->identity_no??"-" }}</td>
                        <td>
                            <button type="button" wire:click='pilih({{ $item->pasien_cd }})' class="btn btn-warning btn-flat btn-sm" data-toggle="tooltip"
                            data-placement="left" title="Pilih Pasien"><i
                                class="fas fa-plus"></i>
                            </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal" wire:click='showModal'>Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
