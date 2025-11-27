<?php
//Diego zenan perez perera
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{ //Única función llamada store()
    public function store(Request $request)
    {//Declaración de variables
        $nombreProducto = $request->input('nombre-producto');
        $descripcionProducto = $request->input('descripcion-producto');
        $categoriaProducto = $request->input('categoria-producto');
        $precioProducto = $request->input('precio-producto');
        $unidadesProducto = $request->input('unidades-producto');

    
        $request->validate([
       //validaciones
            'nombre-producto' => [
                'required',
                'min:3',
                'max:100',
            ],

            
            'categoria-producto' => [
                'required',
                'in:Electrónica,Deporte',
            ],

          
            'precio-producto' => [
                'required',
                'integer',
                'max:3000',
            ],
        ]);

         //Formato de almacenamiento de los datos de las variables introducidos en 
        // una nueva variable llamada línea.
        $linea = '"' . $nombreProducto . '";"' . $descripcionProducto . '";"' . $categoriaProducto . '";"' . $precioProducto . '";"' . $unidadesProducto . "\"\n";

        //Función que nos permite crear si no existe/guardar los datos en un fichero .csv en la ruta "app/".
        //El FILE_APPEND es una regla que permite añadir contenido nuevo aunque ya exista. 
        file_put_contents(storage_path('app/productos.csv'), $linea, FILE_APPEND);
       
       return redirect()->route('product.success')->with('status', "Unidades registradas: ". $unidadesProducto);
    }





    }
    


