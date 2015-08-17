<?php

//Imprime erros com o banco
@ini_set('display_errors', '1');
error_reporting(E_ALL);

if(isset($_GET['p'])){
	$pag = $_GET['p'];
}else{
	$pag = "menu";
}
?>
<div class="menu-area">
	<div id="dl-menu" class="dl-menuwrapper">
		<button class="dl-trigger">Open Menu</button>
			<ul class="dl-menu">
				<li><a href="?perfil=inicio">Início</a> </li>
				<li><a href="?secao=perfil">Perfil de Acesso</a></li>
				<li><a href="?perfil=imprensa">Opções</a></li>
				<li><a href="?perfil=imprensa&p=pesquisar">Pesquisar</a></li>
				<li><a href="?perfil=imprensa&p=inserir">Inserir</a></li>
				<li><a href="?perfil=imprensa&p=gerarlista">Gerar Lista</a></li>
                         
                                      
                                             
            </ul>
	</div><!-- /dl-menuwrapper -->
</div>	

<?php
switch($pag){
case "menu":
?>

<section id="contact" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
	                <h4>Escolha uma opção</h4>
                </div>
            </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
	            <a href="?perfil=imprensa&p=pesquisar" class="btn btn-theme btn-lg btn-block">PESQUISAR</a>
	            <a href="?perfil=imprensa&p=inserir" class="btn btn-theme btn-lg btn-block">INSERIR</a>
  	            <a href="?perfil=imprensa&p=gerarlista" class="btn btn-theme btn-lg btn-block">GERAR LISTA</a>
            </div>
          </div>
        </div>
    </div>
</section>

<?php 
break;
case "gerarlista":
?>

<section id="pesquisar" class="home-section bg-white">
	<div class="container">
	    <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
                    <h3>Gerar Lista / Filtro</h3>
                </div>
            </div>
        </div>
	</div>	

		
<form action="?perfil=imprensa&p=filtro" method="post">
</br>
</br>	

		<h4><p><strong>Áreas de Interesse</strong><br /></h4>
		(Se não houverem seleções, o sistema fará uma busca total)</p>


<!-- <script type="text/javascript">   script para um botão selecionar tudo 
	function checarTudo(o){
	var boxes = document.getElementById("area");
	for (var x=0;x<boxes.length;x++){			
		var obj = boxes[x];
		if (obj.type == "checkbox"){
			if (obj.name!="checkAll"){
				obj.checked = o.checked;
			}
		}
	}
}
</script>
-->
		   
	   

		<input type="checkbox" name="imp_jornalistas.artesVisuais" id="imp_jornalistas.artesVisuais" /><label  style="padding:0 10px 0 5px;"> Artes Visuais</label>
		<input type="checkbox" name="imp_jornalistas.cinema" id="imp_jornalistas.cinema" /><label style="padding:0 10px 0 5px;"> Cinema</label>			    
		<input type="checkbox" name="imp_jornalistas.danca" id="imp_jornalistas.danca" /><label  style="padding:0 10px 0 5px;"> Dança</label>
        <input type="checkbox" name="imp_jornalistas.literatura" id="imp_jornalistas.literatura" /><label style="padding:0 10px 0 5px;">Literatura</label>
        <input type="checkbox" name="imp_jornalistas.musicaErudita" id="imp_jornalistas.musicaErudita" /><label style="padding:0 10px 0 5px;">Música Erudita</label>
    	<input type="checkbox" name="imp_jornalistas.musicaPopular" id="imp_jornalistas.musicaPopular" /><label  style="padding:0 10px 0 5px;">Música Popular</label>
    	<input type="checkbox" name="imp_jornalistas.teatroAdulto" id="imp_jornalistas.teatroAdulto" /><label style="padding:0 10px 0 5px;">Teatro Adulto</label>
	    <input type="checkbox" name="imp_jornalistas.teatroInfantil" id="imp_jornalistas.teatroInfantil" /><label  style="padding:0 10px 0 5px;">Teatro Infantil</label> <br />
		<input type="checkbox" name="imp_jornalistas.oficinas" id="imp_jornalistas.oficinas" /><label  style="padding:0 10px 0 5px;">Oficinas</label>
        <input type="checkbox" name="imp_jornalistas.palestras" id="imp_jornalistas.palestras" /><label  style="padding:0 10px 0 5px;">Palestras e debates</label>
 	    <input type="checkbox" name="imp_jornalistas.acessibilidade" id="imp_jornalistas.acessibilidade" /><label  style="padding:0 10px 0 5px;">Acessibilidade</label>
 	    <input type="checkbox" name="imp_jornalistas.culturaDigital" id="imp_jornalistas.culturaDigital" /><label  style="padding:0 10px 0 5px;">Cultura Digital</label>
		<input type="checkbox" name="imp_jornalistas.acervo" id="imp_jornalistas.acervo" /><label  style="padding:0 10px 0 5px;">Acervo/Coleções</label>
        <input type="checkbox" name="imp_jornalistas.infantoJuvenil" id="imp_jornalistas.infantoJuvenil" /><label  style="padding:0 10px 0 5px;">Infantojuvenil</label> <br />				<input type="checkbox" name="imp_jornalistas.edital" id="imp_jornalistas.edital" /><label  style="padding:0 10px 0 5px;">Editais</label>
		<input type="checkbox" name="imp_jornalistas.hq" id="imp_jornalistas.hq"/><label  style="padding:0 10px 0 5px;">HQ</label>
		<!--<input type="checkbox" name="checkAll" id="checkAll" onclick="checarTudo(this)"/> <label style="padding:0 10px 0 5px;">Selecionar todos</label>-->

<br />

<div class="form-group">
    <div class="col-md-offset-1 col-md-10">
        <div class="col-md-offset-2 col-md-8">
       		<label><h4>Veículos</h4></label>
           		<select class="form-control" name="cen_veiculos.idVeiculo" id="cen_veiculos.idVeiculo" >
					<option value="1"></option>
						<?php echo geraOpcao("cen_veiculos",$campo['idVeiculo'],"") ?>
</select>
        </div>
	</div>
</div>						
		
<div class="col-md-offset-2 col-md-8">
</br>
	    		
		<label><h4>Redes Sociais</h4></label>
</br>		   
			<input type="checkbox" name="twitter" id="twitter" /><label  style="padding:0 10px 0 5px;"> Twitter</label>
			<input type="checkbox" name="facebook" id="facebook" /><label style="padding:0 10px 0 5px;"> Facebook</label>
           	<input type="checkbox" name="instagram" id="instagram" /><label  style="padding:0 10px 0 5px;"> Instagram</label>
            <input type="checkbox" name="sem" id="sem" /><label style="padding:0 10px 0 5px;">Sem Redes Sociais</label>
</br>
</br>
</br>


<div class="col-md-offset-1 col-md-10">					
		<input type="hidden" name="filtro" value="1"  />
        <input type="submit" class="btn btn-theme btn-lg btn-block" value="FILTRAR"  />


</br>
</br>
</br>
</br>
</div>
</div>
</form>				
</section>			


<?php
break;
case "inserir":
$campo = recuperaJornalista(343);
?>
<?php
if(isset($_POST['recupera'])){ //se existe o id do jornalista a recuperar
		$campo = recuperaJornalista($_POST['recupera']);
	
}
?>
<?php
if(isset($_GET['recupera'])){ //se existe o id do jornalista a recuperar
		$campo = recuperaJornalista($_GET['recupera']);
	
}


?>

<?php
if(isset($_POST['atualizar'])){
	
	
}


if(isset($_POST['cadastrar'])){ // existe pedido de cadastro
	//jornalista
	$campo = recuperaJornalista(343);
	
	$nome = $_POST['imp_jornalistas_nome'];
	$email = $_POST['imp_jornalistas_email'];
	$empresa = $_POST['imp_jornalistas_empresa'];
	
	$menlog = $nome.$email.$empresa;
	
	if(($nome == '') OR ($email == '') OR ($empresa == '')){  
	
		$mensagem = "<p>Os campos nome, email ou empresa está(ão) em branco e é(são) obrigatório(s). <a href='?perfil=imprensa&p=inserir'>Tente novamente.</a></p>"; 
	
	} else { // caso não esteja vazio
			$existe = mysql_num_rows(mysql_query("SELECT * FROM imp_jornalistas WHERE nome = '$nome' AND publicado = 1"));
		
		if($existe == 0){ // verifica se existe, caso não, insere.
		
			$idVeiculo = $_POST['cen_veiculos_idVeiculo'];

			$telefoneContato = $_POST['telefoneContato'];
			$celular = $_POST['celular'];
			$preferencia = $_POST['preferencia'];

			$twitter = $_POST['twitter'];
			$facebook = $_POST['facebook'];
			$instagram = $_POST['instagram'];
			
			$idUsuario = $_SESSION["idUsuario"];
			$datetime = date("Y-m-d H:i:s");
			$funcao = $_POST['funcao'];
			$publicado = 1;
			
			 
			if(isset($_POST['artesVisuais'])){
				$artesVisuais = 1;
			}else{
				$artesVisuais = 0;
			}

			if(isset($_POST['cinema'])){
				$cinema = 1;
			}else{
				$cinema = 0;
			}

			if(isset($_POST['danca'])){
				$danca = 1;
			}else{
				$danca = 0;
			}

			if(isset($_POST['literatura'])){
				$literatura = 1;
			}else{
				$literatura = 0;
			}

			if(isset($_POST['musicaPopular'])){
				$musicaPopular = 1;
			}else{
				$musicaPopular = 0;
			}

			if(isset($_POST['musicaErudita'])){
				$musicaErudita = 1;
			}else{
				$musicaErudita = 0;
			}

			if(isset($_POST['teatroAdulto'])){
				$teatroAdulto = 1;
			}else{
				$teatroAdulto = 0;
			}
			if(isset($_POST['teatroInfantil'])){
				$teatroInfantil = 1;
			}else{
				$teatroInfantil = 0;
			}

			if(isset($_POST['oficinas'])){
				$oficinas = 1;
			}else{
				$oficinas = 0;
			}

			if(isset($_POST['palestras'])){
				$palestras = 1;
			}else{
				$palestras = 0;
			}

			if(isset($_POST['acessibilidade'])){
				$acessibilidade = 1;
			}else{
				$acessibilidade = 0;
			}

			if(isset($_POST['infantoJuvenil'])){
				$infantoJuvenil = 1;
			}else{
				$infantoJuvenil = 0;
			}

			if(isset($_POST['culturaDigital'])){
				$culturalDigital = 1;
			}else{
				$culturaDigital = 0;
			}
			if(isset($_POST['acervo'])){
				$acervo = 1;
			}else{
				$acervo = 0;
			}

			if(isset($_POST['edital'])){
				$edital = 1;
			}else{
				$edital = 0;
			}
			
			if(isset($_POST['hq'])){
				$hq = 1;
			}else{
				$hq = 0;
			}
			
		$query = "INSERT INTO  `imp_jornalistas` (
		`idJornalista` ,
		`nome` ,
		`veiculo` ,
		`empresa` ,
		`telefoneContato` ,
		`celular` ,
		`preferencia` ,
		`email` ,
		`twitter` ,
		`instagram` ,
		`facebook` ,
		`publicado` ,
		`idUsuario` ,
		`datetime` ,
		`funcao`
		`artesVisuais` ,
		`cinema` ,
		`danca` ,
		`literatura` ,
		`musicaPopular` ,
		`musicaErudita` ,
		`teatroAdulto` ,
		`teatroInfantil` ,
		`oficina` ,
		`palestras` ,
		`acessibilidade` ,
		`infantoJuvenil` ,
		`culturalDigital` ,
		`acervo` ,
		`edital` ,
		`hq`
		)
		VALUES (
		NULL , '$idJornalista' '$nome',  '$idVeiculo',  '$empresa',  '$telefoneContato',  '$celular',  '$preferencia',  '$email',  '$twitter',  '$instagram',  '$facebook',  '$publicado',  '$idUsuario',  '$datetime',  '$funcao', '$artesVisuais', '$cinema', '$danca', '$literatura', '$musicaPopular', '$musicaErudita', '$teatroAdulto', '$teatroInfantil', '$oficina', '$palestras', '$acessibilidade', '$infantoJuvenil', '$culturalDigital', '$acervo', '$edital', '$hq');
		";
		if(mysql_query($query)){ //verifica se a query funcionou, caso sim, imprime a mensage.
			$mensagem =  "Inserido com Sucesso! <a href='?perfil=imprensa&p=pesquisar'>Cadastrar outro.</a><br />";	
				 gravarLog($query);
			
			}else{ // caso não, imprime a mensagem.
			$mensagem = "Erro ao inserir. Tente novamente.";		
		}	
		}else{
				$mensagem = "Champs, o cara existe. Edite ou inseria outro.";
		}
	}	

	
} // existe pedido de cadastro
?>
<section id="inserir" class="home-section bg-white">
	<form method="POST" action="?perfil=imprensa&p=inserir" class="form-horizontal" role="form">
		<div class="form-group">       
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
                    <h3>Inserir novo registro</h3>
					<meta charset="utf-8" />
                    <h1></h1>
                   
                </div>
            </div>
		</div>

