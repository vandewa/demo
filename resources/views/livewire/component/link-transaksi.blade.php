<div class="p-0 pt-1 card-header">
    <ul class="nav nav-tabs" id="custom-tabs-one-transaksi-tab" role="tablist">
        <li class="nav-item {{ Request::segment(2) == 'data-diri' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'data-diri' ? 'active' : '' }}"
                id="custom-tabs-one-transaksi-tab" href="{{ route('pendaftaran.data-diri', $idnya) }}" wire:navigate>
                Data Diri
            </a>
        </li>
        @if($ceklunas)
        <li
            class="nav-item
            {{ Request::segment(2) == 'data-keluarga' ? 'active' : '' }}
            {{ Request::segment(2) == 'suami-istri' ? 'active' : '' }}
            {{ Request::segment(2) == 'anak' ? 'active' : '' }}
            {{ Request::segment(2) == 'orangtua' ? 'active' : '' }}
            {{ Request::segment(2) == 'saudara' ? 'active' : '' }}
            {{ Request::segment(2) == 'kenalan' ? 'active' : '' }}
            ">
            <a class="nav-link
            {{ Request::segment(2) == 'data-keluarga' ? 'active' : '' }}
            {{ Request::segment(2) == 'suami-istri' ? 'active' : '' }}
            {{ Request::segment(2) == 'anak' ? 'active' : '' }}
            {{ Request::segment(2) == 'orangtua' ? 'active' : '' }}
            {{ Request::segment(2) == 'saudara' ? 'active' : '' }}
            {{ Request::segment(2) == 'kenalan' ? 'active' : '' }}
            "
                id="custom-tabs-one-rm-tab" href="{{ route('pendaftaran.data-keluarga', $idnya) }}" wire:navigate>Data
                Keluarga</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'data-pribadi' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'data-pribadi' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab" href="{{ route('pendaftaran.data-pribadi', $idnya) }}"
                wire:navigate>Data
                Pribadi</a>
        </li>
        <li
            class="nav-item
            {{ Request::segment(2) == 'riwayat-hidup' ? 'active' : '' }}
            {{ Request::segment(2) == 'sekolah' ? 'active' : '' }}
            {{ Request::segment(2) == 'kursus' ? 'active' : '' }}
            {{ Request::segment(2) == 'pengalaman-kerja' ? 'active' : '' }}
            {{ Request::segment(2) == 'pengalaman-luar-negeri' ? 'active' : '' }}
            {{ Request::segment(2) == 'pengalaman-berorganisasi' ? 'active' : '' }}
            {{ Request::segment(2) == 'referensi' ? 'active' : '' }}
        ">
            <a class="nav-link
            {{ Request::segment(2) == 'riwayat-hidup' ? 'active' : '' }}
            {{ Request::segment(2) == 'sekolah' ? 'active' : '' }}
            {{ Request::segment(2) == 'kursus' ? 'active' : '' }}
            {{ Request::segment(2) == 'pengalaman-kerja' ? 'active' : '' }}
            {{ Request::segment(2) == 'pengalaman-luar-negeri' ? 'active' : '' }}
            {{ Request::segment(2) == 'pengalaman-berorganisasi' ? 'active' : '' }}
            {{ Request::segment(2) == 'referensi' ? 'active' : '' }}

            "
                id="custom-tabs-one-tindakan-tab" href="{{ route('pendaftaran.riwayat-hidup', $idnya) }}"
                wire:navigate>Riwayat
                Hidup</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'dokumen' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'dokumen' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab" href="{{ route('pendaftaran.dokumen', $idnya) }}"
                wire:navigate>Upload
                Dokumen</a>
        </li>
        <li class="nav-item {{ Request::segment(2) == 'keterangan-lain' ? 'active' : '' }}">
            <a class="nav-link {{ Request::segment(2) == 'keterangan-lain' ? 'active' : '' }}"
                id="custom-tabs-one-tindakan-tab" href="{{ route('pendaftaran.keterangan-lain', $idnya) }}"
                wire:navigate>Keterangan Lain</a>
        </li>
        @endif
    </ul>
</div>
