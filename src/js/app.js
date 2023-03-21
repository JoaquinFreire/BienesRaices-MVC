document.addEventListener('DOMContentLoaded', function() {
    eventlisteners();
    darkMode();
});

function darkMode() {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(prefiereDarkMode.matches);

    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function() {

        setTimeout(() => {
            document.body.classList.toggle('dark-mode');
            setTimeout(() => {
                document.body.classList.toggle('dark-mode');
                setTimeout(() => {
                    document.body.classList.toggle('dark-mode');
                }, 200)
            }, 200);

        }, 200);


    });
}


function eventlisteners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrarMetodosContacto))

}

function navegacionResponsive() {

    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar'); //si tiene la clase la agrega y si no la tiene la quita, sencillo
}

function mostrarMetodosContacto(e) {
    const contactoDiv = document.querySelector('#contacto');

    if (e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <label for="telefono">Número Teléfono</label>
            <input type="tel" id="telefono" placeholder="Tu Teléfono" name="contacto[telefono]" required>

            <p>Elija la fecha y la hora para ser contactado</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="contacto[fecha]">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00" name="contacto[hora]">
        `;
    } else {
        contactoDiv.innerHTML = `
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Tu Email" name="contacto[email]" required>
        `;
    }
}