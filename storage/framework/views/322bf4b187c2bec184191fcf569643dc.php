<?php $__env->startSection('title', 'Catálogo de Servicios Jurídicos'); ?>

<?php $__env->startSection('meta_description', 'Descubre el catálogo completo de servicios jurídicos gratuitos de la ONU: derechos humanos, asilo, migrantes, protección de género y comunidades.'); ?>

<?php $__env->startSection('content'); ?>

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Catálogo de Servicios Jurídicos</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Cartera de Asistencia</span>
                <h1 class="h1 fw-bold text-white mb-2">Catálogo de Servicios Jurídicos Gratuitos</h1>
                <p class="text-light opacity-90 mb-0">
                    Conoce las áreas de especialidad jurídica donde nuestros equipos letrados ofrecen orientación, redacción de recursos, medidas cautelares y representación legal sin costo.
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
                
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                    <div>
                        <h2 class="h2 fw-bold mb-1">Especialidades Disponibles</h2>
                        <p class="text-secondary small mb-0">Servicios brindados bajo el estándar de la Declaración Universal de Derechos Humanos.</p>
                    </div>
                    <span class="badge bg-light text-dark border p-2">
                        <i class="bi bi-shield-check text-primary me-1"></i> 6 Áreas de Cobertura
                    </span>
                </div>

                <div class="row g-4">
                    
                    <!-- Servicio 1: Derechos Humanos -->
                    <div class="col-md-6">
                        <div class="card h-100 border-primary border-opacity-25 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="p-2 rounded bg-light text-primary">
                                        <i class="bi bi-shield-shaded fs-2"></i>
                                    </div>
                                    <span class="badge bg-primary">Área Principal</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">Asesoría en Derechos Humanos</h4>
                                <p class="card-text text-secondary small flex-grow-1">
                                    Litigio y medidas cautelares urgentes ante detenciones arbitrarias, agresiones a defensores comunitarios, torturas o censura estatal ilegítima.
                                </p>
                                <div class="pt-3 border-top mt-3 d-flex gap-2">
                                    <a href="<?php echo e(route('servicios.derechos-humanos')); ?>" class="btn btn-outline-primary btn-sm flex-grow-1 rounded-pill">
                                        Página Especializada
                                    </a>
                                    <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-primary btn-sm rounded-pill" title="Solicitar este servicio">
                                        <i class="bi bi-send"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 2: Migrantes y Refugiados -->
                    <div class="col-md-6">
                        <div class="card h-100 border-primary border-opacity-25 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="p-2 rounded bg-light text-primary">
                                        <i class="bi bi-people-fill fs-2"></i>
                                    </div>
                                    <span class="badge bg-info text-dark">Protección</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">Asesoría para Migrantes y Refugio</h4>
                                <p class="card-text text-secondary small flex-grow-1">
                                    Acompañamiento en solicitudes de asilo conforme a la Convención de 1951, amparos contra deportaciones inmediatas y reagrupación de familias desplazadas.
                                </p>
                                <div class="pt-3 border-top mt-3 d-flex gap-2">
                                    <a href="<?php echo e(route('servicios.migrantes')); ?>" class="btn btn-outline-primary btn-sm flex-grow-1 rounded-pill">
                                        Página Especializada
                                    </a>
                                    <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-primary btn-sm rounded-pill" title="Solicitar este servicio">
                                        <i class="bi bi-send"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 3: Violencia de Género -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="p-2 rounded bg-light text-primary">
                                        <i class="bi bi-gender-female fs-2"></i>
                                    </div>
                                    <span class="badge bg-secondary">CEDAW</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">Protección de Género y Familia</h4>
                                <p class="card-text text-secondary small flex-grow-1">
                                    Orientación jurídica y medidas urgentes de protección para mujeres y niñas víctimas de violencia sistemática, trata de personas y discriminación institucional.
                                </p>
                                <div class="pt-3 border-top mt-3">
                                    <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                                        Solicitar Asesoría en esta Área
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 4: Comunidades Indígenas -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="p-2 rounded bg-light text-primary">
                                        <i class="bi bi-tree-fill fs-2"></i>
                                    </div>
                                    <span class="badge bg-light text-dark border">Convenio 169</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">Derechos de Pueblos Indígenas</h4>
                                <p class="card-text text-secondary small flex-grow-1">
                                    Defensa del consentimiento previo, libre e informado, protección del territorio ancestral y salvaguarda de patrimonio biocultural ante tribunales nacionales.
                                </p>
                                <div class="pt-3 border-top mt-3">
                                    <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                                        Solicitar Asesoría en esta Área
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 5: DESC y Derechos Laborales -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="p-2 rounded bg-light text-primary">
                                        <i class="bi bi-briefcase-fill fs-2"></i>
                                    </div>
                                    <span class="badge bg-light text-dark border">OIT</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">Derechos Laborales y Sociales</h4>
                                <p class="card-text text-secondary small flex-grow-1">
                                    Defensa frente al trabajo forzoso, explotación laboral de extranjeros indocumentados y defensa de la libertad sindical bajo convenios fundamentales de la OIT.
                                </p>
                                <div class="pt-3 border-top mt-3">
                                    <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                                        Solicitar Asesoría en esta Área
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 6: Mediación Comunitaria -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column p-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="p-2 rounded bg-light text-primary">
                                        <i class="bi bi-hand-thumbs-up-fill fs-2"></i>
                                    </div>
                                    <span class="badge bg-light text-dark border">Resolución Pacífica</span>
                                </div>
                                <h4 class="card-title fw-bold mb-2">Mediación y Solución de Conflictos</h4>
                                <p class="card-text text-secondary small flex-grow-1">
                                    Mecanismos alternativos y facilitación neutral de diálogos para la resolución de disputas comunitarias antes de instancias judiciales contenciosas.
                                </p>
                                <div class="pt-3 border-top mt-3">
                                    <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                                        Solicitar Asesoría en esta Área
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: Criterios de Elegibilidad -->
                <div class="card mb-4 border-primary shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-check2-circle me-2"></i> Criterios de Acceso Gratuito</h5>
                    </div>
                    <div class="card-body">
                        <p class="small text-secondary mb-3">
                            Nuestros servicios son 100% gratuitos y priorizan a personas en situación de vulnerabilidad procesal:
                        </p>
                        <ul class="list-unstyled small d-flex flex-column gap-2 mb-3">
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-lg text-success fw-bold"></i>
                                <span>Víctimas de violaciones a derechos fundamentales.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-lg text-success fw-bold"></i>
                                <span>Personas solicitantes de asilo o desplazadas.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-lg text-success fw-bold"></i>
                                <span>Colectivos sin capacidad económica de pago privado.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-lg text-success fw-bold"></i>
                                <span>Defensores comunitarios y periodistas amenazados.</span>
                            </li>
                        </ul>
                        <div class="alert alert-info py-2 small mb-0">
                            <i class="bi bi-info-circle me-1"></i> No se requiere residencia legal en el país donde te encuentres para solicitar el apoyo.
                        </div>
                    </div>
                </div>

                <!-- Widget: Documentos Recomendados -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-file-earmark-arrow-up text-primary"></i> Documentos Útiles
                        </h5>
                        <p class="small text-secondary mb-2">Para acelerar la evaluación de tu caso te recomendamos tener a mano:</p>
                        <ul class="small text-secondary ps-3 mb-3">
                            <li>Documento de identidad o pasaporte (si lo posees).</li>
                            <li>Notificaciones o resoluciones de autoridades estatales.</li>
                            <li>Cronología escrita de los hechos.</li>
                            <li>Fotografías, testimonios o actas médicas relevantes.</li>
                        </ul>
                        <a href="<?php echo e(route('recursos')); ?>" class="btn btn-outline-secondary btn-sm w-100 rounded-pill">
                            Descargar Guía de Preparación
                        </a>
                    </div>
                </div>

                <!-- Widget: Banner de Acción Inmediata -->
                <div class="card bg-onu-navy text-white p-3 shadow-sm text-center">
                    <div class="card-body">
                        <i class="bi bi-calendar-check text-primary fs-1 mb-2 d-block"></i>
                        <h5 class="fw-bold text-white mb-2">¿Listo para presentar tu caso?</h5>
                        <p class="small text-light opacity-75 mb-3">
                            El formulario toma menos de 5 minutos y es totalmente confidencial.
                        </p>
                        <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-primary w-100 rounded-pill">
                            Completar Formulario Seguro
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_graficos\resources\views/pages/servicios.blade.php ENDPATH**/ ?>