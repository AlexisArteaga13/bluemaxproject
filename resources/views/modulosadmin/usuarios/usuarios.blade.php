@extends('administrable')
@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="titulos">Usuarios</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i></i><a href="{{route('home')}}">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="box">

                    <div class="box-header with-border">

                        <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregarusuario">

                            Agregar usuario

                        </button>
                        
                    </div>
                </div>
               
                <br>
                @if(session()->has('error'))
                        <div class="alert alert-warning">{{ session('error')}}</div>
                        @endif
                        @if(session()->has('success'))
                        <div class="alert alert-success">{{ session('success')}}</div>
                        @endif
                <!-- Default box 
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Listado de usuarios</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                  title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>!-->
                <!-- <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            Contenido de las tablas!-->

                <!-- /.card-header -->

                <section class="content" id="prueba">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">Datos De Usuarios</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped dt-responsive tabla"
                                        style="width:100%">

                                        <thead>

                                            <tr>

                                                <th style="width:10px">#</th>

                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Correo</th>
                                                <th>Foto</th>

                                                <th>Opciones</th>

                                            </tr>

                                        </thead>

                                        <tbody>
                                            @foreach ($datos as $key => $value)
                                            <tr>
                                                <td>{{$key+1}}</td>

                                                <td>{{ $value ->name}}</td>
                                                <td>{{ $value ->apellidos}}</td>
                                                <td>{{ $value ->email}}</td>
                                                <td>{{ $value ->foto}}</td>



                                                <td>
                                                    <div class="btn-group">

                                                        <button class="btn btn-warning btnEditarEscuela"
                                                            data-mynombre="{{$value->name}}"
                                                            data-myapellido="{{$value->apellidos}}"
                                                            data-correo="{{$value->email}}"
                                                            data-pass="{{$value->password}}"
                                                            data-idusuario="{{$value->id}}"
                                                            data-target="#modalEditarUser" data-toggle="modal"><i
                                                                class="far fa-edit"></i>
                                                        </button>

                                                        <button data-target="#modal-delete-{{$value->id}}"
                                                            data-toggle="modal"
                                                            class="btn btn-danger btnEliminarEscuela"><i
                                                                class="fas fa-trash-alt"></i>
                                                        </button>

                                                    </div>
                                                </td>

                                            </tr>
                                            @include('modulosadmin.usuarios.modal')
                                            @endforeach
                                        </tbody>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->

                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div><!-- /.row -->
                </section>
                <!-- /.card-body
            <div class="card-footer">
              Footer
            </div>!-->
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

</div>

<!-- MODAL AGREGAR USUARIO-->

