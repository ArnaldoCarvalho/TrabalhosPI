<?php
$arrDados = array(

    'tabela' => 'about',
    'legenda_modulo' => 'Página About',
    'modulo' => 'about',
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'maxlength' => 5,
                'chave' => 1,
                'inserir' => 0
            ),
            'pai' => array (
                'legenda' => 'Pai',
                'tipo' => 'textbox',
                'maxlength' => 50
            ),
            'name' => array (
                'legenda' => 'name',
                'tipo' => 'textbox',
                'maxlength' => 50
            ),
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textarea',
                'maxlength' => 100,
                'notlist' => 1
            ),
            'img' => array (
                'legenda' => 'Imagem Url',
                'tipo' => 'textbox',
                'maxlength' => 100
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'maxlength' => 1,
                'defeito' => 1
            )
    )
);