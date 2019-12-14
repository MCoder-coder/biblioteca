@extends("theme.$theme.layout")
@section('titulo')
    Roles
@stop

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/usuario/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
                @include('includes.form-error')
                @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"> Crear Rol</h3>
                </div>
                <!-- /.box-header -->
                
                    <form  action="{{route('guardar_rol') }}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                         @csrf
                        <div class="box-body">

                          @include('admin.rol.form')
                            
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">

                                @include('includes.boton-form-crear')
                            </div>
                          
                        </div>
                        <!-- /.box-footer -->
                      </form>
                </div>
                <!-- /.box-body -->

            </div>
        </div>


    </div>

@endsection()