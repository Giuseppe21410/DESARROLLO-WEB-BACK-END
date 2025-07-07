// LOGICA PARA ACTIVAR EL ENLACE DEL HEADER:
        const enlaceActivo = document.getElementById('enlace_1');
        const enlaceActivar = document.getElementById('enlace_5');

        // Función para cambiar las clases de los enlaces, "activando" uno y "desactivando" otro.
        function activarEnlace() {
            // Remueve 'active' y añade 'link-body-emphasis' al enlace que se va a desactivar.
            if (enlaceActivo) {
                enlaceActivo.classList.remove('active');
                enlaceActivo.classList.add('link-body-emphasis');
            }
            // Remueve 'link-body-emphasis' y añade 'active' al enlace que se va a activar.
            if (enlaceActivar) {
                enlaceActivar.classList.remove('link-body-emphasis');
                enlaceActivar.classList.add('active');
            }
        }

        // Llama a la función para ejecutar el cambio al cargar la página.
        activarEnlace();




// LOGICA DE LOS ESTILOS DE ACTIVO/SUSPENDIDO/INACTIVO:
// Itera sobre todos los elementos con la clase 'estado'.
        document.querySelectorAll('.estado').forEach(element => {
            // Obtiene el texto del elemento y elimina espacios en blanco.
            const estado = element.textContent.trim();
            // Basado en el texto, añade una clase específica para estilizar el estado.
            if (estado === 'activo') {
                element.classList.add('Dato_Activo'); // Clase para estado "Activo" (verde).
            } else if (estado === 'inactivo') {
                element.classList.add('Dato_Inactivo'); // Clase para estado "Inactivo" (rojo).
            } else if (estado === 'suspendido') {
                element.classList.add('Dato_Suspendido'); // Clase para estado "Suspendido" (amarillo).
            }
        });

        // Seleccionamos todos los td con clase 'rango'
        document.querySelectorAll('.rango').forEach(td => {
          const valor = td.textContent.trim(); // Obtenemos el texto que hay dentro

          if (valor === 'A') {
            td.textContent = 'Gerente';
          } else if (valor === 'B') {
            td.textContent = 'Subgerente';
          } else if (valor === 'C') {
            td.textContent = 'Empleado';
          }
        });


// LOGICA DE LOS SELECTORES DE CHOICES.JS:
// Inicializa Choices.js y guarda las instancias para poder acceder a ellas.
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

        initializeChoices('miSelect_1');
        initializeChoices('miSelect_2');
        initializeChoices('miSelect_3');
        initializeChoices('miSelect_4');
        initializeChoices('miSelect_5');
        initializeChoices('miSelect_6');


// LOGICA PARA LA SUPERPOSICIÓN DE LOS BOTONES AÑADIR Y ELIMINAR AL SELECCIONAR UN USUARIO:
document.addEventListener('DOMContentLoaded', function() {
    // ... (tu código anterior) ...

    const contenedor_botones = document.getElementById('Contenedor_Terciario_3_Botones');
    const checkboxes = document.querySelectorAll('.checkbox');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(cb => {
                    if (cb !== this) cb.disabled = true;
                });

                // Inserta los botones de "Eliminar" y "Editar" en el contenedor.
                contenedor_botones.innerHTML = `
                    <button type="submit" class="Contenedor_Terciario_1_Boton" id="Boton_Eliminar"><i class="bi bi-trash-fill"></i></button>
                    <button class="Contenedor_Terciario_1_Boton" id="Boton_Editar"><i class="bi bi-pencil-fill"></i></button>
                `;

                document.getElementById('Boton_Editar').addEventListener('click', function(event) {
                    event.stopPropagation();
                    event.preventDefault();

                    const contenedorPrincipal = document.getElementById('Contenedor_Principal');
                    const contenedorEditar = document.getElementById('Contenedor_Editar');
                    const contenedorAñadir = document.getElementById('Contenedor_Añadir');

                    contenedorPrincipal.style.display = 'none';
                    contenedorAñadir.style.display = 'none';
                    contenedorEditar.style.display = 'block';

                    // Obtener el ID del usuario seleccionado:
                    const checkboxSeleccionado = document.querySelector('.checkbox:checked');
                    const idUsuario = checkboxSeleccionado ? checkboxSeleccionado.value : null;

                    // Generar input hidden:
                    const contenedorHidden = document.getElementById("contenedor-hidden");
                    if (contenedorHidden) {
                        contenedorHidden.innerHTML = ""; 
                        if (idUsuario) {
                            const input = document.createElement("input");
                            input.type = "hidden";
                            input.name = "id_usuario";
                            input.value = idUsuario;
                            contenedorHidden.appendChild(input);
                        }
                    }
                });

            } else {
                checkboxes.forEach(cb => cb.disabled = false);
                this.parentElement.style.backgroundColor = 'white';
                contenedor_botones.innerHTML = '';
            }
        });
    });
});

