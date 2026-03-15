<footer class="bg-gray-900 text-white mt-20 w-full shadow-inner">
    <div class="container mx-auto px-6 py-12 overflow-hidden">

        <!-- Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center sm:text-left">

            <!-- Brand / About -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-2xl font-bold mb-4 flex items-center justify-center sm:justify-start">
                    <i class="bi bi-speedometer2 me-2 text-purple-400"></i> NexaTech
                </h3>
                <p class="text-gray-400 leading-relaxed">
                    We deliver world-class services and solutions, trusted by businesses globally.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="<?php echo e(route('home')); ?>" class="hover:text-purple-400 transition">Home</a></li>
                    <li><a href="<?php echo e(route('website.services')); ?>" class="hover:text-purple-400 transition">Services</a></li>
                    <li><a href="<?php echo e(route('website.blogs')); ?>" class="hover:text-purple-400 transition">Blogs</a></li>
                    <li><a href="<?php echo e(route('website.jobs')); ?>" class="hover:text-purple-400 transition">Jobs</a></li>
                    <li><a href="<?php echo e(route('website.contacts')); ?>" class="hover:text-purple-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                <p class="text-gray-400 mb-2 flex items-center">
                    <i class="bi bi-telephone me-2 text-purple-400"></i> +91 121 456 7890
                </p>
                <p class="text-gray-400 mb-2 flex items-center">
                    <i class="bi bi-envelope me-2 text-purple-400"></i> info@nexatech.com
                </p>
                <div class="flex justify-center sm:justify-start space-x-4 mt-3 flex-wrap">
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition text-lg"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition text-lg"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition text-lg"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-gray-400 hover:text-purple-400 transition text-lg"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <!-- Newsletter / Subscribe -->
            <div class="flex flex-col items-center sm:items-start">
                <h3 class="text-xl font-semibold mb-4">Subscribe</h3>
                <p class="text-gray-400 mb-4 text-center sm:text-left">Get our latest updates directly in your inbox.</p>
                <form class="flex flex-col sm:flex-row gap-3 w-full max-w-xs sm:max-w-full justify-center sm:justify-start">
                    <input type="email" placeholder="Your email"
                           class="flex-1 px-4 py-2 rounded-md border border-gray-700 bg-gray-800 text-white focus:outline-none focus:border-purple-400 transition min-w-0">
                    <button type="submit"
                            class="px-4 py-2 rounded-md bg-gradient-to-r from-purple-500 to-blue-500 text-white font-semibold hover:opacity-90 transition whitespace-nowrap">
                        Subscribe
                    </button>
                </form>
            </div>

        </div>

        <!-- Divider -->
        <hr class="my-8 border-gray-700">

        <!-- Copyright -->
        <div class="text-center text-gray-500 text-sm">
            © <?php echo e(date('Y')); ?> Company Name. All rights reserved.
        </div>
    </div>
</footer>
<!-- Back to Top Button -->
<button id="back-to-top" 
        class="fixed bottom-8 right-8 hidden bg-gradient-to-r from-purple-500 to-blue-500 text-white p-3 rounded-full shadow-lg hover:scale-110 transition transform z-50">
    <i class="bi bi-arrow-up text-xl"></i>
</button>

<script>
    const backToTopBtn = document.getElementById('back-to-top');

    // Show button after scrolling down 300px
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.remove('hidden');
        } else {
            backToTopBtn.classList.add('hidden');
        }
    });

    // Smooth scroll to top
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
<?php /**PATH D:\xampp\htdocs\compufy-admin-panel\resources\views/website/layouts/footer.blade.php ENDPATH**/ ?>