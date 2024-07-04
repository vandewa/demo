<div>
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Register Siswa</h3>
            <div class="card-tool">
                <input type="number" class="form-control" wire:model.live='tahun'>
            </div>

          </div>
        </div>
        <div class="card-body">



          <div class="col-md-12" style="height: 55vh">
            <livewire:livewire-column-chart
            key="{{ $columnChartModel->reactiveKey() }}"
            :column-chart-model="$columnChartModel"/>
          </div>

        </div>
      </div>

</div>