<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
    	<label>Nome</label>
     		<input type="text" name="imp_jornalistas_nome" class="form-control" id="imp_jornalistas.nome" value="<?php echo $campo['nome'] ?>" />
    </div> 
</div>
	
<div class="form-group">
    <div class="col-md-offset-1 col-md-10">
       	<div class="col-md-offset-2 col-md-8">
             <label>Veículos</label>
            	<select class="form-control" name="cen_veiculos_idVeiculo" id="cen_veiculos.idVeiculo" >
					<option value="1"></option>
						<?php echo geraOpcao("cen_veiculos",$campo['idVeiculo'],"") ?>
				</select>
        </div>
	</div>
</div>	

<div class="col-md-offset-1 col-md-10">
	<div class="col-md-offset-2 col-md-8">
    	<label>Empresa/Instituição</label>
       		<input type="text" name="imp_jornalistas_empresa" class="form-control" id="imp_jornalistas.empresa" value="<?php echo $campo['empresa'] ?>" />
    </div> 
</div>
				
<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
   		<label>Telefone Comercial</label>
       		<input type="text" name="imp_jornalistas.telefoneContato" class="form-control" id="imp_jornalistas.telefoneContato" value="<?php echo $campo['telefoneContato'] ?>" />
   	</div> 

<div class="col-md-6">
	<label>Telefone Celular</label>
   		<input type="text" name="imp_jornalistas.celular" class="form-control" id="imp_jornalistas.celular" value="<?php echo $campo['celular'] ?>" />
