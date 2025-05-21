<?php 
    namespace App\Models;
    
    use CodeIgniter\Model;

    class ProductosModel extends Model{
        protected $table = "productos";
        protected $primaryKey = "id_productos";
        protected $allowedFields = ["nombre","descripcion","precio","cantidad","url_imagen","activo"];
         protected $returnType = 'array';
    }
?>