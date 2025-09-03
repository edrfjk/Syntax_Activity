<x-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Biography</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #4a90e2, #9013fe);
        color: #fff;
      }
      .container {
        max-width: 800px;
        margin: 40px auto;
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
      }
      .profile-pic {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        display: block;
        margin: 0 auto 20px;
        border: 3px solid #fff;
      }
      h1,
      h2 {
        text-align: center;
        margin-bottom: 10px;
        color: #ffd700;
      }
      p {
        line-height: 1.6;
        text-align: center;
      }
      ul {
        list-style: none;
        padding: 0;
        text-align: center;
      }
      li {
        padding: 6px 0;
      }
      .contact {
        margin-top: 20px;
        text-align: center;
      }
      .contact a {
        color: #00e6ff;
        text-decoration: none;
      }
      .contact a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <img src="{{ asset('images/prof4.jpg') }}"  alt="My Photo" class="profile-pic" />
      <h1>Your Name</h1>
      <p>
        I’m Rayver John B. Leal. I love learning new things about technology and design. I enjoy web development  and mobile app, and my goal is to use my skills to create projects that can help others.
      </p>

      <h2>Educational Background</h2>
      <ul>
        <li>Bachelor of Science in Information Technology – Ilocos Sur Polytechnic State College</li>
        <li>Senior High School – Ambalayat Integrated School</li>
        <li>Junior High School – Tagudin National High School</li>
      </ul>

      <h2>Contact</h2>
      <div class="contact">
        <p>
          Email:
          <a href="rayverleal21@gmail.com">rayverleal21.com</a>
        </p>
        <p>Phone: <a href="+639166354228">+639166354228</a></p>
      </div>
    </div>
  </body>
</html>
</x-layout>
