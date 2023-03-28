<?php
$arrDados = array(

    'tabela' => 'menubackoffice',
    'legenda_modulo' => 'Menu Backoffice',
    'modulo' => 'menubackoffice',
    
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
            'style' => array (
                'legenda' => 'Style Css',
                'tipo' => 'textbox',
                'maxlength' => 100
            ),
            'pai' => array (
                'legenda' => 'Pai',
                'tipo' => 'textbox',
                'maxlength' => 1,
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