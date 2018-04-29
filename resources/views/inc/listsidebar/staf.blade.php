@if($indicator == 'bidang' || $indicator == 'seksi' || $indicator == 'staff')
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
            <a href="/staf/bidang">Bidang</a>
        </li>
        @if($indicator == 'seksi')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/seksi">Seksi</a>
        </li>
        @if($indicator == 'staff')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/staf/staff">Staff</a>
        </li>
    </ul>
</li>
