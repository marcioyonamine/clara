<?php
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
				<li><a href="">Início</a> </li>
				<li><a href="">Perfil de Acesso</a></li>
				<li><a href="">Opções</a></li>
				<li><a href="">Pesquisar</a></li>
				<li><a href="">Inserir</a></li>
				<li><a href="">Gerar Lista</a></li>
                         
                                      
                                             
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
	            <a href="?perfil=distribuicao&p=inserirlocal" class="btn btn-theme btn-lg btn-block">INSERIR LOCAL</a>
	            <a href="?perfil=distribuicao&p=listarlocal" class="btn btn-theme btn-lg btn-block">LISTAR LOCAIS</a>
  	            <a href="?perfil=distribuicao&p=inserirrota" class="btn btn-theme btn-lg btn-block">INSERIR ROTA</a>
  	            <a href="?perfil=distribuicao&p=listarrota" class="btn btn-theme btn-lg btn-block">LISTAR ROTAS</a>
  	            <a href="?perfil=distribuicao&p=pesquisar" class="btn btn-theme btn-lg btn-block">PESQUISAR</a>
            </div>
          </div>
        </div>
    </div>
</section>

<?php 
break;
case "inserirlocal":
?>

<section id="inserir" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
                    <h3>Inserir local</h3>
                </div>
            </div>
    </div>
    
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
        <form method="POST" action="?perfil=evento&p=basica" class="form-horizontal" role="form">
       		 <div class="form-group">
            	<div class="col-md-offset-2 col-md-8">
            		<label>Nome do local</label>
            		<input type="text" name="nomeLocal" class="form-control" id="inputSubject" value="<?php echo $campo['nomeEvento'] ?>"/>
            	</div> 
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                	<label>Coordenadas</label>
                 </div>
            </div>
               <div class="form-group">
                	<div class="col-md-offset-2 col-md-6">
               			 <label>Latitude</label>
                		<input type="text" name="latitude" class="form-control" id="" placeholder="">
               		 </div>
                	<div class=" col-md-6">
                		<label>Longitude</label>
                		<input type="text" name="longitude" class="form-control" id=""  placeholder="">
               		</div>
                </div>

            <div class="form-group">
            	<div class="col-md-offset-2 col-md-8">
            		<label>Endereço / Local</label>
            		<textarea name="enderecoLocal" class="form-control" id=""  value=""></textarea>
            	</div>
             </div>
                         <div class="form-group">
                             	<div class="col-md-offset-2 col-md-6">
               			 <label>CEP</label>
                		<input type="text" name="latitude" class="form-control" id="" placeholder="">          
               		 </div>
                     <?php 
			 function optionLogistica(){
			 	$sql = "SELECT * FROM dist_logistica";
				$query = mysql_query($sql);
				while($log = mysql_fetch_array($query)){
				echo "<option value='".$log['idLogistica']."'>".$log['logistica']."</option>";	
				
				}
			 } 
			 ?>
                	<div class=" col-md-6">
                		    	        <label>Logística</label>
					<select class="form-control" name="tipoLocal" id="inputSubject" >
					<option value="1"></option>	
                    <?php optionLogistica(); ?>
					
                    </select>	
               		</div>
			</div>
             
            <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
    	        <label>Responsável</label>
                		<input type="text" name="latitude" class="form-control" id="" placeholder="">               
            	</div>
            </div>
        
            <div class="form-group">
	            <div class="col-md-offset-2 col-md-8">
    		        <label>Telefone</label>
						<input type="text" name="latitude" class="form-control" id="" placeholder="">               
        		  </div>
            </div>
                        <div class="form-group">
	            <div class="col-md-offset-2 col-md-8">
    		         <label>Email</label>
						<input type="text" name="latitude" class="form-control" id="" placeholder="">          
        		  </div>
            </div>

            <div class="form-group">
	            <div class="col-md-offset-2 col-md-8">
                	<input type="hidden" name="atualizar" value="1" />
    		        <input type="submit" class="btn btn-theme btn-lg btn-block" value="Gravar">
            	</div>
            </div>
            </form>
        </div>
    </div>
