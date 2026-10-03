@extends('layouts.app')

@section('title', 'Términos, Condiciones y Aviso Legal')

@section('meta_description', 'Aviso legal, marco normativo, política de privacidad y condiciones del servicio gratuito de asistencia legal de la ONU.')

@section('content')

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Términos y Condiciones</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Marco Regulatorio</span>
                <h1 class="h1 fw-bold text-white mb-2">Términos de Servicio, Aviso Legal y Privacidad</h1>
                <p class="text-light opacity-90 mb-0">
                    Condiciones aplicables al acceso, solicitud y sustanciación de la asistencia letrada gratuita provista por la red de las Naciones Unidas.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Área Principal: Estructura Wireframe (Contenido Legal + Sidebar de Navegación) -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Columna de Contenido Principal (8 Cols) -->
            <div class="col-lg-8">
                
                <div class="card p-4 shadow-sm border-0 mb-4">
                    <div class="card-body">
                        
                        <!-- Introducción -->
                        <div class="border-bottom pb-3 mb-4">
                            <h2 class="h3 fw-bold text-dark mb-2">Estatuto de Servicios Jurídicos Gratuitos</h2>
                            <p class="text-secondary small mb-0">
                                El presente documento regula el uso de los canales digitales y la relación de patrocinio técnico legal entre los beneficiarios y la red de abogados voluntarios acreditados bajo los auspicios del Programa de Servicios Jurídicos Gratuitos de la ONU.
                            </p>
                        </div>

                        <!-- Sección 1 -->
                        <div id="naturaleza" class="mb-5 scroll-margin-top">
                            <h4 class="h5 fw-bold text-primary mb-2">
                                <i class="bi bi-award me-2"></i> 1. Naturaleza del Servicio y Gratuidad Absoluta
                            </h4>
                            <p class="text-secondary small">
                                1.1. La asistencia jurídica prestada no constituye una relación mercantil ni de contratación privada de servicios. Se trata de un servicio público internacional de carácter humanitario y tutelar sin ánimo de lucro, respaldado por resoluciones de la Asamblea General para materializar el Objetivo de Desarrollo Sostenible 16.
                            </p>
                            <p class="text-secondary small mb-0">
                                1.2. El principio de gratuidad es inderogable. Queda terminantemente prohibido que cualquier abogado voluntario, consultor o pasante solicite retribuciones directas o indirectas a los beneficiarios. Cualquier intento de cobro debe ser denunciado inmediatamente a los canales éticos institucionales.
                            </p>
                        </div>

                        <!-- Sección 2 -->
                        <div id="alcance" class="mb-5 scroll-margin-top">
                            <h4 class="h5 fw-bold text-primary mb-2">
                                <i class="bi bi-briefcase me-2"></i> 2. Alcance del Asesoramiento y Representación
                            </h4>
                            <p class="text-secondary small">
                                2.1. La recepción de una solicitud a través de esta plataforma no genera automáticamente el inicio formal de un patrocinio en tribunales. La admisión del caso está sujeta a la evaluación técnica de viabilidad jurídica, gravedad del asunto y disponibilidad de especialistas acreditados en la jurisdicción correspondiente.
                            </p>
                            <p class="text-secondary small mb-0">
                                2.2. Los abogados voluntarios actúan con plena independencia técnica conforme a la <em>lex artis</em> internacional y a los deberes deontológicos que rigen el ejercicio letrado, sin recibir instrucciones políticas de ningún gobierno.
                            </p>
                        </div>

                        <!-- Sección 3: Privacidad -->
                        <div id="privacidad" class="mb-5 scroll-margin-top">
                            <div class="p-3 bg-light rounded border border-primary border-opacity-25 mb-3">
                                <h4 class="h5 fw-bold text-primary mb-2">
                                    <i class="bi bi-shield-lock-fill me-2"></i> 3. Política de Privacidad y Protección de Datos
                                </h4>
                                <p class="text-secondary small">
                                    3.1. <strong>Inmunidad de Archivos:</strong> De conformidad con la Sección 4 del Artículo II de la <em>Convención sobre Prerrogativas e Inmunidades de las Naciones Unidas</em> de 1946, los archivos y documentos pertenecientes a la Organización son inviolables dondequiera que se hallen y en poder de quienquiera que estén.
                                </p>
                                <p class="text-secondary small">
                                    3.2. <strong>No Transferencia a Gobiernos:</strong> Los datos personales, relatos de hechos, testimonios y pruebas suministradas no serán en ningún caso compartidos con organismos policiales, fiscalías o agencias de inteligencia de los Estados donde se originó la presunta violación.
                                </p>
                                <p class="text-secondary small mb-0">
                                    3.3. Toda persona tiene derecho a solicitar la rectificación, bloqueo o eliminación definitiva de sus datos personales una vez concluido su expediente, salvo aquellas actuaciones requeridas para el archivo histórico confidencial de la ONU.
                                </p>
                            </div>
                        </div>

                        <!-- Sección 4 -->
                        <div id="compromisos" class="mb-5 scroll-margin-top">
                            <h4 class="h5 fw-bold text-primary mb-2">
                                <i class="bi bi-person-check me-2"></i> 4. Compromisos del Solicitante
                            </h4>
                            <p class="text-secondary small">
                                El usuario que somete un caso se compromete a:
                            </p>
                            <ul class="text-secondary small ps-3 mb-0">
                                <li>Proveer información fidedigna y no alterar deliberadamente documentos ni cronología de los hechos.</li>
                                <li>Mantener activa una vía de contacto segura (correo o teléfono) y notificar de inmediato cualquier cambio de paradero o situación procesal.</li>
                                <li>Colaborar lealmente con el letrado asignado para la comparecencia en audiencias o firma de memoriales.</li>
                            </ul>
                        </div>

                        <!-- Sección 5 -->
                        <div id="inmunidades" class="scroll-margin-top">
                            <h4 class="h5 fw-bold text-primary mb-2">
                                <i class="bi bi-globe me-2"></i> 5. Inmunidades y Jurisdicción
                            </h4>
                            <p class="text-secondary small mb-0">
                                Nada en los presentes términos ni en las actuaciones de asistencia legal se considerará una renuncia, expresa o implícita, a las inmunidades, privilegios o prerrogativas de las Naciones Unidas y de sus órganos subsidiarios, conforme al derecho internacional y a los tratados constitutivos vigentes.
                            </p>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: Índice Rápido del Documento -->
                <div class="card mb-4 shadow-sm sticky-top" style="top: 90px;">
                    <div class="card-header bg-light py-3">
                        <h6 class="fw-bold mb-0 text-dark"><i class="bi bi-list-nested text-primary me-2"></i> Índice de Secciones</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush small">
                            <a href="#naturaleza" class="list-group-item list-group-item-action py-2">
                                1. Naturaleza y Gratuidad
                            </a>
                            <a href="#alcance" class="list-group-item list-group-item-action py-2">
                                2. Alcance del Asesoramiento
                            </a>
                            <a href="#privacidad" class="list-group-item list-group-item-action py-2 text-primary fw-semibold">
                                3. Política de Privacidad <i class="bi bi-shield-check ms-1"></i>
                            </a>
                            <a href="#compromisos" class="list-group-item list-group-item-action py-2">
                                4. Compromisos del Solicitante
                            </a>
                            <a href="#inmunidades" class="list-group-item list-group-item-action py-2">
                                5. Inmunidades de la ONU
                            </a>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top small text-secondary py-2">
                        <i class="bi bi-clock me-1"></i> Última revisión: Enero de 2026
                    </div>
                </div>

                <!-- Widget: Canal de Transparencia y Ombudsman -->
                <div class="card mb-4 border-0 bg-light p-3 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2"><i class="bi bi-shield-exclamation text-primary me-1"></i> Canal de Ética</h6>
                        <p class="small text-secondary mb-3">
                            Para reportar irregularidades, cobros indebidos o faltas al código deontológico cometidas por personal de nuestra red:
                        </p>
                        <span class="small fw-semibold d-block text-dark">ombudsman@un-legal.org</span>
                    </div>
                </div>

                <!-- Widget: Solicitar Asistencia -->
                <div class="card shadow-sm p-3 text-center">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">¿Deseas presentar tu caso?</h6>
                        <p class="small text-secondary mb-3">Acepta las condiciones e inicia tu formulario confidencial.</p>
                        <a href="{{ route('solicitud') }}" class="btn btn-primary btn-sm w-100 rounded-pill">
                            Ir a la Solicitud
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
