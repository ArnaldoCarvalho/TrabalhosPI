//Importa tudo o que está dentro de (module.exports={})
const library = require('../../lib/library')
/* 
Com esta constante library conseguimos chamar as variáveis
que estão no documento localizado em: '../library/library.js'
Cada variável contêm fuctions que podem tambem ser chamadas.
*/


// variáveis auxiliares para mostrar
var Nlin = 5
var NCol = 5

//Como chamamos as variáveis e fuction da library? 
//Para chamar a variável ou fuction basta dar 
//apenas library.(Nome da varíavel).(Fuction)(Variáveis)

//------------------------------Matriz----------------------------------------
// Exemplo: library.matriz

const matriz01 = library.matriz.Create(Nlin,NCol)
const matriz02 = library.matriz.Create(Nlin,NCol)
/*
Neste situação eu crio uma variável chamada matriz e a 
seguir dou igual a library.matriz.Create(linhas,colunas)
isto fará que crie uma matriz com N linhas e N Colunas
e retorne a matriz colocando tudo nesta matriz.
Resumindo isto cria uma matriz
*/


matriz01=library.matriz.SetInt(Nlin,NCol,matriz01)
/*
Neste situação eu chamo a minha variável chamada matriz e a 
seguir dou igual a library.matriz.SetInt(linhas,colunas,matriz)
isto fará que a minha matriz seja inicializada ou prenchida toda a 0
e retorne a matriz colocando tudo nesta matriz.
Resumindo isto inicializa a minha matriz prenchendo tudo com 0.
*/


matriz02=library.matriz.SetString(Nlin,NCol,matriz02)
/*
Neste situação eu chamo a minha variável chamada matriz e a 
seguir dou igual a library.matriz.SetString(linhas,colunas,matriz)
isto fará que a minha matriz seja inicializada ou prenchida toda a ""
e retorne a matriz colocando tudo nesta matriz.
Resumindo isto inicializa a minha matriz prenchendo tudo com "".
*/

//------------------------------Tabela------------------------------------------
// Exemplo: library.matriz

// variáveis auxiliares para mostrar
Nlin = 5;
NCol = 5;

library.table.CreateWrite(Nlin,NCol)
/*

*/


const tabela1 = library.table.CreateElement(Nlin,NCol)
document.body.appendChild(tabela1)
/*

*/


const tabela2 = library.table.CreateWithElement(Nlin,NCol,matriz01)
document.body.appendChild(tabela2)
/*

*/


const div = document.createElement('div')
const tabela3 = library.table.CreateWithElement(Nlin,NCol,div)
document.body.appendChild(tabela3)
/*

*/

