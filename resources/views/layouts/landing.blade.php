<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Discover curated Swiss-inspired and contemporary timepieces. Free shipping, authentic warranty, and timeless design at Watch Galaxy.')">
    <title>@yield('title', config('app.name', 'Watch Galaxy')) — Luxury watches online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --wg-gold: #c9a962;
            --wg-gold-soft: #e8dcc4;
            --wg-ink: #0f1419;
            --wg-muted: #5c6670;
        }
        body {
            font-family: 'Outfit', system-ui, sans-serif;
            color: var(--wg-ink);
            background: #faf9f7;
        }
        h1, h2, h3, .font-display {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }
        .navbar-landing {
            backdrop-filter: blur(12px);
            background: rgba(250, 249, 247, 0.92) !important;
            border-bottom: 1px solid rgba(15, 20, 25, 0.06);
        }
        .hero-landing {
            background: radial-gradient(120% 80% at 70% 0%, rgba(201, 169, 98, 0.18) 0%, transparent 55%),
                linear-gradient(165deg, #0f1419 0%, #1a222d 45%, #0f1419 100%);
            color: #f5f3ef;
        }
        .hero-landing .lead {
            color: rgba(245, 243, 239, 0.78);
        }
        .text-gold {
            color: var(--wg-gold) !important;
        }
        .btn-gold {
            --bs-btn-color: #0f1419;
            --bs-btn-bg: var(--wg-gold);
            --bs-btn-border-color: var(--wg-gold);
            --bs-btn-hover-bg: #b89652;
            --bs-btn-hover-border-color: #b89652;
            --bs-btn-hover-color: #0f1419;
            --bs-btn-active-bg: #a88648;
            --bs-btn-active-border-color: #a88648;
        }
        .card-product {
            border: none;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 0.5rem 1.5rem rgba(15, 20, 25, 0.06);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .card-product:hover {
            transform: translateY(-4px);
            box-shadow: 0 1rem 2rem rgba(15, 20, 25, 0.1);
        }
        .card-product img {
            height: 220px;
            object-fit: cover;
        }
        .section-muted {
            background: #f0eeea;
        }
    </style>
    @stack('styles')
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>
