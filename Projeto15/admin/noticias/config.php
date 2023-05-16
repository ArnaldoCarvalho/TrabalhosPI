<?php
$arrDados = array(

    'tabela' => 'noticias',
    'legenda_modulo' => 'Notícias',
    'modulo' => 'noticias',
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
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
                'maxlength' => 100
            ),
            'texto' => array (
                'legenda' => 'Texto',
                'tipo' => 'textarea',
                'maxlength' => 100,
                'notlist' => 1
            ),
            'imgurl' => array (
                'legenda' => 'Imagem Url',
                'tipo' => 'file',
            ),
            'ativo' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'defeito' => 1,
                'opcoes' => array(
                    '0' => 'Inativo',
                    '1' => 'Ativo'
                 ),
            )
    )
);