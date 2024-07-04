<div class="p-0 pt-1 card-header">
    <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
        <li class="nav-item {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'data-transaksi' ? 'active' : '' }}"
                id="custom-tabs-one-transaksi-tab" href="{{ route('pendaftaran.sekolah') }}" wire:navigate>Sekolah</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'rekam-medis' ? 'active' : '' }}" id="custom-tabs-one-rm-tab"
                href="{{ route('pendaftaran.data-keluarga') }}" wire:navigate>Kursus</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab" href="{{ route('pendaftaran.data-pribadi') }}" wire:navigate>Pengalaman Kerja</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab" href="#" wire:navigate>Pengalaman Di Luar Negeri</a>
        </li>
        <li class="nav-item {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(3) == 'tindakan-medis' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab" href="{{ route('pendaftaran.data-pribadi') }}" wire:navigate>Pengalaman Berorganisasi</a>
        </li>
    </ul>
</div>
