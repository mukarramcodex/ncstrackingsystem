<nav class="sidebar-menu p-4">
            <ul class="space-y-2">
                <li>
                    <a href="#" @click.prevent="activePage = 'dashboard'" class="flex items-center p-2 rounded hover:bg-blue-700 hover:text-white active:bg-gray-500">
                        <i class="ri-dashboard-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activePage = 'parcels'" class="flex items-center p-2 rounded hover:bg-blue-700 hover:text-white active:bg-gray-500">
                        <i class="ri-box-3-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Parcels</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activePage = 'reports'" class="flex items-center p-2 rounded hover:text-white hover:bg-blue-700">
                        <i class="ri-file-chart-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activePage = 'users'" class="flex items-center p-2 rounded hover:text-white hover:bg-blue-700 ">
                        <i class="ri-user-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" @click.prevent="activePage = 'branches'" class="flex items-center p-2 rounded hover:text-white hover:bg-blue-700 ">
                        <i class="ri-home-4-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Branches</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded hover:text-white hover:bg-blue-700">
                        <i class="ri-route-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Tracking Logs</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded hover:text-white hover:bg-blue-700">
                        <i class="ri-bar-chart-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 rounded hover:text-white hover:bg-blue-700">
                        <i class="ri-settings-2-line w-5 h-5 mr-3"></i>
                        <span x-show="sidebarOpen" class="transition-all duration-200">Settings</span>
                    </a>
                </li>
                <li class="mt-8">
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="flex items-center justify-between w-full p-2 rounded hover:text-white hover:bg-blue-700">
                            <div class="flex items-center">
                                <i class="ri-user-settings-line w-5 h-5 mr-3"></i>
                                <span x-show="sidebarOpen" class="transition-all duration-200">Profile</span>
                            </div>
                            <svg class="w-4 h-4 transition-transform duration-200 transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false" class="mt-2 ml-8 space-y-2">
                            <a href="{{ route('profile.edit') }}" class="block p-2 rounded hover:text-white hover:bg-blue-700">
                                <i class="ri-edit-box-line w-5 h-5 mr-3"></i>
                                <span x-show="sidebarOpen" class="transition-all duration-200">Edit</span>
                                </a>
                            <a href="/logout" class="block p-2 rounded hover:text-white hover:bg-blue-700">
                                <i class="ri-logout-circle-line w-5 h-5 mr-3"></i>
                                <span x-show="sidebarOpen" class="transition-all duration-200">Logout</span>
                                </a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
