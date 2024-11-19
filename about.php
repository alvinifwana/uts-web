<?php
include 'koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang MovieUniverse</title>
    <!-- Tailwind CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<?php include('header.php'); ?>

<!-- Tentang MovieUniverse Section -->
<div class="bg-gray-50 py-16 sm:py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-center text-gray-900">Tentang MovieUniverse</h2> <br>
        <p class="mt-4 text-lg text-gray-500 text-center">Selamat datang di MovieUniverse! Kami adalah platform hiburan yang berkomitmen untuk membawa film berkualitas terbaik ke layar Anda. Dengan berbagai genre yang dapat dipilih, kami berfokus untuk memberikan pengalaman menonton yang luar biasa bagi setiap pengguna.</p>
        
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Visi dan Misi Section -->
            <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900">Visi</h3>
                <p class="mt-2 text-gray-500">Visi kami adalah menjadi platform hiburan terdepan yang menyatukan film dari seluruh dunia dengan pengalaman yang personal dan menyenangkan untuk setiap penonton.</p>
            </div>
            <div class="flex flex-col justify-between bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-900">Misi</h3>
                <p class="mt-2 text-gray-500">Misi kami adalah menyediakan pilihan film terbaik dengan teknologi canggih untuk mempermudah pencarian dan memberikan rekomendasi yang sesuai dengan preferensi pribadi setiap pengguna.</p>
            </div>
        </div>
    </div>
</div>

<!-- Sejarah Perusahaan Section -->
<div class="bg-white py-16 sm:py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-center text-gray-900">Sejarah MovieUniverse</h2>
        <p class="mt-4 text-lg text-gray-500 text-center">MovieUniverse dimulai dari sebuah visi besar untuk membuat platform hiburan yang tidak hanya memberikan film, tetapi juga pengalaman menonton yang personal. Didirikan oleh sekelompok penggemar film pada tahun 2021, MovieUniverse bertujuan untuk mempermudah penonton dalam menemukan film terbaik sesuai dengan keinginan mereka.</p>
    </div>
</div>

<!-- Tim MovieUniverse Section -->
<div class="bg-gray-50 py-16 sm:py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-semibold text-gray-900">Tim MovieUniverse</h2>
        <p class="mt-4 text-lg text-gray-500">Kami adalah tim yang berdedikasi untuk memberikan pengalaman hiburan terbaik. Tim kami terdiri dari berbagai profesional di bidang teknologi, desain, dan film.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Tim Member 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img class="w-32 h-32 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Team Member">
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Alvin Ifhwana Eka Diputra</h3>
                <p class="mt-2 text-gray-500">Pengembang Web & Desainer</p>
                <p class="mt-2 text-sm text-gray-500">Alvin adalah pengembang yang berfokus pada pengembangan fitur utama MovieUniverse, serta mendesain antarmuka pengguna yang ramah untuk pengalaman menonton yang lebih baik.</p>
            </div>
            <!-- Tim Member 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img class="w-32 h-32 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Team Member">
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Jessica Amalia</h3>
                <p class="mt-2 text-gray-500">Manajer Produk</p>
                <p class="mt-2 text-sm text-gray-500">Jessica mengelola pengembangan produk dan bertanggung jawab atas strategi konten dan fungsionalitas platform MovieUniverse agar tetap relevan dan mudah digunakan oleh semua penonton.</p>
            </div>
            <!-- Tim Member 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img class="w-32 h-32 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Team Member">
                <h3 class="mt-4 text-lg font-semibold text-gray-900">Michael Tan</h3>
                <p class="mt-2 text-gray-500">Spesialis Keamanan</p>
                <p class="mt-2 text-sm text-gray-500">Michael bertanggung jawab untuk menjaga keamanan data pengguna dan platform MovieUniverse dengan memastikan perlindungan maksimal terhadap kebocoran data dan potensi ancaman keamanan.</p>
            </div>
        </div>
    </div>
</div>

<!-- Fitur MovieUniverse Section -->
<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2 class="text-center text-base/7 font-semibold text-indigo-600">Solusi Hiburan Terbaik</h2>
        <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-gray-950 sm:text-5xl">MovieUniverse: Temukan Film yang Tepat untuk Anda</p>
        <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
            <!-- Mobile Friendly Feature -->
            <div class="relative lg:row-span-2">
                <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                    <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                        <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile Friendly</p>
                        <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Nikmati pengalaman menonton di mana saja dengan antarmuka yang responsif, yang memudahkan penonton untuk menemukan film favorit di perangkat apa pun.</p>
                    </div>
                    <div class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                        <div class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                            <img class="size-full object-cover object-top" src="https://tailwindui.com/plus/img/component-images/bento-03-mobile-friendly.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]"></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
