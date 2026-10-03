@extends('layouts.app')

@section('title', 'Preguntas Frecuentes (FAQ)')

@section('meta_description', 'Respuestas a las preguntas más frecuentes sobre los servicios jurídicos gratuitos de la ONU, confidencialidad, tiempos y requisitos.')

@section('content')

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Preguntas Frecuentes</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Centro de Ayuda</span>
                <h1 class="h1 fw-bold text-white mb-2">Preguntas Frecuentes (FAQ)</h1>
                <p class="text-light opacity-90 mb-0">
                    Resolvemos las dudas más habituales sobre el funcionamiento de nuestra asistencia jurídica gratuita, protocolos de seguridad y asignación letrada.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Área Principal: Estructura Wireframe (Acordeón + Sidebar) -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Columna del Acordeón Principal (8 Cols) -->
            <div class="col-lg-8">
                
                <!-- Categoría 1: Gratuidad y Elegibilidad -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-currency-exchange text-primary fs-4"></i>
                        <h3 class="h4 fw-bold mb-0">1. Gratuidad y Acceso al Servicio</h3>
                    </div>

                    <div class="accordion shadow-sm" id="accordionGratuidad">
                        
                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingUno">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                                    ¿El servicio es verdaderamente 100% gratuito o existen gastos ocultos?
                                </button>
                            </h2>
                            <div id="collapseUno" class="accordion-collapse collapse show" aria-labelledby="headingUno" data-bs-parent="#accordionGratuidad">
                                <div class="accordion-body text-secondary small">
                                    <strong>Es enteramente gratuito.</strong> Ningún abogado, perito, consultor o funcionario perteneciente a nuestra red de la ONU está autorizado para solicitar dinero, propinas o reembolsos directos a los solicitantes. Todos los costes de honorarios, peritajes forenses y aranceles procesales internacionales son asumidos a través de los fondos fiduciarios multilaterales de las Naciones Unidas.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingDos">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDos" aria-expanded="false" aria-controls="collapseDos">
                                    ¿Puedo acceder si me encuentro en situación migratoria irregular o sin documentos?
                                </button>
                            </h2>
                            <div id="collapseDos" class="accordion-collapse collapse" aria-labelledby="headingDos" data-bs-parent="#accordionGratuidad">
                                <div class="accordion-body text-secondary small">
                                    <strong>Sí, sin ninguna limitación.</strong> Los derechos humanos y las garantías judiciales corresponden a toda persona por el simple hecho de serlo. No necesitas presentar pasaporte vigente ni residencia legal para que nuestro equipo tome tu caso y te proporcione asesoría defensiva.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingTres">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres">
                                    ¿Quién califica para recibir patrocinio legal internacional?
                                </button>
                            </h2>
                            <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="headingTres" data-bs-parent="#accordionGratuidad">
                                <div class="accordion-body text-secondary small">
                                    Califican personas en condición de vulnerabilidad socioeconómica, víctimas de violaciones a garantías fundamentales, personas que requieran refugio o asilo conforme a la Convención de 1951, o colectivos que enfrenten procesos judiciales sin posibilidad de costear un abogado privado.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Categoría 2: Confidencialidad y Seguridad -->
                <div class="mb-5">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-shield-lock-fill text-primary fs-4"></i>
                        <h3 class="h4 fw-bold mb-0">2. Seguridad de la Información y Privacidad</h3>
                    </div>

                    <div class="accordion shadow-sm" id="accordionSeguridad">
                        
                        <!-- FAQ 4 -->
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingCuatro">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCuatro" aria-expanded="false" aria-controls="collapseCuatro">
                                    ¿Compartirán mis datos o mi relato con el gobierno de mi país de origen?
                                </button>
                            </h2>
                            <div id="collapseCuatro" class="accordion-collapse collapse" aria-labelledby="headingCuatro" data-bs-parent="#accordionSeguridad">
                                <div class="accordion-body text-secondary small">
                                    <strong>Bajo ninguna circunstancia.</strong> Toda la información suministrada está protegida por la <em>Convención sobre Privilegios e Inmunidades de las Naciones Unidas</em> de 1946. Ninguna autoridad nacional tiene potestad para auditar, incautar o acceder a las bases de datos de este programa.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingCinco">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCinco" aria-expanded="false" aria-controls="collapseCinco">
                                    ¿Cómo protegen a los defensores de DDHH que solicitan ayuda?
                                </button>
                            </h2>
                            <div id="collapseCinco" class="accordion-collapse collapse" aria-labelledby="headingCinco" data-bs-parent="#accordionSeguridad">
                                <div class="accordion-body text-secondary small">
                                    En situaciones de alto riesgo o persecución activa, se aplican canales cifrados de comunicación de extremo a extremo, se utilizan seudónimos procesales temporales y se articulan medidas cautelares directas con la Relatoría Especial sobre la Situación de los Defensores de Derechos Humanos.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Categoría 3: Tiempos y Asignación de Casos -->
                <div>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-clock-history text-primary fs-4"></i>
                        <h3 class="h4 fw-bold mb-0">3. Proceso, Plazos y Representación</h3>
                    </div>

                    <div class="accordion shadow-sm" id="accordionProceso">
                        
                        <!-- FAQ 6 -->
                        <div class="accordion-item border-0 border-bottom">
                            <h2 class="accordion-header" id="headingSeis">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeis" aria-expanded="false" aria-controls="collapseSeis">
                                    ¿Cuánto demora el proceso de respuesta tras enviar el formulario?
                                </button>
                            </h2>
                            <div id="collapseSeis" class="accordion-collapse collapse" aria-labelledby="headingSeis" data-bs-parent="#accordionProceso">
                                <div class="accordion-body text-secondary small">
                                    Para <strong>urgencias críticas</strong> (detenciones arbitrarias en curso o peligro inminente de expulsión), nuestro equipo de guardia contacta en menos de <strong>24 a 48 horas</strong>. Para consultas y solicitudes ordinarias, el plazo promedio de análisis y respuesta es de <strong>3 a 5 días hábiles</strong>.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="headingSiete">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSiete" aria-expanded="false" aria-controls="collapseSiete">
                                    ¿Qué ocurre si mi caso no califica para el programa?
                                </button>
                            </h2>
                            <div id="collapseSiete" class="accordion-collapse collapse" aria-labelledby="headingSiete" data-bs-parent="#accordionProceso">
                                <div class="accordion-body text-secondary small">
                                    Si determinamos que tu asunto no encaja en las áreas cubiertas por el mandato de la ONU, te proporcionaremos un informe orientativo y te canalizaremos hacia clínicas jurídicas universitarias aliadas o redes de ONGs locales que puedan asistirte gratuitamente.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: ¿No encontraste tu respuesta? -->
                <div class="card mb-4 border-primary shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-headset me-2"></i> ¿Dudas Específicas?</h5>
                    </div>
                    <div class="card-body">
                        <p class="small text-secondary mb-3">
                            Si tu inquietud no aparece en esta lista, puedes contactar a nuestro equipo de orientación preliminar.
                        </p>
                        <div class="p-2 bg-light rounded text-center mb-3 border">
                            <small class="text-secondary d-block">Línea de Orientación Gratuita:</small>
                            <span class="fw-bold text-dark fs-5">+1 (800) 555-8653</span>
                        </div>
                        <a href="{{ route('solicitud') }}" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                            Enviar Consulta por Formulario
                        </a>
                    </div>
                </div>

                <!-- Widget: Descarga de Guías y Recursos -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2"><i class="bi bi-file-earmark-arrow-down-fill text-primary me-2"></i> Guías Informativas</h6>
                        <p class="small text-secondary mb-3">
                            Descarga nuestros folletos explicativos sobre cómo solicitar asilo, cómo presentar denuncias de tortura y tus derechos en frontera.
                        </p>
                        <a href="{{ route('recursos') }}" class="btn btn-outline-secondary btn-sm w-100 rounded-pill">
                            Ir al Centro de Documentos
                        </a>
                    </div>
                </div>

                <!-- Widget: Términos y Condiciones -->
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">Aviso Legal y Privacidad</h6>
                        <p class="small text-secondary mb-3">Consulta el marco normativo internacional y las condiciones generales del servicio.</p>
                        <a href="{{ route('terminos') }}" class="btn btn-link text-primary p-0 small fw-bold text-decoration-none">
                            Leer Términos y Condiciones <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
