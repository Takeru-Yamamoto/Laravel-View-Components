@if ($isUserCan())
    @if ($hasChildren())
        <x-components::part.sidebar.tree :page="$page" />
    @else
        <x-components::part.sidebar.link :page="$page" />
    @endif
@endif
