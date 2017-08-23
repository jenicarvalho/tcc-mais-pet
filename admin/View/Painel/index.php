<?php

/**
 *  Project: Mais Pet
 *  Created: 23/08
 *  User: Jeniffer Carvalho
 *  Usage: Tela inicial do sistema logado
 */

if ( isset($_SESSION['usuario']) ) :
	echo "Dentro do sistema";
else :
	echo "Sem acesso";
endif;