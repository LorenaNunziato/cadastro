<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <script src="jquery-3.5.1.js"></script>
		
		<script>
			$(document).ready(function() {
				$('#uf').click(function() {

                    var uf = $('#uf').val();

					$.post( 'auxilio.php', 
							{parametro: uf},
							function (dado, status) {
								$('#resultado').html(dado);
					});
				});
			});
		</script>
</head>
<body>
    <form action="cad.php" method="POST">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" id="nome"/>
        </br>
        <label>Selecione o seu estado</label>
        
            <?php
                include "cabecalho.inc";

                $SQL = "SELECT id, nome FROM estados";

                // Executa o comando SQL
                $dados_recuperados = mysqli_query($con, $SQL);

                if(mysqli_num_rows($dados_recuperados) > 0){
                    echo'<select name="uf" id="uf">
                            <option>Escolha seu estado</option>';
                        
                    while( ($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
                            
                        echo '<option value="'.$resultado['id'].'">'.$resultado['nome'].'</option>';
                    }
                        echo '</select>';
                    }

                mysqli_close($con);
                        
            ?>
        </br>
        <div id="resultado"></div>
        <p>
            <label>Digite seu telefone:</label>
            <input type="number" name="telefone" id="telefone"/>
        </p>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>