</div> 
</div>		
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
   		<label> Email</label>
       		<input type="text" name="imp_jornalistas_email" class="form-control" id="imp_jornalistas.email" value="<?php echo $campo['email'] ?>" />
   	</div> 
</div>
		
<div class="col-md-offset-1 col-md-10">
   	<div class="col-md-offset-2 col-md-8">
   		<label>Função</label>
       		<input type="text" name="imp_jornalistas.funcao" class="form-control" id="imp_jornalistas.funcao" value="<?php echo $campo['funcao'] ?>" />
   	</div> 
</div>	
<br />

<h1>Redes Sociais</h1>
        <div class="col-md-offset-1 col-md-10">
            <div class="col-md-offset-2 col-md-8">
            	<label>Facebook</label>
					<input type="text" name="imp_jornalistas.facebook" class="form-control" id="imp_jornalistas.facebook" value="<?php echo $campo['facebook'] ?>" />
			</div> 
        </div>
	
<div class="col-md-offset-1 col-md-10">     		
<div class="col-md-offset-2 col-md-8">
    <label>Twitter</label>
		<input type="text" name="imp_jornalistas.twitter" class="form-control" id="imp_jornalistas.twitter" value="<?php echo $campo['twitter'] ?>" />
</div> 
</div>
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
        <label>Instagram</label>
        	<input type="text" name="imp_jornalistas.instagram" class="form-control" id="imp_jornalistas.instagram" value="<?php echo $campo['instagram'] ?>" />
   	</div> 
