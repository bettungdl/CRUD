<div>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="mb-0 fw-semibold">Usuarios</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Usuarios</li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                <div class="col-lg-6">
                    <div class="text-md-end mt-3 mt-md-0">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success me-1">
                            [ <i class="fa-solid fa-plus"></i> ]
                            Nuevo Usuario
                            [ <i class="fa-solid fa-plus"></i> ]
                        </a>
                    </div>
                </div>
                <br><br><br>
            </div>

            <table id="usuarios" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->roles->pluck('name')->join(', ') }}</td>
                        <td>
                            <a href="{{ route('admin.users.show', $u->id) }}" class="btn btn-sm btn-info">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            @if( $u->email != 'admin@crud.com')
                            <a href="{{ route('admin.users.edit', $u->id) }}" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('admin.users.delete', $u->id) }}" method="POST"
                                style="display:inline-block;"
                                onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?');">
                                @csrf
                                @method('POST')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    <script>
    $(document).ready(function() {
        $('#usuarios').DataTable({
            "pageLength": 10,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
            }
        });
    });
    </script>

</div>