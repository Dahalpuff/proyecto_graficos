@extends('layouts.app')

@section('title', 'Inicio - Asistencia Legal Gratuita')

@section('meta_description', 'Portal oficial de Servicios Jurídicos Gratuitos de la ONU. Acceso equitativo a la justicia, defensa de los derechos humanos y protección a migrantes.')

@section('content')

<!-- Hero Section Principal -->
<section class="page-hero-banner py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-3 fs-6">
                    <i class="bi bi-patch-check-fill me-1"></i> Mandato Oficial de las Naciones Unidas
                </span>
                <h1 class="display-5 fw-bold text-white mb-3">
                    Justicia, Dignidad y Defensa Legal Gratuita para Todos
                </h1>
                <p class="lead text-light opacity-90 mb-4">
                    Garantizamos el acceso universal e imparcial a la justicia. Si eres víctima de violaciones a tus derechos humanos o requieres protección internacional por refugio o migración, nuestros abogados acreditados te asistirán sin ningún costo.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('solicitud') }}" class="btn btn-primary btn-lg px-4 py-3 rounded-pill shadow">
                        <i class="bi bi-file-earmark-check-fill me-2"></i> Solicitar Asesoría Inmediata
                    </a>
                    <a href="{{ route('servicios') }}" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill">
                        <i class="bi bi-grid-3x3-gap-fill me-2"></i> Explorar Catálogo de Servicios
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="card bg-white text-dark shadow-lg border-0 p-3">
                    <div class="card-body text-center">
                        <div class="d-inline-flex p-3 rounded-circle bg-light text-primary mb-3">
                            <i class="bi bi-shield-fill-check fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">100% Gratuito y Confidencial</h4>
                        <p class="text-secondary small mb-3">
                            Protegido bajo el estatus diplomático y el secreto profesional internacional de las Naciones Unidas.
                        </p>
                        <div class="list-group list-group-flush text-start small mb-3">
                            <div class="list-group-item px-0 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i> Sin cobros ni tarifas ocultas
                            </div>
                            <div class="list-group-item px-0 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i> Abogados expertos acreditados
                            </div>
                            <div class="list-group-item px-0 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill text-success me-2"></i> Cobertura multinacional
                            </div>
                        </div>
                        <a href="{{ route('nosotros') }}" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                            Conocer nuestro mandato <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Barra de Estadísticas Rápidas -->
<section class="bg-white py-3 border-bottom shadow-sm">
    <div class="container">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3">
                <h3 class="fw-bold text-primary mb-0">+52,000</h3>
                <small class="text-secondary fw-semibold">Casos Atendidos</small>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold text-primary mb-0">100%</h3>
                <small class="text-secondary fw-semibold">Sin Costo Económico</small>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold text-primary mb-0">48 Países</h3>
                <small class="text-secondary fw-semibold">Red de Asistencia</small>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="fw-bold text-primary mb-0">94%</h3>
                <small class="text-secondary fw-semibold">Resoluciones Favorables</small>
            </div>
        </div>
    </div>
</section>

