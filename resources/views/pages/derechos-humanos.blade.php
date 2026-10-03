@extends('layouts.app')

@section('title', 'Asesoría en Derechos Humanos')

@section('meta_description', 'Defensa legal y medidas cautelares internacionales en Derechos Humanos bajo mecanismos de las Naciones Unidas. Asistencia gratuita.')

@section('content')

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('servicios') }}" class="text-decoration-none text-primary">Servicios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Derechos Humanos</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Servicio Especializado</span>
                <h1 class="h1 fw-bold text-white mb-2">Defensa y Litigio en Derechos Humanos</h1>
                <p class="text-light opacity-90 mb-0">
                    Mecanismos de protección jurídica internacional y tutela efectiva para personas y comunidades frente a abusos de poder y violaciones a las garantías fundamentales.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Área Principal: Estructura Wireframe (Contenido + Sidebar) -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Columna de Contenido Principal (8 Cols) -->
            <div class="col-lg-8">
                
                <!-- Sección 1: Alcance del Servicio -->
                <div class="card p-4 mb-4">
                    <div class="card-body">
                        <span class="text-primary fw-bold text-uppercase small">Marco Internacional</span>
                        <h2 class="h2 fw-bold mb-3">Litigio Estratégico ante Comités y Relatorías de la ONU</h2>
                        <p class="text-secondary">
                            Cuando los recursos judiciales internos de un Estado fallan, son ineficaces o carecen de independencia, la comunidad internacional cuenta con mecanismos jurídicos vinculantes para restablecer el derecho vulnerado. Nuestros abogados especialistas patrocinan de forma gratuita casos de alto impacto ante los <strong>Órganos de Tratados de las Naciones Unidas</strong>.
                        </p>
                        
                        <div class="alert alert-primary d-flex align-items-center gap-3 p-3 my-3">
                            <i class="bi bi-shield-lock-fill fs-2"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Protección Reforzada y Confidencialidad</h6>
                                <p class="small mb-0 opacity-90">Todas las comunicaciones gozan de sigilo diplomático internacional para preservar la seguridad de las víctimas y sus familias.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sección 2: Violaciones que Atendemos -->
                <div class="mb-5">
                    <h3 class="h3 fw-bold mb-3">Situaciones y Casos Atendidos</h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card h-100 p-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2 text-primary">
                                    <i class="bi bi-person-x-fill fs-4"></i>
                                    <h5 class="fw-bold mb-0">Detención Arbitraria</h5>
                                </div>
                                <p class="small text-secondary mb-0">
                                    Casos de privación de la libertad sin orden judicial, prolongación ilegal de prisión preventiva o confinamiento por motivos ideológicos.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2 text-primary">
                                    <i class="bi bi-exclamation-triangle-fill fs-4"></i>
                                    <h5 class="fw-bold mb-0">Tortura y Tratos Inhumanos</h5>
                                </div>
                                <p class="small text-secondary mb-0">
                                    Documentación médica y forense bajo el Protocolo de Estambul e interposición de denuncias ante el Comité contra la Tortura (CAT).
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2 text-primary">
                                    <i class="bi bi-megaphone-fill fs-4"></i>
                                    <h5 class="fw-bold mb-0">Defensores y Periodistas</h5>
                                </div>
                                <p class="small text-secondary mb-0">
                                    Solicitud de medidas cautelares y salvaguarda para comunicadores y líderes comunitarios bajo hostigamiento o amenazas de muerte.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-3 bg-light border">
                                <div class="d-flex align-items-center gap-2 mb-2 text-primary">
                                    <i class="bi bi-journal-check fs-4"></i>
                                    <h5 class="fw-bold mb-0">Debido Proceso Legal</h5>
                                </div>
                                <p class="small text-secondary mb-0">
                                    Juicios viciados por falta de defensa técnica competente, alteración de pruebas o denegación de acceso al expediente por parte de autoridades.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Fases de la Intervención Jurídica -->
                <div class="card p-4">
                    <div class="card-body">
                        <h3 class="h3 fw-bold mb-3">Fases de la Asistencia Legal en DDHH</h3>
                        
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3 align-items-start">
                                <span class="badge bg-primary rounded-circle p-2 fs-6">1</span>
                                <div>
                                    <h6 class="fw-bold mb-1">Evaluación de Agotamiento de Recursos Internos</h6>
                                    <p class="small text-secondary mb-0">Revisamos el historial procesal en el país para constatar la denegación de justicia o la excepción por retardo injustificado.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <span class="badge bg-primary rounded-circle p-2 fs-6">2</span>
                                <div>
                                    <h6 class="fw-bold mb-1">Petición de Medidas Provisionales de Urgencia</h6>
                                    <p class="small text-secondary mb-0">Si la vida o integridad está en juego, se emite una solicitud urgente al Relator Especial correspondiente en menos de 24 horas.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <span class="badge bg-primary rounded-circle p-2 fs-6">3</span>
                                <div>
                                    <h6 class="fw-bold mb-1">Redacción y Sustanciación de la Queja Internacional</h6>
                                    <p class="small text-secondary mb-0">Elaboración rigurosa de los argumentos jurídicos de fondo con base en el derecho internacional consuetudinario.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-start">
                                <span class="badge bg-primary rounded-circle p-2 fs-6">4</span>
                                <div>
                                    <h6 class="fw-bold mb-1">Seguimiento al Cumplimiento de Dictámenes</h6>
                                    <p class="small text-secondary mb-0">Presión jurídica y diplomática para la liberación de detenidos, reparaciones del daño y garantías de no repetición.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: Medidas Cautelares de Urgencia -->
                <div class="card mb-4 border-danger shadow-sm">
                    <div class="card-header bg-danger text-white py-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-lightning-charge-fill me-2"></i> Trámite Urgente DDHH</h5>
                    </div>
                    <div class="card-body">
                        <p class="small text-secondary mb-3">
                            Para amenazas inminentes de ejecución extrajudicial, tortura o desaparición forzada, nuestro equipo activa el canal rápido internacional.
                        </p>
                        <a href="{{ route('solicitud') }}" class="btn btn-danger w-100 rounded-pill fw-bold">
                            Activar Alerta de Urgencia
                        </a>
                    </div>
                </div>

                <!-- Widget: Comités Vinculados -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-light py-3">
                        <h6 class="fw-bold mb-0 text-dark"><i class="bi bi-buildings text-primary me-2"></i> Órganos de Tratados</h6>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                            <li class="d-flex align-items-center justify-content-between border-bottom pb-2">
                                <span>Comité de Derechos Humanos (CCPR)</span>
                                <span class="badge bg-light text-dark border">Pacto Civil</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between border-bottom pb-2">
                                <span>Comité contra la Tortura (CAT)</span>
                                <span class="badge bg-light text-dark border">Ginebra</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between border-bottom pb-2">
                                <span>Comité CEDAW</span>
                                <span class="badge bg-light text-dark border">Mujeres</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <span>Grupo Detenciones Arbitrarias (WGAD)</span>
                                <span class="badge bg-light text-dark border">ONU</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Widget: Otros Servicios -->
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">¿Buscas otro tipo de asesoría?</h6>
                        <p class="small text-secondary mb-3">Explora nuestra sección especializada para personas en tránsito migratorio y asilo.</p>
                        <a href="{{ route('servicios.migrantes') }}" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                            <i class="bi bi-people me-1"></i> Asesoría para Migrantes
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