<div id="modalAgregarusuario" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{route('usuarios.store')}}" method="post">
                {{method_field('post')}}
                {{csrf_field()}}
                <div class="modal-body">


                    <!--=====================================
  CABEZA DEL MODAL
  ======================================-->

                    <div class="modal-header" style="background:#3c8dbc; color:white">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Actualizar Datos</h4>

                    </div>

                    <!--=====================================
  CUERPO DEL MODAL
  ======================================-->

                    <div class="modal-body">

                        <div class="box-body">


                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombres</label>

                                <div class="col-md-12">
                                    <input id="idusers" type=hidden name="idusers">
                                    <input id="nombre" type="text" class="form-control" name="nombre"
                                        value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Apellidos</label>

                                <div class="col-md-12">
                                    <input id="apellido" type="text" class="form-control" name="apellidos"
                                        value="{{ old('apellidos') }}" required autofocus>

                                    @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- <div class="form-group{{ $errors->has('fechanacimiento') ? ' has-error' : '' }}">
                                <label for="fechanacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                                <div class="col-md-12">
                                    <input id="fecha_nacimiento" max=<php $hoy=date("Y-m-d"); echo $hoy;?> type="date"
                                        class="form-control" name="fechanacimiento" value="{{ old('fechanacimiento') }}"
                                        required autofocus>

                                    @if ($errors->has('fechanacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechanacimiento') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> 
                            <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Teléfono o Celular</label>

                                <div class="col-md-12">
                                    <input id="celular" maxlenght="9" type="text" class="form-control" name="celular"
                                        value="{{ old('celular') }}" required autofocus>

                                    @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
-->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--
                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Dirección</label>

                                <div class="col-md-12">
                                    <input id="direccion" type="text" class="form-control" name="direccion"
                                        value="{{ old('direccion') }}" required>

                                    @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                <label for="tipousuario" class="col-md-4 control-label">Estado</label>

                                <div class="col-md-6">
                                    <select id="estado" class="form-control" name="estado" value="{{ old('estado') }}"
                                        required>
                                        <option disabled="true" value=""> Selecciona </option>
                                        <option value="1">Activo</option>
                                        <option value="0">Desactivado</option>

                                    </select>
                                    @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-12">
                                    <input id="usuario" type="text" class="form-control" name="usuario"
                                        value="{{ old('usuario') }}" required>

                                    @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>-->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                            <!--=====================================
  PIE DEL MODAL
  ======================================-->

                            <div class="modal-footer">

                                <button type="button" class="btn btn-default pull-left"
                                    data-dismiss="modal">Salir</button>

                                <button type="submit" class="btn btn-primary">Actualizar datos</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUser" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{route('usuarios.update')}}" method="post">
                {{method_field('put')}}
                {{csrf_field()}}
                <div class="modal-body">


                    <!--=====================================
  CABEZA DEL MODAL
  ======================================-->

                    <div class="modal-header" style="background:#3c8dbc; color:white">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Actualizar Datos</h4>

                    </div>

                    <!--=====================================
  CUERPO DEL MODAL
  ======================================-->

                    <div class="modal-body">

                        <div class="box-body">


                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombres</label>

                                <div class="col-md-12">
                                    <input id="idusers" type=hidden name="idusers">
                                    <input id="nombre" type="text" class="form-control" name="nombre"
                                        value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Apellidos</label>

                                <div class="col-md-12">
                                    <input id="apellido" type="text" class="form-control" name="apellidos"
                                        value="{{ old('apellidos') }}" required autofocus>

                                    @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!-- <div class="form-group{{ $errors->has('fechanacimiento') ? ' has-error' : '' }}">
                                <label for="fechanacimiento" class="col-md-4 control-label">Fecha de Nacimiento</label>

                                <div class="col-md-12">
                                    <input id="fecha_nacimiento" max=<php $hoy=date("Y-m-d"); echo $hoy;?> type="date"
                                        class="form-control" name="fechanacimiento" value="{{ old('fechanacimiento') }}"
                                        required autofocus>

                                    @if ($errors->has('fechanacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechanacimiento') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> 
                            <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Teléfono o Celular</label>

                                <div class="col-md-12">
                                    <input id="celular" maxlenght="9" type="text" class="form-control" name="celular"
                                        value="{{ old('celular') }}" required autofocus>

                                    @if ($errors->has('celular'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
-->
                            <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                                <div class="col-md-12">
                                    <input id="correo" type="email" class="form-control" name="correo"
                                        value="{{ old('correo') }}" required>

                                    @if ($errors->has('correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('correo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--
                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Dirección</label>

                                <div class="col-md-12">
                                    <input id="direccion" type="text" class="form-control" name="direccion"
                                        value="{{ old('direccion') }}" required>

                                    @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                                <label for="tipousuario" class="col-md-4 control-label">Estado</label>

                                <div class="col-md-6">
                                    <select id="estado" class="form-control" name="estado" value="{{ old('estado') }}"
                                        required>
                                        <option disabled="true" value=""> Selecciona </option>
                                        <option value="1">Activo</option>
                                        <option value="0">Desactivado</option>

                                    </select>
                                    @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-12">
                                    <input id="usuario" type="text" class="form-control" name="usuario"
                                        value="{{ old('usuario') }}" required>

                                    @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>-->
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <!--=====================================
  PIE DEL MODAL
  ======================================-->

                            <div class="modal-footer">

                                <button type="button" class="btn btn-default pull-left"
                                    data-dismiss="modal">Salir</button>

                                <button type="submit" class="btn btn-primary">Actualizar datos</button>

                            </div>
                        </div>
                    </div>
            </form>
        </div>


    </div>
</div>


@endsection