</div>
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
    	<label>Preferências</label>
       		<textarea name="imp_jornalistas.preferencia" class="form-control" rows="10" plac	eholder=""><?php echo $campo["preferencia"] ?></textarea>
				<h3>Áreas de Interesse</h3>
	</div> 
</div>
						
<div class="form-group">
    <div class="col-md-offset-2 col-md-8">
		<input type="checkbox" name="imp_areas.cinema" id="imp_areas.cinema" /><label style="padding:0 10px 0 5px;"> Cinema</label>
        <input type="checkbox" name="imp_areas.danca" id="imp_areas.danca" /><label  style="padding:0 10px 0 5px;"> Dança</label>
        <input type="checkbox" name="imp_areas.literatura" id="imp_areas.literatura" /><label style="padding:0 10px 0 5px;">Literatura</label>
        <input type="checkbox" name="imp_areas.musicaErudita" id="imp_areas.musicaErudita" /><label style="padding:0 10px 0 5px;">Música Erudita</label>
        <input type="checkbox" name="imp_areas.musicaPopular" id="imp_areas.musicaPopular" /><label  style="padding:0 10px 0 5px;">Música Popular</label>
        <input type="checkbox" name="imp_areas.teatroAdulto" id="imp_areas.teatroAdulto" /><label style="padding:0 10px 0 5px;">Teatro Adulto</label>
        <input type="checkbox" name="imp_areas.teatroInfantil" id="imp_areas.teatroInfantil" /><label  style="padding:0 10px 0 5px;">Teatro Infantil</label> <br />
		<input type="checkbox" name="imp_areas.oficinas" id="imp_areas.oficinas" /><label  style="padding:0 10px 0 5px;">Oficinas</label>
        <input type="checkbox" name="imp_areas.palestras" id="imp_areas.palestras" /><label  style="padding:0 10px 0 5px;">Palestras e debates</label>
        <input type="checkbox" name="imp_areas.acessibilidade" id="imp_areas.acessibilidade" /><label  style="padding:0 10px 0 5px;">Acessibilidade</label>
        <input type="checkbox" name="imp_areas.culturaDigital" id="imp_areas.culturaDigital" /><label  style="padding:0 10px 0 5px;">Cultura Digital</label>
		<input type="checkbox" name="imp_areas.acervo" id="imp_areas.acervo" /><label  style="padding:0 10px 0 5px;">Acervo/Coleções</label>    		    
		<input type="checkbox" name="imp_areas.infantoJuvenil" id="imp_areas.infantoJuvenil" /><label  style="padding:0 10px 0 5px;">Infantojuvenil</label> <br />
		<input type="checkbox" name="imp_areas.artesVisuais" id="imp_areas.artesVisuais" /><label  style="padding:0 10px 0 5px;"> Artes Visuais</label>
   	    <input type="checkbox" name="imp_areas.edital" id="imp_areas.edital" /><label  style="padding:0 10px 0 5px;">Editais</label>
		<input type="checkbox" name="imp_areas.hq" id="imp_areas.hq"/><label  style="padding:0 10px 0 5px;">HQ</label>
   	</div>                     
