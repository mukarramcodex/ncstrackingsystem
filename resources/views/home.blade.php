<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>North Courier Services - Track Your Parcel Anytime, Anywhere</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }
    </style>

</head>
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
    <section id="home" class="relative min-h-screen flex items-center" style="background-image: url('https://readdy.ai/api/search-image?query=Modern%20logistics%20warehouse%20with%20delivery%20trucks%20and%20packages%2C%20professional%20courier%20service%20environment%20with%20clean%20white%20and%20blue%20color%20scheme%2C%20left%20side%20white%20space%20for%20text%20overlay%2C%20right%20side%20showing%20organized%20shipping%20operations%2C%20high-tech%20tracking%20systems%2C%20professional%20lighting%2C%20corporate%20photography%20style&width=1920&height=1080&seq=hero001&orientation=landscape'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-white bg-opacity-20"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="w-full">
                <div class="max-w-2xl">
                    <h1 class="text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight">
                        Track Your Parcel Anytime, Anywhere
                    </h1>
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                        Experience reliable and fast delivery services with real-time tracking across the nation. Your packages are in safe hands with North Courier Services.
                    </p>

                    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Track Your Package</h3>
                        <div class="flex gap-3">
                            <input
                                type="text"
                                id="tracking-input"
                                placeholder="Enter Tracking ID (e.g., NCS123456789)"
                                class="flex-1 px-4 py-3 border border-gray-300 !rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                            >
                            <button
                                id="track-btn"
                                class="bg-primary text-white px-6 py-3 !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap"
                            >
                                Track Now
                            </button>
                        </div>
                    </div>
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

    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto px-20 lg:px-40">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="font-['Pacifico'] text-2xl text-white font-bold mb-4">NCS</div>
                    <p class="text-gray-400 mb-6">
                        Reliable courier services with nationwide coverage and real-time tracking technology.
                    </p>
                    <div class="flex space-x-4">
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-gray-700 transition-colors cursor-pointer">
                            <i class="ri-facebook-fill"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-gray-700 transition-colors cursor-pointer">
                            <i class="ri-twitter-fill"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-gray-700 transition-colors cursor-pointer">
                            <i class="ri-linkedin-fill"></i>
                        </div>
                        <div class="w-8 h-8 flex items-center justify-center bg-gray-800 rounded-full hover:bg-gray-700 transition-colors cursor-pointer">
                            <i class="ri-instagram-fill"></i>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Services</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Express Delivery</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Standard Shipping</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">International</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Bulk Orders</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Support</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Track Package</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Contact Information</h3>
                    <ul class="space-y-2 text-gray-400 ">
                        <li><a href="#" class="hover:text-white transition-colors flex gap-3 items-center">
                            <div class="w-2 h-2 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-mail-unread-line ri-lg text-white"></i>
                            </div>info@northcourier.com</a></li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors flex gap-3 items-center">
                            <div class="w-2 h-2 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-phone-line ri-lg text-white"></i>
                            </div>+1 (555) 123-4567</a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-colors flex gap-3 items-center">
                            <div class="w-2 h-2 flex items-center justify-center bg-primary bg-opacity-10 rounded-full flex-shrink-0">
                                <i class="ri-map-pin-line ri-lg text-white"></i>
                            </div>1234 Logistics Avenue<br>
                                    Business District, NY 10001</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-center items-center">
                <p class="text-gray-400 text-sm justify-center">
                    North Courier Services © {{ now()->year }} -  All rights reserved. Developed & Managed by <a href="https://www.mukarramali.net">Mukarram Ali</a>
                </p>
            </div>
        </div>
    </footer>
    <div id="tracking-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200 flex items-center justify-between">
                <h2 class="text-2xl font-bold text-gray-800">Tracking Results</h2>
                <button id="close-modal" class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-gray-700">
                    <i class="ri-close-line ri-lg"></i>
                </button>
            </div>

            <div id="tracking-content" class="p-6">
            </div>
        </div>
    </div>

    <script id="mobile-menu-script">
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>

    <script id="tracking-functionality">
        document.addEventListener('DOMContentLoaded', function() {
            const trackingInput = document.getElementById('tracking-input');
            const trackBtn = document.getElementById('track-btn');
            const modal = document.getElementById('tracking-modal');
            const closeModal = document.getElementById('close-modal');
            const trackingContent = document.getElementById('tracking-content');

            const mockTrackingData = {
                'NCS123456789': {
                    id: 'NCS123456789',
                    status: 'In Transit',
                    sender: 'Amazon Warehouse NYC',
                    receiver: 'John Smith',
                    address: '789 Oak Street, Boston, MA 02101',
                    weight: '2.5 kg',
                    type: 'Express Delivery',
                    estimatedDelivery: '2024-07-25',
                    currentStep: 2,
                    history: [
                        { date: '2024-07-24 09:15', location: 'New York, NY', status: 'Package picked up from sender', icon: 'ri-box-3-line' },
                        { date: '2024-07-24 14:30', location: 'Hartford, CT', status: 'In transit - Arrived at sorting facility', icon: 'ri-truck-line' },
                        { date: '2024-07-24 18:45', location: 'Springfield, MA', status: 'In transit - Departed from facility', icon: 'ri-road-map-line' },
                        { date: '2024-07-25 08:00', location: 'Boston, MA', status: 'Out for delivery', icon: 'ri-map-pin-line' }
                    ]
                },
                'NCS987654321': {
                    id: 'NCS987654321',
                    status: 'Delivered',
                    sender: 'TechStore Inc.',
                    receiver: 'Sarah Johnson',
                    address: '456 Pine Avenue, Seattle, WA 98101',
                    weight: '1.2 kg',
                    type: 'Standard Delivery',
                    estimatedDelivery: '2024-07-23',
                    currentStep: 4,
                    history: [
                        { date: '2024-07-22 10:30', location: 'Los Angeles, CA', status: 'Package picked up from sender', icon: 'ri-box-3-line' },
                        { date: '2024-07-22 16:15', location: 'San Francisco, CA', status: 'In transit - Processing at facility', icon: 'ri-truck-line' },
                        { date: '2024-07-23 11:20', location: 'Portland, OR', status: 'In transit - Departed from facility', icon: 'ri-road-map-line' },
                        { date: '2024-07-23 15:45', location: 'Seattle, WA', status: 'Delivered successfully', icon: 'ri-checkbox-circle-line' }
                    ]
                }
            };

            function showTrackingResults(trackingId) {
                const data = mockTrackingData[trackingId];

                if (!data) {
                    trackingContent.innerHTML = `
                        <div class="text-center py-12">
                            <div class="w-16 h-16 flex items-center justify-center bg-red-100 rounded-full mx-auto mb-4">
                                <i class="ri-error-warning-line ri-2x text-red-500"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Tracking ID Not Found</h3>
                            <p class="text-gray-600 mb-6">
                                We couldn't find any package with tracking ID: <strong>${trackingId}</strong>
                            </p>
                            <p class="text-sm text-gray-500">
                                Please check your tracking ID and try again, or contact our support team for assistance.
                            </p>
                        </div>
                    `;
                } else {
                    const steps = ['Booked', 'In Transit', 'Out for Delivery', 'Delivered'];
                    const stepIcons = ['ri-box-3-line', 'ri-truck-line', 'ri-map-pin-line', 'ri-checkbox-circle-line'];

                    trackingContent.innerHTML = `
                        <div class="mb-8">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800">Tracking ID: ${data.id}</h3>
                                    <p class="text-gray-600">Current Status: <span class="font-semibold text-primary">${data.status}</span></p>
                                </div>
                                <div class="text-right">
                                    <p class="text-sm text-gray-600">Estimated Delivery</p>
                                    <p class="font-semibold text-gray-800">${data.estimatedDelivery}</p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between mb-8">
                                ${steps.map((step, index) => `
                                    <div class="flex flex-col items-center flex-1">
                                        <div class="w-12 h-12 flex items-center justify-center rounded-full mb-2 ${
                                            index < data.currentStep ? 'bg-primary text-white' :
                                            index === data.currentStep ? 'bg-secondary text-white' : 'bg-gray-200 text-gray-400'
                                        }">
                                            <i class="${stepIcons[index]} ri-lg"></i>
                                        </div>
                                        <span class="text-sm font-medium ${
                                            index <= data.currentStep ? 'text-gray-800' : 'text-gray-400'
                                        }">${step}</span>
                                        ${index < steps.length - 1 ? `
                                            <div class="w-full h-1 mt-2 ${
                                                index < data.currentStep ? 'bg-primary' : 'bg-gray-200'
                                            }"></div>
                                        ` : ''}
                                    </div>
                                `).join('')}
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-4">Package Information</h4>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Sender:</span>
                                        <span class="font-medium">${data.sender}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Receiver:</span>
                                        <span class="font-medium">${data.receiver}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Weight:</span>
                                        <span class="font-medium">${data.weight}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Service Type:</span>
                                        <span class="font-medium">${data.type}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-4">Delivery Address</h4>
                                <p class="text-gray-700 mb-4">${data.address}</p>
                                <div class="bg-white p-4 rounded border-2 border-dashed border-gray-300 text-center">
                                    <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded mx-auto mb-2">
                                        <i class="ri-qr-code-line ri-2x text-gray-600"></i>
                                    </div>
                                    <p class="text-sm text-gray-600">QR Code for Mobile Tracking</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-800 mb-4">Tracking History</h4>
                            <div class="space-y-4">
                                ${data.history.map((event, index) => `
                                    <div class="flex items-start space-x-4 p-4 ${index === 0 ? 'bg-blue-50' : 'bg-gray-50'} rounded-lg">
                                        <div class="w-10 h-10 flex items-center justify-center bg-white rounded-full flex-shrink-0">
                                            <i class="${event.icon} text-primary"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between mb-1">
                                                <p class="font-medium text-gray-800">${event.status}</p>
                                                <span class="text-sm text-gray-500">${event.date}</span>
                                            </div>
                                            <p class="text-sm text-gray-600">${event.location}</p>
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    `;
                }

                modal.classList.remove('hidden');
            }

            trackBtn.addEventListener('click', function() {
                const trackingId = trackingInput.value.trim();
                if (trackingId) {
                    showTrackingResults(trackingId);
                }
            });

            trackingInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    const trackingId = trackingInput.value.trim();
                    if (trackingId) {
                        showTrackingResults(trackingId);
                    }
                }
            });

            closeModal.addEventListener('click', function() {
                modal.classList.add('hidden');
            });

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
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
