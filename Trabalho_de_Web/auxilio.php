<?php
	include("cabecalho.inc");
	
    $p = $_POST['parametro'];
    
    $selecionar = "<label>Selecione a sua cidade:</label><select name=\"cidade\" id=\"cidade\">
    <option>Escolha sua cidade</option>";
	
	if($p != "") {
		
		$SQL = "SELECT id, nome FROM cidades WHERE id_estado = '$p%'";

        $resultado = mysqli_query($con, $SQL);			
	
		while(($registro = mysqli_fetch_assoc($resultado)) != NULL) {
            $selecionar .= '<option value="'.$registro['id'].'">'.$registro['nome'].'</option>';
		}
	}
    
    $selecionar .= "</select>";
    echo $selecionar;
	mysqli_close($con);
    
?>