<x-components::form.input-group name="{{ $name }}">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-components::form.input-simple name="{{ $name }}" type="{{ $type }}" value="{{ $value }}"
        addClass="{{ $addClass }}" isReadonly="{{ $isReadonly }}" isDisabled="{{ $isDisabled }}"
        isAutoFocus="{{ $isAutoFocus }}" />
</x-components::form.input-group>
