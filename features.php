<?php
// API Key dari MovieDB
$apiKey = "c82f5d21f0087a28e5cd4065b9a22055";

// Tentukan jumlah halaman yang ingin diambil
$totalPages = 5; // Misalnya mengambil data dari 5 halaman

$movies = [];

for ($page = 1; $page <= $totalPages; $page++) {
    // URL untuk mendapatkan film populer berdasarkan halaman
    $apiUrl = "https://api.themoviedb.org/3/movie/popular?api_key=$apiKey&language=en-US&page=$page";

    // Mengambil data dari API
    $response = file_get_contents($apiUrl);

    if ($response === FALSE) {
        die('Error occurred while fetching data from the API');
    }

    // Decode JSON response
    $data = json_decode($response, true);
    $movies = array_merge($movies, $data['results']); // Gabungkan film dari setiap halaman
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Universe</title>
    
    <!-- Menambahkan CDN untuk AOS (Animate on Scroll) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- AOS Library CSS -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Script untuk AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <style>
        /* Efek hover pada card film */
        .movie-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        /* Efek hover pada gambar film */
        .movie-img-container {
            position: relative;
        }

        .movie-img-container img {
            transition: opacity 0.3s ease;
        }

        .movie-img-container:hover img {
            opacity: 0.8;
        }

        /* Overlay untuk tombol "Lihat Detail" */
        .movie-img-container:hover .overlay {
            opacity: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .movie-card {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .movie-card.loaded {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Memasukkan header -->
    <?php include('header.php'); ?>

    <!-- Halaman Utama - MovieUniverse -->
    <div class="bg-gray-50 py-16 sm:py-24 lg:py-32" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-semibold text-center text-gray-900" data-aos="fade-up">Film Populer</h2>
            </div>

            <!-- Pilihan kategori -->
            <div class="flex justify-center space-x-4 mb-6" data-aos="fade-up" data-aos-delay="100" data-aos="fade-up">
                <?php
                $categories = ['Action', 'Drama', 'Comedy', 'Horror', 'Adventure'];
                foreach ($categories as $cat) {
                    echo "<button class='px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded hover:bg-indigo-500' onclick='filterCategory(\"$cat\")' data-aos='fade-up' data-aos-delay='200'>$cat</button>";
                }
                ?>
            </div>

            <!-- Daftar Film -->
            <div id="movie-list" class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                <?php foreach ($movies as $movie): ?>
                    <div class="movie-card bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 ease-in-out" data-aos="fade-up" data-aos-delay="300">
                        <div class="movie-img-container">
                            <img class="w-full h-64 object-cover" src="https://image.tmdb.org/t/p/w500/<?php echo $movie['poster_path']; ?>" alt="<?php echo $movie['title']; ?>">
                            <div class="overlay">
                                <a href="https://www.themoviedb.org/movie/<?php echo $movie['id']; ?>" target="_blank" class="text-white text-xl font-semibold">Lihat Detail</a>
                            </div>
                        </div>
                        <div class="p-4" data-aos="fade-up">
                            <h3 class="text-lg font-semibold text-gray-900"><?php echo $movie['title']; ?></h3>
                            <p class="mt-2 text-sm text-gray-500"><?php echo substr($movie['overview'], 0, 100) . '...'; ?></p>
                            <p class="mt-2 text-sm text-gray-500">Rating: <?php echo $movie['vote_average']; ?> / 10</p>
                            <p class="text-xs text-gray-400">Rilis: <?php echo date('d M Y', strtotime($movie['release_date'])); ?></p>
                            
                            <!-- Tombol Add to Wishlist -->
                            <div class="mt-4 flex justify-between items-center" data-aos="fade-up">
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-500" onclick="addToWishlist('<?php echo $movie['id']; ?>')" data-aos="fade-up" data-aos-delay="400">Add to Wishlist</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Memasukkan footer -->
    <?php include('footer.php'); ?>

    <!-- Menambahkan AOS JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Inisialisasi AOS
        AOS.init();

        // Fungsi untuk filter kategori film
        function filterCategory(category) {
            const movieCards = document.querySelectorAll('.movie-card');
            const movieList = document.getElementById('movie-list');

            // Menambahkan animasi loading
            movieList.classList.add('loading');
            setTimeout(() => {
                movieCards.forEach(card => {
                    card.classList.remove('loaded');
                });
            }, 200);

            // Simulasi filter (dapat diubah sesuai kategori yang diinginkan)
            setTimeout(() => {
                movieCards.forEach(card => {
                    // Tampilkan animasi loading, kemudian tampilkan film yang sesuai
                    card.classList.add('loaded');
                });
                movieList.classList.remove('loading');
            }, 500);
        }

        // Efek animasi untuk film saat di-load
        window.addEventListener('load', () => {
            const movieCards = document.querySelectorAll('.movie-card');
            movieCards.forEach(card => {
                card.classList.add('loaded');
            });
        });

        // Fungsi untuk menambahkan film ke wishlist (Contoh menggunakan localStorage)
        function addToWishlist(movieId) {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            if (!wishlist.includes(movieId)) {
                wishlist.push(movieId);
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                alert('Film berhasil ditambahkan ke wishlist!');
            } else {
                alert('Film sudah ada di wishlist!');
            }
        }
    </script>

<script>
        // Initialize AOS
        AOS.init({
            duration: 1000, // Animation duration
            once: true, // Apply animation only once
        });
    </script>

</body>
</html>
