<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styleform.css" />
</head>
 <body>

     <form id="formulario" action="processa.php" method="POST" >
	<fieldset class="a">
  
		<center>	<tag>	<h2> Cadastro de Usuário </h2>	</tag>	</center>
	  
			<fieldset  class="a1"> 
				<legend>Dados Pessoais</legend>
				<div> 
						<label class= "b1" for="nome"> Nome : </label>
						<input class= "c1" type="text" id="nome" name="nome"/><br/>
					</div>
					<div>
						<label class= "b2" for="Sobrenome"> Sobrenome : </label>
						<input class= "c2" type="text" id="sobrenome" name="sobrenome"/><br/>  
					</div>
					<div>
                                              <label class= "b3" for=”selecione”> Selecione: </label>  
                                            
                                            <select name="sexo" id="sexo">
                                                    <option label="Selecione" value="-1" selected="selected">Selecione</option>
                                                    <option label="Feminino" value="2">Feminino</option>
                                                    <option label="Masculino" value="3">Masculino</option>
                                                </select>
					</div>
					<div>	
						<label class= "b6" for="E-mail" >E-mail : </label>
						<input class= "c6" type="text" id="E-mail" name="email" /><br/>
					</div>    
					<div>
						<input class= "c7" type="checkbox" name="areap" value="1" id="areap1"/>
						<label class= "b7" for="areap1">Desejo receber outras informações por E-mail. </label>	<br/>  
					</div>
       
			</fieldset>
   
			<fieldset  class="a2"> 
				<legend> Deixe sua Dica </legend>
				<div>
					<label class= "b9" for=”TipodeMensagem”> Tipo de Mensagem: </label>
					<select name="comentarios" id="comentarios">
						<option label="Selecione" value="-1" selected="selected">Selecione</option>
						<option label="Sugestão" value="2">Sugestão</option>
						<option label="Reclamação" value="3">Reclamação</option>
						<option label="Elogios" value="4">Elogios</option>
						<option label="Outros" value="5">Outros</option>
					</select>	<br/><br/>
				</div>
				<div> Mensagem </div>	<textarea name="_comentarios"></textarea>	</div>
	  
			</fieldset>
		<center>	<div>	<button name=”Envia” type=”Enviar”> Enviar </button> </div>	</center>
   </fieldset>   
         </form>
    </body>
</html>
