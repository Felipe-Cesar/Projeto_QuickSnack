<style type="text/css">
.fieldMesa {
    width: 40%;
    padding: 10px;
    font-family: Helvetica, sans-serif;
    border: 2px solid #000;
    height: auto;
}

form.formMesa{
	padding: 18px;
    width: 590px;
    height: 290px;
    margin-left: 20%;
}

input.inputnumMesa {
    display: block;
    width: 30%;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ccc;
    outline: none;
    font-size: 13px;
    text-indent: 10px;
}


select {
	display: block;
	width: 110px;
	height: 30px;
	pointer-events: none;
	border-radius: 5px;


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

<h1>Lanchonete - Novo Mesa</h1>

			


	<form  method="POST" action="Controllers/MesaRegistrarController.php" class="formMesa">
		<div class="meio"> 
			<fieldset class="fieldMesa">
			
				<legend>Informações da Mesa</legend>

					<label>Nº Mesa</label>
					<input type="text" required autofocus name="num_mesa" placeholder="Nº Mesa" class="inputNumMesa">
						
						
					<label for="preco">Status</label>

					<select name="escolha">
						<option>Disponível</option>
					</select>
					


					<button id="botao" type="submit" name="submit">Registrar Mesa</button>

			</fieldset>
		</div>


	</form>

</div>