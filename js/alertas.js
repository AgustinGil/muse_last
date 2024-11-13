function direccion(dir, tiempo) {
    setTimeout(() => {
        window.location.href=dir;
    },tiempo)
}

function alerta_registro() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'success',
        title: 'Cuenta creada',
        confirmButtonText: '<a class="text-alert" href="login.php" style="color: #fff; text-decoration: none;">Aceptar</a>',
        color: '#141212',
    });
    direccion('login.php', 2500)
}

function alertaRegistroPremium() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'success',
        title: 'Su cuenta ha sido mejorada a Muse Lyre, en tu perfil encontraras tus estadisticas',
        color: '#141212',
    });
    direccion('index.php', 2500)
}

function alertaRegistroPremiumFallo() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'info',
        title: 'Su cuenta ya ha sido mejorada a Muse Lyre',
        color: '#141212',
    });
}


function alerta_recuperacion() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'success',
        title: 'Correo Enviado, Revise su correo',
        confirmButtonText: '<a class="text-alert" href="https://gmail.com/" style="color: #fff; text-decoration: none;">Ir a GMAIL</a>',
        color: '#141212',
    });
    direccion('index.php', 5000)
}

function alerta_error(titulo) {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'error',
        title: titulo,
        confirmButtonText: '<a class="text-alert" href="recuperacion.php" style="color: #fff; text-decoration: none;">Ir a recuperar Contraseña</a>',
        color: '#141212',
    });
    direccion('recuperacion.php', 5000)
}

function alerta_contraseña() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'success',
        title: 'Contraseña cambiada con exito',
        confirmButtonText: '<a class="text-alert" href="login.php" style="color: #fff; text-decoration: none;">Aceptar</a>',
        color: '#141212',
    });
    direccion('login.php', 2500)
}

function alerta_contraseñai() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'success',
        title: 'Contraseña cambiada con exito',
        confirmButtonText: '<a class="text-alert" href="login.php" style="color: #fff; text-decoration: none;">Aceptar</a>',
        color: '#141212',
    });
    direccion('index.php', 2500)
}

function alerta_favoritos() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'warning',
        title: 'Para añadir una cancion en favorito debe iniciar sesion',

        footer: '<a class="text-alert" href="login.php" style="color: #fff; font-family: var(--font-titulo)">Desea iniciar sesion?</a>',
        color: '#141212',
    });
}

function alerta_biblioteca() {
    Swal.fire({
        customClass: {
            title: "swal2-title",
        },
        background: '#3B3840',
        position: 'center',
        icon: 'warning',
        title: 'Para ir a la biblioteca debe iniciar sesion',

        footer: '<a class="text-alert" href="login.php" style="color: #fff; font-family: var(--font-titulo)">Desea iniciar sesion?</a>',
        color: '#141212',
    });
}
