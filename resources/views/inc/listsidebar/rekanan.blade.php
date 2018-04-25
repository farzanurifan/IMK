@if($indicator == 'supplier')
    <li class="active">
@else
    <li>
@endif
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">people_outline</i>
        <span>Rekanan</span>
    </a>
    <ul class="ml-menu">
        @if($indicator == 'supplier')
            <li class="active">
        @else
            <li>
        @endif
            <a href="/rekanan/supplier">Supplier</a>
        </li>
    </ul>
</li>
