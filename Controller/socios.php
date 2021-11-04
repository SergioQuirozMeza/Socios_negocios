<?php
        header('Content-type: application/json');

        require_once("../Confing/conexion.php");
        require_once("../Models/Socios.php");
        $socios = new Socios();
       
   
        $body = json_decode(file_get_contents("php://input"), true);
        switch($_GET["op"]){

             case "Getsocios":
                $datos=$socios->get_socios();
                echo  json_encode($datos);
            break;

            case "GetUno":
                $datos=$socios->get_socio($body["ID"]);
                echo  json_encode($datos);
             break;

            case "Insert_socios":
                $datos=$socios->insert_socios($body["ID"],$body["NOMBRE"],$body["RAZON_SOCIAL"],$body["DIRECCION"],$body["TIPO_SOCIO"],$body["CONTACTO"],$body["EMAIL"],$body["FECHA_CREADO"],$body["ESTADO"],$body["TELEFONO"]);
                echo  json_encode("socios_negocios agregados");    
            break;
             
            case "Update_socios":
                $datos=$socios->Update_socios($body["ID"],$body["NOMBRE"],$body["RAZON_SOCIAL"],$body["DIRECCION"],$body["TIPO_SOCIO"],$body["CONTACTO"],$body["EMAIL"],$body["FECHA_CREADO"],$body["ESTADO"],$body["TELEFONO"]);
                echo  json_encode("socios_negocios actualizar");    
            break;

            case "Delete_socios":
                $datos=$socios->delete_socios($body["ID"]);
                echo json_encode("Socio Eliminado");
            break;

            
    
     
 



        }
?> 



