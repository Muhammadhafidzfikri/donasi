<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ALZA el ROHMAH - Yayasan Anak Yatim dan Dhuafa. Membantu menciptakan masa depan yang lebih baik bagi anak-anak yang membutuhkan.">
  <meta name="keywords" content="donasi, yayasan anak yatim, dhuafa, bantuan sosial, peduli sesama, ALZA el ROHMAH, anak yatim piatu">
  <meta name="author" content="ALZA el ROHMAH">

    <title>ALZA el ROHMAH: Peduli Anak Yatim dan Dhuafa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>

<style>
  
    .brand-logo {
    filter: grayscale(100%);
    transition: filter 0.3s, transform 0.3s;
   }
   .brand-logo:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
   }
    @keyframes typing {
    from {
     width: 0;
    }
    to {
     width: 100%;
    }
   }
   @keyframes blink-caret {
    from, to {
     border-color: transparent;
    }
    50% {
     border-color: #fff;
    }
   }
   .typing-text {
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    border-right: 0.15em solid #fff;
    animation: typing 3.5s steps(30, end) infinite, blink-caret 0.75s step-end infinite;
   }
   .carousel {
            position: relative;
            overflow: hidden;
            
        }
    .carousel-inner {
        display: flex; /* Removed the extra 's' */
        transition: transform 0.5s ease-in-out; /* This line is fine */
}

    .carousel-item {
        min-width: 100%; /* Added missing semicolon */
        box-sizing: border-box; /* This line is fine */
        position: relative; /* This line is fine */
}
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .carousel-control.prev {
            left: 10px;
        }
        .carousel-control.next {
            right: 10px;
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
        .hero-content {
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 0.5rem;
        }
        .arabic {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4A5568;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
  </style>
 </head>
 <body class="font-roboto bg-gray-100">
  
  <header class="bg-white shadow-md transition-all duration-300">
    
   <div class="container mx-auto flex justify-between items-center py-4 px-6">
   <img alt="AyoBantu logo" class="h-10" src="https://placehold.co/150x50" />
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

  <class="container mx-auto mt-6">
    
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img alt="Banner image 1 with people and text" class="w-full" src="https://placehold.co/1200x400"/>
            <div class="typing-text" id="typing-text">
            </div>
          </div>
          <div class="carousel-item">
            <img alt="Banner image 2 with people and text" class="w-full" src="https://placehold.co/1200x400"/>
          </div>
          <div class="carousel-item">
            <img alt="Banner image 3 with people and text" class="w-full" src="https://placehold.co/1200x400"/>
          </div>
        </div>
        <button class="carousel-control prev" onclick="prevSlide()">
          ❮
        </button>
        <button class="carousel-control next" onclick="nextSlide()">
          ❯
        </button>
      </div>
    </div>
<br>

<div class="bg-white py-20 rounded-[10px]">
<div class="container mx-auto flex flex-col md:flex-row items-center">
    <!-- Text Section -->
    <div class="flex flex-col w-full lg:w-1/2 justify-center items-start p-8">
      <h1 class="text-3xl md:text-5xl text-green-500 tracking-loose">
        Yayasan Anak Yatim Dan Dhuafa 
        "ALZA el ROHMAH"
      </h1>
      <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-4">
        Bersama Kita Bisa
      </h2>
      <p class="text-sm md:text-base text-gray-500 mb-4">
        Mari bergabung bersama kami untuk membantu mereka yang membutuhkan. Setiap donasi Anda sangat berarti bagi mereka.
      </p>
      <a class="bg-green-500 text-white px-6 py-3 rounded shadow-lg uppercase tracking-wider hover:bg-green-400 transition-colors" href="#">
        Donasi Sekarang
      </a>
    </div>
    
    <!-- Image Section -->
    <div class="p-8 mt-12 lg:mt-0 lg:w-1/2">
      <div class="relative w-full h-64 md:h-96">
        <!-- Image 1 -->
        <div class="absolute inset-0 flex items-center justify-center">
          <img alt="Image of volunteers helping in a community" class="rounded-lg shadow-lg w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/CeCK5huDoMUvFS0Eb9fPWkG0dwg0wjf130ivznwmCYr0EUinA.jpg"/>
        </div>
        <!-- Image 2 -->
        <div class="absolute inset-0 flex items-center justify-center">
          <img alt="Image of volunteers distributing food" class="rounded-lg shadow-lg w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/pFugIzOXaGqhJhrKZ4Kt4C5TcTbpJe9f5fY4Ng0iSnO4EUinA.jpg"/>
        </div>
        <!-- Image 3 -->
        <div class="absolute inset-0 flex items-center justify-center">
          <img alt="Image of volunteers providing healthcare" class="rounded-lg shadow-lg w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/KPvy8qEoezy2ASQefOy3Sm4P7MSPJVuMUAaqeiR8n7MJKoEPB.jpg"/>
        </div>
      </div>
    </div>
  </div>
</div>

    <section class="mt-8 text-center">
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h2 class="text-xl font-bold text-gray-800">
        Bantu mereka yang membutuhkan
      </h2>
      <div class="flex flex-wrap justify-center space-x-4 mt-4">
        <div class="flex flex-col items-center group">
          <img alt="Icon 1" class="h-16 w-16 rounded-full transition-transform duration-300 transform group-hover:scale-110" src="https://placehold.co/50x50"/>
          <span class="text-gray-600 mt-2">
            Kesehatan
          </span>
        </div>
        <div class="flex flex-col items-center group">
          <img alt="Icon 2" class="h-16 w-16 rounded-full transition-transform duration-300 transform group-hover:scale-110" src="https://placehold.co/50x50"/>
          <span class="text-gray-600 mt-2">
            Pendidikan
          </span>
        </div>
        <div class="flex flex-col items-center group">
          <img alt="Icon 3" class="h-16 w-16 rounded-full transition-transform duration-300 transform group-hover:scale-110" src="https://placehold.co/50x50"/>
          <span class="text-gray-600 mt-2">
            Kemanusiaan
          </span>
        </div>
        <div class="flex flex-col items-center group">
          <img alt="Icon 4" class="h-16 w-16 rounded-full transition-transform duration-300 transform group-hover:scale-110" src="https://placehold.co/50x50"/>
          <span class="text-gray-600 mt-2">
            Lingkungan
          </span>
        </div>
        <div class="flex flex-col items-center group">
          <img alt="Icon 5" class="h-16 w-16 rounded-full transition-transform duration-300 transform group-hover:scale-110" src="https://placehold.co/50x50"/>
          <span class="text-gray-600 mt-2">
            Sosial
          </span>
        </div>
      </div>
    </section>
    <!-- Hadist Section -->
    <section id="hadist" class="py-12">
        <div class="container mx-auto px-4">
        
            <h5 class="text-3xl md:text-4xl font-bold text-center mb-8"> Berbagi Kasih untuk Anak Yatim dan Dhuafa <br>
            "Sedekah Anda, Berkah untuk Masa Depan Mereka"</h5>
            <p class="text-justify mt-8 text-lg">Anak yatim dan dhuafa adalah golongan yang sangat membutuhkan perhatian dan kasih sayang. Dengan berdonasi melalui platform ini, Anda berperan serta dalam menciptakan masa depan yang lebih baik bagi mereka. Mari berbagi kebahagiaan dengan mereka yang membutuhkan, dan dapatkan pahala berlimpah di sisi Allah. Berikut hadist-hadistnya:</p>
        
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6 fade-in">
                <p class="arabic mb-4">"أَنَا وَكَافِلُ الْيَتِيمِ فِي الْجَنَّةِ هَاتَيْنِ"</p>
                <p><strong>Arti:</strong> "Aku dan orang yang mengurus anak yatim di surga seperti ini," lalu beliau (Rasulullah SAW) menunjuk dua jarinya, jari telunjuk dan jari tengah. (HR. Bukhari)</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6 fade-in">
                <p class="arabic mb-4">"خَيْرُ بَيْتٍ فِيهِ يَتِيمٌ يُحْسَنُ إِلَيْهِ"</p>
                <p><strong>Arti:</strong> "Sebaik-baik rumah adalah rumah yang di dalamnya terdapat anak yatim yang diperlakukan dengan baik." (HR. Ibn Majah)</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6 fade-in">
                <p class="arabic mb-4">"مَا مِنْ يَوْمٍ يُصْبِحُ فِيهِ عِبَادُ اللَّـهِ إِلَّا وَيُصِيبُ فِيهِ بَعْضُهُمْ فَضْلًا فِي الرَّحْمَةِ"</p>
                <p><strong>Arti:</strong> "Setiap hari, Allah menurunkan rahmat-Nya kepada umat-Nya, dan tidak ada seorang pun yang memberi sedekah, kecuali Allah akan menggantinya dengan yang lebih baik." (HR. Bukhari dan Muslim)</p>
            </div>
            </div>
    </section>
  
  <!-- New Header Section with Typing Effect -->
  <div class="bg-green-500 text-white p-6 mt-6">
   <div class="max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row items-center space-x-4">
     <!-- Placeholder for Image on the left -->
     <div class="md:w-1/2 flex justify-center md:justify-start">
      <div class="w-full h-80 bg-gray-300 rounded-lg shadow-lg flex items-center justify-center">
       <img alt="People helping each other, symbolizing humanitarian aid" class="rounded-lg shadow-lg w-full h-full object-cover" src="https://storage.googleapis.com/a1aa/image/7Qfcd8nIOPVIIKR9s3QPgb628iD4g0yCTBZeZdCycgzOzTxTA.jpg"/>
      </div>
     </div>
     <!-- Text on the right -->
     <div class="md:w-1/2 text-center md:text-left mt-4 md:mt-0">
      <h1 class="text-4xl font-bold">
       Yuk bantu mereka yang membutuhkan!
      </h1>
      <p class="mt-2">
       Sebuah gerakan kemanusiaan untuk berbagi dan membantu sesama.
      </p>
      <p class="mt-2">
       Sekecil apapun bantuanmu, akan berdampak bagi mereka!
      </p>
      <a class="bg-white text-green-500 font-bold py-2 px-4 rounded-full mt-4 inline-block" href="#">
       Donasi Sekarang
      </a>
     </div>
    </div>
   </div>
  </div>



            <!-- Kegiatan pada Yayasan -->
            <div class="mt-12">
                <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                    <h3 class="text-2xl font-bold mb-4">Dokumentasi Kegiatan</h3>
                    <p class="text-gray-600 mb-4">Berikut adalah beberapa kegiatan yang dilakukan oleh Yayasan Al-Zahra untuk mendukung anak-anak yatim dan dhuafa:</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="photo-container">
                            <img src="https://storage.googleapis.com/a1aa/image/nqyopgGFqfziJiX7V6IhbfbzArLZxvy5ukc6iet1dG3u4linA.jpg" alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover">
                            <img src="https://storage.googleapis.com/a1aa/image/qYdgpeEpyR1sVqxWwf3CrQSw6SwFeu4DogpX7HLJAsOp4linA.jpg" alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                            <img src="https://storage.googleapis.com/a1aa/image/lEm19zfPt8Ueq0jiOl9rYQ7A56IIfpnsJ3VDX6a6Zs6s4linA.jpg" alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                        </div>
                        <div class="photo-container">
                            <img src="https://storage.googleapis.com/a1aa/image/qYdgpeEpyR1sVqxWwf3CrQSw6SwFeu4DogpX7HLJAsOp4linA.jpg" alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover">
                            <img src="https://storage.googleapis.com/a1aa/image/lEm19zfPt8Ueq0jiOl9rYQ7A56IIfpnsJ3VDX6a6Zs6s4linA.jpg" alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                            <img src="https://storage.googleapis.com/a1aa/image/nqyopgGFqfziJiX7V6IhbfbzArLZxvy5ukc6iet1dG3u4linA.jpg" alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                        </div>
                        <div class="photo-container">
                            <img src="https://storage.googleapis.com/a1aa/image/lEm19zfPt8Ueq0jiOl9rYQ7A56IIfpnsJ3VDX6a6Zs6s4linA.jpg" alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover">
                            <img src="https://storage.googleapis.com/a1aa/image/nqyopgGFqfziJiX7V6IhbfbzArLZxvy5ukc6iet1dG3u4linA.jpg" alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                            <img src="https://storage.googleapis.com/a1aa/image/qYdgpeEpyR1sVqxWwf3CrQSw6SwFeu4DogpX7HLJAsOp4linA.jpg" alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                        </div>
                        <div class="photo-container">
                            <img src="https://storage.googleapis.com/a1aa/image/nqyopgGFqfziJiX7V6IhbfbzArLZxvy5ukc6iet1dG3u4linA.jpg" alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover">
                            <img src="https://storage.googleapis.com/a1aa/image/qYdgpeEpyR1sVqxWwf3CrQSw6SwFeu4DogpX7HLJAsOp4linA.jpg" alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                            <img src="https://storage.googleapis.com/a1aa/image/lEm19zfPt8Ueq0jiOl9rYQ7A56IIfpnsJ3VDX6a6Zs6s4linA.jpg" alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                        </div>
                        <div class="photo-container">
                            <img src="https://storage.googleapis.com/a1aa/image/qYdgpeEpyR1sVqxWwf3CrQSw6SwFeu4DogpX7HLJAsOp4linA.jpg" alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover">
                            <img src="https://storage.googleapis.com/a1aa/image/lEm19zfPt8Ueq0jiOl9rYQ7A56IIfpnsJ3VDX6a6Zs6s4linA.jpg" alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                            <img src="https://storage.googleapis.com/a1aa/image/nqyopgGFqfziJiX7V6IhbfbzArLZxvy5ukc6iet1dG3u4linA.jpg" alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                        </div>
                        <div class="photo-container">
                            <img src="https://storage.googleapis.com/a1aa/image/lEm19zfPt8Ueq0jiOl9rYQ7A56IIfpnsJ3VDX6a6Zs6s4linA.jpg" alt="Foto kegiatan pemberdayaan ekonomi di Yayasan Al-Zahra" class="w-full h-full object-cover">
                            <img src="https://storage.googleapis.com/a1aa/image/nqyopgGFqfziJiX7V6IhbfbzArLZxvy5ukc6iet1dG3u4linA.jpg" alt="Foto kegiatan pendidikan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                            <img src="https://storage.googleapis.com/a1aa/image/qYdgpeEpyR1sVqxWwf3CrQSw6SwFeu4DogpX7HLJAsOp4linA.jpg" alt="Foto kegiatan kesehatan di Yayasan Al-Zahra" class="w-full h-full object-cover hidden">
                        </div>
                    </div>
                </div>
            </div>


    <!-- Campaign Section -->
  <div class="max-w-7xl mx-auto mt-8 relative group">
    <div class="relative z-10">
      <h2 class="text-2xl font-bold mb-4">Program Donasi Yatim dan Dhuafa!</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Campaign Card 1 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img alt="Campaign image 1 showing children in an orphanage" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/SQstlmqDgdbNBJOcj3xPwNNf7SMh9xKHFitlv0dSPr62xQ3JA.jpg" width="300"/>
        <div class="p-4">
          <h3 class="text-lg font-bold">Bantu Anak Yatim Piatu di Panti Asuhan</h3>
          <p class="text-gray-600 mt-2">Mari bantu anak-anak yatim piatu yang membutuhkan tempat tinggal dan pendidikan.</p>
          <div class="mt-4">
            <div class="flex items-center">
              <span class="text-yellow-500 font-bold">Rp 2.000.000</span>
              <span class="text-gray-500 ml-2">terkumpul dari Rp 5.000.000</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
              <div class="bg-yellow-500 h-2 rounded-full" style="width: 40%"></div>
            </div>
          </div>
          <button class="bg-green-600 text-white font-bold py-2 px-4 rounded-full mt-4 w-full">DONASI</button>
        </div>
      </div>

      <!-- Campaign Card 2 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img alt="Campaign image 2 showing a rural village" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/jzlast7gwFqJPZfoB7MRPJ0JbYazyOWmWHTeqMAqZIqsjhuTA.jpg" width="300"/>
        <div class="p-4">
          <h3 class="text-lg font-bold">Bantu Dhuafa di Pedesaan</h3>
          <p class="text-gray-600 mt-2">Donasi untuk membantu dhuafa di pedesaan mendapatkan akses kesehatan dan pangan.</p>
          <div class="mt-4">
            <div class="flex items-center">
              <span class="text-yellow-500 font-bold">Rp 1.500.000</span>
              <span class="text-gray-500 ml-2">terkumpul dari Rp 4.000.000</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
              <div class="bg-yellow-500 h-2 rounded-full" style="width: 37.5%"></div>
            </div>
          </div>
          <button class="bg-green-600 text-white font-bold py-2 px-4 rounded-full mt-4 w-full">DONASI</button>
        </div>
      </div>

      <!-- Campaign Card 3 -->
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img alt="Campaign image 3 showing children studying" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/lNLWZ7STc37IHlyPTR74P89aTbu6QD1DCkJs_YIZBIaY6Yo7E.jpg" width="300"/>
        <div class="p-4">
          <h3 class="text-lg font-bold">Bantu Pendidikan Anak Yatim</h3>
          <p class="text-gray-600 mt-2">Dukung pendidikan anak-anak yatim untuk masa depan yang lebih baik.</p>
          <div class="mt-4">
            <div class="flex items-center">
              <span class="text-yellow-500 font-bold">Rp 3.000.000</span>
              <span class="text-gray-500 ml-2">terkumpul dari Rp 6.000.000</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
              <div class="bg-yellow-500 h-2 rounded-full" style="width: 50%"></div>
            </div>
          </div>
          <button class="bg-green-600 text-white font-bold py-2 px-4 rounded-full mt-4 w-full">DONASI</button>
        </div>
      </div>
    </div>
    <a href="#" class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-50 flex items-center justify-center transition-opacity duration-300">
      <span class="text-lg font-bold text-gray-800 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Learn More</span>
    </a>
  </div>
   
  <!-- Why Ayobantu -->
  <section class="py-12">
   <div class="container mx-auto text-center">
    <h2 class="text-2xl font-bold mb-6">
      Jadilah Bagian dari 
     <span class="text-green-500">
     Perubahan yang Lebih Baik!
     </span>
    </h2>
    <div class="flex justify-center space-x-12">
     <div class="text-center">
      <i class="fas fa-heart text-green-500 text-4xl mb-2">
      </i>
      <h3 class="font-bold">
       Bantu
      </h3>
      <p>
       Bantu Mereka yang Membutuhkan
      </p>
     </div>
     <div class="text-center">
      <i class="fas fa-hand-holding-usd text-green-500 text-4xl mb-2">
      </i>
      <h3 class="font-bold">
       Praktis
      </h3>
      <p>
      Donasi sesuai kemampuanmu 
      </p>
     </div>
     <div class="text-center">
      <i class="fas fa-bullseye text-green-500 text-4xl mb-2">
      </i>
      <h3 class="font-bold">
       Tepat Sasaran
      </h3>
      <p>
      Tepat pada Penerima yang Tepat
      </p>
     </div>
    </div>
   </div>
  </section>
  <!-- Statistics -->
  <section class="bg-green-500 text-white py-12">
   <div class="container mx-auto flex justify-center space-x-12">
    <div class="text-center">
     <i class="fas fa-users text-4xl mb-2">
     </i>
     <h3 class="text-2xl font-bold">
      0
     </h3>
     <p>
      Rekan-Rekan yang sudah membantu
     </p>
    </div>
    <div class="text-center">
     <i class="fas fa-dollar-sign text-4xl mb-2">
     </i>
     <h3 class="text-2xl font-bold">
      Rp. 0
     </h3>
     <p>
      Donasi terkumpul
     </p>
    </div>
   </div>
  </section>
  <main>
  <!-- Brand Peduli -->
  <section class="py-12">
   <div class="container mx-auto text-center">
    <h2 class="text-2xl font-bold mb-6">
     #PeduliBersama
    </h2>
    <div class="flex justify-center space-x-12">
     <img alt="Brand 1 logo" class="brand-logo" height="50" src="https://storage.googleapis.com/a1aa/image/Jdxktd9afQxkViZspXHotkYtLLQkutNVEuO2l5s7IOjAqQ3JA.jpg" width="100"/>
     <img alt="Brand 2 logo" class="brand-logo" height="50" src="https://storage.googleapis.com/a1aa/image/2wISij10hyI0F9FIhKgD6upqja3eHWL551LdATBfZ9f4nCdnA.jpg" width="100"/>
     <img alt="Brand 3 logo" class="brand-logo" height="50" src="https://storage.googleapis.com/a1aa/image/D4qJYzWnN9YIHpqgpuHdCopNTeT8vRdSOPTKr7B4KFNBqQ3JA.jpg" width="100"/>
     <img alt="Brand 4 logo" class="brand-logo" height="50" src="https://storage.googleapis.com/a1aa/image/dNdaavYmeiwBOKW85DUjHJkcSRhfkNRAXznn5afefkp0fUo7E.jpg" width="100"/>
     <img alt="Brand 5 logo" class="brand-logo" height="50" src="https://storage.googleapis.com/a1aa/image/aYet5W4b8X3es0dffUeNFASk171AOfLONJjKAYyWucj3fpQ3JA.jpg" width="100"/>
    </div>
   </div>
  </section>
  </main>
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


  <script>
   let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-item');
            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }
            const offset = -currentSlide * 100;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        // Auto slide every 5 seconds
        setInterval(nextSlide, 5000);

        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.fade-in').forEach(element => {
                observer.observe(element);
            });
        });
        

        
  </script>
 </body>
</html>
