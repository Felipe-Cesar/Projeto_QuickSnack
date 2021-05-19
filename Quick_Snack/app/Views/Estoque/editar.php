<?php


require_once('Config/Config.php');


$estoque = new Estoque();
$prodEtq = $estoque->obterLinha($_GET['editar']);

if(empty($prodEtq)){//Caso altere o editar na URL

	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ?pagina=estoque'>
		<script type='text/javascript'>

         		window.alert('Estoque não encontrado. Tente Novamente.');
         		
        </script>"; 
	
	exit;

}

?>

<style type="text/css">

.fieldEstoque {
    width: 40%;
    padding: 10px;
    font-family: Helvetica, sans-serif;
    border: 2px solid #000;
    height: auto;
}

form.formEstoque{
	padding: 18px;
    width: 590px;
    height: 290px;
    margin-left: 20%;
}

input.inputMinimo {
    display: block;
    width: 20%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
}

	input.inputQtd {
    display: block;
    width: 20%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
	}

select{

	width: 270px;
	height: 30px;
	border-radius: 5px;
	cursor: pointer;
}

#botao {
	margin-top: 7px;margin-left: 75px;
	padding: 5px;border: 2px solid black;
	border-radius: 5px;
	width: 150px;
	background-color: #ca0035;
	color: #fff;
	font-size: 15px;
	cursor: pointer;/* border-left: 0; */
}

</style>

<div class="formulario">

<h1>Editar Estoque</h1>

			


	<form  method="POST" action="Controllers/EstoqueEditarController.php" class="formEstoque">
		
	    <fieldset class="fieldEstoque">
		
			<legend>Informações Produto Estoque</legend>

				<select  name="prod" id="prod" required>

					<option  selected value="<?php print $prodEtq['cod_produto']?>">

						<?php print $prodEtq['descricao']?>

					</option>

				</select>

				<label>Quantidade</label>
		     	<input type="number" min="1" max="1000" required name="qtd" placeholder="1" class="inputQtd" value="<?php isset($prodEtq['quantidade']) ? print $prodEtq['quantidade'] : ''?>">
					
					
				<label for="preco">Mínimo</label>
				<input type="number" min="1" max="1000" required  placeholder="1" name="min" class="inputMinimo"  value="<?php isset($prodEtq['minimo']) ? print $prodEtq['minimo'] : ''?>">

					
			
				<button id="botao" type="submit" name="submit">Editar Estoque</button>

		</fieldset>



	</form>

</div>
