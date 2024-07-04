<div>
    <div class="card">
        <div class="card-header border-0">
          <h3 class="card-title">Tahapan</h3>
          <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
              <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
              <i class="fas fa-bars"></i>
            </a>
          </div>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-striped table-valign-middle">
            <thead>
            <tr>
              <th>Tahapan</th>
              <th>Jumlah</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                      {{ $item->name }}

                    </td>
                    <td>
                        {{ $item->lamaran_count }}
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>
      </div>
</div>
