<?php
$arrDados = array(

    'tabela' => 'administradores',
    //'tabela_idiomas' => 'administradores_linguas',
    
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'chave' => 1,
                'inserir' => 0
            ),
            'nome' => array (
                'legenda' => 'Nome',
                'tipo' => 'textbox'
            ),
            'username' => array (
                'legenda' => 'username',
                'tipo' => 'textarea'
            ),
            'password' => array (
                'legenda' => 'Palavra-passe',
                'tipo' => 'password',
                'listagem' => 0,
                'geraHash' => 1
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'opcoes' => array(
                                '0' => 'Inativo',
                                '1' => 'Ativo'
                             ),
                'defeito' => 1
            )
    )


);