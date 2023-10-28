<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class respuestaController extends Controller
{

    /**
 * 
 * Esta es una descripción de nuestro método aqui no debería ser muy extensa la descripción.
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/ejecutar",
 *     tags={"ejecutar"},
 *     summary="Descripción corta de lo que se ejecuta en el método y que devolverá el endpoint",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelven todos los registros"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="No se pudo realizar la ejecución al parecer hubo un error interno"
 *     )
 * ) 
 */

  public function index() {
      return response()->json(["success"=>true, "data"=>"Hola, soy Rodrigo Granados","message"=>"Registro Encontrado","ammount"=>1]);}
}