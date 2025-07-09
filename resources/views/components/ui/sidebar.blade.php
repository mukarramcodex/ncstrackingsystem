@props([
    'variant' => 'sidebar', // sidebar | floating | inset
    'collapsible' => 'offcanvas', // offcanvas | icon | none
    'side' => 'left', // left | right
])

<div 
    x-data="sidebarHandler()" 
    x-init="init()" 
    x-bind:data-state="open ? 'expanded' : 'collapsed'" 
    x-bind:data-collapsible="collapsible"
    x-bind:data-variant="variant"
    x-bind:data-side="side"
    class="group/sidebar-wrapper flex min-h-screen w-full"
>
    {{-- Desktop Sidebar --}}
    <template x-if="!isMobile">
        <div 
            :class="[
                'hidden md:block fixed inset-y-0 z-10 transition-all duration-200',
                side === 'left' ? 'left-0 border-r' : 'right-0 border-l',
                open ? 'w-64' : (collapsible === 'icon' ? 'w-12' : 'w-0'),
                variant === 'floating' ? 'rounded-lg shadow p-2' : '',
                'bg-white'
            ]"
        >
            <div class="h-full flex flex-col">
                {{ $slot }}
            </div>
        </div>
    </template>

    {{-- Mobile Sheet Sidebar --}}
    <template x-if="isMobile">
        <x-ui.sheet x-model="openMobile" :side="$side">
            <div class="h-full w-72 bg-white p-4">
                {{ $slot }}
            </div>
        </x-ui.sheet>
    </template>
</div>

<script>
function sidebarHandler() {
    return {
        open: true,
        openMobile: false,
        collapsible: '{{ $collapsible }}',
        variant: '{{ $variant }}',
        side: '{{ $side }}',
        isMobile: window.innerWidth < 768,
        init() {
            window.addEventListener('resize', () => {
                this.isMobile = window.innerWidth < 768;
            });

            // Ctrl+B to toggle
            window.addEventListener('keydown', (e) => {
                if ((e.ctrlKey || e.metaKey) && e.key === 'b') {
                    e.preventDefault();
                    this.toggleSidebar();
                }
            });
        },
        toggleSidebar() {
            if (this.isMobile) {
                this.openMobile = !this.openMobile;
            } else {
                this.open = !this.open;
                document.cookie = `sidebar_state=${this.open}; path=/; max-age=${60 * 60 * 24 * 7}`;
            }
        }
    }
}
</script>
