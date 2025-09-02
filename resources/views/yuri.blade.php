<x-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Introduce Yourself</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <!-- Profile Card -->
    <div class="card mx-auto shadow-lg" style="max-width: 700px;">
      <div class="card-body text-center">
        <img src="{{ asset('images/prof2.jpg') }}" class="rounded-circle mb-3 profile-img" alt="Profile Picture">
        <h3 class="card-title">Hi, I'm Yuri Bib Somera</h3>
        <p class="card-text">
          I'm a dedicated student and aspiring web developer passionate about technology, design, and building meaningful user experiences.
        </p>
      </div>
    </div>

    <!-- About Me Section -->
    <div class="card mt-4 shadow-sm">
      <div class="card-header bg-primary text-white">
        About Me
      </div>
      <div class="card-body">
        <p>Hello! I'm Yuri Bib Somera, who loves learning new things and I'm from Luna, La Union and I consider myself a friendly, curious, and responsible person.</p>
      </div>
    </div>

    <!-- Skills Section -->
    <div class="card mt-4 shadow-sm">
      <div class="card-header bg-success text-white">
        Skills
      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">💬 Communication</li>
          <li class="list-group-item">📸 Photo and Video Editing</li>
          <li class="list-group-item">⚙️ Problem Solving</li>
          <li class="list-group-item">⌛ Time Management</li>
        </ul>
      </div>
    </div>

    <!-- Hobbies Section -->
    <div class="card mt-4 shadow-sm">
      <div class="card-header bg-warning">
        Hobbies & Interests
      </div>
      <div class="card-body">
        <p>In my free time, I enjoy: Dancing, Cooking, Listening to music and discovering new artists. Exploring nature and taking photos.</p>
      </div>
    </div>

    <!-- Contact Section -->
    <div class="card mt-4 shadow-sm mb-5">
      <div class="card-header bg-dark text-white">
        Contact Me
      </div>
      <div class="card-body">
        <p><strong>Email:</strong> yuribibsomera@email.com</p>
        <p><strong>Facebook:</strong> <a href="#" target="_blank">facebook.com/yuribibsomera</a></p>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-layout>