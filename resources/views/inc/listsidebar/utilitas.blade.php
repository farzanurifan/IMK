@if($indicator == 'id' || $indicator == 'stok' || $indicator == 'editbarangkeluar' || $indicator == 'editbarangmasuk' || $indicator == 'operasidata' || $indicator == 'stokawal')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">settings</i>
        <span>Utilitas</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'id')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/utilitas/id">ID</a>
        </li>
        {{-- @if($indicator == 'stok')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/utilitas/stok">STOK</a>
        </li> --}}
    </ul>
</li>
