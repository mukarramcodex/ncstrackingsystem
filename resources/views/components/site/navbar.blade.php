<nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-evenly h-16">
                <div class="flex items-center">
                    <div class="font-['Pacifico'] text-2xl text-primary font-bold">NCS</div>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#track" class="text-gray-700 hover:text-primary transition-colors">Track</a>
                    <a href="#about" class="text-gray-700 hover:text-primary transition-colors">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                    <a href="#bookparcel" class="text-gray-700 hover:text-primary transition-colors">Book a Parcel</a>
                </div>

                <div class="hidden md:flex items-center">
                    <a href="{{ route('login') }}" class="bg-secondary text-white px-6 py-2 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
                        Login
                    </a>
                </div>

                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="w-8 h-8 flex items-center justify-center text-gray-700">
                        <i class="ri-menu-line ri-lg"></i>
                    </button>
                </div>
            </div>

            <div id="mobile-menu" class="md:hidden hidden pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="#track" class="text-gray-700 hover:text-primary transition-colors">Track</a>
                    <a href="#about" class="text-gray-700 hover:text-primary transition-colors">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                    <a href="#bookparcel" class="text-gray-700 hover:text-primary transition-colors">Book a Parcel</a>
                    <a href="{{ route('login') }}" class="bg-secondary text-white px-6 py-2 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>
