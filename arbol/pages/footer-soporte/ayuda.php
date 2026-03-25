<?php 
session_start(); 
include("../../includes/header.php");
?>

<style>
    /* RESET GLOBAL PARA ESTA PÁGINA */
    * {
        box-sizing: border-box; /* Esto evita que el padding rompa el 100% de ancho */
    }

    .support-card {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        width: 100%; /* Asegura que no se pase del cel */
    }

    .grid-inputs {
        display: grid; 
        grid-template-columns: 1fr 1fr; 
        gap: 30px;
    }

    @media (max-width: 768px) {
        .grid-inputs {
            grid-template-columns: 1fr; 
            gap: 15px;
        }
        
        .support-main {
            padding-top: 100px !important; /* Ajustado para que no choque con el header */
        }

        h1 {
            font-size: 26px !important;
        }
    }

    .form-input-full {
        width: 100%;
        padding: 15px 15px 15px 50px; 
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        display: block; /* Evita espacios extra */
    }

    .btn-soporte-pro {
        width: 100%;
        background-color: #5D8736;
        color: white;
        padding: 15px;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        margin-top: 30px;
        cursor: pointer;
        transition: background 0.3s;
    }
</style>
</style>

<main class="support-main" style="background-color: var(--bg-main); padding-top: 140px;">
    <div class="support-card">
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="display: flex; justify-content: center; align-items: center; gap: 10px; font-size: 40px;">
                <i class="ri-customer-service-2-line"></i> Centro de Ayuda
            </h1>
            <p style="font-size: 18px; color: var(--gray-color);">Estamos aquí para resolver tus dudas sobre el proyecto Apadrina Un Arbol.</p>
        </div>

        <form action="procesar_ayuda.php" method="POST">
            <div class="grid-inputs">
                <div class="input-group">
                    <label class="form-label" style="display: block; margin-bottom: 8px; font-weight: bold;">Nombre Completo:</label>
                    <div style="position: relative;">
                        <i class="ri-user-smile-line" style="position: absolute; left: 18px; top: 18px; color: #5D8736; font-size: 20px;"></i>
                        <input type="text" name="nombre" class="form-input-full" placeholder="Ej. Juan Pérez" required>
                    </div>
                </div>

                <div class="input-group">
                    <label class="form-label" style="display: block; margin-bottom: 8px; font-weight: bold;">Correo Electrónico:</label>
                    <div style="position: relative;">
                        <i class="ri-mail-send-line" style="position: absolute; left: 18px; top: 18px; color: #5D8736; font-size: 20px;"></i>
                        <input type="email" name="email" class="form-input-full" placeholder="ejemplo@gmail.com" required>
                    </div>
                </div>
            </div>

            <div class="input-group" style="margin-top: 30px;">
                <label class="form-label" style="display: block; margin-bottom: 8px; font-weight: bold;">Asunto de la consulta:</label>
                <div style="position: relative;">
                    <i class="ri-question-answer-line" style="position: absolute; left: 18px; top: 18px; color: #5D8736; font-size: 20px;"></i>
                    <select name="asunto" class="form-input-full" style="appearance: none;">
                        <option value="Duda sobre apadrinamiento">Duda sobre apadrinamiento</option>
                        <option value="Problemas con la cuenta">Problemas con la cuenta</option>
                        <option value="Reportar un error en la web">Reportar un error en la web</option>
                    </select>
                </div>
            </div>

            <div class="input-group" style="margin-top: 30px;">
                <label class="form-label" style="display: block; margin-bottom: 8px; font-weight: bold;">Describe tu situación:</label>
                <textarea name="mensaje" class="form-input-full" rows="6" style="padding-left: 20px;" placeholder="Escribe aquí los detalles..."></textarea>
            </div>

            <button type="submit" class="btn-soporte-pro">
                <i class="ri-send-plane-fill"></i> Enviar Mensaje a Soporte
            </button>
        </form>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'enviado') {
        Swal.fire({
            title: '¡Mensaje Recibido!',
            text: 'Tu duda ha sido enviada al equipo de la UTSC. Te responderemos pronto.',
            icon: 'success',
            confirmButtonColor: '#5D8736',
            timer: 4000
        });
        window.history.replaceState({}, document.title, window.location.pathname);
    }
</script>
<script>
    /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // Add show-menu class to nav menu
       nav.classList.toggle('show-menu')

       // Add show-icon to show and hide the menu icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')
</script>
<?php include("../../includes/footer.php"); ?>