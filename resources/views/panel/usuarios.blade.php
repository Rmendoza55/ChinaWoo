@extends('index')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
@endpush

@section('content')

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <x-navbar />
            <x-sidebar />

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Gestion de Usuarios</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Gestion de Usuarios
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <div
                                    class="d-flex justify-content-lg-between justify-content-center flex-lg-row flex-column flex-wrap">
                                    <div class="text-center mb-sm-3">
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#modal-xl">Nuevo
                                            Usuario</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="table table-dark">
                                        <tr>
                                            <th>Nº</th>
                                            <th>Nombres</th>
                                            <th>Tipo Documento</th>
                                            <th>Numero</th>
                                            <th>Celular</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $usu)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $usu->name }}</td>
                                                <td style="width: 1%">{{ $usu->tipo_doc }}</td>
                                                <td>{{ $usu->num_doc }}</td>
                                                <td>{{ $usu->celular }}</td>
                                                <td>{{ $usu->email }}</td>
                                                <td>{{ $usu->direccion }}</td>
                                                <td>
                                                    @foreach ($usu->roles as $rols)
                                                        {{ $rols->name }}
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-editar" data-toggle="modal"
                                                        data-target="#modal-lg" data-usuario='{{ json_encode($usu) }}'
                                                        data-usuario-id="{{ $usu->id }}">
                                                        Modificar
                                                    </a>
                                                    <a class="btn btn-danger">Eliminar</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal fade" id="modal-xl">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title">Ingresar Nuevo Usuario</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('users-save') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="name">Nombres Completos:
                                                                </label>
                                                                <input type="text" class="form-control" name="name"
                                                                    placeholder="Ingrese sus Nombres Completos...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tipo_doc">Tipo de Documento: </label>
                                                                <select name="tipo_doc" class="form-control">
                                                                    <option value="#">Seleccion</option>
                                                                    <option value="DNI">DNI</option>
                                                                    <option value="CE">CE</option>
                                                                    <option value="OTRO">OTRO</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="num_doc">Numero de Documento:</label>
                                                                <input type="number" class="form-control" name="num_doc"
                                                                    placeholder="Ingrese sus Numero de Documento...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="celular">Numero de Telefono:</label>
                                                                <input type="number" class="form-control" name="celular"
                                                                    placeholder="Ingrese su Numero de Telefono...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="email">Correo Electronico: </label>
                                                                <input type="email" class="form-control" name="email"
                                                                    placeholder="Ingrese su Correo Alectronico...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="direccion">Direccion del Domicilio:
                                                                </label>
                                                                <input type="text" class="form-control" name="direccion"
                                                                    placeholder="Ingrese la Direccion de su Domicilio...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Contraseña: </label>
                                                                <input type="password" class="form-control"
                                                                    name="password"
                                                                    placeholder="Ingrese su Contraseña...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="role">Asignar un Rol: </label>
                                                                <select name="role" class="form-control">
                                                                    <option value="#">Seleccion</option>
                                                                    @foreach ($roles as $rol)
                                                                        <option value="{{ $rol->name }}">
                                                                            {{ $rol->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <button type="submit"
                                                        class="btn btn-primary swalDefaultSuccess">Guardar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal-lg">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h4 class="modal-title">Actualizar Usuario</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST" id="form-edit">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="edit-name">Nombres Completos:
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="edit-name" id="edit-name"
                                                                    placeholder="Ingrese sus Nombres Completos...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tipo_doc">Tipo de Documento: </label>
                                                                <select name="tipo_doc" class="form-control"
                                                                    id="edit-tipo_doc">
                                                                    <option value="#">Seleccion</option>
                                                                    <option value="DNI">DNI</option>
                                                                    <option value="CE">CE</option>
                                                                    <option value="OTRO">OTRO</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="num_doc">Numero de Documento:</label>
                                                                <input type="number" class="form-control" name="num_doc"
                                                                    id="edit-num_doc"
                                                                    placeholder="Ingrese sus Numero de Documento...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="celular">Numero de Telefono:</label>
                                                                <input type="number" class="form-control" name="celular"
                                                                    id="edit-celular"
                                                                    placeholder="Ingrese su Numero de Telefono...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="email">Correo Electronico: </label>
                                                                <input type="email" class="form-control" name="email"
                                                                    id="edit-email"
                                                                    placeholder="Ingrese su Correo Alectronico...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="direccion">Direccion del Domicilio:
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="direccion" id="edit-direccion"
                                                                    placeholder="Ingrese la Direccion de su Domicilio...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password">Contraseña: </label>
                                                                <input type="password" class="form-control"
                                                                    name="password" id="edit-password"
                                                                    placeholder="Ingrese una Nueva Contraseña...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="role">Asignar un Rol: </label>
                                                                <select name="role" class="form-control"
                                                                    id="edit-role">
                                                                    <option value="#">Seleccion</option>
                                                                    @foreach ($roles as $rol)
                                                                        <option value="{{ $rol->name }}">
                                                                            {{ $rol->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <button type="submit"
                                                        class="btn btn-primary swalDefaultEdit">Actualizar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <x-footer />
        </div>
    </body>
@endsection

@push('js')
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('../../plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('../../plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('../../plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../../plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../../plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('../../dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('../../dist/js/demo.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example1').on('click', '.btn-editar', function() {

                var userId = $(this).data('usuario-id');
                var usuario = $(this).data('usuario');
                var form = $('#form-edit');

                form.attr('action', '{{ url('users') }}/' + userId);

                $('#edit-name').val(usuario.name);
                $('#edit-tipo_doc').val(usuario.tipo_doc);
                $('#edit-num_doc').val(usuario.num_doc);
                $('#edit-celular').val(usuario.celular);
                $('#edit-email').val(usuario.email);
                $('#edit-direccion').val(usuario.direccion);
                $('#edit-password').val(usuario.password);
                if (usuario.roles && usuario.roles.length > 0) {
                    $('#edit-role').val(usuario.roles[0].name);
                } else {
                    $('#edit-role').val('');
                }

            });
        });
    </script>
    <script src="{{ asset('../../plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 150000
            });

            $('.swalDefaultSuccess').click(function() {
                Swal.fire({
                    title: "Exito!",
                    text: "Usuario Registrado Correctamente",
                    icon: "success"
                });
            });
        });
    </script>
    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 150000
            });

            $('.swalDefaultEdit').click(function() {
                Swal.fire({
                    title: "Exito!",
                    text: "Usuario Actualizado Correctamente",
                    icon: "success"
                });
            });
        });
    </script>
@endpush
