<?php
// API Key NewsAPI (Gantilah dengan API key Anda sendiri)
$apiKey = 'feed59e2779d40a2a752deece295233d';
$endpoint = 'https://newsapi.org/v2/top-headlines';

// Parameter default
$country = 'us';
$category = isset($_GET['category']) ? $_GET['category'] : 'general';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$pageSize = 6; // Jumlah berita per halaman

$url = "$endpoint?country=$country&category=$category&apiKey=$apiKey&page=$page&pageSize=$pageSize";

// Melakukan permintaan HTTP menggunakan cURL dengan User-Agent
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: MovieUniverse/1.0',
]);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
$articles = $data && isset($data['status']) && $data['status'] === 'ok' ? $data['articles'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Movie Universe</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<?php include('header.php'); ?>

<div class="px-6 pt-14 lg:px-8 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-center text-gray-900">Berita Terbaru</h2>
        <p class="mt-4 text-lg text-gray-500 text-center">Dapatkan berita terkini dari seluruh dunia. Di sini Anda dapat mengikuti berita terbaru di berbagai kategori.</p>
        
        <!-- Kategori Berita -->
        <div class="flex justify-center space-x-4 mt-6">
            <?php
            $categories = ['general', 'business', 'entertainment', 'health', 'science', 'sports', 'technology'];
            foreach ($categories as $cat) {
                echo "<a href='?category=$cat' class='px-4 py-2 text-sm font-semibold text-white bg-indigo-600 rounded hover:bg-indigo-500'>$cat</a>";
            }
            ?>
        </div>

        <!-- Daftar Berita -->
        <div id="news-container" class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img class="w-full h-48 object-cover rounded-md" src="<?php echo $article['urlToImage'] ?: 'https://via.placeholder.com/150'; ?>" alt="Image" />
                        <h3 class="mt-4 text-xl font-semibold text-gray-900"><?php echo $article['title']; ?></h3>
                        <p class="mt-2 text-gray-600"><?php echo $article['description']; ?></p>
                        <a href="<?php echo $article['url']; ?>" target="_blank" class="mt-4 inline-block text-indigo-600 hover:text-indigo-500">Baca Selengkapnya</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-gray-500">Tidak ada berita terbaru saat ini.</p>
            <?php endif; ?>
        </div>

        <!-- Tombol Load More -->
        <?php if (count($articles) === $pageSize): ?>
            <div class="flex justify-center mt-6">
                <a href="?category=<?php echo $category; ?>&page=<?php echo $page + 1; ?>" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-500">Load More</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
