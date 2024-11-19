<?php
session_start();
include 'koneksi/koneksi.php'; // Menghubungkan ke database

// Proses login saat form dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Query untuk memeriksa apakah email ada di database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Memverifikasi password yang diinput
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $email; // Menyimpan email dalam session untuk akses login
            header('Location: index.php'); // Redirect ke halaman utama setelah login
            exit;
        } else {
            $error_message = "Email atau password salah!";
        }
    } else {
        $error_message = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-20 w-auto" src="Assets/logo.png" alt="Your Company">
            <h2 class="mt-28 text-center text-2xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <!-- Form Login -->
            <form class="space-y-6 border-2 border-gray-300 rounded-lg p-6" action="login.php" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="mt-2 relative">
                        <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm text-gray-400">
                            <i id="toggle-icon" class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <?php if (isset($error_message)): ?>
                    <p class="text-red-500 text-center"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button><br>
                    <a href="register.php">
    <button type="button" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Sign Up
    </button>
</a>

                </div>
            </form>

            <!-- Opsi Login dengan Akun Eksternal -->
            <div class="mt-6 text-center">
                <button class="flex items-center justify-center w-full py-2 px-4 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-600 mb-4">
                    <i class="fab fa-google h-5 w-5 mr-2"></i> Sign in with Google
                </button>
                <button class="flex items-center justify-center w-full py-2 px-4 border border-gray-300 rounded-md text-sm text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub" class="h-5 w-5 mr-2">
                    Sign in with GitHub
                </button>
            </div>

            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <a href="register.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign up</a>
            </p>
        </div>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.getElementById('toggle-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
