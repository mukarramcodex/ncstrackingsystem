<!DOCTYPE html>
<html lang="en">

@include('components.site.header')

<body class="bg-white">
    @include('components.site.navbar')
    @include('components.site.hero')
    @include('components.site.services')
    @include('components.site.partners')
    @include('components.site.reviews')
    @include('components.site.about')

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
