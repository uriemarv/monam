<?php

//require_once "../../../modelo/conexion.php";
//require_once "../../../controlador/controlador.php";
//require_once "../../../modelo/crud.php";


//$mvc = new MvcController();
//$datosController = array();

/*
$sql = "SELECT nombre_empresa, COUNT(nombre_empresa) as valor  FROM estudios
WHERE fecha_solicitud BETWEEN :inicio AND :fin
GROUP BY nombre_empresa";

$pdo = Conexion::conectar();
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":inicio", $_GET["inicio"], PDO::PARAM_STR);
$stmt->bindParam(":fin", $_GET["fin"], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetchAll();
*/


$cadena = '{
  "cols": [
        {"id":"","label":"Escala","pattern":"","type":"string"},
        {"id":"","label":"Barranquilla","pattern":"","type":"number"},
        {"id":"","label":"Bello","pattern":"","type":"number"}
      ],
  "rows": [';

$cadena_cols = '{
  "cols": [
        {"id":"","label":"Escala","pattern":"","type":"string"},
        {"id":"","label":"Barranquilla","pattern":"","type":"number"},
        {"id":"","label":"Bello","pattern":"","type":"number"}
      ],
  "rows": [
        {"c":[{"v":"2004","f":null},{"v":34,"f":null},{"v":24,"f":null}]},
        {"c":[{"v":"2005","f":null},{"v":38,"f":null},{"v":22,"f":null}]},
        {"c":[{"v":"2006","f":null},{"v":40,"f":null},{"v":24,"f":null}]}
    ]}'; 
  
foreach($row as $clave=>$valor)
    {
        /*
        $cadena .= '{"c":[{"v":"Disponible","f":null},{"v":'.($valor["disponible"]-$valor["ejecutado"]).',"f":null}]},
            {"c":[{"v":"Ejecutado","f":null},{"v":'.$valor["ejecutado"].',"f":null}]},';
            */
            
        $cadena .= '{"c":[{"v":"'.$valor["nombre_empresa"].'","f":null},{"v":'.($valor["valor"]).',"f":null}]},';
    }

$cadena = substr($cadena,0,(strlen($cadena)-1));     
$cadena .= ']}';

/*
var data = google.visualization.arrayToDataTable([
          ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
          ['2004/05',  165,      938,         522,             998,           450,      614.6],
          ['2005/06',  135,      1120,        599,             1268,          288,      682],
          ['2006/07',  157,      1167,        587,             807,           397,      623],
          ['2007/08',  139,      1110,        615,             968,           215,      609.4],
          ['2008/09',  136,      691,         629,             1026,          366,      569.6]
        ]);
        
        
$rows = array('c' => array(
array( 'v' => $timestamp, 'f' => NULL ),
array( 'v' => (int)$getData_t1['power_avg'], 'f' => ''.$getData_t1['power_avg'].' kWh' ),
array( 'v' => (int)$getData_t2['power_avg'], 'f' => ''.$getData_t2['power_avg'].' kWh' ),
array( 'v' => (int)$getData_t3['power_avg'], 'f' => ''.$getData_t3['power_avg'].' kWh' ),
array( 'v' => (int)$getData_t4['power_avg'], 'f' => ''.$getData_t4['power_avg'].' kWh' ),
array( 'v' => (int)$getData_t5['power_avg'], 'f' => ''.$getData_t5['power_avg'].' kWh' ),
array( 'v' => (int)$getData_t6['power_avg'], 'f' => ''.$getData_t6['power_avg'].' kWh' ),
array( 'v' => (int)$getData_t7['power_avg'], 'f' => ''.$getData_t7['power_avg'].' kWh' )
));
This is a single row with 8 columns. Now to build the columns:
$cols = array(
array( 'id' => '0', 'label' => 'Timestamp', 'type' => 'string'),
array( 'id' => '1', 'label' => 'WTG01', 'type' => 'number'),
array( 'id' => '2', 'label' => 'WTG02', 'type' => 'number'),
array( 'id' => '3', 'label' => 'WTG03', 'type' => 'number'),
array( 'id' => '4', 'label' => 'WTG04', 'type' => 'number'),
array( 'id' => '5', 'label' => 'WTG05', 'type' => 'number'),
array( 'id' => '6', 'label' => 'WTG06', 'type' => 'number'),
array( 'id' => '7', 'label' => 'WTG07', 'type' => 'number')
);
*/

$rows = array('c' => array('v' => 'Mes', 'f' => '2020-09'),
array('v' => 'Proyectado', 'f' => '852724'),
array('v' => 'Ejecutado', 'f' => '40000'));

$cols = array(
    array('label' => 'Mes', 'type' => 'date'),
    array('label' => 'Proyectado', 'type' => 'string'),
    array('label' => 'Ejecutado', 'type' => 'string')
    );
    
    $cadena2 = '{ "cols": '.json_encode($cols).', "rows":'.json_encode($rows).'}';

$cadena3 = '{
    "cols": [
        {"id":"","label":Mes","pattern":"","type":"string"},
        {"id":"","label":Proyectado","pattern":"","type":"string"},
        {"id":"","label":Ejecutado","pattern":"","type":"string"}
    ],
    "rows": [
        {"c":[{"v":"Mes","f":null},{"v":"2020-09","f":null}]},
        {"c":[{"v":"Proyectado","f":null},{"v":"852724","f":null}]},
        {"c":[{"v":"Ejecutado","f":null},{"v":"40000","f":null}]}
    ]
}';

$cadenaprueba = '{
  "cols": [
        {"id":"","label":"Topping","pattern":"","type":"string"},
        {"id":"","label":"Slices","pattern":"","type":"number"}
      ],
  "rows": [
        {"c":[{"v":"Mushrooms","f":null},{"v":3,"f":null}]},
        {"c":[{"v":"Onions","f":null},{"v":1,"f":null}]},
        {"c":[{"v":"Olives","f":null},{"v":1,"f":null}]},
        {"c":[{"v":"Zucchini","f":null},{"v":1,"f":null}]},
        {"c":[{"v":"Pepperoni","f":null},{"v":2,"f":null}]}
      ]
}';

//echo $cadena;
echo $cadena_cols;