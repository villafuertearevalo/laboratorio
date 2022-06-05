<?php 
include "vendor/autoload.php " ; 
$server = new nusoap_server ;
$server->configureWSDL ( ' server ' , ' urn:server'  ) ;
$server->wsdl->schemaTargetNamespace = ' urn:server ' ; 
$server->wsdl->addComplexType (
    'promedio', 
    'complexType ' , 
    'struct ' , 
    'all ' , 
    '',
    array( 
          'nombre '=>array( ' name '=>' nombre ',' type '=>'xsd:string' ) ,
          'notal ' => array ( ' name ' =>' nota1 ' , ' type ' => ' xsd:float ' ),
          'nota2 ' => array ( ' name ' =>' nota2 ' , ' type ' => ' xsd : float ' ) , 
          'parcial ' =>array ( ' name ' =>' parcial ' , ' type ' => ' xsd:float ') ,
          'promedio' =>array ( ' name ' =>' promedio ' , ' type ' => ' xsd:float ' )   
    )
);
$server->register (
    'promedio ', 
    array ( 'nombre ' => ' xsd:string ' , ' notal ' => ' xsd:float ' , ' nota2 ' => ' xsd:float ' , ' parcial ' => ' xsd:float ') , 
    array ( ' return ' => ' tns : Promedio ' ) , 
    'urn:server ' , 
    'urn:server#promedioServer ' ,
    'rpc ' , 
    'encoded '
);

function promedio ( $nombre  , $notal , $nota2 , $parcial ){
    $promedio= ($nota1*0.25 ) + ( $nota2 * 0.25 ) + ( $parcial * 0.50 );
    $conect = mysqli_connect ( " localhost " , " root " , " catolica " , " registro_francisco " ) ; 
    $this-> executeInsert ( " insert into alumno_francisco set nombre ='{$nombre } ' , notal =' { $notal } ' , 
    nota2 = '{ $nota2 } , parcial =' ( $parcial } '" ) ;
    $result =array ( ' nombre ' => $nombre ,
    'notal '=> $notal , 
    'nota2'  => $nota2 , 
    'parcial ' => $parcial,
    )
}