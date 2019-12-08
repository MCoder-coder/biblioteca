@extends("theme.$theme.layout")
@section('titulo')
    permisos
@stop

@section('contenido')
    <div class="row">
        <div class="col-lg-12">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Permisos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th></th>

                        </tr>
                        <tbody>
                        @foreach($permisos as  $permiso)
                            <tr>
                                <td>{{$permiso->id}}</td>
                                <td>{{$permiso->nombre}}</td>
                                <td>{{$permiso->slug}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>

                        </thead>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

@endsection()
