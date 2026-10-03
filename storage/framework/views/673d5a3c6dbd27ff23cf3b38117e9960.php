<?php $__env->startSection('title', 'Directorio de Abogados y Voluntarios'); ?>

<?php $__env->startSection('meta_description', 'Directorio oficial de juristas, especialistas pro-bono y defensores de derechos humanos acreditados por el programa de la ONU.'); ?>

<?php $__env->startSection('content'); ?>

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Directorio de Abogados</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Red Jurídica Global</span>
                <h1 class="h1 fw-bold text-white mb-2">Directorio de Letrados y Especialistas Acreditados</h1>
                <p class="text-light opacity-90 mb-0">
                    Conoce a los juristas y defensores de derechos humanos que integran nuestra red internacional pro-bono, avalados por organismos del sistema de Naciones Unidas.
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
                
                <!-- Barra de Búsqueda y Filtros de Especialistas -->
                <div class="card p-3 mb-4 shadow-sm bg-light border">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-search text-secondary"></i></span>
                                <input type="text" class="form-control" placeholder="Buscar por nombre o país...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select">
                                <option selected>Todas las especialidades</option>
                                <option>Derechos Humanos y Tortura</option>
                                <option>Asilo y Derecho Migratorio</option>
                                <option>Violencia de Género (CEDAW)</option>
                                <option>Pueblos Indígenas</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary w-100 rounded-pill">
                                Filtrar Letrados
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Lista / Grid de Letrados Acreditados -->
                <div class="row g-4">
                    
                    <!-- Letrado 1 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-4 p-3">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-4" style="width: 54px; height: 54px;">
                                        ER
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark">Dra. Elena Rostova</h5>
                                        <small class="text-primary fw-semibold">Litigio Penal Internacional</small>
                                    </div>
                                </div>
                                <p class="small text-secondary mb-3 flex-grow-1">
                                    Especialista en comunicaciones ante el Comité contra la Tortura (CAT) y relatorías especiales sobre detención arbitraria. 15 años de trayectoria pro-bono.
                                </p>
                                <div class="small mb-3">
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Región:</span> <strong class="text-dark">Ginebra / Europa</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Idiomas:</span> <strong class="text-dark">Español, Inglés, Francés</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary py-1">
                                        <span>Acreditación:</span> <span class="badge bg-success">ONU Certificada</span>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                    Solicitar Asesoría con esta Letrada
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Letrado 2 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-4 p-3">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-4" style="width: 54px; height: 54px;">
                                        CM
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark">Lic. Carlos Mendoza</h5>
                                        <small class="text-primary fw-semibold">Asilo y Fronteras</small>
                                    </div>
                                </div>
                                <p class="small text-secondary mb-3 flex-grow-1">
                                    Experto en la Convención de Ginebra de 1951, amparos constitucionales contra expulsiones expeditas y regularización de familias migrantes.
                                </p>
                                <div class="small mb-3">
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Región:</span> <strong class="text-dark">América Latina / El Caribe</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Idiomas:</span> <strong class="text-dark">Español, Portugués</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary py-1">
                                        <span>Acreditación:</span> <span class="badge bg-success">ACNUR Partner</span>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                    Solicitar Asesoría con este Letrado
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Letrado 3 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-4 p-3">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-4" style="width: 54px; height: 54px;">
                                        AD
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark">Dra. Amina Diallo</h5>
                                        <small class="text-primary fw-semibold">Protección de Género (CEDAW)</small>
                                    </div>
                                </div>
                                <p class="small text-secondary mb-3 flex-grow-1">
                                    Defensora de víctimas de violencia sexual en zonas de conflicto, trata transfronteriza y medidas cautelares para niñas y adolescentes.
                                </p>
                                <div class="small mb-3">
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Región:</span> <strong class="text-dark">África / Internacional</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Idiomas:</span> <strong class="text-dark">Español, Francés, Inglés</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary py-1">
                                        <span>Acreditación:</span> <span class="badge bg-success">ONU Certificada</span>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                    Solicitar Asesoría con esta Letrada
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Letrado 4 -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 border-top border-primary border-4 p-3">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-4" style="width: 54px; height: 54px;">
                                        MA
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-0 text-dark">Dr. Mateo Albarracín</h5>
                                        <small class="text-primary fw-semibold">Pueblos Originarios</small>
                                    </div>
                                </div>
                                <p class="small text-secondary mb-3 flex-grow-1">
                                    Representante en litigios sobre consulta previa informada (Convenio 169 de la OIT) y defensa territorial de comunidades indígenas amenazadas.
                                </p>
                                <div class="small mb-3">
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Región:</span> <strong class="text-dark">Región Andina</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary border-bottom py-1">
                                        <span>Idiomas:</span> <strong class="text-dark">Español, Quechua</strong>
                                    </div>
                                    <div class="d-flex justify-content-between text-secondary py-1">
                                        <span>Acreditación:</span> <span class="badge bg-success">OIT / CIDH</span>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                    Solicitar Asesoría con este Letrado
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: Estándares de Acreditación -->
                <div class="card mb-4 border-primary shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-patch-check-fill me-2"></i> Estándares Éticos</h5>
                    </div>
                    <div class="card-body">
                        <p class="small text-secondary mb-3">
                            Todos los juristas incluidos en este directorio cumplen con:
                        </p>
                        <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span>Verificación de antecedentes ante el Tribunal Disciplinario del Colegio de Abogados de origen.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span>Suscripción irrevocable del Código de Conducta e Inmunidades de las Naciones Unidas.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                <span>Prohibición absoluta de cobrar o aceptar dádivas de los patrocinados.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Widget: Convocatoria Voluntarios Pro-Bono -->
                <div class="card mb-4 bg-light border p-3 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-briefcase text-primary fs-1 mb-2 d-block"></i>
                        <h5 class="fw-bold mb-2">¿Eres Abogado(a)?</h5>
                        <p class="small text-secondary mb-3">
                            Únete como voluntario(a) a la red pro-bono más grande del mundo en defensa de la justicia universal y los derechos humanos.
                        </p>
                        <a href="<?php echo e(route('solicitud')); ?>" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                            Postular a la Red de Letrados
                        </a>
                    </div>
                </div>

                <!-- Widget: Cifras de la Red -->
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3"><i class="bi bi-bar-chart-fill text-primary me-2"></i> Nuestra Capacidad</h6>
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-2 small">
                            <span class="text-secondary">Abogados Acreditados:</span>
                            <span class="fw-bold">350+</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-2 small">
                            <span class="text-secondary">Países con presencia:</span>
                            <span class="fw-bold">48</span>
                        </div>
                        <div class="d-flex justify-content-between small">
                            <span class="text-secondary">Idiomas de atención:</span>
                            <span class="fw-bold">12 lenguas</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_graficos\resources\views/pages/directorio.blade.php ENDPATH**/ ?>