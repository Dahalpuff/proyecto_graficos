<!-- Footer Institucional de la ONU -->
<footer class="pt-5 mt-auto">
    <div class="container pb-4">
        <div class="row g-4">
            <!-- Columna 1: Identidad Institucional -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle p-2" style="width: 40px; height: 40px;">
                        <i class="bi bi-award fs-4"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold text-white mb-0">NACIONES UNIDAS</h5>
                        <small class="text-info fw-semibold">Servicios Jurídicos Gratuitos</small>
                    </div>
                </div>
                <p class="text-light opacity-75 small mb-3">
                    Programa internacional de asistencia y orientación legal universal, gratuito e imparcial, alineado con el Objetivo de Desarrollo Sostenible 16 (Paz, Justicia e Instituciones Sólidas) y la Declaración Universal de Derechos Humanos.
                </p>
                <div class="d-flex gap-2">
                    <span class="badge bg-secondary p-2"><i class="bi bi-shield-lock me-1"></i> Secreto Profesional</span>
                    <span class="badge bg-primary p-2"><i class="bi bi-check-circle me-1"></i> 100% Sin Costo</span>
                </div>
            </div>

            <!-- Columna 2: Navegación Rápida -->
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="fw-bold text-white text-uppercase mb-3" style="letter-spacing: 1px;">Plataforma</h6>
                <ul class="list-unstyled small d-flex flex-column gap-2">
                    <li><a href="{{ route('home') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Nosotros y Misión</a></li>
                    <li><a href="{{ route('servicios') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Catálogo Jurídico</a></li>
                    <li><a href="{{ route('directorio') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Directorio de Letrados</a></li>
                    <li><a href="{{ route('recursos') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Centro de Recursos</a></li>
                    <li><a href="{{ route('faq') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Preguntas Frecuentes</a></li>
                </ul>
            </div>

            <!-- Columna 3: Áreas Especializadas -->
            <div class="col-lg-3 col-md-6 col-6">
                <h6 class="fw-bold text-white text-uppercase mb-3" style="letter-spacing: 1px;">Áreas Legales</h6>
                <ul class="list-unstyled small d-flex flex-column gap-2">
                    <li><a href="{{ route('servicios.derechos-humanos') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Derechos Humanos</a></li>
                    <li><a href="{{ route('servicios.migrantes') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Asilo y Migrantes</a></li>
                    <li><a href="{{ route('solicitud') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Solicitar Asesoría</a></li>
                    <li><a href="{{ route('terminos') }}" class="d-inline-flex align-items-center"><i class="bi bi-chevron-right me-1 text-primary small"></i> Marco Legal y Privacidad</a></li>
                </ul>
                <div class="mt-3 p-2 bg-dark rounded border border-secondary border-opacity-25 small">
                    <span class="text-warning fw-bold"><i class="bi bi-exclamation-triangle-fill me-1"></i> Urgencias Graves:</span>
                    <p class="text-light opacity-75 mb-0" style="font-size: 0.75rem;">Para riesgo inminente a la vida o detención arbitraria, utiliza el canal prioritario 24/7.</p>
                </div>
            </div>

            <!-- Columna 4: Contacto y Sedes -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-white text-uppercase mb-3" style="letter-spacing: 1px;">Contacto Oficial</h6>
                <ul class="list-unstyled small text-light opacity-75 d-flex flex-column gap-2">
                    <li class="d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
                        <span>Palais des Nations, 1211 Ginebra 10, Suiza. Delegaciones regionales en América Latina.</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        <span>asistencia.juridica@un-legal.org</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        <span>+1 (800) 555-8653 (Línea Gratuita)</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-clock-fill text-primary"></i>
                        <span>Lunes a Viernes: 08:00 - 18:00 (UTC)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Barra Inferior de Copyright y Términos -->
    <div class="footer-bottom py-3">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start gap-2">
            <small class="text-secondary">
                &copy; {{ date('Y') }} Organización de las Naciones Unidas (ONU). Todos los derechos reservados.
            </small>
            <div class="d-flex gap-3 small">
                <a href="{{ route('terminos') }}" class="text-secondary text-decoration-none hover-underline">Términos de Servicio</a>
                <span class="text-secondary">&bull;</span>
                <a href="{{ route('terminos') }}#privacidad" class="text-secondary text-decoration-none hover-underline">Política de Privacidad</a>
                <span class="text-secondary">&bull;</span>
                <a href="{{ route('solicitud') }}" class="text-secondary text-decoration-none hover-underline">Contacto</a>
            </div>
        </div>
    </div>
</footer>
