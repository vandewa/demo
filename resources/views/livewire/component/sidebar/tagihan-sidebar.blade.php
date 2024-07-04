<div>
    @if($data)
    <li class="nav-item">
        <a href="{{ route('pendaftaran.list-tagihan') }}"
            class="nav-link  {{ Request::segment(2) == 'list-tagihan' ? 'active' : '' }}">
            <i class="nav-icon fa-solid fa-file-circle-check"></i>
            <p>
                Tagihan   <span class="badge bg-danger">{{ $jumlah }}</span>

            </p>
        </a>
    </li>
    @endif
</div>
