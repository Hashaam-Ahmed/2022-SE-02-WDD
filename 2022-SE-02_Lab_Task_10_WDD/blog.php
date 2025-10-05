<?php 
$pageTitle = "Blogs";
include 'header.php'; 
?>

<!-- Blogs Section -->
<section class="section-padding">
    <h1 class="text-[50px] font-medium pb-[80px] text-center">
        Cliffside Blog
    </h1>

    <!-- Blogs card container -->
    <div class="card-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
        
        <!-- Blog cards would go here (same as your HTML) -->
        <!-- Card 1 -->
        <div class="card rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
            <div class="w-full aspect-[16/10] overflow-hidden">
                <img src="assets/img1.png" alt="Person doing ethical hacking"
                    class="w-full h-full object-cover object-center rounded-lg" />
            </div>
            <div class="flex-1 flex flex-col px-1 p-5">
                <h3 class="text-lg font-bold text-gray-900 mb-3 font-[Rubik,sans-serif] leading-tight line-clamp-2">
                    Cybersecurity for Government – A Strategic Approach
                </h3>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed font-[Roboto,sans-serif] flex-1 line-clamp-3">
                    Government agencies carry immense responsibility when it comes to safeguarding sensitive
                    information...
                </p>
                <a href="#"
                    class="text-[#02B578] font-semibold text-sm hover:underline transition-all duration-200 self-start">
                    Read More
                </a>
            </div>
        </div>

        <!-- Add other blog cards here... -->

    </div>

    <div class="blogs_navigation">
        <div class="separater mt-12 h-[1px] bg-gray-500"></div>
        <div class="btns flex items-center justify-between pt-8">
            <div class="btn1">
                <a href="/" class="flex items-center gap-2 text-gray-300 hover:text-[#02B578] transition-colors">
                    <i class="fa fa-chevron-left text-xs"></i>
                    <span>Old Post</span>
                </a>
            </div>
            <div class="btn2">
                <a href="/" class="flex items-center gap-2 text-gray-400 hover:text-[#02B578] transition-colors">
                    <span>Recent Post</span>
                    <i class="fa fa-chevron-right text-xs"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Talk to expert CTA Section -->
<section
    class="relative py-24 md:py-32 flex flex-col items-center justify-center min-h-[420px] overflow-hidden bg-gradient-to-b from-[#02B578] to-[#FFF455]">
    <!-- Background image -->
    <div class="absolute inset-0 bg-no-repeat bg-center bg-cover"
        style="background-image: url('assets/BookConsulatation2.webp'); z-index: 0;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full mx-auto px-4 text-center">
        <h2 class="text-[50px] text-center font-medium text-black mb-6 leading-tight">Discover how Cliffside
            Cybersecurity can transform your cybersecurity landscape.
        </h2>
        <p class="text-[16px] font-light text-black/80 mb-10 max-w-2xl mx-auto">Connect with us today to explore a
            tailored security solution that aligns with your vision.</p>
        <a href="book_a_free_consultation.php"
            class="inline-block bg-black text-white text-lg font-semibold px-14 py-4 rounded-full button-shadow">Talk
            to
            an Expert Today</a>
    </div>
</section>

<?php include 'footer.php'; ?>