/// LOGICA PARA LA VALIDACIÓN DE AÑADIR USUARIOS:

    document.addEventListener('DOMContentLoaded', function() {
        // --- Lógica del modal de Añadir Empleado ---
        const botonAñadir = document.getElementById('Boton_Añadir');
        const contenedorPrincipal = document.getElementById('Contenedor_Principal');
        const contenedorAñadir = document.getElementById('Contenedor_Añadir');
        const contenedorEditar = document.getElementById('Contenedor_Editar'); // Añadido para gestionar la ocultación

        if (botonAñadir) { // Asegura que el botón existe antes de añadir el listener
            botonAñadir.addEventListener('click', function(event) {
                event.stopPropagation(); // Detiene la propagación del evento.
                event.preventDefault();  // Evita el comportamiento por defecto.

                contenedorPrincipal.style.display = 'none'; // Oculta el contenedor principal.
                contenedorAñadir.style.display = 'block';   // Muestra el formulario de añadir.
                contenedorEditar.style.display = 'none'; // Asegura que el de editar esté oculto si estuviera visible
            });
        }

        // --- Cierre de modales al hacer clic fuera ---
        document.addEventListener('click', function(event) {
            // Cierre del modal de Añadir
            if (contenedorAñadir.style.display === 'block' && !contenedorAñadir.contains(event.target) && (!botonAñadir || !botonAñadir.contains(event.target))) {
                contenedorAñadir.style.display = 'none';
                contenedorPrincipal.style.display = 'block';
            }
            // Cierre del modal de Editar
            const contenedor_botones_accion = document.getElementById('Contenedor_Terciario_3_Botones');
            if (contenedorEditar.style.display === 'block' && !contenedorEditar.contains(event.target) && (!contenedor_botones_accion || !contenedor_botones_accion.contains(event.target))) {
                contenedorEditar.style.display = 'none';
                contenedorPrincipal.style.display = 'block';
            }
        });

        // --- Lógica de validación de formularios ---
        const formsToValidate = [
            { id: '#Contenedor_Añadir form', aviso: 'Aviso_Validacion' },
            { id: '#Contenedor_Editar form', aviso: 'Aviso_Validacion_Editar' }
        ];

        formsToValidate.forEach(formConfig => {
            const form = document.querySelector(formConfig.id);
            const avisoValidacion = document.getElementById(formConfig.aviso);

            if (!form) return;

            const inputsAndSelects = form.querySelectorAll('input, select');

            function validateSingleInput(inputElement) {
                let isValid = true;

                // Validación de campo vacío para inputs
                if (inputElement.tagName === 'INPUT' && inputElement.hasAttribute('required') && inputElement.value.trim() === '') {
                    isValid = false;
                    errorMessage = 'Este campo es obligatorio.';
                } else if (inputElement.tagName === 'SELECT' && inputElement.hasAttribute('required') && inputElement.value === '') {
                    // Validación de campo vacío para selects con la primera opción deshabilitada y seleccionada
                    isValid = false;
                    errorMessage = 'Debe seleccionar una opción.';
                } else {
                    // Validaciones de tipo de campo específicas cuando NO está vacío
                    if (inputElement.type === 'email') {
                        if (!inputElement.checkValidity()) {
                            isValid = false;
                            errorMessage = 'Por favor, introduce un correo electrónico válido.';
                        }
                    } else if (inputElement.type === 'date') {
                        const today = new Date();
                        today.setHours(0, 0, 0, 0);
                        const inputDate = new Date(inputElement.value);
                        inputDate.setHours(0, 0, 0, 0);
                        const minAllowedDate = new Date('1950-01-01');
                        minAllowedDate.setHours(0, 0, 0, 0);

                        if (inputDate > today) {
                            isValid = false;
                            errorMessage = 'La fecha no puede ser en el futuro.';
                        } else if (inputDate < minAllowedDate) {
                            isValid = false;
                            errorMessage = 'La fecha es demasiado antigua.';
                        }
                    }
                    // Puedes añadir más validaciones aquí (ej. para contraseñas)
                }

                // Aplicar/eliminar clases CSS
                if (inputElement.tagName === 'SELECT') {
                    // Para Choices.js, el borde se aplica al div que lo envuelve
                    const choicesWrapper = inputElement.closest('.choices');
                    if (choicesWrapper) {
                        if (isValid) {
                            choicesWrapper.classList.remove('is-invalid');
                            choicesWrapper.classList.add('is-valid');
                        } else {
                            choicesWrapper.classList.remove('is-valid');
                            choicesWrapper.classList.add('is-invalid');
                        }
                    }
                } else {
                    if (isValid) {
                        inputElement.classList.remove('is-invalid');
                        inputElement.classList.add('is-valid');
                    } else {
                        inputElement.classList.remove('is-valid');
                        inputElement.classList.add('is-invalid');
                    }
                }

                // Mostrar/ocultar mensaje de error (opcional, si quieres mensajes específicos por campo)
                // Aquí se mantiene la filosofía de un aviso general para todo el formulario
                return isValid;
            }

            // Añadir 'input' event listeners para validación en tiempo real
            inputsAndSelects.forEach(input => {
                input.addEventListener('input', function() {
                    validateSingleInput(this);
                });
                // También es útil para selectores en 'change'
                if (input.tagName === 'SELECT') {
                    input.addEventListener('change', function() {
                        validateSingleInput(this);
                    });
                }
            });

            // Añadir 'submit' event listener para la validación final del formulario
            form.addEventListener('submit', function(event) {
                let formIsValid = true;

                inputsAndSelects.forEach(input => {
                    const fieldIsValid = validateSingleInput(input);
                    if (!fieldIsValid) {
                        formIsValid = false;
                        // Aquí podrías capturar mensajes de error específicos si los tuvieras
                        // For example: allErrorMessages.push(input.validationMessage || 'Campo inválido');
                    }
                });

                if (!formIsValid) {
                    event.preventDefault(); // Previene el envío si hay campos inválidos
                    // Aquí puedes mostrar un mensaje general en el 'avisoValidacion'
                    if (avisoValidacion) {
                        avisoValidacion.textContent = 'Por favor, corrige los campos resaltados.';
                        avisoValidacion.style.color = 'red';
                    }
                } else {
                    if (avisoValidacion) {
                        avisoValidacion.textContent = ''; // Limpia el aviso si todo es válido
                    }
                }
            });
        });
    });



