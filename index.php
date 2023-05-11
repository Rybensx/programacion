<?php



class Producto{
    // DEFINICION DE ATRIBUTOS
    public $precio = 2.56;
    public $nombre = "nombre";
    public $disponible = true;

    //DEFINICION DE METODOS

   public function mostrarNombrePdroducto(){
        echo $this->nombre; 
    }
    
}

    //CREACION DE UN OBJETO

    $mesa = new Producto(); 

    $mesa->nombre = "Mesa";


    echo "<pre>";
    var_dump($mesa);
    echo "</pre>";

   $mesa->mostrarNombrePdroducto();