<!-- Área Principal: Estructura Wireframe (Sección Principal + Sidebar) -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Columna Principal: Secciones de Contenido (8 Cols) -->
            <div class="col-lg-8">
                
                <!-- Sección 1: Pilares de Acción Jurídica -->
                <div class="mb-5">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <span class="text-primary fw-bold text-uppercase small">Especialidades Fundamentales</span>
                            <h2 class="h2 fw-bold mb-1">Pilares de Asistencia Legal</h2>
                        </div>
                        <a href="{{ route('servicios') }}" class="btn btn-sm btn-outline-primary d-none d-md-inline-block rounded-pill">
                            Ver todos <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                    <div class="row g-3">
                        <!-- Tarjeta 1: DDHH -->
                        <div class="col-md-6">
                            <div class="card h-100 p-2">
                                <div class="card-body d-flex flex-col flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="p-2 rounded bg-light text-primary">
                                            <i class="bi bi-shield-shaded fs-3"></i>
                                        </div>
                                        <span class="badge bg-primary">Prioritario</span>
                                    </div>
                                    <h4 class="card-title fw-bold mb-2">Derechos Humanos</h4>
                                    <p class="card-text text-secondary small flex-grow-1">
                                        Representación en casos de detención arbitraria, tortura, discriminación sistemática y vulneración de garantías individuales ante comités de la ONU.
                                    </p>
                                    <a href="{{ route('servicios.derechos-humanos') }}" class="btn btn-outline-primary btn-sm mt-3 rounded-pill">
                                        Detalles del Servicio <i class="bi bi-chevron-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 2: Migrantes y Asilo -->
                        <div class="col-md-6">
                            <div class="card h-100 p-2">
                                <div class="card-body d-flex flex-col flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="p-2 rounded bg-light text-primary">
                                            <i class="bi bi-people-fill fs-3"></i>
                                        </div>
                                        <span class="badge bg-info text-dark">Protección</span>
                                    </div>
                                    <h4 class="card-title fw-bold mb-2">Migrantes y Refugiados</h4>
                                    <p class="card-text text-secondary small flex-grow-1">
                                        Trámites de solicitud de refugio, protección contra la devolución forzosa (Non-Refoulement) y regularización migratoria humanitaria.
                                    </p>
                                    <a href="{{ route('servicios.migrantes') }}" class="btn btn-outline-primary btn-sm mt-3 rounded-pill">
                                        Detalles del Servicio <i class="bi bi-chevron-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 3: Violencia de Género -->
                        <div class="col-md-6">
                            <div class="card h-100 p-2">
                                <div class="card-body d-flex flex-col flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="p-2 rounded bg-light text-primary">
                                            <i class="bi bi-gender-ambiguous fs-3"></i>
                                        </div>
                                        <span class="badge bg-secondary">Urgente</span>
                                    </div>
                                    <h4 class="card-title fw-bold mb-2">Violencia y Vulnerabilidad</h4>
                                    <p class="card-text text-secondary small flex-grow-1">
                                        Medidas cautelares urgentes para mujeres, menores en riesgo, activistas amenazados y comunidades vulneradas.
                                    </p>
                                    <a href="{{ route('servicios') }}" class="btn btn-outline-primary btn-sm mt-3 rounded-pill">
                                        Consultar Apoyo <i class="bi bi-chevron-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta 4: Mediación y DESC -->
                        <div class="col-md-6">
                            <div class="card h-100 p-2">
                                <div class="card-body d-flex flex-col flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="p-2 rounded bg-light text-primary">
                                            <i class="bi bi-briefcase-fill fs-3"></i>
                                        </div>
                                        <span class="badge bg-light text-dark border">Comunitario</span>
                                    </div>
                                    <h4 class="card-title fw-bold mb-2">Derechos DESC y Tierras</h4>
                                    <p class="card-text text-secondary small flex-grow-1">
                                        Defensa de derechos económicos, sociales, culturales y ambientales para comunidades indígenas y trabajadores desprotegidos.
                                    </p>
                                    <a href="{{ route('servicios') }}" class="btn btn-outline-primary btn-sm mt-3 rounded-pill">
                                        Consultar Apoyo <i class="bi bi-chevron-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 2: Cómo Funciona el Proceso (Wireframe Step Flow) -->
                <div class="card p-3 mb-4 bg-light border-0 shadow-sm">
                    <div class="card-body">
                        <h3 class="h3 fw-bold mb-2">¿Cómo acceder a la Asistencia Jurídica Gratuita?</h3>
                        <p class="text-secondary small mb-4">
                            Nuestro protocolo de atención garantiza celeridad, rigor técnico y confidencialidad en cuatro fases:
                        </p>

                        <div class="row g-3">
                            <div class="col-md-6 col-lg-3">
                                <div class="bg-white p-3 rounded h-100 border text-center">
                                    <span class="badge bg-primary rounded-circle p-2 fs-6 mb-2">01</span>
                                    <h6 class="fw-bold mb-1">Solicitud</h6>
                                    <p class="small text-secondary mb-0">Completas el formulario seguro con los hechos de tu caso.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="bg-white p-3 rounded h-100 border text-center">
                                    <span class="badge bg-primary rounded-circle p-2 fs-6 mb-2">02</span>
                                    <h6 class="fw-bold mb-1">Evaluación</h6>
                                    <p class="small text-secondary mb-0">Un comité letrado examina la viabilidad y urgencia en 48 horas.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="bg-white p-3 rounded h-100 border text-center">
                                    <span class="badge bg-primary rounded-circle p-2 fs-6 mb-2">03</span>
                                    <h6 class="fw-bold mb-1">Asignación</h6>
                                    <p class="small text-secondary mb-0">Te vinculamos con un abogado especialista pro-bono acreditado.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="bg-white p-3 rounded h-100 border text-center">
                                    <span class="badge bg-primary rounded-circle p-2 fs-6 mb-2">04</span>
                                    <h6 class="fw-bold mb-1">Defensa</h6>
                                    <p class="small text-secondary mb-0">Acompañamiento, redacción de recursos y litigio estratégico.</p>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ route('solicitud') }}" class="btn btn-primary px-4 py-2 rounded-pill">
                                Comenzar Paso 1: Enviar Caso Ahora
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Banner de Compromiso Institucional -->
                <div class="p-4 rounded-3 text-white bg-primary d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                    <div>
                        <h4 class="fw-bold mb-1"><i class="bi bi-shield-check me-2"></i> Compromiso con los ODS 2030</h4>
                        <p class="mb-0 small opacity-90">Contribuimos activamente al Objetivo 16: Paz, Justicia e Instituciones Sólidas en todo el mundo.</p>
                    </div>
                    <a href="{{ route('nosotros') }}" class="btn btn-light text-primary fw-bold text-nowrap rounded-pill">
                        Saber Más
                    </a>
                </div>

            </div>

            <!-- Columna Sidebar Lateral: Widgets y Acciones Rápidas (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget 1: Canal de Atención Urgente -->
                <div class="card border-primary mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white d-flex align-items-center gap-2 py-3">
                        <i class="bi bi-exclamation-octagon-fill fs-5"></i>
                        <span class="fw-bold">Línea de Urgencia 24/7</span>
                    </div>
                    <div class="card-body">
                        <p class="small text-secondary mb-3">
                            Si existe peligro inminente de expulsión forzada, privación arbitraria de la libertad o riesgo físico grave:
                        </p>
                        <div class="p-3 bg-light rounded text-center mb-3 border">
                            <span class="d-block small text-secondary">Teléfono de Emergencia Internacional:</span>
                            <span class="fs-5 fw-bold text-primary">+1 (800) 555-8653</span>
                        </div>
                        <a href="{{ route('solicitud') }}" class="btn btn-outline-danger w-100 btn-sm rounded-pill fw-bold">
                            <i class="bi bi-lightning-fill me-1"></i> Formulario de Trámite Urgente
                        </a>
                    </div>
                </div>

                <!-- Widget 2: Directorio de Letrados Acreditados -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-people text-primary fs-4"></i>
                            <h5 class="fw-bold mb-0">Red de Abogados</h5>
                        </div>
                        <p class="small text-secondary mb-3">
                            Más de 350 juristas voluntarios y defensores acreditados en derecho internacional listos para asistirte.
                        </p>
                        <a href="{{ route('directorio') }}" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                            <i class="bi bi-search me-1"></i> Explorar Directorio
                        </a>
                    </div>
                </div>

                <!-- Widget 3: Documentos y Minutas Rápidas -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-folder2-open text-primary fs-4"></i>
                            <h5 class="fw-bold mb-0">Modelos Legales</h5>
                        </div>
                        <p class="small text-secondary mb-3">
                            Descarga plantillas de habeas corpus, solicitudes de asilo y recursos de protección de derechos fundamentales.
                        </p>
                        <a href="{{ route('recursos') }}" class="btn btn-outline-secondary btn-sm w-100 rounded-pill">
                            <i class="bi bi-download me-1"></i> Ir al Centro de Recursos
                        </a>
                    </div>
                </div>

                <!-- Widget 4: Preguntas Frecuentes Destacadas -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-question-diamond text-primary"></i> Dudas Comunes
                        </h6>
                        <ul class="list-unstyled small d-flex flex-column gap-2 mb-3">
                            <li>
                                <a href="{{ route('faq') }}" class="text-decoration-none text-dark d-flex align-items-start gap-1">
                                    <i class="bi bi-caret-right-fill text-primary"></i> ¿El servicio es realmente 100% gratuito?
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}" class="text-decoration-none text-dark d-flex align-items-start gap-1">
                                    <i class="bi bi-caret-right-fill text-primary"></i> ¿Comparten mis datos con el gobierno de mi país?
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}" class="text-decoration-none text-dark d-flex align-items-start gap-1">
                                    <i class="bi bi-caret-right-fill text-primary"></i> ¿Cuánto tarda en asignarse un abogado?
                                </a>
                            </li>
                        </ul>
                        <a href="{{ route('faq') }}" class="btn btn-link text-primary p-0 small fw-bold text-decoration-none">
                            Ver todas las 12 preguntas <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
