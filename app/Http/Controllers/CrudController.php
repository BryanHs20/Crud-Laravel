<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    //
    public function jSon()
    {
        $crudd = Crud::all();
        return response()->json(['status'=> 'Vista', 'VistaBlog' => $crudd]);
    }

    public function verCar()//Se muestran todos los libros
    {
        $crudd = Crud::all();
        

        return view('index',['crudd'=>$crudd]);
    } 

    /* public function vCar()
    {
        $carros=Crud::all();

        foreach($carros as $crud)
        {
            echo $crud ->Nombre . "<br>";
            echo $crud ->Modelo . "<br>";
            echo $crud ->Color . "<br>";
            echo $crud ->Precio . "<br>";
            echo $crud ->Imagen . "<br>";
            echo $crud ->Mercedes . "<br>";

            echo "<hr>";
        }
    } */
    public function verAct($id)
    {
        $crudd = Crud::where('id',$id)->first();
        return view('update',['crudd'=>$crudd]);//Se muestra el formulario para actualizar
    }

    public function actualizar(Request $request)//Para actualizar los datos
    {
        $crud = Crud::where('id',$request->id)->first();

        if($crud)
        {
            $crud->Nombre = $request->Nombre;
            $crud->Modelo = $request->Modelo;
            $crud->Color = $request->Color;
            $crud->Precio = $request->Precio;
            $crud->Imagen = $request->Imagen;
            $crud->Mercedes = $request->Mercedes;
            $crud->save();

            return redirect()->route('ver.carros');
        }
    }

    public function agregar(Request $request)//Para agregar los datos
    {
        $crudag = new Crud();
        return view('addnew', ['crudag' => $crudag]);
    }

    public function agregarNew(Request $request)//Para agregar los datos
    {
        $crudag = new Crud();

        if($crudag)
        {
            $crudag->Nombre = $request->Nombre;
            $crudag->Modelo = $request->Modelo;
            $crudag->Color = $request->Color;
            $crudag->Precio = $request->Precio;
            $crudag->Imagen = $request->Imagen;
            $crudag->Mercedes = $request->Mercedes;
            $crudag->save();

            return redirect()->route('ver.carros');
        }
    }

    public function eliminar(Request $request)//Para eliminar los datos
    {
        $crud = Crud::where('id',$request->id)->first();

        if($crud)
        {
            $crud->delete();
            return redirect()->route('ver.carros');
        }
    }
}
