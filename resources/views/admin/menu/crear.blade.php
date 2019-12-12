@extends("theme.$theme.layout")
@section('titulo')
    Crear menus
@stop

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
                @include('includes.form-error')
                @include('includes.mensaje')
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Menu</h3>
                </div>
                <!-- /.box-header -->
                
                    <form  action="{{route('guardar_menu') }}" id="form-general" class="form-horizontal" method="POST">
                         @csrf
                        <div class="box-body">

                          @include('admin.menu.form')
                            
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
