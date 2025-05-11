// Toggle menu open-close
const menuToggle = document.querySelector('.menu-toggle');
const closeMenu = document.querySelector('.close-menu');
const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('click', () => {
  navLinks.classList.add('active');
});

closeMenu.addEventListener('click', () => {
  navLinks.classList.remove('active');
});

// Form Validation dengan jQuery
$(document).ready(function () {
  $("#contactForm").submit(function (e) {
    e.preventDefault();

    let nama = $("#nama").val();
    let email = $("#email").val();
    let telepon = $("#telepon").val();
    let pesan = $("#pesan").val();
    let isValid = true;

    // Validasi wajib isi
    if (nama === "" || email === "" || telepon === "" || pesan === "") {
      alert("Semua kolom wajib diisi.");
      isValid = false;
    }

    // Validasi email
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
      alert("Format email tidak valid.");
      isValid = false;
    }

    // Validasi telepon angka saja
    const teleponPattern = /^[0-9]+$/;
    if (!teleponPattern.test(telepon)) {
      alert("Nomor HP hanya boleh angka.");
      isValid = false;
    }

    // Validasi panjang karakter
    if (nama.length > 50) {
      alert("Nama maksimal 50 karakter.");
      isValid = false;
    }
    if (pesan.length > 200) {
      alert("Pesan maksimal 200 karakter.");
      isValid = false;
    }

    // Jika semua validasi lolos
    if (isValid) {
      alert("Pesan berhasil dikirim! Saya akan segera menghubungi kamu.");
      $(this)[0].reset();
    }
  });
});