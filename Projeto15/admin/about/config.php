<?php
$arrDados = array(

    'tabela' => 'about',
    'legenda_modulo' => 'Página About',
    'modulo' => 'about',
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'chave' => 1,
                'inserir' => 0
            ),
            'pai' => array (
                'legenda' => 'Pai',
                'tipo' => 'textbox',
            ),
            'name' => array (
                'legenda' => 'name',
                'tipo' => 'textbox',
            ),
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textarea',
                'maxlength' => 100,
            ),
            'img' => array (
                'legenda' => 'Imagem Url',
                'tipo' => 'textbox',
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'defeito' => 1
            )
    )
);