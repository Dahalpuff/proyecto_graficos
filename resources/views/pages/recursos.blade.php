@extends('layouts.app')

@section('title', 'Centro de Recursos y Documentos')

@section('meta_description', 'Descarga modelos de escritos legales, plantillas de amparo, guías para solicitantes de asilo y tratados internacionales de la ONU sin costo.')

@section('content')

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Centro de Recursos</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Biblioteca Jurídica Abierta</span>
                <h1 class="h1 fw-bold text-white mb-2">Centro de Recursos, Modelos y Documentos</h1>
                <p class="text-light opacity-90 mb-0">
                    Acceso libre a minutas legales, guías ciudadanas ilustradas y textos normativos internacionales para la defensa de los derechos fundamentales.
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
                
                <!-- Sección 1: Modelos de Escritos Procesales -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-file-earmark-ruled-fill text-primary fs-4"></i>
                        <h3 class="h4 fw-bold mb-0">1. Modelos de Escritos y Plantillas Procesales</h3>
                    </div>
                    <p class="text-secondary small mb-3">Plantillas editables adaptables a la legislación de la mayoría de países para interponer recursos urgentes:</p>

                    <div class="d-flex flex-column gap-3">
                        
                        <!-- Documento 1 -->
                        <div class="card shadow-sm p-3 border-0 border-start border-primary border-4">
                            <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="p-2 rounded bg-light text-primary fs-3">
                                        <i class="bi bi-file-earmark-word"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1 text-dark">Minuta de Habeas Corpus Urgente</h5>
                                        <p class="small text-secondary mb-1">Plantilla frente a detención ilegal, incomunicación o retraso arbitrario en la presentación ante un juez.</p>
                                        <span class="badge bg-primary">DOCX</span>
                                        <span class="badge bg-light text-dark border">45 KB</span>
                                        <span class="badge bg-light text-dark border">Actualizado 2026</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill text-nowrap" onclick="alert('Descarga de plantilla Habeas Corpus iniciada.'); return false;">
                                        <i class="bi bi-download me-1"></i> Descargar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Documento 2 -->
                        <div class="card shadow-sm p-3 border-0 border-start border-primary border-4">
                            <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="p-2 rounded bg-light text-primary fs-3">
                                        <i class="bi bi-file-earmark-word"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1 text-dark">Recurso de Suspensión de Deportación</h5>
                                        <p class="small text-secondary mb-1">Modelo de apelación y medida cautelar inmediata invocando el Principio de No Devolución (Non-Refoulement).</p>
                                        <span class="badge bg-primary">DOCX</span>
                                        <span class="badge bg-light text-dark border">62 KB</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill text-nowrap" onclick="alert('Descarga de recurso de suspensión iniciada.'); return false;">
                                        <i class="bi bi-download me-1"></i> Descargar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Documento 3 -->
                        <div class="card shadow-sm p-3 border-0 border-start border-primary border-4">
                            <div class="card-body p-0 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="p-2 rounded bg-light text-primary fs-3">
                                        <i class="bi bi-file-earmark-pdf text-danger"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1 text-dark">Formato de Comunicación ante Comités ONU</h5>
                                        <p class="small text-secondary mb-1">Formulario estándar oficial para formular quejas individuales ante órganos de tratados en Ginebra.</p>
                                        <span class="badge bg-danger">PDF</span>
                                        <span class="badge bg-light text-dark border">1.2 MB</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill text-nowrap" onclick="alert('Descarga del formulario oficial de comités ONU iniciada.'); return false;">
                                        <i class="bi bi-download me-1"></i> Descargar
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sección 2: Guías Prácticas Ciudadanas -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-journal-bookmark-fill text-primary fs-4"></i>
                        <h3 class="h4 fw-bold mb-0">2. Guías Prácticas y Manuales Explicativos</h3>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card h-100 p-3 shadow-sm">
                                <div class="card-body p-0 d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <i class="bi bi-book text-primary fs-3"></i>
                                        <span class="badge bg-info text-dark">Manual ACNUR</span>
                                    </div>
                                    <h5 class="fw-bold mb-2">Guía del Solicitante de Asilo</h5>
                                    <p class="small text-secondary mb-3 flex-grow-1">
                                        Explicación paso a paso de la entrevista de elegibilidad, recopilación de pruebas y derechos durante la espera del estatuto.
                                    </p>
                                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill" onclick="alert('Descarga de manual ACNUR iniciada.'); return false;">
                                        <i class="bi bi-download me-1"></i> Descargar (PDF 2.4 MB)
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card h-100 p-3 shadow-sm">
                                <div class="card-body p-0 d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <i class="bi bi-shield-check text-primary fs-3"></i>
                                        <span class="badge bg-secondary">Protocolo ONU</span>
                                    </div>
                                    <h5 class="fw-bold mb-2">Guía Rápida: Protocolo de Estambul</h5>
                                    <p class="small text-secondary mb-3 flex-grow-1">
                                        Pautas para la documentación médico-psicológica de indicios de tortura o malos tratos con validez ante tribunales internacionales.
                                    </p>
                                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill" onclick="alert('Descarga del Protocolo de Estambul iniciada.'); return false;">
                                        <i class="bi bi-download me-1"></i> Descargar (PDF 1.8 MB)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Tratados Internacionales -->
                <div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-bank2 text-primary fs-4"></i>
                        <h3 class="h4 fw-bold mb-0">3. Tratados y Normativa Internacional</h3>
                    </div>

                    <div class="list-group shadow-sm">
                        <a href="https://www.un.org/es/about-us/universal-declaration-of-human-rights" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="fw-bold mb-0">Declaración Universal de Derechos Humanos (1948)</h6>
                                <small class="text-secondary">Texto íntegro oficial en español proclamado por la Asamblea General.</small>
                            </div>
                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                        </a>
                        <a href="https://www.ohchr.org/es/instruments-mechanisms/instruments/international-covenant-civil-and-political-rights" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="fw-bold mb-0">Pacto Internacional de Derechos Civiles y Políticos (PIDCP)</h6>
                                <small class="text-secondary">Instrumento vinculante de protección de la vida, libertad y debido proceso.</small>
                            </div>
                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                        </a>
                        <a href="https://www.acnur.org/convencion-de-1951-para-los-refugiados.html" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="fw-bold mb-0">Convención sobre el Estatuto de los Refugiados (1951)</h6>
                                <small class="text-secondary">Pilar fundamental del asilo y protección contra la devolución forzosa.</small>
                            </div>
                            <i class="bi bi-box-arrow-up-right text-primary"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: ¿Necesitas ayuda completando un modelo? -->
                <div class="card mb-4 border-primary shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-pencil-square me-2"></i> Asistencia en Redacción</h5>
                    </div>
                    <div class="card-body">
                        <p class="small text-secondary mb-3">
                            Completar un recurso legal puede ser complejo. Si necesitas que un abogado de nuestra red revise tu escrito antes de presentarlo:
                        </p>
                        <a href="{{ route('solicitud') }}" class="btn btn-primary w-100 rounded-pill btn-sm">
                            Solicitar Revisión Gratuita
                        </a>
                    </div>
                </div>

                <!-- Widget: Boletín Informativo -->
                <div class="card mb-4 shadow-sm bg-light border p-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2"><i class="bi bi-envelope-paper text-primary me-2"></i> Boletín Jurídico ONU</h6>
                        <p class="small text-secondary mb-3">
                            Recibe mensualmente análisis de jurisprudencia internacional, nuevas resoluciones de comités y convocatorias pro-bono.
                        </p>
                        <div class="input-group mb-2">
                            <input type="email" class="form-control form-control-sm" placeholder="tu@correo.com">
                            <button class="btn btn-primary btn-sm" type="button" onclick="alert('¡Gracias por suscribirte al boletín!');">
                                Unirse
                            </button>
                        </div>
                        <small class="text-muted d-block" style="font-size: 0.72rem;">Sin spam. Política de privacidad de la ONU.</small>
                    </div>
                </div>

                <!-- Widget: Preguntas Frecuentes -->
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">¿Cómo citar estos documentos?</h6>
                        <p class="small text-secondary mb-3">Todos los materiales son de libre distribución sin fines comerciales bajo licencia pública de las Naciones Unidas.</p>
                        <a href="{{ route('faq') }}" class="btn btn-outline-secondary btn-sm w-100 rounded-pill">
                            Consultar Términos en FAQ
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
