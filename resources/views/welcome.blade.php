<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payroll Service | Aman & Cepat</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/image/logo.png') }}">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans dark:bg-[#0A1F44] dark:text-white">

  <!-- Navbar -->
  <nav class="bg-[#0A1F44] text-white shadow-lg fixed top-0 w-full z-50 border-b-2 border-[#D4AF37] dark:bg-[#0A1F44]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <div class="flex items-center">
          <span class="text-3xl font-bold text-[#D4AF37]">PayrollService</span>
        </div>
        <div class="hidden md:flex items-center space-x-8">
          <a href="#features" class="hover:text-[#D4AF37] transition duration-300">Fitur</a>
          <a href="#cta" class="hover:text-[#D4AF37] transition duration-300">Mulai</a>
          <a href="/login" class="hover:text-[#D4AF37] transition duration-300">Login</a>
          <a href="/register" class="bg-[#D4AF37] text-[#0A1F44] px-5 py-2 rounded-lg hover:bg-yellow-500 transition duration-300">Register</a>
        </div>
        <!-- Hamburger -->
        <div class="md:hidden">
          <button id="menu-toggle" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-4 bg-[#0A1F44] text-white">
      <a href="#features" class="block hover:text-[#D4AF37] transition duration-300">Fitur</a>
      <a href="#cta" class="block hover:text-[#D4AF37] transition duration-300">Mulai</a>
      <a href="/login" class="block hover:text-[#D4AF37] transition duration-300">Login</a>
      <a href="/register" class="block bg-[#D4AF37] text-[#0A1F44] px-5 py-2 rounded-lg hover:bg-yellow-500 transition duration-300">Register</a>
    </div>
  </nav>

  <!-- Hero -->
  <section class="pt-36 pb-24 bg-gradient-to-b from-[#dbc374]/50 via-[#ffffff] to-white text-center px-4 dark:from-[#0A1F44] dark:to-gray-900">
    <h2 class="text-5xl md:text-6xl font-extrabold text-[#0A1F44] dark:text-white mb-6">Kelola Gaji Karyawan dengan Mudah</h2>
    <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed dark:text-gray-300">
      Solusi payroll otomatis, aman, dan akurat untuk usaha Anda. Hemat waktu dan tenaga dengan sistem kami.
    </p>
    <a href="#cta" class="inline-block bg-[#D4AF37] text-[#0A1F44] px-8 py-4 rounded-xl shadow-lg hover:bg-yellow-500 transition duration-300">Coba Gratis Sekarang</a>
  </section>

  <!-- Features -->
  <section id="features" class="py-20 bg-white dark:bg-[#0A1F44]">
    <div class="max-w-6xl mx-auto px-4">
      <h3 class="text-4xl font-bold text-center text-[#0A1F44] dark:text-[#D4AF37] mb-12">Fitur Unggulan</h3>
      <div class="grid md:grid-cols-3 gap-12">
        <div class="p-8 bg-[#F1F5F9] rounded-xl shadow-lg hover:shadow-xl transition text-center dark:bg-gray-800">
          <div class="bg-[#D4AF37] p-6 rounded-full w-fit mx-auto mb-6 text-4xl text-[#0A1F44]">💰</div>
          <h4 class="text-2xl font-semibold mb-3 text-[#0A1F44] dark:text-[#D4AF37]">Perhitungan Otomatis</h4>
          <p class="text-gray-700 dark:text-gray-300">Hitung gaji, pajak, dan potongan secara otomatis dan akurat.</p>
        </div>
        <div class="p-8 bg-[#F1F5F9] rounded-xl shadow-lg hover:shadow-xl transition text-center dark:bg-gray-800">
          <div class="bg-[#D4AF37] p-6 rounded-full w-fit mx-auto mb-6 text-4xl text-[#0A1F44]">🔒</div>
          <h4 class="text-2xl font-semibold mb-3 text-[#0A1F44] dark:text-[#D4AF37]">Keamanan Data</h4>
          <p class="text-gray-700 dark:text-gray-300">Data payroll terenkripsi dan tersimpan aman di server kami.</p>
        </div>
        <div class="p-8 bg-[#F1F5F9] rounded-xl shadow-lg hover:shadow-xl transition text-center dark:bg-gray-800">
          <div class="bg-[#D4AF37] p-6 rounded-full w-fit mx-auto mb-6 text-4xl text-[#0A1F44]">📈</div>
          <h4 class="text-2xl font-semibold mb-3 text-[#0A1F44] dark:text-[#D4AF37]">Laporan Lengkap</h4>
          <p class="text-gray-700 dark:text-gray-300">Unduh laporan gaji dan slip karyawan kapan saja.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="cta" class="py-20 bg-[#D4AF37] text-[#0A1F44] text-center px-4 dark:bg-[#D4AF37] dark:text-[#0A1F44]">
    <h3 class="text-4xl font-extrabold mb-6">Siap mengelola payroll lebih mudah?</h3>
    <p class="mb-8 text-lg">Daftarkan bisnis Anda dan nikmati kemudahan sistem payroll digital.</p>
    <a href="/register" class="bg-white text-[#0A1F44] px-8 py-4 rounded-lg shadow-xl hover:bg-gray-100 transition duration-300">Daftar Sekarang</a>
  </section>

  <!-- Footer -->
  <footer class="text-center py-8 bg-gray-100 dark:bg-[#0A1F44] text-gray-600 text-sm dark:text-gray-300">
    &copy; 2025 PayrollService. All rights reserved.
  </footer>

  <!-- Script for mobile menu -->
  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    toggleBtn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    // Toggle Dark Mode
    const darkModeToggle = document.createElement('button');
    darkModeToggle.textContent = '🌙';
    darkModeToggle.classList.add('fixed', 'bottom-4', 'right-4', 'text-white', 'bg-[#0A1F44]', 'p-3', 'rounded-full', 'shadow-lg', 'hover:bg-[#1e3a8a]', 'transition');
    document.body.appendChild(darkModeToggle);


    darkModeToggle.addEventListener('click', () => {
      const isDarkMode = document.documentElement.classList.toggle('dark');
      localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
      alert("Apakah Kamu Ingin Mengganti Mode ?")
    });

    if (localStorage.getItem('darkMode') === 'enabled') {
      document.documentElement.classList.add('dark');
    }
  </script>
</body>
</html>
