<?php
$arrDados = array(

    'tabela' => 'noticias',
    'legenda_modulo' => 'Notícias',
    'modulo' => 'noticias',
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'maxlength' => 5,
                'chave' => 1,
                'inserir' => 0
            ),
            'titulo' => array (
                'legenda' => 'Título',
                'tipo' => 'textbox',
                'maxlength' => 50
            ),
            'resumo' => array (
                'legenda' => 'Resumo',
                'tipo' => 'textbox',
                'maxlength' => 50
            ),
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textarea',
                'maxlength' => 100,
                'notlist' => 1
            ),
            'imgurl' => array (
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