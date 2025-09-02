<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Syntax Activity' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

    {{-- Navbar --}}
<nav class="navbar">
    <div class="logo">
        <img src="/images/logo.png" alt="Syntax Squad Logo">
        <span>Syntax Squad</span>
    </div>
    <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/eidref') }}">Eidref</a></li>
            <li><a href="{{ url('/yuri') }}">Yuri</a></li>
            <li><a href="{{ url('/sheran') }}">Sheran</a></li>
            <li><a href="{{ url('/rayver') }}">Rayver</a></li>
    </ul>
</nav>



    {{-- Dynamic Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
<footer class="footer">
    <p>© {{ date('Y') }} Syntax Squad. All Rights Reserved.</p>
</footer>

<script>
    document.querySelectorAll('.about-header').forEach(button => {
        button.addEventListener('click', () => {
            const card = button.parentElement;
            card.classList.toggle('active');
        });
    });
</script>

</body>
</html>
