<?php
$pageTitle = "Inscripción de Cursos | EduCursos";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- SECCIÓN: HERO / BIENVENIDA -->
<header class="hero-section text-white py-5 shadow-sm">
    <div class="container py-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="badge bg-primary px-3 py-2 fw-bold text-uppercase mb-3 shadow-sm">
                    Inscripciones Abiertas
                </span>
                <h1 class="display-4 fw-bold mb-3">Impulsa tu carrera con cursos especializados</h1>
                <p class="lead mb-4 opacity-90 fs-5">Aprende con proyectos reales y obtén certificación oficial en áreas de alta demanda laboral.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#cursos" class="btn btn-primary btn-lg fw-bold px-4 shadow-sm">
                        <i class="bi bi-grid-fill me-2"></i>Ver Cursos
                    </a>
                    <a href="#inscripcion" class="btn btn-outline-light btn-lg px-4 fw-semibold">
                        Inscribirme
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <!-- Formulario de conversión directa -->
                <div class="bg-white text-dark p-4 rounded-4 shadow-lg border">
                    <h4 class="fw-bold mb-1">Inscripción Rápida</h4>
                    <p class="text-muted small mb-3">Reserva tu cupo en menos de un minuto.</p>
                    <form action="procesar_inscripcion.php" method="POST">
                        <div class="mb-3 text-start">
                            <label class="form-label small fw-semibold">Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control" required placeholder="Ej. Juan Pérez">
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label small fw-semibold">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control" required placeholder="juan@ejemplo.com">
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label small fw-semibold">Seleccionar Curso</label>
                            <select name="curso_id" class="form-select" required>
                                <option value="" disabled selected>Elige un curso...</option>
                                <option value="1">Desarrollo Web Full Stack</option>
                                <option value="2">Diseño UX/UI Avanzado</option>
                                <option value="3">Administración de Redes y Servidores</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold py-2 shadow-sm">
                            Registrarme Ahora
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="beneficios" class="py-5 bg-white">
    <div class="container py-3">
        <div class="text-center mb-5">
            <h2 class="fw-bold">¿Por qué estudiar con nosotros?</h2>
            <p class="text-muted">Diseñamos una experiencia de aprendizaje práctica y enfocada en resultados.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="p-3">
                    <i class="bi bi-award text-primary display-5 mb-3 d-block"></i>
                    <h5 class="fw-bold">Certificación Oficial</h5>
                    <p class="text-muted small">Al finalizar y aprobar el programa, obtendrás un certificado con validez curricular.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-3">
                    <i class="bi bi-laptop text-primary display-5 mb-3 d-block"></i>
                    <h5 class="fw-bold">100% Práctico</h5>
                    <p class="text-muted small">Aprenderás mediante proyectos reales guiados por instructores expertos del sector.</p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="p-3">
                    <i class="bi bi-clock-history text-primary display-5 mb-3 d-block"></i>
                    <h5 class="fw-bold">Horarios Flexibles</h5>
                    <p class="text-muted small">Acceso a sesiones en vivo y grabadas disponibles las 24 horas del día.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cursos" class="py-5 bg-light">
    <div class="container py-3">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nuestros Cursos</h2>
            <p class="text-muted">Elige el programa que se ajuste a tus metas profesionales.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-course h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary-subtle text-primary mb-2 w-auto align-self-start">Tecnología</span>
                        <h5 class="card-title fw-bold">Desarrollo Web Full Stack</h5>
                        <p class="card-text text-muted small flex-grow-1">Aprende HTML, CSS, Bootstrap, PHP y bases de datos desde cero hasta nivel profesional.</p>
                        <ul class="list-unstyled small text-muted my-3">
                            <li><i class="bi bi-clock me-2"></i>Duración: 80 horas</li>
                            <li><i class="bi bi-calendar-event me-2"></i>Modalidad: Online</li>
                        </ul>
                        <a href="#inscripcion" class="btn btn-outline-primary w-100 mt-auto fw-semibold">Inscribirme</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-course h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-success-subtle text-success mb-2 w-auto align-self-start">Diseño</span>
                        <h5 class="card-title fw-bold">Diseño UX/UI Avanzado</h5>
                        <p class="card-text text-muted small flex-grow-1">Domina la investigación de usuarios, wireframing, prototipado y sistemas de diseño.</p>
                        <ul class="list-unstyled small text-muted my-3">
                            <li><i class="bi bi-clock me-2"></i>Duración: 60 horas</li>
                            <li><i class="bi bi-calendar-event me-2"></i>Modalidad: Online</li>
                        </ul>
                        <a href="#inscripcion" class="btn btn-outline-primary w-100 mt-auto fw-semibold">Inscribirme</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-course h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-warning-subtle text-warning-emphasis mb-2 w-auto align-self-start">Sistemas</span>
                        <h5 class="card-title fw-bold">Redes y Virtualización</h5>
                        <p class="card-text text-muted small flex-grow-1">Configuración de servidores, entornos virtuales, redes empresariales y seguridad.</p>
                        <ul class="list-unstyled small text-muted my-3">
                            <li><i class="bi bi-clock me-2"></i>Duración: 50 horas</li>
                            <li><i class="bi bi-calendar-event me-2"></i>Modalidad: Online</li>
                        </ul>
                        <a href="#inscripcion" class="btn btn-outline-primary w-100 mt-auto fw-semibold">Inscribirme</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="inscripcion" class="py-5 bg-white">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-3">Formulario de Inscripción</h2>
                <p class="text-muted mb-4">Completa la siguiente información y te enviaremos los datos de acceso e instrucciones de pago.</p>
                
                <div class="card border-0 shadow-sm p-4 text-start">
                    <form action="procesar_inscripcion.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" required placeholder="Ej. Ana Gómez">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Correo Electrónico</label>
                                <input type="email" name="email" class="form-control" required placeholder="ana@ejemplo.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Teléfono / WhatsApp</label>
                                <input type="tel" name="telefono" class="form-control" required placeholder="+593 999 999 999">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Curso de Interés</label>
                                <select name="curso_id" class="form-select" required>
                                    <option value="" disabled selected>Selecciona un curso</option>
                                    <option value="1">Desarrollo Web Full Stack</option>
                                    <option value="2">Diseño UX/UI Avanzado</option>
                                    <option value="3">Redes y Virtualización</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold small">Mensaje o Consulta (Opcional)</label>
                                <textarea name="mensaje" class="form-control" rows="3" placeholder="¿Tienes alguna duda adicional sobre horarios o facturación?"></textarea>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg px-5 fw-bold">Confirmar Inscripción</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>