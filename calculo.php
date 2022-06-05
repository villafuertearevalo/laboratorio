<?php 
$nombre = $_POST [ ' nombre ' ] ; 
$notal = $_POST [ ' notal ' ] ;
$nota2 = $_POST [ ' nota2 ' ] ;
$parcial = $_POST [ 'parcial ' ] ; 

echo " Nombre : " .$nombre. ' <br> ' ;
echo " Notal : " .$notal. ' <br> ' ; 
echo " Nota2 : " .$nota2. ' <br> ' ; 
echo " Parcial : " .$parcial. ' <br> ' ; 

$promedio = ( $notal + $nota2 + $parcial ) / 3 ; 
echo " Promedio : " .number_format ( $promedio , 2 ) . ' <br> ' ;

$conect = mysqli_connect ( " localhost " , " root " , " catolica " , " registro_francisco " ) ;

if ( mysqli_connect_errno () ) { 
    printf ( " Error de conexión : %s\n " , mysqli_connect_error ()) ;
    exit (); 
} 

$res = mysqli_query ( $conect , " SELECT max( idAlu ) +1 maxid FROM alumno_francisco " ) ;
$row = mysqli_fetch_assoc ( $res ) ;
$id = $row [ ' maxid ' ] ;
$query = " INSERT INTO alumno_francisco VALUES ( $id , ' $nombre ' , $notal , $nota2 , $parcial )" ;

mysqli_query ( $conect , $query ) ; 

printf (" Nuevo registro con el id %d.\n" , $conect->insert_id ) ;
mysqli_close ( $conect ) ;
?>