<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styleform.css" />
</head>
 <body>

	<fieldset class="a">
  
		<center>	<tag>	<h2> Cadastro de Usuário </h2>	</tag>	</center>
	  
			<fieldset  class="a1"> 
				<legend>Dados Pessoais</legend>
					<div> 
						<label class= "b1" for="nome"> Nome : </label>
						<input class= "c1" type="text" id="nome"/><br/>
					</div>
					<div>
						<label class= "b2" for="Sobrenome"> Sobrenome : </label>
						<input class= "c2" type="password" id="sobrenome"/><br/>  
					</div>
					<div>
						<input class= "c4" type="radio" name="sex" id="Masculino"/>
						<label class= "b4" for="Masculino"> Masculino </label>
						<input class= "c5" type="radio" name="sex" id="Feminino"/> 	  
						<label class= "b5" for="Feminino"> Feminino </label>   
					</div>
					<div>	
						<label class= "b6" for="E-mail">E-mail : </label>
						<input class= "c6" type="password" id="E-mail"/><br/>
					</div>    
					<div>
						<input class= "c7" type="checkbox" name="areap" value="1" id="areap1"/>
						<label class= "b7" for="areap1">Desejo receber outras informações por E-mail. </label>	<br/>  
					</div>
       
			</fieldset>
   
			<fieldset  class="a2"> 
				<legend> Deixe sua Dica </legend>
				<div>
					<label class= "b9" for=”linguagem”> Tipo de Mensagem: </label>
					<select name="linguagem" id="linguagem">
						<option label="Selecione" value="-1" selected="selected">Selecione</option>
						<option label="Sugestão" value="A">Sugestão</option>
						<option label="Reclamação" value="B">Reclamação</option>
						<option label="Elogios" value="V">Elogios</option>
						<option label="Outros" value="C">Outros</option>
					</select>	<br/><br/>
				</div>
				<div> Mensagem </div>	<textarea name="Comentários"></textarea>	</div>
	  
			</fieldset>
		<center>	<div>	<button name=”Enviar” type=”Enviar”> Enviar </button> </div>	</center>
   </fieldset>    
    </body>
</html>
