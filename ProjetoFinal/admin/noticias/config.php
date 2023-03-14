<?php
$arrDados = array(
    'modulo' => 'noticias',
    'legenda_modulo' => 'Notícias',
    'tabela' => 'noticias',
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'chave' => 1,
                'inserir' => 0,
                'editar' => 0
            ),
            'titulo' => array (
                'legenda' => 'Título',
                'tipo' => 'textbox',
                'maxlength' => 30
            ),
            'resumo' => array (
                'legenda' => 'Resumo',
                'tipo' => 'textbox',
                'maxlength' => 50
            ),
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textarea',
                'notlist' => 1,
                'maxlength' => 100
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'defeito' => 1
            )
    )
);