@props(['default' => null])

<div x-data="{ activeTab: '{{ $default }}' }" {{ $attributes }}>
    {{ $slot }}
</div>

<!-- <div x-data="{
    activeTab: window.location.hash ? window.location.hash.substring(1) : '{{ $default }}',
    updateHash() {
        if (history.pushState) {
            history.pushState(null, null, '#' + this.activeTab);
        } else {
            window.location.hash = '#' + this.activeTab;
        }
    }
}" x-init="updateHash()" @hashchange.window="activeTab = window.location.hash.substring(1)">
    {{ $slot }}
</div> -->