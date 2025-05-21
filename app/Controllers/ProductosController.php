<?php
namespace App\Controllers;

use App\Models\ProductosModel;

class ProductosController extends BaseController
{
    public function index()
    {
        $model = new ProductosModel();
        $data['productos'] = $model->findAll(); // obtén todos los productos
        return view('productos/index', $data);  // muestra la vista con los datos
    }
}
?>
