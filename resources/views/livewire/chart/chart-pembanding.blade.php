<div>
    <div class="card">
        <div class="card-body">
            <div class="row">

                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="" class="col-md-3">Tahun</label>
                            <div class="col-md-9">
                                <select name="" id="" class="form-control" wire:model.live='tahun'>
                                    @foreach ($listTahun as $item)
                                        <option value="{{ $item->tahun }}">{{ $item->tahun }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="" class="col-md-3">Group</label>
                            <div class="col-md-9">
                                <select name="" id="" class="form-control" wire:model.live='group'>
                                    @foreach ($listGroup as $item)
                                        <option value="{{ $item->group_code }}">{{ $item->group_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <select name="" id="" class="form-control" wire:model.live='name'>
                                    @foreach ($listName as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>


                <div class="col-md-12" style="height: 70vh">
                    <livewire:livewire-column-chart
                    key="{{ $columnChartModel->reactiveKey() }}"
                    :column-chart-model="$columnChartModel"
                />
                </div>
            </div>
        </div>
    </div>

    {{-- Success is as dangerous as failure. --}}
</div>
