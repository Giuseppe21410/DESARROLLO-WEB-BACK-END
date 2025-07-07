// ACTIVAR ENLACE EN HEADER
const enlaceActivo = document.getElementById('enlace_1');
const enlaceActivar = document.getElementById('enlace_2');

function activarEnlace() {
    if (enlaceActivo) {
        enlaceActivo.classList.remove('active');
        enlaceActivo.classList.add('link-body-emphasis');
    }
    if (enlaceActivar) {
        enlaceActivar.classList.remove('link-body-emphasis');
        enlaceActivar.classList.add('active');
    }
}
activarEnlace();


// INICIALIZAR CHOICES.JS
const choicesInstances = {};
function initializeChoices(selectorId) {
    const element = document.getElementById(selectorId);
    if (element) {
        choicesInstances[selectorId] = new Choices(element, {
            searchEnabled: false,
            itemSelectText: '',
            shouldSort: false
        });
    }
}
for (let i = 1; i <= 19; i++) {
    initializeChoices(`miSelect_${i}`);
}


// LÓGICA GENERAL TRAS CARGA DEL DOM
document.addEventListener('DOMContentLoaded', function () {
    // === ELEMENTOS ===
    const ContenedorDesechosMateriales = document.getElementById("ContenedorDesechosMateriales");
    const ContenedorDesechosMateriales_1 = document.getElementById("ContenedorDesechosMateriales_1_1");
    const ContenedorDesechosMateriales_2 = document.getElementById("ContenedorDesechosMateriales_1_2");
    const ContenedorDesechosMateriales_Mostrar = document.getElementById("ContenedorDesechosMateriales_Mostrar");
    const BotonAgrandarMateriales_2 = document.getElementById("BotonAgrandarMateriales_2");
    const ContenedorComposicion = document.getElementById("ContenedorPrincipalComposicion");
    const BotonGestor_1 = document.getElementById("BotonGestor_1");
    const ContenedorPrincipal = document.getElementById("ContenedorPRINCIPAL");
    const GestorMaterial = document.getElementById("Contenedor_MaterialesGestor");
    const GestorEditarMaterial = document.getElementById("Contenedor_MaterialGestorEditar");
    const GestorAñadirMaterial=document.getElementById("Contenedor_MaterialGestorAñadir");
    const BotonMostrarAñadirMateriales=document.getElementById("Boton_Añadir")
    const contenedor_botones = document.getElementById('Contenedor_Terciario_3_Botones');
    const checkboxes = document.querySelectorAll('.checkbox');
    const GestorDesechos = document.getElementById("Contenedor_DesechosGestor");
    const BotonGestor_2 = document.getElementById("BotonGestor_2");
    const GestorAñadirDesecho = document.getElementById("Contenedor_DesechoGestorAñadir");
    const BotonMostrarAñadirDesechos = document.getElementById("Boton_Añadir_Desecho");


    let seccionExpandida = false;

    // === FUNCIONES ===

    function expandirSeccion() {
        if (!seccionExpandida && ContenedorDesechosMateriales && ContenedorComposicion) {
            ContenedorDesechosMateriales.classList.replace("ContenedorPrincipal_2_Small", "ContenedorPrincipal_2");
            ContenedorDesechosMateriales_1.style.display = "none";
            ContenedorDesechosMateriales_2.style.display = "flex";
            ContenedorDesechosMateriales_Mostrar.style.display = "block";
            ContenedorComposicion.classList.replace("ContenedorPrincipal_1", "ContenedorPrincipal_1_Small");
            seccionExpandida = true;
        }
    }

    function colapsarSeccion() {
        if (seccionExpandida && ContenedorDesechosMateriales && ContenedorComposicion) {
            ContenedorDesechosMateriales.classList.replace("ContenedorPrincipal_2", "ContenedorPrincipal_2_Small");
            ContenedorDesechosMateriales_1.style.display = "flex";
            ContenedorDesechosMateriales_2.style.display = "none";
            ContenedorDesechosMateriales_Mostrar.style.display = "none";
            ContenedorComposicion.classList.replace("ContenedorPrincipal_1_Small", "ContenedorPrincipal_1");
            seccionExpandida = false;
        }
    }

    function GenerarGestorMateriales() {
        if (ContenedorPrincipal && GestorMaterial) {
            ContenedorPrincipal.style.display = "none";
            GestorMaterial.style.display = "block";
        }
    }

    function GenerarGestorDesechos() {
        if (ContenedorPrincipal && GestorMaterial) {
            ContenedorPrincipal.style.display = "none";
            GestorDesechos.style.display = "block";
        }
    }

    function MostrarGestorEdicion() {
        if (GestorMaterial && GestorEditarMaterial) {
            GestorMaterial.style.display = "none";
            GestorEditarMaterial.style.display = "block";
        }
    }

    function MostrarGestorAñadir() {
        if (GestorMaterial && GestorAñadirMaterial) {
            GestorMaterial.style.display = "none";
            GestorAñadirMaterial.style.display = "block";
        }
    }

    function MostrarGestorAñadirDesecho() {
        if (GestorDesechos && GestorAñadirDesecho) {
            GestorDesechos.style.display = "none";
            GestorAñadirDesecho.style.display = "block";
        }
    }

    function OcultarGestorEdicion() {
        if (GestorMaterial && GestorEditarMaterial) {
            GestorEditarMaterial.style.display = "none";
            GestorMaterial.style.display = "block";
        }
    }

    function OcultarGestorAñadir() {
        if (GestorMaterial && GestorAñadirMaterial) {
            GestorAñadirMaterial.style.display = "none";
            GestorMaterial.style.display = "block";
        }
    }

    function OcultarGestorMateriales() {
        if (GestorMaterial && ContenedorPrincipal) {
            GestorMaterial.style.display = "none";
            ContenedorPrincipal.style.display = "block";
        }
    }

    // === EVENTOS ===

    BotonAgrandarMateriales_2?.addEventListener("click", (e) => {
        e.stopPropagation();
        expandirSeccion();
    });

    BotonGestor_1?.addEventListener("click", (e) => {
        e.stopPropagation();
        GenerarGestorMateriales();
    });

    BotonGestor_2?.addEventListener("click", (e) => {
        e.stopPropagation();
        GenerarGestorDesechos();
    });

    BotonMostrarAñadirMateriales?.addEventListener("click", (e) => {
        e.stopPropagation();
        MostrarGestorAñadir();
    });

    BotonMostrarAñadirDesechos?.addEventListener("click", (e) => {
        e.stopPropagation();
        MostrarGestorAñadirDesecho();
    });
    



    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                checkboxes.forEach(cb => { if (cb !== this) cb.disabled = true; });

                contenedor_botones.innerHTML = `
                    <button type="submit" class="Contenedor_Terciario_1_Boton" id="Boton_Eliminar">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                    <button class="Contenedor_Terciario_1_Boton" id="Boton_Editar">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                `;

                const botonEditar = document.getElementById('Boton_Editar');
                botonEditar?.addEventListener('click', function (event) {
                    event.stopPropagation();
                    event.preventDefault();
                    MostrarGestorEdicion();
                });

            } else {
                checkboxes.forEach(cb => cb.disabled = false);
                this.parentElement && (this.parentElement.style.backgroundColor = 'white');
                contenedor_botones.innerHTML = '';
            }
        });
    });

    // === CLICK GLOBAL PARA CERRAR SECCIONES O GESTORES ===
    document.addEventListener("click", function (event) {
        const target = event.target;

        // 1. Cerrar sección materiales/desechos si se hace clic fuera
        if (
            seccionExpandida &&
            !ContenedorDesechosMateriales.contains(target) &&
            !BotonAgrandarMateriales_2.contains(target)
        ) {
            colapsarSeccion();
        }
    });

    // Lógica para que al clickar fuera del gestor edición se despliege el gestor mostar materiales:
    document.addEventListener("click", function (event) {
    const target = event.target;

    const gestorEdicionVisible = GestorEditarMaterial?.style.display === 'block';
    const gestorMaterialVisible = GestorMaterial?.style.display === 'block';
    const gestorAñadirVisible = GestorAñadirMaterial?.style.display === 'block';

    // 1. Cerrar sección materiales/desechos si se hace clic fuera
    if (
        seccionExpandida &&
        !ContenedorDesechosMateriales.contains(target) &&
        !BotonAgrandarMateriales_2.contains(target)
    ) {
        colapsarSeccion();
    }

    // 2. Ocultar gestor de edición si está abierto y clic fuera
    if (
        gestorEdicionVisible &&
        !GestorEditarMaterial.contains(target) &&
        !document.getElementById("Boton_Editar")?.contains(target)
    ) {
        OcultarGestorEdicion();
        return; 
    }

    // 3. Ocultar gestor de añadir si está abierto y hace clic fuera:
    if (
        gestorAñadirVisible&&
        !GestorAñadirMaterial.contains(target) &&
        !document.getElementById("Boton_Añadir")?.contains(target)
    ) {
        OcultarGestorAñadir();
        return; 
    }

    // 4. Ocultar gestor de materiales si está abierto y edición o añadir NO está visible
    if (
        gestorMaterialVisible &&
        !gestorEdicionVisible && 
        !GestorMaterial.contains(target)
    ) {
        OcultarGestorMateriales();
    }
});

});

// LOGICA DE LOS ESTILOS DE RECIBIDO/PENDIENTE/CANCELADO:
// Itera sobre todos los elementos con la clase 'estado'.
        document.querySelectorAll('.estado').forEach(element => {
            // Obtiene el texto del elemento y elimina espacios en blanco.
            const estado = element.textContent.trim();
            // Basado en el texto, añade una clase específica para estilizar el estado.
            if (estado === 'recibido') {
                element.classList.add('Dato_Activo'); // Clase para estado "Activo" (verde).
            } else if (estado === 'cancelado') {
                element.classList.add('Dato_Inactivo'); // Clase para estado "Inactivo" (rojo).
            } else if (estado === 'pendiente') {
                element.classList.add('Dato_Suspendido'); // Clase para estado "Suspendido" (amarillo).
            }
        });













         