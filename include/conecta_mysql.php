<?php
// Conecta-se com o MySQL 
mysql_connect("localhost", "ccsplab", "ccsplab123"); 
// Converte caracteres utf8 para evitar erros no banco
mysql_query("SET NAMES 'utf8';");
// Seleciona banco de dados 
mysql_select_db("clara"); 

?>
