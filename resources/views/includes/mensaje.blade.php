@if (session ("mensaje"))


    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Mensaje Sistema Biblioteca</h4>
        <ul>
              {{--  SESSION es un array especial utilizado para guardar información a través de los requests que un usuario hace durante su visita a un sitio web o aplicación. La información guardada en una sesión puede llamarse en cualquier momento mientras la sesión esté abierta.  --}}
                <li>{{ session ("mensaje") }}</li>

        </ul>
    </div>


@endif