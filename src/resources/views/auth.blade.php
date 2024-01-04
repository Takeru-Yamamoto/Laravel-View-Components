<x-components::template>
    <x-slot name="bodyClass">
        {{ $bodyClass }}
    </x-slot>

    <x-slot name="body">
        <div class="login-box">
            <div class="login-logo d-flex justify-content-center align-items-center">
                @if (!empty($configIconPath()))
                    <img src="{{ $configIconPath() }}" alt="{{ $configSiteName() }}" height="50">
                @endif

                <span>{{ $configSiteName() }}</span>
            </div>

            <x-components::part.alert />

            <div class="card card-outline card-primary">
                {{ $slot }}
            </div>
        </div>
    </x-slot>
</x-components::template>
