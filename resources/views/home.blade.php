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
    @include('components.site.bookparcel')
    @include('components.site.contact')

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
