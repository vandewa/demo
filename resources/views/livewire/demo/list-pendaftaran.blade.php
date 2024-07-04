<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Diri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Diri</a></li>
                    <li class="breadcrumb-item active">Data Diri</li>
                </ol>
            </div>
        </div>
    </x-slot>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-dark card-tabs">
                        <livewire:component.link-transaksi />
                        <div class="card-body">
                            {{-- <livewire:component.data-transaksi.data-transaksi :medicalcd="$medik->medical_cd" :pasiencd="$medik->pasien_cd" /> --}}
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
