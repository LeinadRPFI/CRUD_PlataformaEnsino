<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>

    <style>
        label, input {display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend> Cadastro de Cursos </legend>

        <form method="POST" action="/curso/form/save">

            <label for="nome"> Nome do Curso: </label>
            <input type="text" id="nome" name="nome">

            <label for="descricao"> Descricao: </label>
            <input type="text" id="descricao" name="descricao">

            <label for="objetivos"> Objetivos: </label>
            <input type="text" id="objetivos" name="objetivos">

            <button type="submit"> Criar Curso </button>

        </form>
    </fieldset>
</body>
</html>