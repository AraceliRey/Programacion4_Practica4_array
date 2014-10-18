
<html>
<head>
<title>Practica_4_Arrays</title>
</head>
		
<body>

<form>
<table>
<tr>
<?php

$PRODUCTOS = array(
"id1" => "1",
"Producto1" =>"Pan",
"Precio1" =>"10",
);
?>
<td><?php echo $PRODUCTOS ['id1']; ?>  </td>
<td><?php echo $PRODUCTOS ['Producto1']; ?></td>
<td><?php echo $PRODUCTOS ['Precio1']; ?>  </td>
<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
<td>                                  
</td>
</tr>

<tr>
<?php

$PRODUCTOS = array(
"id2" => "2",
"Producto2" =>"Refresco",
"Precio2" =>"10",
);
?>
<td><?php echo $PRODUCTOS ['id2']; ?>  </td>
<td><?php echo $PRODUCTOS ['Producto2']; ?></td>
<td><?php echo $PRODUCTOS ['Precio2']; ?>  </td>
<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
<td>                                  
</td>
</tr>
						
<?php
						
$PRODUCTOS = array(
"id3" => "3",
"Productos3" =>"Verduras",
"Precio3" =>"2",
);
?>
<td><?php echo $PRODUCTOS ['id3']; ?>  </td>
<td><?php echo $PRODUCTOS ['Productos3']; ?></td>
<td><?php echo $PRODUCTOS ['Precio3']; ?>  </td>
<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
<td>                                  
</td>
</tr>
							
<?php
						
$PRODUCTOS = array(
"id4" => "4",
"Productos4" =>"Frutas",
"Precio4" =>"20",
);
?>
					
<td><?php echo $PRODUCTOS ['id4']; ?>  </td>
<td><?php echo $PRODUCTOS ['Productos4']; ?></td>
<td><?php echo $PRODUCTOS ['Precio4']; ?> </td>
<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
<td>                                  
</td>
                            
</tr>	

<?php
						
$PRODUCTOS = array(
"id5" => "5",
"Productos5" =>"Agua",
"Precio5" =>"12",
);
?>
					
<td><?php echo $PRODUCTOS ['id5']; ?>  </td>
<td><?php echo $PRODUCTOS ['Productos5']; ?></td>
<td><?php echo $PRODUCTOS ['Precio5']; ?> </td>
<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
<td>                                  
</td>
                            
</tr>										
</tr>				
</table>
</form>
</body>
</html>