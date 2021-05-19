

<?php



require_once('Config/Config.php');


$prod = new Produtos();
$produto = $prod->obterLinha($_GET['editar']);

if(empty($produto)){//Caso altere o editar na URL

	print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL= ?pagina=produto'>
		<script type='text/javascript'>

         		window.alert('Produto não encontrado. Tente Novamente.');
         		
        </script>"; 
	
	exit;

}

?>

<style type="text/css">

input.inputPreco {
    display: block;
    width: 20%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
	}

	input.inputDesconto {
    display: block;
    width: 10%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
	}

</style>

<div class="formulario">

<h1>Editar Produto</h1>

			

	<form  method="POST" action="Controllers/ProdutosEditarController.php">
		
	    <fieldset>
		
			<legend>Informações do Produto</legend>

				<input type="hidden" name="codigo" value="<?php echo $produto['cod_produto']; ?>">

				<label>Descrição</label>
		     	<input type="text" required name="descricao" placeholder="Descrição" class="input"
		     	value="<?php isset($produto['descricao']) ? print $produto['descricao'] : '' ?>">
					
					
				<label for="preço">Preço de venda</label>
				<input type="text" type="number" step="any" min="0" max="1000" required  placeholder="R$ 00,00" name="preco" class="inputPreco"
				value="<?php isset($produto['preco_venda']) ? print $produto['preco_venda'] : ''?>">

					
				<label for="desconto">Desconto</label>
				<input type="text" type="number" step="any" min="0" max="1000" required placeholder="0%" name="desconto" class="inputDesconto"
				value="<?php isset($produto['max_desconto']) ?print $produto['max_desconto'] : '' ?>">

				<label for="qty">
					<input type="checkbox"  name="descontinuado"  id="descontinuado" 
					<?php if (isset($produto['descontinuado'])){

						$produto['descontinuado'] == 1 ? print "checked" : ''; }?>
					 >
					
					Descontinuado
				</label>
					

				<button id="botao" type="submit" name="submit">Editar</button>

		</fieldset>



	</form>

</div>