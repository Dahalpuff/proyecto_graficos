<!-- Barra Oficial Superior de la ONU -->
<div class="top-official-bar text-white py-1 px-3">
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-primary text-white rounded-pill px-2 py-1"><i class="bi bi-shield-check me-1"></i> Sitio Oficial</span>
            <small class="fw-light">Programa Global de Servicios Jurídicos Gratuitos — Naciones Unidas</small>
        </div>
        <div class="d-none d-md-flex align-items-center gap-3">
            <small><i class="bi bi-globe me-1"></i> Red Internacional de Derechos Humanos</small>
            <span class="text-secondary">|</span>
            <small><i class="bi bi-telephone-fill me-1 text-primary"></i> Línea Urgente: +1 (800) 555-UN-LEGAL</small>
        </div>
    </div>
</div>

<!-- Header Principal con Logo y Navegación -->
<header class="sticky-top bg-white navbar-onu">
    <nav class="navbar navbar-expand-lg navbar-light py-2">
        <div class="container">
            <!-- Logo Institucional ONU y Título del Servicio -->
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('home') }}">
                <!-- Emblema Vectorial ONU estilizado -->
                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle p-2 shadow-sm" style="width: 48px; height: 48px;">
                    <i class="bi bi-award fs-3"></i>
                </div>
                <div>
                    <span class="d-block fw-bold text-dark lh-1" style="font-size: 1.15rem; letter-spacing: -0.2px;">
                        SERVICIOS JURÍDICOS <span class="text-primary">ONU</span>
                    </span>
                    <small class="d-block text-secondary fw-semibold" style="font-size: 0.72rem; letter-spacing: 0.8px;">
                        ASISTENCIA LEGAL GRATUITA Y UNIVERSAL
                    </small>
                </div>
            </a>

            <!-- Botón Hamburguesa Móvil -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPrincipal" aria-controls="navbarPrincipal" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de Navegación -->
            <div class="collapse navbar-collapse" id="navbarPrincipal">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}" href="{{ route('home') }}">
                            <i class="bi bi-house-door me-1"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('nosotros') ? 'active fw-bold' : '' }}" href="{{ route('nosotros') }}">
                            <i class="bi bi-info-circle me-1"></i> Nosotros
                        </a>
                    </li>

                    <!-- Dropdown de Servicios -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('servicios*') ? 'active fw-bold' : '' }}" href="{{ route('servicios') }}" id="navbarServiciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-briefcase me-1"></i> Servicios
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" aria-labelledby="navbarServiciosDropdown">
                            <li>
                                <a class="dropdown-item py-2 {{ request()->routeIs('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">
                                    <i class="bi bi-grid-fill me-2 text-primary"></i> Catálogo Completo
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->routeIs('servicios.derechos-humanos') ? 'active' : '' }}" href="{{ route('servicios.derechos-humanos') }}">
                                    <i class="bi bi-shield-shaded me-2 text-primary"></i> Asesoría en Derechos Humanos
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 {{ request()->routeIs('servicios.migrantes') ? 'active' : '' }}" href="{{ route('servicios.migrantes') }}">
                                    <i class="bi bi-people-fill me-2 text-primary"></i> Migrantes y Refugiados
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('directorio') ? 'active fw-bold' : '' }}" href="{{ route('directorio') }}">
                            <i class="bi bi-person-badge me-1"></i> Directorio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('recursos') ? 'active fw-bold' : '' }}" href="{{ route('recursos') }}">
                            <i class="bi bi-file-earmark-text me-1"></i> Recursos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('faq') ? 'active fw-bold' : '' }}" href="{{ route('faq') }}">
                            <i class="bi bi-question-circle me-1"></i> FAQ
                        </a>
                    </li>

                    <!-- Botón CTA Destacado -->
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-primary px-3 py-2 rounded-pill shadow-sm d-flex align-items-center gap-1 {{ request()->routeIs('solicitud') ? 'active' : '' }}" href="{{ route('solicitud') }}">
                            <i class="bi bi-file-earmark-check-fill"></i>
                            <span>Solicitar Asesoría</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
