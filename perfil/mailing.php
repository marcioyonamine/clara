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
							<li><a href="?secao=perfil">Perfil de acesso</a></li>
							<li><a href="?secao=ajuda">Ajuda</a></li>
                            <li><a href="../include/logoff.php">Sair</a></li>
                                                                                                         
                        </ul>
			</div>
	</div>	
<form action="?perfil=mailing" method="post">
</br>
</br>
</br>

			<h1><p><strong>Mailing CCSP</strong><br /></h1>

				
</form>