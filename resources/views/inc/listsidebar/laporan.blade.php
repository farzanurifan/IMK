@if($indicator == 'kartu-barang' || $indicator == 'lap-stok' || $indicator == 'permintaan-bidang' || $indicator == 'kartu-persediaan' || $indicator == 'rincian-barang-masuk' || $indicator == 'rincian-barang-keluar' || $indicator == 'berita-acara-stok' || $indicator == 'rekap-barang-setahun' || $indicator == 'laporan-barang-kadaluarsa' || $indicator == 'data-barang-lokasi')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">assignment</i>
        <span>Laporan</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'kartu-barang')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/kartu-barang">Kartu Barang(Lampiran 12)</a>
        </li>
        @if($indicator == 'lap-stok')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/lap-stok">Lap. Penerimaan, Penyaluran & Stok</a>
        </li>
        @if($indicator == 'permintaan-bidang')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/permintaan-bidang">Permintaan per Bidang</a>
        </li>
        @if($indicator == 'kartu-persediaan')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/kartu-persediaan">Kartu Persediaan Barang</a>
        </li>
        @if($indicator == 'rincian-barang-masuk')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/rincian-barang-masuk">Rincian Barang Masuk</a>
        </li>
        @if($indicator == 'rincian-barang-keluar')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/rincian-barang-keluar">Rincian Barang Keluar</a>
        </li>
        @if($indicator == 'berita-acara-stok')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/berita-acara-stok">Berita Acara Stok Opname</a>
        </li>
        @if($indicator == 'rekap-barang-setahun')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/rekap-barang-setahun">Rekap Barang (Setahun)</a>
        </li>
        @if($indicator == 'laporan-barang-kadaluarsa')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/laporan-barang-kadaluarsa">Laporan Barang Kadaluarsa</a>
        </li>
        @if($indicator == 'data-barang-lokasi')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/laporan/data-barang-lokasi">Data Barang per Lokasi</a>
        </li>
    </ul>
</li>
