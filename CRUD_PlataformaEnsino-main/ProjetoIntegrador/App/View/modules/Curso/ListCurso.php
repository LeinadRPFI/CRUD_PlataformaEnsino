<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listagem de Cursos </title>
</head>
<body>
    
    <table>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Descrição </th>
            <th> Ovjetivos </th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->nome ?></td>
            <td><?= $item->descricao ?></td>
            <td><?= $item->objetivos ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>