<x-layout :title="'Eidref Jake | Syntax Squad'">

  <!-- Hero Section -->
  <section id="home" class="d-flex" 
    style="background: url('{{ asset('images/herobg.jpg') }}') no-repeat center center/cover; min-height: 100vh; color: white;">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
      <div class="hero-content">
        <h1>Hello, I'm <strong>Eidref Jake</strong></h1>
        <p class="lead">Aspiring Web Developer | Student | Dreamer</p>
      </div>
      <img src="{{ asset('images/prof1.jpg') }}" class="hero-img" alt="My Photo" 
           style="border-radius: 50%; width: 400px; height: 400px; object-fit: cover; border: 4px solid white; margin-left: 50px;">
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-md-4">
          <img src="{{ asset('images/e2.jpg') }}" alt="About Me" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
          <h2>About Me</h2>
          <p>I’m a student passionate about creativity and technology. I enjoy designing and building simple websites and love exploring new things in the tech world.</p>

          <ul class="list-unstyled mt-4">
            <li class="mb-2">
              <img src="https://img.icons8.com/ios-filled/20/000000/birthday.png" alt="Birthdate" class="me-2">
              <strong>Birthdate:</strong> April 3, 2005
            </li>
            <li class="mb-2">
              <img src="https://img.icons8.com/ios-filled/20/000000/marker.png" alt="Birthplace" class="me-2">
              <strong>Birthplace:</strong> Mabalacat City, Pampanga
            </li>
            <li class="mb-2">
              <img src="https://img.icons8.com/ios-filled/20/000000/home.png" alt="Current Address" class="me-2">
              <strong>Current Address:</strong> Luna, La Union
            </li>
            <li class="mb-2">
              <img src="https://img.icons8.com/ios-filled/20/000000/email.png" alt="Email" class="me-2">
              <strong>Email:</strong> edrfjk@gmail.com
            </li>
          </ul>
        </div>
      </div>

      <!-- Timeline -->
      <h3 class="text-center mb-4">My Educational Journey</h3>
      <div class="timeline border-start border-3 ps-4">
        <div class="mb-4">
          <h5>College</h5>
          <p>Currently studying at ISPSC-Tagudin Campus, Program: BSIT</p>
        </div>
        <div class="mb-4">
          <h5>Senior High School</h5>
          <p>Finished at OANARI NHS, Strand: GAS</p>
        </div>
        <div class="mb-4">
          <h5>High School</h5>
          <p>Studied at OANARI NHS</p>
        </div>
        <div class="mb-4">
          <h5>Elementary School</h5>
          <p>Graduated from Oaqui Elementary School</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Skills & Hobbies</h2>
      <div class="row g-4">

        <div class="col-md-4">
          <div class="skill-card p-4 bg-white rounded shadow-sm text-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/html-5.png" alt="Frontend">
            <p class="mt-2">Frontend Development</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-card p-4 bg-white rounded shadow-sm text-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/server.png" alt="Backend">
            <p class="mt-2">Backend Development</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-card p-4 bg-white rounded shadow-sm text-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/network-card.png" alt="Networking">
            <p class="mt-2">Networking</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-card p-4 bg-white rounded shadow-sm text-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/pen.png" alt="Writing">
            <p class="mt-2">Writing Stories</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-card p-4 bg-white rounded shadow-sm text-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/time-management.png" alt="Time Management">
            <p class="mt-2">Time Management</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="skill-card p-4 bg-white rounded shadow-sm text-center">
            <img src="https://img.icons8.com/ios-filled/50/000000/change.png" alt="Adaptability">
            <p class="mt-2">Adaptability</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Recent Projects</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="project-card bg-white rounded shadow-sm">
            <img src="{{ asset('images/proj1.png') }}" alt="Project 1" class="img-fluid rounded-top">
            <div class="p-3">
              <h5>Anney Perfume Shop</h5>
              <p>An online shop for Anney Perfume customers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="project-card bg-white rounded shadow-sm">
            <img src="{{ asset('images/proj2.png') }}" alt="Project 2" class="img-fluid rounded-top">
            <div class="p-3">
              <h5>TravELYU</h5>
              <p>An online booking system for hassle-free vacation in La Union.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="project-card bg-white rounded shadow-sm">
            <img src="{{ asset('images/proj3.png') }}" alt="Project 3" class="img-fluid rounded-top">
            <div class="p-3">
              <h5>SipNServe</h5>
              <p>A web-based coffee shop for coffee lovers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</x-layout>
