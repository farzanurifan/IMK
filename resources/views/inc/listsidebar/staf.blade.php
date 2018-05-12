@if($indicator == 'bidang' || $indicator == 'seksi' || $indicator == 'staff' || $indicator == 'namabidang' || $indicator == 'namaseksi')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">group</i>
        <span>Staf</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'bidang')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/bidang">Data Bidang</a>
        </li>
        @if($indicator == 'seksi')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/seksi">Data Seksi</a>
        </li>
        @if($indicator == 'staff')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/staff">Data Staf</a>
        </li>
       <!--  @if($indicator == 'namabidang')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/namabidang">Kategori Bidang</a>
        </li>
        @if($indicator == 'namaseksi')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/namaseksi">Kategori Seksi</a>
        </li> -->
    </ul>
</li>
