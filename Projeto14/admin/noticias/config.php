<?php
$arrDados = array(

    'tabela' => 'noticias',
    'legenda_modulo' => 'Notícias',

    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'chave' => 1
            ),
            'titulo' => array (
                'legenda' => 'Título',
                'tipo' => 'textbox'
            ),
            'resumo' => array (
                'legenda' => 'Resumo',
                'tipo' => 'textbox'
            ),
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textarea',
                'notlist' => 1
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'defeito' => 1
            )
    )
);