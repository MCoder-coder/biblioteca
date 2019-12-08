@extends("theme.$theme.layout")
@section('titulo')
    Crear menus
@stop

@section('contenido')
    <div class="row">
        <div class="col-lg-12">

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Menu</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <form class="form-horizontal">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <button type="submit" class="btn btn-default">Cancel</button>
                          <button type="submit" class="btn btn-info pull-right">Sign in</button>
                        </div>
                        <!-- /.box-footer -->
                      </form>
                </div>
                <!-- /.box-body -->

            </div>
        </div>


    </div>

@endsection()
