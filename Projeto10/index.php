<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Matrículas</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='js/codigo.js'></script>
    
</head>
<body>

<form class="Form" action="./php/CreateCC.php" method="post" enctype="multipart/form-data">
    <h1>Introduza os dados para Matrícular o aluno</h1>
    
    <label class="name" for="">Nome do aluno: 
        <input class="input" type="text" name="matricula[name]" value="" required>
    </label><br>
    
    <label class="Genero" for="">Género/Sexo: <br>
        Homen: <input type="radio" name="matricula[sexo]" value="H" checked> <br>
        Mulher: <input type="radio" name="matricula[sexo]" value="M"> 
    </label><br>    
    
    <label class="ano" for="">Seleciona o Ano letivo:
        <select name="matricula[AnoLetivo]" id="" required>
            <option value="" selected></option>
            <option value="10">10º</option>
            <option value="11">11º</option>
            <option value="12">12º</option>
        </select><br>
    </label>
      
    <label class="disciplinas" for="">Disciplinas: <br>
        <div class="Col1">
            <div>Português: <input type="checkbox" name="disciplinas[]"></div>
            <div>Linguas Estrangeiras: <input type="checkbox" name="disciplinas[]"></div>
            <div>Filosofia: <input type="checkbox" name="disciplinas[]"></div>
            <div>Educação Física: <input type="checkbox" name="disciplinas[]"><br></div>
        </div>
        <div class="Col2">
            <div>Matemática A:<input type="checkbox" name="disciplinas[]"></div>
            <div>Física e Química A:<input type="checkbox" name="disciplinas[]"></div>
            <div>Moral, Ética e Deontologia:<input type="checkbox" name="disciplinas[]"></div>
            <div>Aplicações Informáticas:<input type="checkbox" name="disciplinas[]"></div>   
        </div>
        <div class="Col3">
            <div>Fundamento e Arquitetura de computadores: <input type="checkbox" name="disciplinas[]"></div>
            <div>Técnicas de Programação:<input type="checkbox" name="disciplinas[]"></div>
            <div>Implementação e Exploração de Bases de Dados<input type="checkbox" name="disciplinas[]"></div>
            <div>Tecnologias e Desenvolvimento Multimédia:<input type="checkbox" name="disciplinas[]"></div>
        </div>
        <div class="Col3">
            <div>Programação Internet:<input type="checkbox" name="disciplinas[]"></div>
            <div>Projeto Tecnológico<input type="checkbox" name="disciplinas[]"></div>
            <div>Formação contexto de trabalho<input type="checkbox" name="disciplinas[]"></div>
        </div>
    </label><br>

    <label class="foto" for="">Foto:
        <input type="file" name="Foto" required>
    </label> <br>

    <input class="submit" type="submit">
</form><br>

</body>
</html>