</div>
				    
<div class="form-group">  
   	<div class="col-md-offset-2 col-md-8">
        <input type="reset" class="btn btn-theme btn-lg btn-block" value="LIMPAR CAMPOS"  />
	</div>
	
<div class="col-md-offset-2 col-md-8">					
	<input type="hidden" name="cadastrar" value="1"  />
    <input type="submit" class="btn btn-theme btn-lg btn-block" value="CADASTRAR"  />
</div>
</div>			
</form>
</section>



<?php 
?>

<?php 
break;
case "pesquisar":
?>



<section id="pesquisar" class="home-section bg-white">
	<form method="POST" action="?perfil=pesquisar&p=imprensa" class="form-horizontal" role="form"> 
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="text-hide">
						<h2>Pesquisar</h2>
						 <h4><?php echo $mensagem ?></h4>
					</div>
				</div>
			</div>
		</div>
	</form>
			
<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <form method="POST" action="?perfil=imprensa&p=resultados" class="form-horizontal" role="form">
       		 <div class="form-group">
            	<div class="col-md-offset-2 col-md-8">
            		<label>Digite o nome, empresa/instituição ou função.</label>
					<input type="text" name="pesquisa" class="form-control" id="pesquisa" placeholder="nome do jornalista, veículo, redes sociais..." />	
					<input type="submit" class="btn btn-theme btn-lg btn-block" value="PESQUISAR" />
					
											
            	</div> 
            </div>
	</div>
</div>

<div class="row">
	<label>Últimos cadastrados</label>

