<!DOCTYPE html>
<html lang="en">

@include('components.site.header')

<body class="bg-white">
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
    <section id="home" class="relative min-h-screen bg-gradient-to-br from-blue-50 to-teal-50 flex items-center" style="background-image: url('{{ asset('image/hero_banner_image_1.jpg') }}'); background-size: cover; background-position: center; background-blend-mode: overlay;">
        <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="w-half">
                <div class="">
                    <h1 class="text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight text-center">
                        Track Your Parcel<br/> Anytime, Anywhere
                    </h1>
                    <p class="text-xl text-gray-900 text-bold mb-8 leading-relaxed text-center">
                        Experience reliable and fast delivery services with real-time tracking across the nation.<br/> Your packages are in safe hands with North Courier Services.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-primary mb-4">Why Choose North Courier Services</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We provide exceptional courier services with cutting-edge technology and nationwide coverage
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-secondary bg-opacity-10 rounded-full mx-auto mb-6">
                        <i class="ri-rocket-line ri-2x text-secondary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Fast Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Express delivery options with same-day and next-day delivery available. We prioritize speed without compromising safety.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-primary bg-opacity-10 rounded-full mx-auto mb-6">
                        <i class="ri-radar-line ri-2x text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Real-Time Tracking</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Advanced GPS tracking system allows you to monitor your package location and delivery status in real-time, 24/7.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow text-center">
                    <div class="w-16 h-16 flex items-center justify-center bg-green-600 bg-opacity-10 rounded-full mx-auto mb-6">
                        <i class="ri-map-2-line ri-2x text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Nationwide Coverage</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Comprehensive delivery network covering all major cities and remote areas across the country with reliable service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-primary mb-4">Trusted by Leading Companies</h2>
                <p class="text-xl text-gray-600">
                    Join thousands of satisfied customers who trust us with their deliveries
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-amazon-fill ri-lg text-gray-400"></i>
                        </div>
                        <span class="font-semibold text-gray-600">TechCorp</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-apple-fill ri-lg text-gray-400"></i>
                        </div>
                        <span class="font-semibold text-gray-600">GlobalMart</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-microsoft-fill ri-lg text-gray-400"></i>
                        </div>
                        <span class="font-semibold text-gray-600">FastBuy</span>
                    </div>
                </div>
                <div class="flex items-center justify-center p-6 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 flex items-center justify-center">
                            <i class="ri-google-fill ri-lg text-gray-400"></i>
                        </div>
                        <span class="font-semibold text-gray-600">ShopEasy</span>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-secondary">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Exceptional service! My packages always arrive on time and in perfect condition. The tracking system is incredibly accurate."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
                        <div>
                            <div class="font-semibold text-gray-800">Sarah Johnson</div>
                            <div class="text-sm text-gray-600">E-commerce Manager</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-secondary">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "NCS has been our logistics partner for 3 years. Their reliability and customer service are unmatched in the industry."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
                        <div>
                            <div class="font-semibold text-gray-800">Michael Chen</div>
                            <div class="text-sm text-gray-600">Operations Director</div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-secondary">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Fast, secure, and affordable. The real-time tracking gives me peace of mind knowing exactly where my shipments are."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
                        <div>
                            <div class="font-semibold text-gray-800">Emma Rodriguez</div>
                            <div class="text-sm text-gray-600">Small Business Owner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-primary mb-6">About North Courier Services</h2>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        Founded in 2015, North Courier Services has grown to become one of the most trusted logistics partners in the region. We combine cutting-edge technology with exceptional customer service to deliver packages safely and on time.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Our mission is to connect people and businesses through reliable delivery services, making distance irrelevant in today's connected world. With over 500,000 successful deliveries, we continue to set new standards in the courier industry.
                    </p>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">500K+</div>
                            <div class="text-sm text-gray-600">Deliveries</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">50+</div>
                            <div class="text-sm text-gray-600">Cities</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">99.8%</div>
                            <div class="text-sm text-gray-600">Success Rate</div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <img
                        src="https://readdy.ai/api/search-image?query=Professional%20courier%20team%20in%20modern%20logistics%20center%2C%20diverse%20group%20of%20delivery%20professionals%20in%20uniform%2C%20high-tech%20warehouse%20environment%20with%20packages%20and%20sorting%20systems%2C%20corporate%20photography%20style%2C%20professional%20lighting%2C%20teamwork%20and%20efficiency&width=600&height=400&seq=about001&orientation=landscape"
                        alt="NCS Team"
                        class="w-full h-80 object-cover object-top rounded-lg shadow-lg"
                    >
                </div>
            </div>
        </div>
    </section>

    <section id="bookparcel" class="py-20 bg-primary">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Ship Your Package?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Join thousands of satisfied customers who trust North Courier Services for their delivery needs. Get started today!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="" class="bg-secondary text-white px-8 py-3 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">Book a Delivery</a>
            </div>
        </div>
    </section>

    <section id="contactus" class="py-20 bg-white border-b-0 shadow">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-primary mb-6">Get In Touch</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Have questions? We're here to help with all your shipping needs
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+923312345678" class="bg-secondary text-white px-8 py-3 shadow !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap">Call us Now!</a>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-primary mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600">
                    Have questions? We're here to help with all your shipping needs
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Send us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input
                                    type="text"
                                    class="w-full px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    placeholder="John"
                                >
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input
                                    type="text"
                                    class="w-full px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    placeholder="Doe"
                                >
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input
                                type="email"
                                class="w-full px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="john.doe@example.com"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input
                                type="text"
                                class="w-full px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                placeholder="How can we help you?"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea
                                rows="4"
                                class="w-full px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent resize-none"
                                placeholder="Tell us more about your inquiry..."
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-primary text-white py-3 px-6 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap"
                        >
                            Send Message
                        </button>
                    </form>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Contact Information</h3>

                    <div class="space-y-6 mb-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-map-pin-line ri-lg text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Address</h4>
                                <p class="text-gray-600">
                                    1234 Logistics Avenue<br>
                                    Business District, NY 10001
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-phone-line ri-lg text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-mail-line ri-lg text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Email</h4>
                                <p class="text-gray-600">info@northcourier.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-time-line ri-lg text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800 mb-1">Business Hours</h4>
                                <p class="text-gray-600">
                                    Mon - Fri: 8:00 AM - 6:00 PM<br>
                                    Sat: 9:00 AM - 4:00 PM<br>
                                    Sun: Closed
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 rounded-lg h-64" style="background-image: url('https://public.readdy.ai/gen_page/map_placeholder_1280x720.png'); background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.site.footer')

    <script id="mobile-menu-script">
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

    <script id="smooth-scroll">
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
