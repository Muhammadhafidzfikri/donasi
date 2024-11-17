<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0"/>
  <title>
   ALZA el ROHMAH: Peduli Anak Yatim dan Dhuafa
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        .popup {
            position: fixed;
            bottom: -100px;
            left: 50%;
            transform: translateX(-50%);
            transition: bottom 0.5s ease-in-out;
            z-index: 50;
        }
        .popup.show {
            bottom: 20px;
        }
        .photo-container {
            overflow: hidden;
            border-radius: 0.5rem;
            position: relative;
            height: 200px;
        }
        .photo-container img {
            transition: opacity 1s ease;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .photo-container img.hidden {
            opacity: 0;
        }
        .carousel {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
            border-radius: 0.5rem;
            max-width: 400px; /* Limit width on desktop */
            margin: 0 auto; /* Center the carousel */
        }
        .carousel img {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: left 1s ease-in-out;
        }
        .carousel img.active {
            left: 0;
        }
        .carousel img.prev {
            left: -100%;
        }
  </style>
 </head>
 <body class="bg-gray-100 text-gray-800">
  <!-- Header Section -->
  <header class="bg-white shadow-md transition-all duration-300">
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <img alt="AyoBantu logo" class="h-10" height="50" src="https://placehold.co/150x50" width="150"/>
    <nav class="flex items-center space-x-4">
     <a class="text-gray-700 transition-all duration-300 transform hover:text-green-500 hover:scale-105 hover:underline hover:underline-offset-4 hover:decoration-2" href="index.php">
      Home
     </a>
     <a class="text-gray-700 transition-all duration-300 transform hover:text-green-500 hover:scale-105 hover:underline hover:underline-offset-4 hover:decoration-2" href="donate.php">
      Donasi
     </a>
     <a class="text-gray-700 transition-all duration-300 transform hover:text-green-500 hover:scale-105 hover:underline hover:underline-offset-4 hover:decoration-2" href="about.php">
      About
     </a>
     <a class="bg-green-500 text-white px-4 py-2 rounded transition-all duration-300 transform hover:scale-110 hover:opacity-90" href="login.php">
      Login
     </a>
    </nav>
   </div>
  </header>
<!-- About Section -->
<section class="bg-gray-100 py-12" id="about">
   <div class="container mx-auto text-center">
    <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
     <h2 class="text-3xl font-semibold mb-6">
      Tentang Yayasan Al-Zahra
     </h2>
     <div class="carousel mb-6">
      <img alt="Foto Yayasan Al-Zahra 1" class="rounded-lg shadow-lg active" height="200" src="https://storage.googleapis.com/a1aa/image/r651Wbker4QXPa4NXQeEOOBKMwbBfjn5oM9meA8X2yJXBQFPB.jpg" width="400"/>
      <img alt="Foto Yayasan Al-Zahra 2" class="rounded-lg shadow-lg" height="200" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
      <img alt="Foto Yayasan Al-Zahra 3" class="rounded-lg shadow-lg" height="200" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
     </div>
     <p class="text-xl text-gray-700 mb-4">
      Yayasan Al-Zahra berkomitmen untuk memberikan kehidupan yang lebih baik bagi anak-anak yatim dan dhuafa melalui pendidikan, kesehatan, dan pemberdayaan ekonomi.
     </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <h3 class="text-2xl font-bold mb-4">
       Sejarah Yayasan
      </h3>
      <p class="text-gray-600">
       Didirikan pada tahun 2010, Yayasan Al-Zahra berfokus pada pemberian bantuan kepada anak yatim dan keluarga dhuafa yang membutuhkan. Kami percaya bahwa setiap anak berhak mendapatkan pendidikan yang layak dan kehidupan yang penuh kasih.
      </p>
     </div>
     <div class="bg-white p-6 rounded-lg shadow-lg">
      <h3 class="text-2xl font-bold mb-4">
       Misi dan Visi
      </h3>
      <p class="text-gray-600">
       Misi kami adalah memberikan dukungan pendidikan, kesehatan, dan pemberdayaan ekonomi kepada anak-anak yatim dan keluarga dhuafa. Visi kami adalah menciptakan masyarakat yang peduli dan berbagi untuk kebaikan bersama.
      </p>
     </div>
    </div>
    <!-- Activities Section -->
    <div class="mt-12">
     <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
      <h3 class="text-2xl font-bold mb-4">
       Kegiatan pada Yayasan
      </h3>
      <p class="text-gray-600 mb-4">
       Berikut adalah beberapa kegiatan yang dilakukan oleh Yayasan Al-Zahra untuk mendukung anak-anak yatim dan dhuafa:
      </p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
       <div class="photo-container">
        <img alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
        <img alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/VFum1wUPoCIuGJn9zWNA5pS2DPnX9B6p9DjhNto7aAEwfp4JA.jpg" width="400"/>
       </div>
       <div class="photo-container">
        <img alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
        <img alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/VFum1wUPoCIuGJn9zWNA5pS2DPnX9B6p9DjhNto7aAEwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
       </div>
       <div class="photo-container">
        <img alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/VFum1wUPoCIuGJn9zWNA5pS2DPnX9B6p9DjhNto7aAEwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
       </div>
       <div class="photo-container">
        <img alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
        <img alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/VFum1wUPoCIuGJn9zWNA5pS2DPnX9B6p9DjhNto7aAEwfp4JA.jpg" width="400"/>
       </div>
       <div class="photo-container">
        <img alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
        <img alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/VFum1wUPoCIuGJn9zWNA5pS2DPnX9B6p9DjhNto7aAEwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
       </div>
       <div class="photo-container">
        <img alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/VFum1wUPoCIuGJn9zWNA5pS2DPnX9B6p9DjhNto7aAEwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/06gKNueNflsq80JyBNQR1ey88BusRUeM03cekfaY5rRTwfp4JA.jpg" width="400"/>
        <img alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden" height="300" src="https://storage.googleapis.com/a1aa/image/mYa8JUMEdqquCtFUL8NHfxQOCcGnEuuu0Z7LrzfH88C9eninA.jpg" width="400"/>
       </div>
      </div>
     </div>
    </div>
    <!-- How to Help Section -->
    <div class="mt-12">
     <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
      <h3 class="text-2xl font-bold mb-4">
       Cara Anda Bisa Membantu
      </h3>
      <p class="text-gray-600">
       Anda dapat mendukung anak-anak yatim dan dhuafa dengan cara berdonasi atau menjadi relawan kami. Setiap kontribusi Anda sangat berarti!
      </p>
     </div>
    </div>
    <!-- Donation Instructions Section -->
    <div class="mt-12" id="donation-instructions">
     <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
      <h3 class="text-2xl font-bold mb-4">
       Tata Cara Donasi
      </h3>
      <ol class="list-decimal list-inside text-left text-gray-600 mb-4">
       <li>
        Pilih jumlah donasi yang ingin Anda berikan.
       </li>
       <li>
        Isi formulir donasi dengan informasi yang diperlukan.
       </li>
       <li>
        Pilih metode pembayaran yang Anda inginkan.
       </li>
       <li>
        Konfirmasi pembayaran Anda.
       </li>
       <li>
        Anda akan menerima email konfirmasi setelah donasi berhasil.
       </li>
      </ol>
      <a class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 transition duration-300" href="#donate" id="donateButton">
       Donasi Sekarang
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- Popup Donation Button -->
  <div class="popup bg-green-500 text-white px-6 py-3 rounded-full shadow-lg" id="popup">
   <a class="hover:bg-green-600 transition duration-300" href="#donate">
    Donasi Sekarang
   </a>
  </div>
  <script>
   window.addEventListener('scroll', function() {
            const popup = document.getElementById('popup');
            const donateButton = document.getElementById('donateButton');
            const aboutSection = document.getElementById('about');
            const donationInstructions = document.getElementById('donation-instructions');
            const aboutSectionBottom = aboutSection.getBoundingClientRect().bottom;
            const donationInstructionsTop = donationInstructions.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (window.scrollY > aboutSectionBottom - windowHeight && window.scrollY < donationInstructionsTop - windowHeight) {
                popup.classList.add('show');
                donateButton.style.visibility = 'hidden';
            } else {
                popup.classList.remove('show');
                donateButton.style.visibility = 'visible';
            }
        });

        function cycleImages() {
            const carousel = document.querySelector('.carousel');
            const images = carousel.querySelectorAll('img');
            let currentIndex = 0;

            setInterval(() => {
                images[currentIndex].classList.remove('active');
                images[currentIndex].classList.add('prev');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
                images[currentIndex].classList.remove('prev');
            }, 3000);
        }

        window.onload = cycleImages;
  </script>

    <!-- Footer -->
    <footer class="bg-green-500 text-white py-12 w-full">
    <div class="container mx-auto flex justify-between items-start px-4">
        <!-- Kolom Kiri: Informasi Kontak -->
        <div class="w-1/2">
            <h3 class="font-bold mb-4">ALZAelROHMAH.com</h3>
            <p>Perum Bintang Alam Blok O/14 RT31/12</p>
            <p>Karawang, Indonesia</p>
            <p>Email: ALZAelROHMAH@xxxxx.com</p>
            <p>Phone: +62 267 64xxxxxx</p>
            
            <div class="flex space-x-4 mt-4">
                <a class="text-white hover:text-gray-300" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white hover:text-gray-300" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white hover:text-gray-300" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white hover:text-gray-300" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>

        <!-- Kolom Kanan: Tentang -->
        <div class="w-1/2 pl-8">
            <h4 class="font-bold mb-2">Tentang</h4>
            <p><a href="#" class="hover:underline">FAQ</a></p>
            <p><a href="#" class="hover:underline">Privacy Policy</a></p>
            <p><a href="#" class="hover:underline">Terms & Conditions</a></p>
            <p><a href="#" class="hover:underline">Contact Us</a></p>
        </div>
    </div>

    <div class="text-center mt-8">
        <p>© 2023 Ayobantu.com. All rights reserved.</p>
    </div>
</footer>

 </body>
</html>