<?
	if(isset($_GET['lim'])){
		$limite = $_GET['lim'];
	}else{
		$limite = 25;
	}
	$sql_ultimos = "SELECT * FROM imp_jornalistas JOIN imp_areas ON imp_jornalistas.idJornalista = imp_areas.idJornalista AND imp_jornalistas.publicado = '1' ORDER BY imp_jornalistas.idJornalista DESC LIMIT $limite";
	$query_ultimos = mysql_query($sql_ultimos);
	while($imp_jornalistas = mysql_fetch_array($query_ultimos)){

?>
	
	<p> <a href="?perfil=imprensa&p=exibir&id=<? echo $imp_jornalistas['idJornalista'] ?>" /> <? echo $imp_jornalistas['nome'] ?>, <? echo $imp_jornalistas['empresa'] ?>, twitter: <? echo $imp_jornalistas['twitter'] ?> </a> </p>


<? 
} 	
?>
	
</div>
</form>
</section>

<?php
break;
case "filtro":
?>

<? if(isset($_POST['filtro'])) // aplicações do filtro
	
	if(isset($_POST['artesVisuais'])){
		$artes_visuais = "OR imp_areas.artesVisuais = '1'";
	}else{
		$artesVisuais = "";
		}
	if(isset($_POST['cinema'])){
		$cinema = "OR imp_areas.cinema = '1'";
	}else{
		$cinema = "";
	}

	if(isset($_POST['danca'])){
		$danca = "OR imp_areas.danca = '1'";
	}else{
		$danca = "";
	}

	if(isset($_POST['literatura'])){
		$literatura = "OR imp_areas.literatura = '1'";
	}else{
		$literatura = "";
		}

	if(isset($_POST['musicaPopular'])){
			$musicaPopular = "OR imp_areas.musicaPopular = '1'";
	}else{
		$musicaPopular = "";
	}

	if(isset($_POST['musicaErudita'])){
		$musErudita = "OR imp_areas.musicaErudita = '1'";
	}else{
		$musErudita = "";
	}

	if(isset($_POST['teatroAdulto'])){
		$teatroAdulto = "OR imp_areas.teatroAdulto = '1'";
	}else{
		$teatroAdulto = "";
	}

	if(isset($_POST['teatroInfantil'])){
		$teatroInfantil = "OR imp_areas.teatroInfantil = '1'";
	}else{
		$teatroInfantil = "";
		}

	if(isset($_POST['oficinas'])){
		$oficinas = "OR imp_areas.oficinas = '1'";
	}else{
		$oficinas = "";
		}

	if(isset($_POST['palestras'])){
		$palestras = "OR imp_areas.palestras = '1'";
	}else{
		$palestras = "";
	}

	if(isset($_POST['acessibilidade'])){
		$acessibilidade = "OR imp_areas.acessibilidade = '1'";
	}else{
		$acessibilidade = "";
	}

	if(isset($_POST['infantoJuvenil'])){
		$infantoJuvenil = "OR areas.infantoJuvenil = '1'";
	}else{
		$infantoJuvenil = "";
		}

	if(isset($_POST['culturaDigital'])){
		$culturaDigital = "OR imp_areas.culturalDigital = '1'";
	}else{
		$culturaDigital = "";
		}

	if(isset($_POST['acervo'])){
		$acervo = "OR imp_areas.acervos = '1'";
	}else{
		$acervo = "";
		}

	if(isset($_POST['edital'])){
		$edital = "OR imp_areas.artes_acervos = '1'";
	}else{
		$edital = "";
	}

	if(isset($_POST['hq'])){
		$hq = "OR imp_areas.hq = '1'";
	}else{
		$hq = "";
	}

			$filtro_tempAreas = $artesVisuais.$cinema.$danca.$literatura.$musicaPopular.$musicaErudita.$teatroAdulto.$teatroInfantil.$oficinas.$palestras.$acessibilidade.$infantoJuvenil.$culturaDigital.$acervo.$edital.$hq;
			//echo "O tamanho da string é: ".strlen($filtro_tempAreas)."<br />";

	if(strlen($filtro_tempAreas) == 0){
		$filtro_areas = "";
	}else{
		$filtro_areas = "AND (".substr($filtro_tempAreas,2).")";
	}

		$veiculo = $_POST['veiculos']; //filtro por veículo ok
	
	if($veiculo == 8){
		$filtro_veiculos = "";
	}else{
		$filtro_veiculos = "AND imp_jornalistas.veiculo = '$veiculo'";
	}

		// recebe o radio das redes sociais	
	if(isset($_POST['twitter'])){
		$twitter = "OR twitter != ''";
	}else{
		$twitter = "";
	}
		
	if(isset($_POST['facebook'])){
		$facebook = "OR facebook != ''";
	}else{
		$facebook = "";
	}
		
	if(isset($_POST['instagram'])){
		$instagram = "OR instagram != ''";
	}else{
		$instagram = "";
	}		

	if(isset($_POST['semredes'])){
		$semredes = 1;
	}else{
		$semredes = 0;
	}		

	if($semredes == 1){
		$filtro_redes = "AND (imp_jornalistas.twitter = '' AND imp_jornalistas.facebook = '' AND imp_jornalistas.instagram = '')";
	}else{		
		$filtro_temp = $twitter.$facebook.$instagram;

	if(strlen($filtro_temp) == 0){
		$filtro_redes = "";
	}else{
		$filtro_redes = "AND (".substr($filtro_temp,3).")";
	}
	}
		
		
		$sql_filtro = "SELECT * FROM imp_jornalistas,imp_areas WHERE imp_jornalistas.idJornalista = imp_areas.idJornalista AND imp_jornalistas.publicado = 1 $filtro_areas $filtro_veiculos $filtro_redes"; 
			echo $sql_filtro;
		$query_filtro = mysql_query($sql_filtro);
		$num_filtro = mysql_num_rows($query_filtro);
			echo "<br />Resultados: ".$num_filtro;
