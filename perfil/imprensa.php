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
switch($pag)
{
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
//$gerarlista = $_POST['gerarlista'];
?>

<section id="gerarlista" class="home-section bg-white">
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
		<input type="checkbox" name="artesVisuais" id="artesVisuais" /><label  style="padding:0 10px 0 5px;"> Artes Visuais</label>
		<input type="checkbox" name="cinema" id="cinema" /><label style="padding:0 10px 0 5px;"> Cinema</label>			    
		<input type="checkbox" name="danca" id="danca" /><label  style="padding:0 10px 0 5px;"> Dança</label>
        <input type="checkbox" name="literatura" id="literatura" /><label style="padding:0 10px 0 5px;">Literatura</label>
        <input type="checkbox" name="musicaErudita" id="musicaErudita" /><label style="padding:0 10px 0 5px;">Música Erudita</label>
    	<input type="checkbox" name="musicaPopular" id="musicaPopular" /><label  style="padding:0 10px 0 5px;">Música Popular</label>
    	<input type="checkbox" name="teatroAdulto" id="teatroAdulto" /><label style="padding:0 10px 0 5px;">Teatro Adulto</label>
	    <input type="checkbox" name="teatroInfantil" id="teatroInfantil" /><label  style="padding:0 10px 0 5px;">Teatro Infantil</label> <br />
		<input type="checkbox" name="oficinas" id="oficinas" /><label  style="padding:0 10px 0 5px;">Oficinas</label>
        <input type="checkbox" name="palestras" id="palestras" /><label  style="padding:0 10px 0 5px;">Palestras e debates</label>
 	    <input type="checkbox" name="acessibilidade" id="acessibilidade" /><label  style="padding:0 10px 0 5px;">Acessibilidade</label>
 	    <input type="checkbox" name="culturaDigital" id="culturaDigital" /><label  style="padding:0 10px 0 5px;">Cultura Digital</label>
		<input type="checkbox" name="acervo" id="acervo" /><label  style="padding:0 10px 0 5px;">Acervo/Coleções</label>
        <input type="checkbox" name="infantoJuvenil" id="infantoJuvenil" /><label  style="padding:0 10px 0 5px;">Infantojuvenil</label> <br />				
		<input type="checkbox" name="edital" id="edital" /><label  style="padding:0 10px 0 5px;">Editais</label>
		<input type="checkbox" name="hq" id="imp_jornalistas.hq"/><label  style="padding:0 10px 0 5px;">Histórias em Quadrinhos</label>
		<!--<input type="checkbox" name="checkAll" id="checkAll" onclick="checarTudo(this)"/> <label style="padding:0 10px 0 5px;">Selecionar todos</label>-->

<br />

	
<div class="form-group">
    <div class="col-md-offset-1 col-md-10">
       	<div class="col-md-offset-2 col-md-8">
             <label>Veículos</label>
            	<select class="form-control" name="cen_veiculos_veiculo" id="inputSubject">
					<option value="1"></option>
						<?php echo geraVeiculos("cen_veiculos",$campo['veiculo'],""); ?>
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
$editar = 0;
$campo = recuperaJornalista(343);
?>

<?php
	if(isset($_POST['recupera']))  //se existe o id do jornalista a recuperar
	{ 
		$campo = recuperaJornalista($_POST['recupera']);
		$editar = 1;
	}
?>

<?php
	if(isset($_GET['recupera']))   //se existe o id do jornalista a recuperar
	{ 
		$campo = recuperaJornalista($_GET['recupera']);
		$editar = 1;
	}
?>

<?php
	if(isset($_POST['editar']))
	{
			$idJornalista = $_POST['editar'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$empresa = $_POST['empresa'];
			$idVeiculo = $_POST['idVeiculo'];
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
			
			
			 
	if(isset($_POST['artesVisuais']))
		{
			$artesVisuais = 1;
		}
	else
		{
			$artesVisuais = 0;
		}

	if(isset($_POST['cinema']))
		{
			$cinema = 1;
		}
	else
		{
			$cinema = 0;
		}

	if(isset($_POST['danca']))
		{
			$danca = 1;
		}
	else
		{
			$danca = 0;
		}

	if(isset($_POST['literatura']))
		{
			$literatura = 1;
		}
	else
		{
			$literatura = 0;
		}
	if(isset($_POST['musicaPopular']))
		{
			$musicaPopular = 1;
		}
	else
		{
			$musicaPopular = 0;
		}
	if(isset($_POST['musicaErudita']))
		{
			$musicaErudita = 1;
		}
	else
		{
			$musicaErudita = 0;
		}
	if(isset($_POST['teatroAdulto']))
		{
			$teatroAdulto = 1;
		}
	else
		{
			$teatroAdulto = 0;
		}
	if(isset($_POST['teatroInfantil']))
		{
			$teatroInfantil = 1;
		}
	else
		{
			$teatroInfantil = 0;
		}
	if(isset($_POST['oficinas']))
		{
			$oficinas = 1;
		}
	else
		{
			$oficinas = 0;
		}
	if(isset($_POST['palestras']))
		{
			$palestras = 1;
		}
	else
		{
			$palestras = 0;
		}
	if(isset($_POST['acessibilidade']))
		{
			$acessibilidade = 1;
		}
	else
		{
			$acessibilidade = 0;
		}
	if(isset($_POST['infantoJuvenil']))
		{
			$infantoJuvenil = 1;
		}
	else
		{
			$infantoJuvenil = 0;
		}
	if(isset($_POST['culturaDigital']))
		{
			$culturaDigital = 1;
		}
	else
		{
			$culturaDigital = 0;
		}
	if(isset($_POST['acervo']))
		{
			$acervo = 1;
		}
	else
		{
			$acervo = 0;
		}
	if(isset($_POST['edital']))
		{
			$edital = 1;
		}
	else
		{
			$edital = 0;
		}
	if(isset($_POST['hq']))
		{
			$hq = 1;
		}
	else
		{
			$hq = 0;
		}
			
			$sql_atualizar_jornalista = "UPDATE imp_jornalistas SET
			nome = '$nome',
			email = '$email',
			empresa = '$empresa',
			idVeiculo = '$idVeiculo',
			telefoneContato = '$telefoneContato',
			celular = '$celular',
			preferencia = '$preferencia',
			twitter = '$twitter',
			facebook = '$facebook',
			instagram = '$instagram',
			idUsuario = '$idUsuario', 
			datetime = '$datetime',
			funcao = '$funcao',
			publicado = '$publicado',
			artesVisuais = '$artesVisuais',
			cinema = '$cinema',
			danca = '$danca',
			literatura = '$literatura',
			musicaPopular = '$musicaPopular',
			musicaErudita = '$musicaErudita',
			teatroAdulto = '$teatroAdulto', 
			teatroInfantil = '$teatroInfantil',
			oficinas = '$oficinas',
			palestras = '$palestras',
			acessibilidade = '$acessibilidade',
			infantoJuvenil = '$infantoJuvenil',
			culturaDigital = '$culturaDigital',
			acervo = '$acervo',
			edital = '$edital',
			hq = '$hq' 
			WHERE idJornalista = '$idJornalista'
			";		
			
	if(mysql_query($sql_atualizar_jornalista))
		{ //verifica se a query funcionou, caso sim, imprime a mensage.
			$mensagem =  "Atualizado com Sucesso! <a href='?perfil=imprensa&p=pesquisar'>Voltar a pesquisa.</a><br />";	
		//	 gravarLog($sql_atualizar_jornalista);
			
		}
	else
		{ // caso não, imprime a mensagem.
			$mensagem = "Erro ao atualizar. Tente novamente.";		
		}	
			$campo = recuperaJornalista($idJornalista);
			$editar = $idJornalista;
	}
	
	if(isset($_POST['cadastrar']))
		{ // existe pedido de cadastro
		//jornalista
		$campo = recuperaJornalista(343); // funcao para zerar todos os campos, sempre deixar registro do banco zerado se não dá merda 
		//$menlog = $nome.$email.$empresa;
		
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$empresa = $_POST['empresa'];  
			
	if (($nome == '') OR ($email == '') OR ($empresa == ''))
		{
		$mensagem = "Os campos nome, email ou empresa está(ão) em branco e é(são) obrigatório(s). <a href='?perfil=imprensa&p=inserir'>Tente novamente.</a>";  
		}
	else { // caso não esteja vazio
		$existe = mysql_num_rows(mysql_query("SELECT * FROM imp_jornalistas WHERE nome = '$nome' AND publicado = 1"));
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$empresa = $_POST['empresa'];
		$idVeiculo = $_POST['idVeiculo'];
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
			
			 
	if(isset($_POST['artesVisuais']))
		{
		$artesVisuais = 1;
		}
	else
		{
		$artesVisuais = 0;
		}
	if(isset($_POST['cinema']))
		{
		$cinema = 1;
		}
	else
		{
		$cinema = 0;
		}
	if(isset($_POST['danca']))
		{
		$danca = 1;
		}
	else
		{
		$danca = 0;
		}
	if(isset($_POST['literatura']))
		{
		$literatura = 1;
		}
	else
		{
		$literatura = 0;
		}
	if(isset($_POST['musicaPopular']))
		{
		$musicaPopular = 1;
		}
	else
		{
		$musicaPopular = 0;
		}
	if(isset($_POST['musicaErudita']))
		{
		$musicaErudita = 1;
		}
	else
		{
		$musicaErudita = 0;
		}
	if(isset($_POST['teatroAdulto']))
		{
		$teatroAdulto = 1;
		}
	else
		{
		$teatroAdulto = 0;
		}
	if(isset($_POST['teatroInfantil']))
		{
		$teatroInfantil = 1;
		}
	else
		{
		$teatroInfantil = 0;
		}
	if(isset($_POST['oficinas']))
		{
		$oficinas = 1;
		}
	else
		{
		$oficinas = 0;
		}
	if(isset($_POST['palestras']))
		{
		$palestras = 1;
		}
	else
		{
		$palestras = 0;
		}
	if(isset($_POST['acessibilidade']))
		{
		$acessibilidade = 1;
		}
	else
		{
		$acessibilidade = 0;
		}
	if(isset($_POST['infantoJuvenil']))
		{
		$infantoJuvenil = 1;
		}
	else
		{
		$infantoJuvenil = 0;
		}
	if(isset($_POST['culturaDigital']))
		{
		$culturalDigital = 1;
		}
	else
		{
		$culturaDigital = 0;
		}
	if(isset($_POST['acervo']))
		{
		$acervo = 1;
		}
	else
		{
		$acervo = 0;
		}
	if(isset($_POST['edital']))
		{
		$edital = 1;
		}
	else
		{
		$edital = 0;
		}
		
	if(isset($_POST['hq']))
		{
		$hq = 1;
		}
	else
		{
		$hq = 0;
		}
	if ($existe['numero']== 0)
		{ // verifica se existe, caso não, insere.
			
			$sql_inserir = "INSERT INTO  `imp_jornalistas` ( `idJornalista` ,	`nome` ,`idVeiculo` ,`empresa` ,`telefoneContato` ,	`celular` ,	`preferencia` ,`email` ,`twitter` ,`instagram` ,	`facebook` ,`publicado` ,`idUsuario` ,`datetime` ,`funcao`,	`artesVisuais` ,`cinema` ,	`danca` ,	`literatura` ,	`musicaPopular` ,	`musicaErudita` ,`teatroAdulto` , `teatroInfantil` ,`oficinas` ,`palestras` ,`acessibilidade` ,	`infantoJuvenil` ,	`culturaDigital` ,	`acervo` ,	`edital` ,	`hq`)
			VALUES ( NULL , '$nome',  '$idVeiculo',  '$empresa',  '$telefoneContato',  '$celular',  '$preferencia',  '$email',  '$twitter',  '$instagram',  '$facebook',  '$publicado',  '$idUsuario',  '$datetime',  '$funcao', '$artesVisuais', '$cinema', '$danca', '$literatura', '$musicaPopular', '$musicaErudita', '$teatroAdulto', '$teatroInfantil', '$oficinas', '$palestras', '$acessibilidade', '$infantoJuvenil', '$culturaDigital', '$acervo', '$edital', '$hq');
			";
	
	if(mysql_query($sql_inserir))  //verifica se a query funcionou, caso sim, imprime a mensage.
		{ 
			$mensagem =  "Inserido com Sucesso! <a href='?perfil=imprensa&p=inserir'>Cadastrar outro.</a><br />";	
			//	 gravarLog($query);
			
		}
	else // caso não, imprime a mensagem.
		{ 
			$mensagem = "Erro ao inserir. Tente novamente.";		
		}	
		}
	else
		{
			$mensagem = "Champs, o cara existe. Edite ou insira outro.";
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
					<h4> <?php if (isset($mensagem)){echo $mensagem;} ?> </h4>					
					<meta charset="utf-8" />
                    <h1></h1>
                </div>
            </div>
		</div>
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
    	<label>Nome</label>
     		<input type="text" name="nome" class="form-control" id="nome" value=" <?php echo $campo['nome'] ?>" />
    </div> 
</div>
	
<div class="form-group">
    <div class="col-md-offset-1 col-md-10">
       	<div class="col-md-offset-2 col-md-8">
             <label>Veículos</label>
            	<select class="form-control" name="idVeiculo" id="inputSubject">
					<option value="1"></option>
						<?php echo geraVeiculos("cen_veiculos",$campo['idVeiculo'],""); ?>
				</select>
        </div>
	</div>
</div>	

<div class="col-md-offset-1 col-md-10">
	<div class="col-md-offset-2 col-md-8">
    	<label>Empresa/Instituição</label>
       		<input type="text" name="empresa" class="form-control" id="empresa" value="<?php echo $campo['empresa'] ?>" />
    </div> 
</div>
				
<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
   		<label>Telefone Comercial</label>
       		<input type="text" name="telefoneContato" class="form-control" id="telefoneContato" value="<?php echo $campo['telefoneContato'] ?>" />
   	</div> 

<div class="col-md-6">
	<label>Telefone Celular</label>
   		<input type="text" name="celular" class="form-control" id="celular" value="<?php echo $campo['celular'] ?>" />
</div> 
</div>		
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
   		<label> Email</label>
       		<input type="text" name="email" class="form-control" id="email" value="<?php echo $campo['email'] ?>" />
   	</div> 
</div>
		
<div class="col-md-offset-1 col-md-10">
   	<div class="col-md-offset-2 col-md-8">
   		<label>Função</label>
       		<input type="text" name="funcao" class="form-control" id="funcao" value="<?php echo $campo['funcao'] ?>" />
   	</div> 
</div>	
<br />

<h1>Redes Sociais</h1>
        <div class="col-md-offset-1 col-md-10">
            <div class="col-md-offset-2 col-md-8">
            	<label>Facebook</label>
					<input type="text" name="facebook" class="form-control" id="facebook" value="<?php echo $campo['facebook'] ?>" />
			</div> 
        </div>
	
<div class="col-md-offset-1 col-md-10">     		
<div class="col-md-offset-2 col-md-8">
    <label>Twitter</label>
		<input type="text" name="twitter" class="form-control" id="twitter" value="<?php echo $campo['twitter'] ?>" />
</div> 
</div>
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
        <label>Instagram</label>
        	<input type="text" name="instagram" class="form-control" id="instagram" value="<?php echo $campo['instagram'] ?>" />
   	</div> 
</div>
		
<div class="col-md-offset-1 col-md-10">
    <div class="col-md-offset-2 col-md-8">
    	<label>Preferências</label>
       		<textarea name="preferencia" class="form-control" rows="10" placeholder=""><?php echo $campo["preferencia"] ?></textarea>
				<h3>Áreas de Interesse</h3>
	</div> 
</div>
						
<div class="form-group">
    <div class="col-md-offset-2 col-md-8">
		<input type="checkbox" name="cinema" id="imp_jornalistas.cinema" /><label style="padding:0 10px 0 5px;"> Cinema</label>
        <input type="checkbox" name="" id="imp_jornalistas.danca" /><label  style="padding:0 10px 0 5px;"> Dança</label>
        <input type="checkbox" name="literatura" id="imp_jornalistas.literatura" /><label style="padding:0 10px 0 5px;">Literatura</label>
        <input type="checkbox" name="musicaErudita" id="imp_jornalistas.musicaErudita" /><label style="padding:0 10px 0 5px;">Música Erudita</label>
        <input type="checkbox" name="musicaPopular" id="imp_jornalistas.musicaPopular" /><label  style="padding:0 10px 0 5px;">Música Popular</label>
        <input type="checkbox" name="teatroAdulto" id="imp_jornalistas.teatroAdulto" /><label style="padding:0 10px 0 5px;">Teatro Adulto</label>
        <input type="checkbox" name="teatroInfantil" id="imp_jornalistas.teatroInfantil" /><label  style="padding:0 10px 0 5px;">Teatro Infantil</label> <br />
		<input type="checkbox" name="oficinas" id="imp_jornalistas.oficinas" /><label  style="padding:0 10px 0 5px;">Oficinas</label>
        <input type="checkbox" name="palestras" id="imp_jornalistas.palestras" /><label  style="padding:0 10px 0 5px;">Palestras e debates</label>
        <input type="checkbox" name="acessibilidade" id="imp_jornalistas.acessibilidade" /><label  style="padding:0 10px 0 5px;">Acessibilidade</label>
        <input type="checkbox" name="culturaDigital" id="imp_jornalistas.culturaDigital" /><label  style="padding:0 10px 0 5px;">Cultura Digital</label>
		<input type="checkbox" name="acervo" id="imp_jornalistas.acervo" /><label  style="padding:0 10px 0 5px;">Acervo/Coleções</label>    		    
		<input type="checkbox" name="infantoJuvenil" id="imp_jornalistas.infantoJuvenil" /><label  style="padding:0 10px 0 5px;">Infantojuvenil</label> <br />
		<input type="checkbox" name="artesVisuais" id="imp_jornalistas.artesVisuais" /><label  style="padding:0 10px 0 5px;"> Artes Visuais</label>
   	    <input type="checkbox" name="edital" id="imp_jornalistas.edital" /><label  style="padding:0 10px 0 5px;">Editais</label>
		<input type="checkbox" name="hq" id="imp_jornalistas.hq"/><label  style="padding:0 10px 0 5px;">Histórias em Quadrinhos</label>
   	</div>                     
</div>
				    

	
<div class="col-md-offset-2 col-md-8">
	<?php if($editar != 0){ ?>
		<input type="hidden" name="editar" value="<?php echo $campo['idJornalista']; ?>" />
		<input type="submit" class="btn btn-theme btn-lg btn-block" value="ATUALIZAR"  />
		<?php }else{ ?>
		<input type="submit" class="btn btn-theme btn-lg btn-block" value="CADASTRAR"  />
		<input type="hidden" name="cadastrar" value="1"  />

	<?php } ?>

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

<?php
	if(isset($_GET['lim'])){
		$limite = $_GET['lim'];
	}else{
		$limite = 20;
	}
		$sql_ultimos = "SELECT * FROM imp_jornalistas WHERE imp_jornalistas.publicado = '1' ORDER BY imp_jornalistas.idJornalista DESC LIMIT $limite";
		$query_ultimos = mysql_query($sql_ultimos);
	while($imp_jornalistas = mysql_fetch_array($query_ultimos)){

?>
	<p> <a href="?perfil=imprensa&p=exibir&id=<? echo $imp_jornalistas['idJornalista'] ?>" /> <? echo $imp_jornalistas['nome'] ?>, <? echo $imp_jornalistas['empresa'] ?>, twitter: <? echo $imp_jornalistas['twitter'] ?> </a> </p>


<?php
	}
?>
	
</div>
		</form>
</section>

<?php
break;
case "filtro":
$filtro = $_POST['filtro'];
$sql_filtro = "SELECT * FROM imp_jornalistas WHERE (nome LIKE '%$filtro%' OR empresa LIKE '%$filtro%' OR funcao LIKE '%$filtro%') AND publicado = '1' ORDER BY idJornalista";
$query_filtro = mysql_query($sql_filtro);
$num_retorno = mysql_num_rows($query_filtro);
$lista =  mysql_num_rows($query_filtro);
?>

<section id="filtro" class="home-section bg-white">
		<div class="form-group">       
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
					<h1>A sua pesquisa gerou <?php echo $num_retorno; ?> resultados</h1>
					<div class="col-md-offset-2 col-md-8">					
                    </div>
					<label><h3><a href="?perfil=imprensa&p=filtro">Nova Pesquisa</a></h3></label>
                </div>
            </div>
		</div>
		<div class="row"> 
			<div class="col-md-offset-1 col-md-10">
				<div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<?php 
						
							while($imp_jornalistas = mysql_fetch_array($query_filtro))
					{
					    ?>
					
							<p> <a href="?perfil=imprensa&p=exibir&id=<?php echo $imp_jornalistas['idJornalista'] ?>"> <?php echo $imp_jornalistas['nome']?>, <?php echo $imp_jornalistas['empresa'] ?> </a></p>
					<?php 
					}
					
					?>	  
											
					</div> 
				</div>
			</div>
		</div>
</section>

<?php 
if(isset($_POST['filtro'])) // aplicações do filtro
{	
	if(isset($_POST['artesVisuais']))
	{
		$artesVisuais = "OR artesVisuais = '1'";
	}
	else
	{
		$artesVisuais = "";
	}
	if(isset($_POST['cinema']))
	{
		$cinema = "OR cinema = '1'";
	}
	else
	{
		$cinema = "";
	}
	if(isset($_POST['danca']))
	{
		$danca = "OR danca = '1'";
	}
	else
	{
		$danca = "";
	}
	if(isset($_POST['literatura']))
	{
		$literatura = "OR literatura = '1'";
	}
	else
	{
		$literatura = "";
	}
	if(isset($_POST['musicaPopular']))
	{
			$musicaPopular = "OR musicaPopular = '1'";
	}
	else
	{
		$musicaPopular = "";
	}
	if(isset($_POST['musicaErudita']))
	{
		$musicaErudita = "OR musicaErudita = '1'";
	}
	else
	{
		$musicaErudita = "";
	}
	
	if(isset($_POST['teatroInfantil']))
	{
		$teatroInfantil = "OR teatroInfantil = '1'";
	}
	else
	{
		$teatroInfantil = "";
	}
	if(isset($_POST['oficinas']))
	{
		$oficinas = "OR oficinas = '1'";
	}
	else
	{
		$oficinas = "";
	}
	if(isset($_POST['palestras']))
	{
		$palestras = "OR palestras = '1'";
	}
	else
	{
		$palestras = "";
	}
	if(isset($_POST['acessibilidade']))
	{
		$acessibilidade = "OR acessibilidade = '1'";
	}
	else
	{
		$acessibilidade = "";
	}
	if(isset($_POST['infantoJuvenil']))
	{
		$infantoJuvenil = "OR infantoJuvenil = '1'";
	}
	else
	{
		$infantoJuvenil = "";
	}
	if(isset($_POST['culturaDigital']))
	{
		$culturaDigital = "OR culturaDigital = '1'";
	}
	else
	{
		$culturaDigital = "";
	}
	if(isset($_POST['acervo']))
	{
		$acervo = "OR acervo = '1'";
	}
	else
	{
		$acervo = "";
	}
	if(isset($_POST['edital']))
	{
		$edital = "OR edital = '1'";
	}
	else
	{
		$edital = "";
	}
	if(isset($_POST['hq']))
	{
		$hq = "OR hq = '1'";
	}
	else
	{
		$hq = "";
	}
	if(isset($_POST['teatroAdulto']))
	{
		$teatroAdulto = "OR teatroAdulto = '1'";
	}
	else
	{
		$teatroAdulto = "";
	}
}
		
			$filtro_tempAreas = $artesVisuais.$cinema.$danca.$literatura.$musicaPopular.$musicaErudita.$teatroAdulto.$teatroInfantil.$oficinas.$palestras.$acessibilidade.$infantoJuvenil.$culturaDigital.$acervo.$edital.$hq;
			//echo "O tamanho da string é: ".strlen($filtro_tempAreas)."<br />";

	if(strlen($filtro_tempAreas) == 0)
	{
		$filtro_areas = "";
	}
	else
	{
		$filtro_areas = "AND (".substr($filtro_tempAreas,2).")";
	}
	
			
								$veiculo = $_POST['idVeiculo']; //filtro por veículo ok  
		
	if($veiculo == 8)  /*o que é esse 8 */
	{
		$filtro_veiculos = "";
	}
	else
	{
		$filtro_veiculos = "AND idVeiculo = '$veiculo'";
	}

		// recebe o radio das redes sociais	
	if(isset($_POST['twitter']))
	{
		$twitter = "OR twitter != ''";
	}
	else
	{
		$twitter = "";
	}
		
	if(isset($_POST['facebook']))
	{
		$facebook = "OR facebook != ''";
	}
	else
	{
		$facebook = "";
	}
		
	if(isset($_POST['instagram']))
	{
		$instagram = "OR instagram != ''";
	}
	else
	{
		$instagram = "";
	}		

	if(isset($_POST['semredes']))
	{
		$semredes = 1;
	}
	else
	{
		$semredes = 0;
	}		

	if($semredes == 1)
	{
		$filtro_redes = "AND (imp_jornalistas.twitter = '' AND imp_jornalistas.facebook = '' AND imp_jornalistas.instagram = '')";
	}
	else
	{		
		$filtro_temp = $twitter.$facebook.$instagram;

	if(strlen($filtro_temp) == 0)
	{
		$filtro_redes = "";
	}
	else
	{
		$filtro_redes = "AND (".substr($filtro_temp,3).")";
	}
	}
		
		
		$sql_filtro = "SELECT * FROM imp_jornalistas.idJornalista = idJornalista AND imp_jornalistas.publicado = 1 $filtro_areas $filtro_veiculos $filtro_redes"; ////// olhar aqui
		echo $sql_filtro;
		$query_filtro = mysql_query($sql_filtro);
		// echo "<br />Resultados: ".$num_filtro; VARIÁVEL NÃO DECLARADA
		?>
	<tr>
	<th width="40%">Nome</th>
	<th width="30%">Veículo</th>
	<th width="30%">E-mail</th>
	</tr>

<? /*aqui tem coisa errada 

<?php
	while($lista = mysql_fetch_array($query_filtro)){
?>
	<tr>
		<td><? echo $lista['nome'] ?></td>
		<td><? echo veiculo($lista['idVeiculo']) ?></td>
		<td><? echo $lista['email'] ?></td>
	</tr>
<?php } ?> */
?>

</table>

<br />
<br />

<?php 
break;
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
					<h1>A sua pesquisa gerou <?php echo $num_retorno; ?> resultados</h1>
					<div class="col-md-offset-2 col-md-8">					
                    </div>
					<label><h3><a href="?perfil=imprensa&p=pesquisar">Nova Pesquisa</a></h3></label>
                </div>
            </div>
		</div>
		<div class="row"> 
			<div class="col-md-offset-1 col-md-10">
				<div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<?php 
						
							while($imp_jornalistas = mysql_fetch_array($query_pesquisa))
					{
					    ?>
					
							<p> <a href="?perfil=imprensa&p=exibir&id=<?php echo $imp_jornalistas['idJornalista'] ?>"> <?php echo $imp_jornalistas['nome']?>, <?php echo $imp_jornalistas['empresa'] ?> </a></p>
					<?php 
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
					<h1>O nome do(a) jornalista é: <?php echo $recJor['nome'] ?></h1>
					<h3>Ele(a) trabalha em: <?php echo retornaVeiculo($recJor['idVeiculo']); ?></h3>
					<h3>Ele(a) é: <?php echo $recJor['funcao']; ?></h3>
					<h3><a href="?perfil=imprensa&p=inserir&recupera=<?php echo $idJor; ?>">Editar</h3></a>
					
				</div>
			
				
				
				
				
								
            </div>
		</div>
		
</section>
<?php
break;

?>


<?php } // fecha switch ?>



   