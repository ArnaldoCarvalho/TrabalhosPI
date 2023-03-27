<?php
$arrDados = array(

    'tabela' => 'administradores',
    'legenda_modulo' => 'Aministradores',
    'modulo' => 'administradores',
    //'tabela_idiomas' => 'administradores_linguas',
    
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'chave' => 1,
                'inserir' => 0,
                'maxlength' => 5
            ),
            'nome' => array (
                'legenda' => 'Nome',
                'tipo' => 'textbox',
                'maxlength' => 100
            ),
            'email' => array (
                'legenda' => 'Email',
                'tipo' => 'textarea',
                'maxlength' => 100
            ),
            'pass' => array (
                'legenda' => 'Palavra-passe',
                'tipo' => 'password',
                'maxlength' => 0,
                'listagem' => 0,
                'geraHash' => 1
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'maxlength' => 1,
                'opcoes' => array(
                                '0' => 'Inativo',
                                '1' => 'Ativo'
                             ),
                'defeito' => 1
            )
    )


);