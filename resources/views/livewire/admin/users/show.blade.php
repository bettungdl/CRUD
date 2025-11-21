<div>
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="mb-0 fw-semibold">Usuarios</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript: window.history.go(-1);">Usuarios</a></li>
                        <li class="breadcrumb-item active">Ver</li>
                    </ol>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $picture }}" height="300px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-{{ $color_tag }} text-white"><strong>Correo: </strong>{{ $email }}
                    </li>
                    <li class="list-group-item bg-{{ $color_tag }} text-white"><strong>Rol: </strong>{{ $role }}</li>
                    <li class="list-group-item bg-{{ $color_tag }} text-white"><strong>Miembro desde:
                        </strong>{{ $created_at }}
                    </li>
                </ul>
                @if( $email != 'admin@crud.com')
                <div class="card-body">
                    <a href="{{ route('admin.users.edit', $userId) }}" class="card-link">Editar</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>