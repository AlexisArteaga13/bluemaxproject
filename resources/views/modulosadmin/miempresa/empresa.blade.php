@extends('administrable')
@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="titulos">Mi Empresa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><i class="fas fa-home"></i></i><a href="{{route('home')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Mi Empresa</li>
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
                        <!--
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">

                Agregar usuario

              </button> !-->
              @if(session()->has('error'))
            <div class="alert alert-warning">{{ session('error')}}</div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success')}}</div>
            @endif
                    </div>
                </div>
                <br>
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
                                    <h3 class="card-title">Datos De Mi Empresa</h3>

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
                                                <th>Dirección</th>
                                               
                                                <th>Teléfono</th>
                                                <th>Correo</th>
                                                
                                                <th>URL ícono</th>
                                                
                                                <th>Opciones</th>

                                            </tr>

                                        </thead>

                                        <tbody>
                                            @foreach ($datos as $key => $value)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{ $value ->nombre}}</td>
                                                <td>{{ $value ->direccion}}</td>
                                                <td>{{ $value ->telefono}}</td>
                                                <td>{{ $value ->correo}}</td>
                                               
                                                <td>{{ $value ->icono}}</td>
                                               
                                                <td>
                                               
                                                    <div class="btn-group">

                                                        <button class="btn btn-warning btnEditarEscuela"
                                                            data-toggle="modal" data-mynombre="{{$value->nombre}}"
                                                            data-mydireccion="{{$value->direccion}}"
                                                           
                                                            data-telefono="{{$value->telefono}}"
                                                            data-correo="{{$value->correo}}"
                                                            
                                                            data-urlicono="{{$value->icono}}"
                                                           
                                                            data-id="{{$value->id}}"
                                                            data-target="#modalEditarEscuela"><i
                                                                class="far fa-edit"></i></button>

                                                       

                                                    </div>
                                                </td>

                                            </tr>
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

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarEscuela" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{route('empresa.update')}}" method="post">
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

                            <!-- ENTRADA PARA EL NOMBRE -->
                            <input type="hidden" name="id" id="id" value="">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-school"></i></span>
                                    </div>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        placeholder="Nombre de empresa" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <!--<div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-school"></i>Eslogan</span>
                                    </div>
                                    <textarea type="text" name="eslogan" id="eslogan" class="form-control"
                                        placeholder="Eslogan" aria-label="Username"
                                        aria-describedby="basic-addon1"></textarea>
                                </div>

                            </div>!-->

                            <!-- ENTRADA PARA LA DIRECCION -->

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="direccion" id="direccion"
                                        placeholder="Dirección" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                            </div>

                            <!-- ENTRADA PARA EL TELEFONO -->

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="telefono" id="telefono"
                                        placeholder="Teléfono" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                            </div>

                            <!-- ENTRADA PARA EL CORREO -->

                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-mail-bulk"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="correo" id="correo"
                                        placeholder="Correo electrónico" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-school"></i>URL ícono</span>
                                    </div>
                                    <textarea type="text" name="icono" id="icono" class="form-control"
                                        placeholder="URL ícono" aria-label="Username"
                                        aria-describedby="basic-addon1"></textarea>
                                </div>

                            </div>
                            <!--
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-school"></i>URL Vídeo de Presentación</span>
                                    </div>
                                    <textarea type="text" name="urlvideo" id="urlvideo" class="form-control"
                                        placeholder="URL Vídeo de presentación" aria-label="Username"
                                        aria-describedby="basic-addon1"></textarea>
                                </div>

                            </div> 
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fas fa-school"></i>URL Mapa</span>
                                    </div>
                                    <textarea type="text" name="urlmapa" id="urlmapa" class="form-control"
                                        placeholder="URL Mapa" aria-label="Username"
                                        aria-describedby="basic-addon1"></textarea>
                                </div>

                            </div>-->
                            <!-- ENTRADA PARA SUBIR FOTO -->
                            <!--
                        <div class="form-group">

                            <div class="panel">SUBIR FOTO</div>

                            <input type="file" class="nuevaFoto" name="editarFoto">

                            <p class="help-block">Peso máximo de la foto 2MB</p>

                            <img src="vistas/img/usuarios/default/anonymous.png"
                                class="img-thumbnail previsualizarEditar" width="100px">

                            <input type="hidden" name="fotoActual" id="fotoActual">

                        </div>
!-->
                        </div>

                    </div>

                    <!--=====================================
  PIE DEL MODAL
  ======================================-->

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                        <button type="submit" class="btn btn-primary">Actualizar datos</button>

                    </div>
                </div>
            </form>
        </div>


    </div>
</div>


@endsection