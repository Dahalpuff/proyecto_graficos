<?php $__env->startSection('title', 'Solicitar Asesoría Gratuita'); ?>

<?php $__env->startSection('meta_description', 'Formulario oficial para solicitar asesoría jurídica gratuita de las Naciones Unidas. Atención confidencial y especializada sin costo.'); ?>

<?php $__env->startSection('content'); ?>

<!-- Migas de Pan (Breadcrumb) -->
<div class="breadcrumb-wrapper py-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" class="text-decoration-none text-primary"><i class="bi bi-house me-1"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Solicitar Asesoría Gratuita</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Cabecera de Página -->
<section class="page-hero-banner py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2">Canal Seguro y Oficial</span>
                <h1 class="h1 fw-bold text-white mb-2">Formulario de Solicitud de Asistencia Legal</h1>
                <p class="text-light opacity-90 mb-0">
                    Diligencia este formulario con los datos de tu caso. Un equipo de juristas evaluará tu situación y asignará un abogado especialista sin costo alguno.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Área Principal: Estructura Wireframe (Formulario + Sidebar) -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Columna del Formulario Principal (8 Cols) -->
            <div class="col-lg-8">
                
                <div class="card p-4 shadow-sm border-0 mb-4">
                    <div class="card-body">
                        
                        <!-- Banner de Confidencialidad -->
                        <div class="alert alert-info border-info d-flex align-items-center gap-3 py-2 px-3 mb-4 rounded-3">
                            <i class="bi bi-shield-check fs-2 text-primary"></i>
                            <div class="small">
                                <strong>Garantía de Confidencialidad Absoluta:</strong> Tus datos jamás serán remitidos a autoridades gubernamentales de tu país de origen ni a terceros ajenos a la ONU.
                            </div>
                        </div>

                        <!-- Formulario de Solicitud -->
                        <form action="#" method="POST" onsubmit="event.preventDefault(); document.getElementById('mensajeExito').classList.remove('d-none'); this.reset(); window.scrollTo({top: 200, behavior: 'smooth'});">
                            <?php echo csrf_field(); ?>

                            <!-- Mensaje de Éxito Simulado -->
                            <div id="mensajeExito" class="alert alert-success d-none mb-4 p-3 rounded-3" role="alert">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="bi bi-check-circle-fill fs-4"></i>
                                    <h5 class="alert-heading fw-bold mb-0">¡Solicitud Registrada con Éxito!</h5>
                                </div>
                                <p class="small mb-2">
                                    Tu caso ha recibido el número de expediente provisional: <strong>UN-JUR-<?php echo e(rand(10000, 99999)); ?></strong>. Un letrado del equipo asignado se pondrá en contacto contigo en el plazo correspondiente a la urgencia indicada.
                                </p>
                                <span class="badge bg-success">Revisión en proceso</span>
                            </div>

                            <!-- Sección 1: Datos Personales -->
                            <h4 class="h5 fw-bold text-dark border-bottom pb-2 mb-3">
                                <span class="badge bg-primary me-2">1</span> Datos de Contacto y Ubicación
                            </h4>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="nombres" class="form-label small fw-semibold">Nombres Completos <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ej. Juan Carlos" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellidos" class="form-label small fw-semibold">Apellidos Completos <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ej. Pérez Gómez" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label small fw-semibold">Correo Electrónico Seguro <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="nombre@correo.com" required>
                                    <div class="form-text small">Usa un correo al que solo tú tengas acceso.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefono" class="form-label small fw-semibold">Teléfono o WhatsApp con código de país <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="+52 55 1234 5678" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="pais_actual" class="form-label small fw-semibold">País y Ciudad Actual <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pais_actual" name="pais_actual" placeholder="Ej. Bogotá, Colombia" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="nacionalidad" class="form-label small fw-semibold">Nacionalidad de Origen <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ej. Venezolana, Siria, Guatemalteca" required>
                                </div>
                                <div class="col-12">
                                    <label for="estatus_migratorio" class="form-label small fw-semibold">Estatus Migratorio en el País Actual (Opcional)</label>
                                    <select class="form-select" id="estatus_migratorio" name="estatus_migratorio">
                                        <option value="" selected>Selecciona una opción...</option>
                                        <option value="solicitante_asilo">Solicitante de Asilo / Refugio</option>
                                        <option value="irregular">Estancia Irregular / Indocumentado</option>
                                        <option value="residencia_temporal">Residencia Temporal / Permiso Humanitario</option>
                                        <option value="nacional">Ciudadano Nacional</option>
                                        <option value="prefiero_no_decir">Prefiero no responder por seguridad</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Sección 2: Detalles del Caso Jurídico -->
                            <h4 class="h5 fw-bold text-dark border-bottom pb-2 mb-3">
                                <span class="badge bg-primary me-2">2</span> Naturaleza del Asunto y Urgencia
                            </h4>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label for="area_derecho" class="form-label small fw-semibold">Área Jurídica Requerida <span class="text-danger">*</span></label>
                                    <select class="form-select" id="area_derecho" name="area_derecho" required>
                                        <option value="" selected disabled>Selecciona el área...</option>
                                        <option value="derechos_humanos">Violación a Derechos Humanos / Detención Arbitraria</option>
                                        <option value="asilo_refugio">Asilo, Refugio y Protección Internacional</option>
                                        <option value="deportacion">Riesgo de Deportación Inmediata</option>
                                        <option value="violencia_genero">Violencia de Género / Trata de Personas</option>
                                        <option value="indigenas">Derechos Indígenas y Territoriales</option>
                                        <option value="laboral">Explotación Laboral / Discriminación</option>
                                        <option value="otro">Otro Asunto Jurídico Urgente</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="urgencia" class="form-label small fw-semibold">Nivel de Urgencia <span class="text-danger">*</span></label>
                                    <select class="form-select" id="urgencia" name="urgencia" required>
                                        <option value="ordinaria" selected>Ordinaria (Respuesta en 3 a 5 días hábiles)</option>
                                        <option value="alta">Alta (Plazos legales corriendo, riesgo de sanción)</option>
                                        <option value="emergencia">Emergencia Extrema (Riesgo a la vida o deportación inminente)</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="asunto_titulo" class="form-label small fw-semibold">Título Breve del Caso <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="asunto_titulo" name="asunto_titulo" placeholder="Ej. Solicitud de medida cautelar por hostigamiento en frontera" required>
                                </div>
                                <div class="col-12">
                                    <label for="descripcion_hechos" class="form-label small fw-semibold">Descripción Detallada de los Hechos <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="descripcion_hechos" name="descripcion_hechos" rows="6" placeholder="Describe claramente qué ocurrió, en qué fechas, quiénes son las autoridades o personas involucradas y qué ayuda legal puntual requieres..." required></textarea>
                                    <div class="form-text small">Procura incluir fechas aproximadas, ciudades y documentos que poseas.</div>
                                </div>
                            </div>

                            <!-- Sección 3: Documentación y Consentimiento -->
                            <h4 class="h5 fw-bold text-dark border-bottom pb-2 mb-3">
                                <span class="badge bg-primary me-2">3</span> Documentos de Soporte y Consentimiento
                            </h4>

                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <label for="archivos_soporte" class="form-label small fw-semibold">Adjuntar Evidencia o Notificaciones (Opcional)</label>
                                    <input class="form-control" type="file" id="archivos_soporte" name="archivos_soporte" multiple>
                                    <div class="form-text small">Formatos permitidos: PDF, JPG, PNG, DOCX. Máximo 15MB en total.</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="consentimiento" required>
                                        <label class="form-check-label small" for="consentimiento">
                                            Declaro bajo juramento que los hechos expuestos son verídicos según mi leal saber y entender, y autorizo al equipo letrado de la ONU a evaluar mi caso con fines estrictos de defensa técnica jurídica gratuita conforme al <a href="<?php echo e(route('terminos')); ?>" target="_blank" class="text-primary text-decoration-none">Aviso Legal</a>. <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Botón de Envío -->
                            <div class="d-grid d-md-flex justify-content-md-end gap-3 pt-3 border-top">
                                <button type="reset" class="btn btn-outline-secondary px-4 rounded-pill">
                                    <i class="bi bi-eraser me-1"></i> Limpiar
                                </button>
                                <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill fw-bold shadow-sm">
                                    <i class="bi bi-send-fill me-2"></i> Enviar Solicitud Segura
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

            <!-- Columna Sidebar Lateral (4 Cols) -->
            <div class="col-lg-4">
                
                <!-- Widget: Tiempos de Respuesta -->
                <div class="card mb-4 border-primary shadow-sm">
                    <div class="card-header bg-primary text-white py-3">
                        <h5 class="fw-bold mb-0"><i class="bi bi-stopwatch-fill me-2"></i> Tiempos de Respuesta</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-2 mb-3">
                            <span class="badge bg-danger rounded-pill mt-1">Urgente</span>
                            <div>
                                <strong class="d-block small">24 a 48 Horas:</strong>
                                <span class="small text-secondary">Riesgo a la vida, detención migratoria arbitraria o deportación en curso.</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <span class="badge bg-secondary rounded-pill mt-1">Ordinario</span>
                            <div>
                                <strong class="d-block small">3 a 5 Días Hábiles:</strong>
                                <span class="small text-secondary">Asesoría documental, revisión de recursos o solicitudes regulares de asilo.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Widget: Consejos para redactar tu solicitud -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-lightbulb-fill text-warning"></i> Consejos Útiles
                        </h6>
                        <ul class="list-unstyled small d-flex flex-column gap-2 mb-0 text-secondary">
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle text-primary mt-1"></i>
                                <span><strong>Sé cronológico:</strong> Indica qué pasó primero y cómo escaló la situación.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle text-primary mt-1"></i>
                                <span><strong>Identifica fechas:</strong> Si no recuerdas el día exacto, señala el mes o año aproximado.</span>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <i class="bi bi-check-circle text-primary mt-1"></i>
                                <span><strong>Plazos legales:</strong> Si recibiste una notificación oficial, anota la fecha en que te la entregaron.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Widget: Preguntas sobre el formulario -->
                <div class="card shadow-sm p-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-2">¿Dudas antes de enviar?</h6>
                        <p class="small text-secondary mb-3">Revisa las preguntas frecuentes para conocer más sobre nuestro proceso y seguridad de datos.</p>
                        <a href="<?php echo e(route('faq')); ?>" class="btn btn-outline-primary btn-sm w-100 rounded-pill">
                            Ver Preguntas Frecuentes
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\proyecto_graficos\resources\views/pages/solicitud.blade.php ENDPATH**/ ?>