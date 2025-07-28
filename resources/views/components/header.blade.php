<header class="flex-1 flex flex-col overflow-hidden ml-96">
    <div class="px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <div class="flex-1">
                        @if($showSearch ?? true)
                            <div class="relative hidden md:block max-w-md">
                                <svg class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <input type="search" placeholder="Search..." class="pl-8 sm:w-[300px] md:w-[200px] lg:w-[300px] bg-background border rounded-md px-3 py-2 text-sm">
                            </div>
                        @endif
                    </div>
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-notification-line text-gray-600 ri-lg"></i>
                    </div>
                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></div>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                        <i class="ri-user-line text-white"></i>
                    </div>
                    <span class="hidden md:block text-sm text-black font-medium">{{ Auth::user()->name }}</span>
                </div>
                <button class="md:hidden w-8 h-8 flex items-center justify-center">
                    <i class="ri-menu-line text-gray-600"></i>
                </button>
            </div>
        </div>
    </div>
</header>