</section>  
	


<?php
break;
case "inserirrota":
?>
<section id="inserir" class="home-section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
                    <h3>Evento - Apresentação Básica</h3>
                    <h1><?php echo $campo["nomeEvento"] ?></h1>
                    <h4><?php if(isset($mensagem)){echo $mensagem;} ?></h4>
                </div>
            </div>
    </div>
    
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
        <form method="POST" action="?perfil=evento&p=basica" class="form-horizontal" role="form">
       		 <div class="form-group">
            	<div class="col-md-offset-2 col-md-8">
            		<label>Nome do Evento *</label>
            		<input type="text" name="nomeEvento" class="form-control" id="inputSubject" value="<?php echo $campo['nomeEvento'] ?>"/>
            	</div> 
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                	<label>Tipo de relação jurídica</label>
                	<select class="form-control" name="ig_modalidade_IdModalidade" id="inputSubject" >
                    <option value="1"></option>
					<?php echo geraOpcao("ig_modalidade",$campo['ig_modalidade_IdModalidade'],"") ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
            	<label>Nome do Projeto especial</label>
            	<select class="form-control" name="projetoEspecial" id="inputSubject" >
					<option value="1"></option>
					<?php echo geraOpcao("ig_projeto_especial",$campo['projetoEspecial'],$_SESSION['idInstituicao']) ?>
                </select>
        	    </div>
      	    </div>

            <div class="form-group">
            	<div class="col-md-offset-2 col-md-8">
            		<label>Nome do Projeto </label>
            		<input type="text" name="projeto" class="form-control" id=""  value="<? echo $campo['projeto'] ?>">
            	</div>
             </div>
            <div class="form-group">
            	<div class="col-md-offset-2 col-md-8">
            		<label>Tipo de Evento *</label>
            		<select class="form-control" name="ig_tipo_evento_idTipoEvento" id="inputSubject" >
						<option value="1"></option>
						<?php echo geraOpcao("ig_tipo_evento",$campo['ig_tipo_evento_idTipoEvento'],"") ?>
                    </select>					
            	</div>
            </div>
            <div class="form-group">
            <br />
       <p>O responsável e suplente devem estar cadastrado como usuários do sistema.</p>
	            <div class="col-md-offset-2 col-md-8">
    	        <label>Primeiro responsável</label>
					<select class="form-control" name="nomeResponsavel" id="inputSubject" >
					<option value="1"></option>	
					<?php echo opcaoUsuario($_SESSION['idInstituicao'],$campo['idResponsavel']) ?>
                    </select>	                
            	</div>
            </div>
        
            <div class="form-group">
	            <div class="col-md-offset-2 col-md-8">
    		        <label>Segundo responsável (Fiscal)</label>
						<select class="form-control" name="suplente" id="inputSubject" >
                        <option value="1"></option>
						<?php echo opcaoUsuario($_SESSION['idInstituicao'],$campo['suplente']) ?>
                        </select>	
        		  </div>
            </div>
                        <div class="form-group">
	            <div class="col-md-offset-2 col-md-8">
    		          <input type="checkbox" name="subEvento" id="subEvento" <?php checar($campo['subEvento']) ?>/><label style="padding:0 10px 0 5px;"> Haverá um evento complementar (sub-evento)?</label>
        		  </div>
            </div>

            <div class="form-group">
	            <div class="col-md-offset-2 col-md-8">
                	<input type="hidden" name="atualizar" value="1" />
    		        <input type="submit" class="btn btn-theme btn-lg btn-block" value="Gravar">
            	</div>
            </div>
            </form>
        </div>
    </div>
</section>  
		


<?php 
break;
case "listarrorta":
?>

<section id="pesquisar" class="home-section bg-white">
	<div class="container">
	    <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
                    <h3>Listar rotas</h3>
                </div>
            </div>
        </div>
	</div>	
</section>			


<?php
break;
case "pesquisar":
?>
<section id="pesquisar" class="home-section bg-white">
	<div class="container">
	    <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="text-hide">
                    <h3>Pesquisar</h3>
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

?>


<?php } // fecha switch ?>



   