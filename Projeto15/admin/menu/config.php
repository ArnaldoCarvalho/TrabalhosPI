<?php
$arrDados = array(

    'tabela' => 'menu',
    'legenda_modulo' => 'Menu',
    'modulo' => 'menu',
    
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
            'url' => array (
                'legenda' => 'Url',
                'tipo' => 'textbox',
                'maxlength' => 100
            ),
            'pai' => array (
                'legenda' => 'Pai',
                'tipo' => 'textbox',
                'maxlength' => 5,
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