?>

<table>
	<tr>
	<th width="40%">Nome</th>
	<th width="30%">Veículo</th>
	<th width="30%">E-mail</th>
	</tr>

<?
	while($lista = mysql_fetch_array($query_filtro)){
?>
	<tr>
		<td><? echo $lista['nome'] ?></td>
		<td><? echo veiculo($lista['veiculo']) ?></td>
		<td><? echo $lista['email'] ?></td>
	</tr>
<? } ?>

</table>
<br />
<br />

<?php 
case "resultados":
$pesquisa = $_POST['pesquisa'];
$sql_pesquisa = "SELECT * FROM imp_jornalistas WHERE (nome LIKE '%$pesquisa%' OR empresa LIKE '%$pesquisa%' OR funcao LIKE '%$pesquisa%') AND publicado = '1' ORDER BY idJornalista";
$query_pesquisa = mysql_query($sql_pesquisa);
$num_retorno = mysql_num_rows($query_pesquisa); 
?>
<section id="inserir" class="home-section bg-white">
		<div class="form-group">       
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
					<h1>O número de resultados é <?php echo $num_retorno; ?></h1>
					<h3><a href="?perfil=imprensa&p=pesquisar">Nova Pesquisa</a></h3>
                </div>
            </div>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<?php 
					while($result = mysql_fetch_array($query_pesquisa)){
						echo $result['nome']." - ".retornaVeiculo($result['veiculo'])." - ".$result['funcao']."<br />";
					}
					
					?>	
				
											
					</div> 
				</div>
			</div>
		</div>
</section>
<?php 
break;
case "teste":
$idJor = $_GET['jornalista'];
$recJor = recuperaJornalista($idJor);
?>
<section id="inserir" class="home-section bg-white">
		<div class="form-group">       
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
					<h1>O nome do jornalista é <?php echo $recJor['nome'] ?></h1>
					<h3>Ele trabalha em <?php echo retornaVeiculo($recJor['veiculo']); ?></h3>
					<h3>Ele é <?php echo $recJor['funcao']; ?></h3>

					</div>
            </div>
		</div>
</section>
<?php 
break;
case "exibir":
$idJor = $_GET['id'];
$recJor = recuperaJornalista($idJor);
?>
<section id="inserir" class="home-section bg-white">
		<div class="form-group">       
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
					<h1>O nome do jornalista é <?php echo $recJor['nome'] ?></h1>
					<h3>Ele trabalha em <?php echo retornaVeiculo($recJor['idVeiculo']); ?></h3>
					<h3>Ele é <?php echo $recJor['funcao']; ?></h3>
					<h3><a href="?perfil=imprensa&p=inserir&recupera=<?php echo $idJor; ?>">Editar</h3>

					</div>
            </div>
		</div>
</section>
<?php
break;

?>


<?php } // fecha switch ?>



   