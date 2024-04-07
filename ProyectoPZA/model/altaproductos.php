
<?php
// Comprobamso si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Recogemos variables
    $nombre = isset($_REQUEST['input_nombreprod']) ? $_REQUEST['input_nombreprodc'] : null;
    $descripcion= isset($_REQUEST['input_descripcionprod']) ? $_REQUEST['input_descripcionprod']: null;
    $preciocosto= isset($_REQUEST['input_preciocost']) ? $_REQUEST['input_preciocost'] : null;
    $precioproducto = isset($_REQUEST['input_precioprod']) ? $_REQUEST['input_precioprod'] : null;
    $estado = isset($_REQUEST['input_estado']) ? $_REQUEST['input_estado'] : null;

    // Variables
    $hostDB = '127.0.0.1';
    $nombreDB = 'puza';
    $usuarioDB = 'root';
    $contrasenyaDB = '';

    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    
    // Prepara INSERT
    $miInsert = $miPDO->prepare('INSERT INTO productos (NombreProducto,
    DescripcionProducto,PrecioCosto,PrecioProducto,EstadoProducto) 
    VALUES (:NombreProducto,:DescripcionProd,:PrecioC,:PrecioP,:EstadoP)');
    
    // Ejecuta INSERT con los datos
    $miInsert->execute(
        array(
            'NombreProducto' => $nombre,
            'DescripcionProd' => $descripcion,
            'PrecioC'=>$preciocosto,
            'PrecioP'=>$precioproducto,
            'EstadoP'=>$estado,
        )
    );

    // Redireccionamos a Leer
    header('Location: ../#.php');
}
?>