<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 
* @OA\Info(
 *      version="1.0.0",
 *      title="NOMBRE DE LA API",
 *      description="DESCRIPCIÓN DE LA API",
 *      @OA\Contact(
 *          email="ia.rodrigogranados@ufg.edu.sv",
 *          name="Rodrigo Granados",
 *          url="https://localhost/api/"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}