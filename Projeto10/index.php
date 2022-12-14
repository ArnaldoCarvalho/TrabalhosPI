<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrículas</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/codigo.js"></script>
</head>
<body>
    <form class="Form" action="./php/trataform.php" method="post" enctype="multipart/form-data">
        <h1>Introduza os dados para Matrícular o aluno</h1>

        <label class="name" for="">Nome do aluno:
            <input class="input" type="text" name="matricula[name]" value="" required>
        </label><br> <br>

        <div>
            <label class="Genero" for="">Género/Sexo:</label>
            <div>Homen: <input type="radio" name="matricula[sexo]" value="Homen" checked></div>
            <div>Mulher: <input type="radio" name="matricula[sexo]" value="Mulher"> </div>
            <br>
        </div>

        <label class="ano" for="">Seleciona o Ano letivo:
            <select id="ComboAno" name="matricula[ano]"  onchange="Disciplinas()" required>
                <option value="" selected></option>
                <option name="ano" value="10">10º</option>
                <option name="ano" value="11">11º</option>
                <option name="ano" value="12">12º</option>
            </select><br>
        </label>
        
        <label class="foto" for="">Foto:
            <input type="file" name="Foto" required>
        </label> <br> <br> <br>

        <label class="disciplinas" aria-required="true" for="">Disciplinas: <br> <br>
            <div id="disciplinas">
                <div>
                    <div>-> Português:<input type="checkbox" id="PT" name="disciplinas[PT]"></div>
                    <div>-> Filosofia:<input type="checkbox" id="Filo" name="disciplinas[Filo]"></div>
                    <div>-> Matemática A:<input type="checkbox" id="MAT" name="disciplinas[MAT]"></div>
                    <div>-> Educação Física:<input type="checkbox" id="EF" name="disciplinas[EF]"><br></div>
            
                    <div>-> Física e Química A:<input type="checkbox" id="FQ" name="disciplinas[FQ]"></div>
                    <div>-> Linguas Estrangeiras:<input type="checkbox" id="LE" name="disciplinas[LE]"></div>
                    <div>-> Aplicações Informáticas:<input type="checkbox" id="AI" name="disciplinas[AI]"></div>
                    <div>-> Moral, Ética e Deontologia:<input type="checkbox" id="MED" name="disciplinas[MED]"></div>
                    
                    <div>-> Fundamento e Arquitetura de computadores: <input type="checkbox" id="FAC" name="disciplinas[FAC]"></div>
                    <div>-> Projeto Tecnológico:<input type="checkbox" id="ProjectT" name="disciplinas[ProjectT]"></div>
                    <div>-> Programação Internet:<input type="checkbox" id="PI" name="disciplinas[PI]"></div>
                    <div>-> Técnicas de Programação:<input type="checkbox" id="TP" name="disciplinas[TP]"></div>
                    
                    <div>-> Formação contexto de trabalho:<input type="checkbox" id="FCT" name="disciplinas[FCT]"></div>
                    <div>-> Tecnologias e Desenvolvimento Multimédia:<input type="checkbox" id="TDM" name="disciplinas[TDM]"></div>
                    <div>-> Implementação e Exploração de Bases de Dados:<input type="checkbox" id="IEBD" name="disciplinas[IEBD]"></div>
                      
                </div>
            </div> <br>

            <label class="" aria-required="true" for=""> Observações: </label> <br>
            <textarea class="caixa" name="observ" id="" required></textarea>
            <br><br><input class="submit" type="submit">
        </label><br>


    </form><br>

</body>

</html>