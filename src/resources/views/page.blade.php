<x-components::template>
    <x-slot name="bodyClass">
        {{ $bodyClass }}
    </x-slot>

    <x-slot name="body">
        <div class="wrapper">
            <x-components::part.navbar />

            <x-components::part.sidebar />

            <div class="content-wrapper">
                @isset($pageHeader)
                    <div class="content-header">
                        <div class="container-fluid">
                            <h1>{{ $pageHeader }}</h1>
                        </div>
                    </div>
                @endisset

                <div class="content {{ isset($pageHeader) ? '' : 'pt-3' }}">
                    <div class="container-fluid">

                        <x-components::part.alert />

                        {{ isset($modal) ? $modal : '' }}

                        {{ $slot }}
                    </div>
                </div>
            </div>

            <x-components::part.footer />
        </div>
    </x-slot>

</x-components::template>
