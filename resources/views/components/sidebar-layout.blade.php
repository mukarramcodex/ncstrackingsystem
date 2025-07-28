<aside class="sidebar bg-white text-black shadow w-64 min-h-screen fixed transition-all duration-300 ease-in-out"
            :class="sidebarOpen ? 'w-64' : 'w-16'"
            >
        <div class="sidebar-header p-4 border-b border-gray-300 flex items-center">
            <div class="logo flex items-center">
                    <x-logo.ncs class="w-3 h-3 mr-2" />
                <span x-show="sidebarOpen" class="text-sm font-bold transition-all duration-200">North Courier Services</span>
            </div>
        </div>
        <div class="sidebar-menu p-2">
            <x-navigation />
        </div>
        <div class="sidebar-footer absolute bottom-0 w-full p-4 border-t border-gray-300">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img class="w-8 h-8 rounded-full mr-2" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                    <span>{{ Auth::user()->name }}</span>
                </div>
                    <button @click="sidebarOpen = !sidebarOpen" type="submit">
                        <i :class="sidebarOpen ? 'ri-menu-fold-line' : 'ri-menu-unfold-line' " class="w-15 h-15"></i>
                    </button>
            </div>
        </div>
</aside>