/// LOGICA PARA LA VALIDACIÓN DE LA EDICIÓN DE USUARIOS:

document.addEventListener('DOMContentLoaded', function() {

        // --- Lógica de validación para el formulario de EDITAR ---
        const formEditar = document.getElementById('form_editar_usuario_id'); // Nuevo ID
        const avisoValidacionEditar = document.getElementById('Aviso_Validacion_Editar'); // ID existente
        const btnGuardarEdit = document.getElementById('btn_guardar_edit_id'); // Nuevo ID

        if (formEditar) {
            // Obtener todos los inputs y selects (excluyendo el botón de guardar)
            const inputsAndSelectsEdit = formEditar.querySelectorAll('input, select');

            /**
             * Valida un único campo del formulario de edición.
             * Aplica bordes verdes si tiene contenido y es válido, o rojos si es inválido.
             * Un campo vacío no se marca como inválido, pero tampoco como válido (sin borde verde).
             * @param {HTMLElement} inputElement - El elemento input o select a validar.
             * @returns {boolean} - True si el campo es válido (y no está vacío), false si es inválido.
             */
            function validateSingleEditInput(inputElement) {
                let isValid = true;
                const value = inputElement.value.trim();

                // Si el campo está vacío, no se le aplican clases de validación (ni válido ni inválido)
                if (value === '') {
                    removeValidationClasses(inputElement);
                    return true; // Un campo vacío no es inválido para la lógica de edición
                }

                // Validación de tipo de campo (si tiene contenido)
                if (inputElement.type === 'email') {
                    // Si tiene contenido, debe ser un email válido
                    if (!inputElement.checkValidity()) {
                        isValid = false;
                    }
                } else if (inputElement.type === 'date') {
                    const today = new Date();
                    today.setHours(0, 0, 0, 0); // Normalizamos a medianoche para comparar solo la fecha

                    const inputDate = new Date(value);
                    inputDate.setHours(0, 0, 0, 0);

                    const minAllowedDate = new Date('1900-01-01'); // Fecha mínima para la validación de edición
                    minAllowedDate.setHours(0, 0, 0, 0);

                    // La fecha no puede ser en el futuro y debe ser posterior a 1900
                    if (isNaN(inputDate.getTime()) || inputDate > today || inputDate < minAllowedDate) {
                        isValid = false;
                    }
                }

                // Aplicar/eliminar clases CSS según la validez y si tiene contenido
                applyValidationClasses(inputElement, isValid);
                return isValid;
            }

            /**
             * Aplica las clases 'is-valid' o 'is-invalid' a un elemento o su wrapper de Choices.js.
             * @param {HTMLElement} element - El input o select.
             * @param {boolean} isValid - Si el elemento es válido.
             */
            function applyValidationClasses(element, isValid) {
                let targetElement = element;
                // Si es un select y tiene un wrapper de Choices.js
                // Usamos choicesEditEstado y choicesEditTipoEmpleo para acceder a sus wrappers
                if (element.id === 'edit_select_estado_id' && choicesEditEstado) {
                    targetElement = choicesEditEstado.containerOuter;
                } else if (element.id === 'edit_select_tipo_empleo_id' && choicesEditTipoEmpleo) {
                    targetElement = choicesEditTipoEmpleo.containerOuter;
                } else if (element.tagName === 'SELECT' && element.closest('.choices')) { // Fallback por si acaso
                    targetElement = element.closest('.choices');
                }


                targetElement.classList.remove('is-valid', 'is-invalid');
                if (isValid) {
                    targetElement.classList.add('is-valid');
                } else {
                    targetElement.classList.add('is-invalid');
                }
            }

             /**
             * Elimina las clases de validación de un elemento o su wrapper de Choices.js.
             * @param {HTMLElement} element - El input o select.
             */
            function removeValidationClasses(element) {
                let targetElement = element;
                // Usamos choicesEditEstado y choicesEditTipoEmpleo para acceder a sus wrappers
                if (element.id === 'edit_select_estado_id' && choicesEditEstado) {
                    targetElement = choicesEditEstado.containerOuter;
                } else if (element.id === 'edit_select_tipo_empleo_id' && choicesEditTipoEmpleo) {
                    targetElement = choicesEditTipoEmpleo.containerOuter;
                } else if (element.tagName === 'SELECT' && element.closest('.choices')) { // Fallback por si acaso
                    targetElement = element.closest('.choices');
                }
                targetElement.classList.remove('is-valid', 'is-invalid');
            }


            /**
             * Verifica la validez del formulario de edición y habilita/deshabilita el botón de guardar.
             * El botón se habilita si al menos un campo tiene contenido Y todos los campos con contenido son válidos.
             */
            function checkEditFormValidity() {
                let hasContent = false;
                let allContentIsValid = true;

                inputsAndSelectsEdit.forEach(input => {
                    const value = input.value.trim();

                    if (value !== '') {
                        hasContent = true; // Al menos un campo tiene contenido
                        // Validar este campo específico y actualizar allContentIsValid
                        if (!validateSingleEditInput(input)) {
                            allContentIsValid = false;
                        }
                    } else {
                        // Si el campo está vacío, quitarle las clases de validación
                        removeValidationClasses(input);
                    }
                });

                // Habilitar el botón si hay contenido Y todo el contenido es válido
                if (btnGuardarEdit) {
                    btnGuardarEdit.disabled = !(hasContent && allContentIsValid);
                }

                // Mostrar mensaje de aviso si hay errores de validación
                if (!allContentIsValid && hasContent) {
                     if (avisoValidacionEditar) {
                        avisoValidacionEditar.textContent = 'Por favor, corrige los campos resaltados con errores.';
                        avisoValidacionEditar.style.color = 'red';
                    }
                } else {
                     if (avisoValidacionEditar) {
                        avisoValidacionEditar.textContent = ''; // Limpiar el aviso si todo es válido o vacío
                    }
                }
            }

            // Añadir event listeners para validación en tiempo real y habilitar/deshabilitar botón
            inputsAndSelectsEdit.forEach(input => {
                input.addEventListener('input', checkEditFormValidity);
                if (input.tagName === 'SELECT') {
                    input.addEventListener('change', checkEditFormValidity);
                }
            });

            // Validar al cargar la página si el formulario ya tiene datos (útil si se precarga)
            checkEditFormValidity();


            // Manejar el envío del formulario de edición
            formEditar.addEventListener('submit', function(event) {
                // Volver a validar todo el formulario al enviar, por si acaso
                checkEditFormValidity();

                if (btnGuardarEdit.disabled) { // Si el botón está deshabilitado, significa que hay errores o no hay contenido
                    event.preventDefault(); // Prevenir el envío
                    if (avisoValidacionEditar) {
                        avisoValidacionEditar.textContent = 'No se pueden guardar los cambios. Asegúrate de que al menos un campo esté relleno y todos los campos rellenos sean válidos.';
                        avisoValidacionEditar.style.color = 'red';
                    }
                } else {
                    if (avisoValidacionEditar) {
                        avisoValidacionEditar.textContent = ''; // Limpiar el aviso si todo es válido
                    }
                }
            });
        }
    });



    // Desarrollamos la lógica de los filtros: 

// Selecciona el contenedor donde están los selects
const contenedor = document.getElementById('Contenedor_Terciario_2_Formulario');
const botonEnviar = document.getElementById('Boton_Enviar');

// Agrega un event listener a cada select dentro del contenedor
contenedor.querySelectorAll('select').forEach(select => {
    select.addEventListener('change', () => {
        botonEnviar.click();
    });
});




