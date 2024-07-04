<div>
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item active">Monitoring</li> --}}
                </ol>
            </div>
        </div>
    </x-slot>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
                <livewire:demo.component.jumlah-register-bulanan>
            </div>
            <div class="col-lg-6">
                <livewire:demo.component.jumlah-berdasarkan-tahapan>
            </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
</div>
