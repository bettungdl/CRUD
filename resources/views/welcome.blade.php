@include('layouts.header')
<div>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0"
                    src="https://www.atatus.com/glossary/content/images/2021/07/CRUD.jpeg" alt="crud example" /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">¿Que es un CRUD?</h1>
                <p>CRUD es el acrónimo de "Crear, Leer, Actualizar y Eliminar" (en inglés, Create, Read, Update,
                    Delete), que representa las cuatro operaciones básicas y fundamentales para interactuar con los
                    datos almacenados en una base de datos o sistema. Es un patrón de diseño esencial en el desarrollo
                    de software para la gestión de la información a lo largo de su ciclo de vida.
                </p>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">¿Cuando Inicio a Trabajar?</p>
            </div>
        </div>
        <!-- Content Row-->
        <div class="row gx-3 gx-lg-3">
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Create</h2>
                        <p class="card-text">Crear (Create): Esta operación se utiliza para añadir nuevos registros de
                            datos al sistema, como crear una nueva cuenta de usuario o subir una foto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Read</h2>
                        <p class="card-text">Leer (Read): Esta operación recupera y muestra datos que ya existen en el
                            sistema, como ver el perfil de un usuario o generar un informe. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Update</h2>
                        <p class="card-text">Actualizar (Update): Esta operación modifica los datos existentes, sin
                            crear un nuevo registro. Un ejemplo sería editar la información de un perfil. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Delete</h2>
                        <p class="card-text">Eliminar (Delete): Esta operación se encarga de borrar datos que ya no son
                            necesarios del sistema, como eliminar una publicación o cancelar un pedido. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')