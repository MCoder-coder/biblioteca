<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Permiso;//extiende de Models carpeta Admin nombre de modelo Permiso clase Permiso
//Atributo  protected $table = "permiso";

class PermisoController extends Controller
{
    /**
     La cláusula ORDER BY se puede usar junto con la instrucción SELECT para ordenar los datos de campos específicos de forma ordenada. Se utiliza para ordenar el conjunto de resultados en orden ascendente o descendente.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //admin.permiso.index devuelve la vista blade php de la carpeta views admin permiso
       $permisos = Permiso::orderBy('id')->get();
       return view('admin.permiso.index' , compact('permisos'));//compact Devuelve un array de salida con todas las variables añadidas a él. en este caso la variable $permisos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
        return view('admin.permiso.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}
