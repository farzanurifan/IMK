@if($indicator == 'databarang' || $indicator == 'kategori' || $indicator == 'masuk' || $indicator == 'keluar' || $indicator == 'lokasi')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">widgets</i>
        <span>Barang</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'databarang')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/databarang">Data Barang</a>
        </li>
        @if($indicator == 'masuk')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/masuk">Data Barang Masuk</a>
        </li>
        @if($indicator == 'keluar')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/keluar">Data Barang Keluar</a>
        </li>
        @if($indicator == 'kategori')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/kategori">Kategori Barang</a>
        </li>
        {{-- @if($indicator == 'lokasi')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/barang/lokasi">Lokasi Barang</a>
        </li> --}}
    </ul>
</li>
