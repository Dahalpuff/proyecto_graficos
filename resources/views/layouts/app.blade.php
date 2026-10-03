<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Inicio') | Servicios Jurídicos Gratuitos - ONU</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="@yield('meta_description', 'Plataforma oficial de Servicios Jurídicos Gratuitos de las Naciones Unidas. Asistencia legal sin costo en Derechos Humanos, Refugio y Migración.')">
    <meta name="author" content="Naciones Unidas - Programa de Asistencia Jurídica Gratuita">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilos Personalizados ONU -->
    <style>
        :root {
            --onu-blue: #009edb;
            --onu-dark-blue: #003366;
            --onu-navy: #0b1f3a;
            --onu-gold: #c59b27;
            --onu-light-bg: #f4f7fb;
            --font-main: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }

        body {
            font-family: var(--font-main);
            color: #2c3e50;
            background-color: #f8fafc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1 0 auto;
        }

        /* Paleta ONU para Bootstrap */
        .bg-primary {
            background-color: var(--onu-blue) !important;
        }

        .text-primary {
            color: var(--onu-blue) !important;
        }

        .border-primary {
            border-color: var(--onu-blue) !important;
        }

        .btn-primary {
            background-color: var(--onu-blue);
            border-color: var(--onu-blue);
            font-weight: 600;
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: #0087bc;
            border-color: #0087bc;
        }

        .btn-outline-primary {
            color: var(--onu-blue);
            border-color: var(--onu-blue);
            font-weight: 600;
        }

        .btn-outline-primary:hover {
            background-color: var(--onu-blue);
            border-color: var(--onu-blue);
            color: #fff;
        }

        .bg-onu-navy {
            background-color: var(--onu-navy) !important;
        }

        .bg-onu-dark-blue {
            background-color: var(--onu-dark-blue) !important;
        }

        .text-onu-gold {
            color: var(--onu-gold) !important;
        }

        /* Banner superior */
        .top-official-bar {
            background-color: #05192d;
            font-size: 0.8rem;
            letter-spacing: 0.3px;
        }

        /* Barra de navegación */
        .navbar-onu {
            box-shadow: 0 2px 12px rgba(0, 51, 102, 0.08);
            border-bottom: 3px solid var(--onu-blue);
        }

        .navbar-onu .nav-link {
            font-weight: 500;
            color: #1e293b;
            padding: 0.5rem 0.9rem;
            border-radius: 0.375rem;
            transition: all 0.2s ease-in-out;
        }

        .navbar-onu .nav-link:hover, 
        .navbar-onu .nav-link.active {
            color: var(--onu-blue) !important;
            background-color: rgba(0, 158, 219, 0.08);
        }

        /* Tarjetas */
        .card {
            border: 1px solid rgba(0, 51, 102, 0.08);
            border-radius: 0.75rem;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            box-shadow: 0 8px 24px rgba(0, 51, 102, 0.08);
        }

        .card-header {
            background-color: #ffffff;
            border-bottom: 1px solid rgba(0, 51, 102, 0.06);
            font-weight: 700;
        }

        /* Breadcrumb personalizado */
        .breadcrumb-wrapper {
            background-color: #eef3f8;
            border-bottom: 1px solid #e2e8f0;
        }

        /* Hero Banner institucional */
        .page-hero-banner {
            background: linear-gradient(135deg, var(--onu-dark-blue) 0%, var(--onu-navy) 100%);
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .page-hero-banner::after {
            content: "";
            position: absolute;
            right: -50px;
            bottom: -50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0, 158, 219, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Sidebar Widgets */
        .sidebar-widget {
            border-left: 4px solid var(--onu-blue);
        }

        /* Footer */
        footer {
            background-color: var(--onu-navy);
            color: #e2e8f0;
            border-top: 4px solid var(--onu-blue);
        }

        footer a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .footer-bottom {
            background-color: #05101d;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Header Reutilizable -->
    @include('partials.header')

    <!-- Área Principal de la Aplicación -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Reutilizable -->
    @include('partials.footer')

    <!-- Bootstrap 5 Bundle con Popper (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>
