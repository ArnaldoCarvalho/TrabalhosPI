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
            ),
            'nome' => array (
                'legenda' => 'Nome',
                'tipo' => 'textbox',
            ),
            'url' => array (
                'legenda' => 'Url',
                'tipo' => 'textbox',
            ),
            'style' => array (
                'legenda' => 'Style Css',
                'tipo' => 'textbox',
            ),
            'pai' => array (
                'legenda' => 'Pai',
                'tipo' => 'textbox',
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