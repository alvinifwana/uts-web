<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Universe</title>
    <!-- Tailwind CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- AOS Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Script untuk AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="bg-gray-100">

    <?php include('header.php'); ?>

    <!-- Halaman Utama - MovieUniverse -->
    <div class="relative isolate px-6 pt-14 lg:px-8 min-h-screen" data-aos="fade-up">
        <!-- Div untuk gambar -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="Assets/gambar2.webp" alt="Background Image" class="w-full h-full object-cover"/>
        </div>

        <!-- Konten tengah dengan latar belakang untuk teks -->
        <div class="mx-auto max-w-2xl py-20 sm:py-30 lg:py-40 text-center relative z-10 bg-black bg-opacity-75 px-6 py-16 rounded-lg border-8 border-white mt-24"
            data-aos="fade-up">
            <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Movie Universe</h1>
            <p class="mt-8 text-lg font-medium text-white sm:text-xl">Temukan film favoritmu di sini! Jelajahi beragam pilihan film yang siap menemani setiap suasana, dari yang mengharukan hingga yang penuh aksi.</p> 
        </div>
    </div>
</div>

    <!-- Tentang MovieUniverse Section -->
    <div id="tentang-movieuniverse" class="bg-gray-50 py-16 sm:py-24 lg:py-32" data-aos="fade-right">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-semibold text-center text-gray-900">Tentang MovieUniverse</h2> <br>
            <p class="mt-4 text-lg text-gray-500 text-center" data-aos="fade-left">
                MovieUniverse adalah platform hiburan yang didedikasikan untuk menyediakan pengalaman film terbaik bagi penggemar di seluruh dunia. Kami berkomitmen untuk memberikan akses mudah ke berbagai film yang berkualitas, serta menghadirkan konten yang menggugah emosi penonton.
            </p>
            <p class="mt-4 text-lg text-gray-500 text-center" data-aos="fade-left">
                Di MovieUniverse, setiap film adalah perjalanan yang mengundang penonton untuk merasakan dunia yang berbeda. Kami percaya bahwa film tidak hanya hiburan semata, tetapi juga sarana untuk memperkaya kehidupan dengan cerita yang dapat menginspirasi, menghibur, dan membuka pandangan baru.
            </p>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg" data-aos="fade-right">
                    <h3 class="text-xl font-semibold text-gray-900">Visi dan Misi</h3>
                    <p class="mt-2 text-gray-500">Visi kami adalah menjadi platform hiburan terbaik yang menyediakan film berkualitas dan pengalaman menonton yang tak terlupakan bagi setiap individu di seluruh dunia.</p>
                    <p class="mt-4 text-gray-500">Misi kami adalah menghubungkan penonton dengan berbagai macam film, dari yang populer hingga yang kurang dikenal, serta menyediakan fitur yang memungkinkan pengguna untuk menemukan film sesuai dengan preferensi mereka.</p>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg" data-aos="fade-right">
                    <h3 class="text-xl font-semibold text-gray-900">Sejarah Perusahaan</h3>
                    <p class="mt-2 text-gray-500">MovieUniverse dimulai pada tahun 2015 oleh sekelompok penggemar film yang ingin membuat platform yang memungkinkan orang-orang menemukan dan menonton film favorit mereka dengan mudah. Sejak saat itu, kami terus berkembang dan memperkenalkan fitur-fitur baru yang meningkatkan pengalaman menonton bagi pengguna kami.</p>
                    <p class="mt-4 text-gray-500">Dari awal yang sederhana, MovieUniverse kini menjadi salah satu platform hiburan terkemuka yang memiliki lebih dari 10 juta pengguna aktif setiap bulan.</p>
                </div>
            </div>

            <!-- Keunggulan MovieUniverse -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-900">Keunggulan Kami</h3>
                    <p class="mt-2 text-gray-500">- Koleksi Film Lengkap</p>
                    <p class="mt-2 text-gray-500">- Pengalaman Menonton Berkualitas</p>
                    <p class="mt-2 text-gray-500">- Rekomendasi Berdasarkan Preferensi Pengguna</p>
                    <p class="mt-2 text-gray-500">- Tampilan User-friendly</p>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-900">Fasilitas & Teknologi</h3>
                    <p class="mt-2 text-gray-500">MovieUniverse menggunakan teknologi terkini untuk memastikan pengalaman menonton film yang optimal bagi pengguna, termasuk kualitas streaming terbaik dan antarmuka yang mudah digunakan.</p>
                </div>
                <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
                    <h3 class="text-xl font-semibold text-gray-900">Komunitas MovieUniverse</h3>
                    <p class="mt-2 text-gray-500">Kami juga membangun komunitas online yang aktif di mana pengguna dapat berbagi rekomendasi, menilai film, dan berpartisipasi dalam diskusi menarik seputar dunia perfilman.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tim MovieUniverse Section -->
  <div class="bg-white py-16 sm:py-24 lg:py-32" data-aos="fade-left">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-semibold text-gray-900">Tim MovieUniverse</h2>
        <p class="mt-4 text-lg text-gray-500">Kami adalah sekelompok individu yang bersemangat untuk membawa pengalaman menonton film yang luar biasa ke semua orang.</p>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Member 1 -->
            <div class="flex justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center" data-aos="flip-left">
                    <img class="w-32 h-32 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Team Member">
                    <h3 class="mt-4 text-lg font-semibold text-gray-900">Alvin Ifhwana Eka Diputra</h3>
                    <p class="mt-2 text-gray-500">Pengembang Web</p>
                </div>
            </div>
            <!-- Tambahkan lebih banyak anggota tim jika diperlukan -->
        </div>
    </div>



    <!-- Features Section -->
    <div class="bg-gray-50 py-24 sm:py-32" data-aos="fade-up">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-center text-4xl font-semibold text-indigo-600">FILM POPULER</h2>
            <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">Temukan Film Terpopuler Disini</p>
            <div class="mt-10 grid gap-8 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                <div class="relative lg:row-span-2" data-aos="fade-up">                        
                        <div class="relative min-h-[30rem] w-full grow">
                        </div>
                    </div>
                </div>
                <!-- More features can be added here similarly -->
            </div>
        </div>


    <!-- Poster Section -->
    <!-- Container untuk grid film -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 sm:max-w-7xl mx-auto">
        <!-- Komponen untuk gambar film 1 -->
        <div class="relative py-3 w-full rounded-2xl">
            <img
                src="Assets/beauty.jpg"
                class="rounded-2xl w-full h-150 object-cover"
            />
            <div class="text-sm font-bold text-gray-50 absolute top-6 right-3 glassmorphism-25 p-1 rounded-full px-3">
                Beauty And The Beast
            </div>
            <div class="absolute bottom-0 left-0 right-0 glassmorphism-25 h-16 flex p-3 px-5 space-y-2 rounded-b-3xl opacity-95 flex justify-between items-center">
                <div class="flex space-x-3 text-white font-medium items-center">
                    <img
                        src="https://images.unsplash.com/profile-1580909319031-f23261ca6127image?dpr=2&amp;auto=format&amp;fit=crop&amp;w=20&amp;h=20&amp;q=60&amp;crop=faces&amp;bg=fff"
                        class="transform scale-100 hover:scale-105 rounded-full ring-2 ring-offset-white ring-white"
                    />
                    <div>
                        <div>Engin Akyurt</div>
                        <div class="text-sm flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 -ml-1"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="11" r="3"></circle>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                            </svg>
                            Thailand
                        </div>
                    </div>
                </div>
                <div class="flex items-center text-gray-50 space-x-2">
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            <line x1="12" y1="12" x2="12" y2="12.01"></line>
                            <line x1="8" y1="12" x2="8" y2="12.01"></line>
                            <line x1="16" y1="12" x2="16" y2="12.01"></line>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Komponen untuk gambar film 2 (salin yang sama dan ubah URL gambar, judul, dll) -->
        <div class="relative py-3 w-full rounded-2xl"  data-aos="fade-up">
            <img
                src="Assets/dark.jpg"
                class="rounded-2xl w-full h-150 object-cover"
            />
            <div class="text-sm font-bold text-gray-50 absolute top-6 right-3 glassmorphism-25 p-1 rounded-full px-3">
                The Dark Knight
            </div>
            <div class="absolute bottom-0 left-0 right-0 glassmorphism-25 h-16 flex p-3 px-5 space-y-2 rounded-b-3xl opacity-95 flex justify-between items-center">
                <div class="flex space-x-3 text-white font-medium items-center">
                    <img
                        src="https://images.unsplash.com/profile-1580909319031-f23261ca6127image?dpr=2&amp;auto=format&amp;fit=crop&amp;w=20&amp;h=20&amp;q=60&amp;crop=faces&amp;bg=fff"
                        class="transform scale-100 hover:scale-105 rounded-full ring-2 ring-offset-white ring-white"
                    />
                    <div>
                        <div>Jane Doe</div>
                        <div class="text-sm flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 -ml-1"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="11" r="3"></circle>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                            </svg>
                            Spain
                        </div>
                    </div>
                </div>
                <div class="flex items-center text-gray-50 space-x-2">
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            <line x1="12" y1="12" x2="12" y2="12.01"></line>
                            <line x1="8" y1="12" x2="8" y2="12.01"></line>
                            <line x1="16" y1="12" x2="16" y2="12.01"></line>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="relative py-3 w-full rounded-2xl" data-aos="fade-up">
            <img
                src="Assets/aot.webp"
                class="rounded-2xl w-full h-150 object-cover"
            />
            <div class="text-sm font-bold text-gray-50 absolute top-6 right-3 glassmorphism-25 p-1 rounded-full px-3">
                Attack On Titan
            </div>
            <div class="absolute bottom-0 left-0 right-0 glassmorphism-25 h-16 flex p-3 px-5 space-y-2 rounded-b-3xl opacity-95 flex justify-between items-center">
                <div class="flex space-x-3 text-white font-medium items-center">
                    <img
                        src="https://images.unsplash.com/profile-1580909319031-f23261ca6127image?dpr=2&amp;auto=format&amp;fit=crop&amp;w=20&amp;h=20&amp;q=60&amp;crop=faces&amp;bg=fff"
                        class="transform scale-100 hover:scale-105 rounded-full ring-2 ring-offset-white ring-white"
                    />
                    <div>
                        <div>Jane Doe</div>
                        <div class="text-sm flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 -ml-1"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="11" r="3"></circle>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                            </svg>
                            Spain
                        </div>
                    </div>
                </div>
                <div class="flex items-center text-gray-50 space-x-2">
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            <line x1="12" y1="12" x2="12" y2="12.01"></line>
                            <line x1="8" y1="12" x2="8" y2="12.01"></line>
                            <line x1="16" y1="12" x2="16" y2="12.01"></line>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="relative py-3 w-full rounded-2xl" data-aos="fade-up">
            <img
                src="Assets/breaking bad.jpg"
                class="rounded-2xl w-full h-150 object-cover"
            />
            <div class="text-sm font-bold text-gray-50 absolute top-6 right-3 glassmorphism-25 p-1 rounded-full px-3">
                Breaking Bad
            </div>
            <div class="absolute bottom-0 left-0 right-0 glassmorphism-25 h-16 flex p-3 px-5 space-y-2 rounded-b-3xl opacity-95 flex justify-between items-center">
                <div class="flex space-x-3 text-white font-medium items-center">
                    <img
                        src="https://images.unsplash.com/profile-1580909319031-f23261ca6127image?dpr=2&amp;auto=format&amp;fit=crop&amp;w=20&amp;h=20&amp;q=60&amp;crop=faces&amp;bg=fff"
                        class="transform scale-100 hover:scale-105 rounded-full ring-2 ring-offset-white ring-white"
                    />
                    <div>
                        <div>Jane Doe</div>
                        <div class="text-sm flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 -ml-1"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="11" r="3"></circle>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                            </svg>
                            Spain
                        </div>
                    </div>
                </div>
                <div class="flex items-center text-gray-50 space-x-2">
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            <line x1="12" y1="12" x2="12" y2="12.01"></line>
                            <line x1="8" y1="12" x2="8" y2="12.01"></line>
                            <line x1="16" y1="12" x2="16" y2="12.01"></line>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="relative py-3 w-full rounded-2xl" data-aos="fade-up">
            <img
                src="Assets/peaky.webp"
                class="rounded-2xl w-full h-150 object-cover"
            />
            <div class="text-sm font-bold text-gray-50 absolute top-6 right-3 glassmorphism-25 p-1 rounded-full px-3">
                
            </div>
            <div class="absolute bottom-0 left-0 right-0 glassmorphism-25 h-16 flex p-3 px-5 space-y-2 rounded-b-3xl opacity-95 flex justify-between items-center">
                <div class="flex space-x-3 text-white font-medium items-center">
                    <img
                        src="https://images.unsplash.com/profile-1580909319031-f23261ca6127image?dpr=2&amp;auto=format&amp;fit=crop&amp;w=20&amp;h=20&amp;q=60&amp;crop=faces&amp;bg=fff"
                        class="transform scale-100 hover:scale-105 rounded-full ring-2 ring-offset-white ring-white"
                    />
                    <div>
                        <div>Jane Doe</div>
                        <div class="text-sm flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="mr-1 -ml-1"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="11" r="3"></circle>
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                            </svg>
                            Spain
                        </div>
                    </div>
                </div>
                <div class="flex items-center text-gray-50 space-x-2">
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                            <line x1="12" y1="12" x2="12" y2="12.01"></line>
                            <line x1="8" y1="12" x2="8" y2="12.01"></line>
                            <line x1="16" y1="12" x2="16" y2="12.01"></line>
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="transform scale-100 hover:scale-110"
                            width="32"
                            height="32"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Tambahkan lebih banyak komponen sesuai kebutuhan -->
    </div>
</div>


    
    

    

    <?php include('footer.php'); ?>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000, // Animation duration
            once: true, // Apply animation only once
        });
    </script>
</body>

</html>
