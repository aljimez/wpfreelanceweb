<?php
/**
 * Interactive Profit Loss Calculator for Academies
 */
?>
<section id="calculadora" class="section-pad bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="badge bg-danger text-white px-3 py-2 rounded-pill fw-bold text-uppercase mb-4">Auditoría Financiera</span>
                <h2 class="display-5 fw-bold mb-4 font-heading">¿CUÁNTO DINERO ESTÁS PERDIENDO POR FALLOS TÉCNICOS?</h2>
                <p class="lead mb-4 opacity-75">
                    La mayoría de los dueños de academias ignoran que el **checkout lento**, las **caídas del servidor** o una **UX confusa** están matando su conversión.
                </p>
                <div class="alert alert-warning border-0 shadow-sm rounded-4 p-4">
                    <p class="mb-0 fw-bold small text-uppercase">Cálculo de impacto real en facturación mensual si no optimizas tu infraestructura ahora.</p>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div id="aj-calculator" class="p-4 p-md-5 border">
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-uppercase opacity-50">Nº de alumnos actuales</label>
                        <input type="range" class="form-range" id="alumnos" min="10" max="1000" step="10" value="100">
                        <div class="d-flex justify-content-between mt-1">
                            <span class="small opacity-50">10</span>
                            <span class="badge bg-dark" id="alumnos-val">100 alumnos</span>
                            <span class="small opacity-50">1000</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold small text-uppercase opacity-50">Precio medio del curso (€)</label>
                        <input type="number" class="form-control form-control-lg border-0 bg-light" id="precio" value="150">
                    </div>

                    <div class="mb-5">
                        <label class="form-label fw-bold small text-uppercase opacity-50">Fricción Técnica (Pérdida estimada)</label>
                        <select class="form-select form-select-lg border-0 bg-light" id="friccion">
                            <option value="0.05">Baja (5% pérdidia - Web optimizada)</option>
                            <option value="0.15" selected>Media (15% pérdida - WordPress estándar)</option>
                            <option value="0.30">Alta (30% pérdida - Lentitud y caídas)</option>
                        </select>
                        <p class="small text-muted mt-2 mb-0 italic opacity-75">*Basado en estudios de Google: cada segundo extra de carga reduce un 7% la conversión.</p>
                    </div>

                    <div class="bg-light rounded-3 p-4 text-center border-top border-primary border-4">
                        <p class="text-uppercase small fw-bold opacity-50 mb-1">Pérdida mensual potencial:</p>
                        <div class="display-4 fw-bold loss-number mb-2" id="resultado-anual">0€</div>
                        <p class="small text-muted mb-0" id="impacto-texto">Esto equivale a dejar de vender <span class="fw-bold" id="ventas-perdidas">0</span> cursos cada mes.</p>
                    </div>

                    <div class="mt-4">
                        <a href="<?php echo esc_url( home_url( '#contacto' ) ); ?>" class="btn btn-primary btn-lg w-100 shadow-sm">DETENER LA PÉRDIDA AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const rangeAlumnos = document.getElementById('alumnos');
    const labelAlumnos = document.getElementById('alumnos-val');
    const inputPrecio = document.getElementById('precio');
    const selectFriccion = document.getElementById('friccion');
    const displayResultado = document.getElementById('resultado-anual');
    const displayVentas = document.getElementById('ventas-perdidas');

    function calcular() {
        const alumnos = parseInt(rangeAlumnos.value);
        const precio = parseFloat(inputPrecio.value) || 0;
        const friccion = parseFloat(selectFriccion.value);

        labelAlumnos.innerText = alumnos + ' alumnos';

        const perdidaMensual = (alumnos * precio) * friccion;
        const cursosPerdidos = Math.round(perdidaMensual / (precio || 1));

        displayResultado.innerText = new Intl.NumberFormat('es-ES', { style: 'currency', currency: 'EUR' }).format(perdidaMensual);
        displayVentas.innerText = cursosPerdidos;
    }

    if(rangeAlumnos) rangeAlumnos.addEventListener('input', calcular);
    if(inputPrecio) inputPrecio.addEventListener('input', calcular);
    if(selectFriccion) selectFriccion.addEventListener('change', calcular);
    
    calcular();
});
</script>
