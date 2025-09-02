<x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biography • Your Name</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body { background: #f8f9fa; }
    .hero { padding: 4rem 0; text-align: center; background: #0d6efd; color: #fff; }
    .hero img { width: 150px; height: 150px; object-fit: cover; border-radius: 50%; border: 4px solid #fff; }
    .section-title { color: #0d6efd; font-weight: 600; margin-bottom: 1rem; }
    .card { border-radius: 12px; }
    .social-links a { font-size: 1.5rem; margin: 0 10px; color: #0d6efd; transition: color 0.3s; }
    .social-links a:hover { color: #0a58ca; }
  </style>
</head>
<body>
  <!-- Hero -->
  <header id="home" class="hero">
    <img src="{{ asset('images/prof3.jpg') }}" class="rounded-circle mb-3 profile-img" alt="Profile Picture">
    <h1 class="mt-3">Sheran Leal</h1>
    <p class="lead">An aspiring IT professional passionate about technology, problem-solving, and innovation.</p>
  </header>

  <!-- Description -->
  <section id="about" class="py-5">
    <div class="container">
      <h2 class="section-title">About Me</h2>
      <div class="card p-4">
        <p>I am Sheran S. Leal an IT student who loves learning about computers and technology. I enjoy exploring how things work, like websites, apps, and computer systems. I want to use my skills to help solve problems and make life easier with the help of technology. I am still learning, but I’m excited to grow and improve. I like working with others on projects and sharing ideas.</p>
      </div>
    </div>
  </section>

  <!-- Educational Background -->
  <section id="education" class="py-5 bg-light">
    <div class="container">
      <h2 class="section-title">Educational Background</h2>
      <div class="card p-4 mb-4">
        <ul class="list-unstyled mb-0">
          <li><i class="bi bi-mortarboard-fill text-primary me-2"></i><strong>Bachelor of Science in Information Technology</strong> – Ongoing</li>
          <li><i class="bi bi-building text-primary me-2"></i>College: ISPSC Tagudin</li>
          <li><i class="bi bi-book text-primary me-2"></i>Senior High School: Amabalayat Integrated School (TVL-ICT)</li>
          <li><i class="bi bi-book text-primary me-2"></i>Junior High School: Amabalayat Integrated School</li>
        </ul>
      </div>

      <!-- Contact Section -->
      <div class="card p-4 mb-4">
        <h2 class="section-title">Contact</h2>
        <p><i class="bi bi-envelope-fill text-primary me-2"></i>Email: sheran.leal1024@gmail.com</p>
        <p><i class="bi bi-telephone-fill text-primary me-2"></i>Phone: +63 946678329</p>
      </div>

      <!-- Social Links -->
      <div class="text-center social-links">
        <a href="https://www.instagram.com/its_nesharap?igsh=MTNwNjF6azBlem5rbg==" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="https://www.facebook.com/share/15GGgfNVm3/" target="_blank"><i class="bi bi-facebook"></i></a>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-layout>