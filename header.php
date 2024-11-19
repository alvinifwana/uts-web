<header class="bg-white sticky top-0 inset-x-0 z-50">
  <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="index.php" class="-m-1.5 p-1.5 flex items-center">
        <img class="h-8 w-auto" src="Assets/logo.png" alt="Logo">
        <span class="ml-2 text-xl font-semibold text-gray-900">MovieUniverse</span>
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="hamburger-button">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="about.php" class="text-sm font-semibold text-gray-900">About</a>
      <a href="features.php" class="text-sm font-semibold text-gray-900">Features</a>
      <a href="news.php" class="text-sm font-semibold text-gray-900">News</a>
      <a href="#" class="text-sm font-semibold text-gray-900">Company</a>

      <!-- Button Login dengan gaya yang diberikan -->
      <a href="login.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
    </div>
  </nav>
</header>

<!-- Menu Mobile -->
<div class="lg:hidden hidden" id="mobile-menu">
  <div class="fixed inset-0 z-50 bg-white">
    <div class="flex items-center justify-between p-6">
      <a href="index.php" class="-m-1.5 p-1.5 flex items-center">
        <img class="h-8 w-auto" src="Assets/logo.png" alt="Logo">
        <span class="ml-2 text-xl font-semibold text-gray-900">MovieUniverse</span>
      </a>
      <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-button">
        <span class="sr-only">Close menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="space-y-4 p-6">
      <a href="about.php" class="block text-sm font-semibold text-gray-900">About</a>
      <a href="features.php" class="block text-sm font-semibold text-gray-900">Features</a>
      <a href="#" class="block text-sm font-semibold text-gray-900">Marketplace</a>
      <a href="#" class="block text-sm font-semibold text-gray-900">Company</a>

      <!-- Button Login Mobile dengan gaya yang diberikan -->
      <a href="login.php" class="block rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
  // Menu toggle
  const menuButton = document.getElementById('hamburger-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeButton = document.getElementById('close-button');
  
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  closeButton.addEventListener('click', () => {
    mobileMenu.classList.add('hidden');
  });
</script>
