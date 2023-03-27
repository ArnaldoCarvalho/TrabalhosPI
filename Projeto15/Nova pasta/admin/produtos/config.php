<?php
$arrDados = array(
    'modulo' => 'produtos',
    'legenda_modulo' => 'Produtos',
    'tabela' => 'produtos',
    'campos' => array(
            'id' => array (
                'legenda' => 'ID',
                'tipo' => 'textbox',
                'chave' => 1,
                'inserir' => 0,
                'editar' => 0
            ),
            'designacao' => array (
                'legenda' => 'Nome do produto',
                'tipo' => 'textbox'
            ),
            'preco' => array (
                'legenda' => 'Texto',
                'tipo' => 'textbox'
            ),
            'estado' => array (
                'legenda' => 'Ativo',
                'tipo' => 'checkbox',
                'defeito' => 1
            )
    )
);