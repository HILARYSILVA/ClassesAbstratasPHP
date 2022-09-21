<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>

</head>
<body>

    <div class="tabela">
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Nome</th>
            <th>Qualidades</th>
            <th>Hobbies</th>
            
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/Personagens/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td>
                <a href="/Personagens/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td>
                <a href="/Personagens/form?id=<?= $item->id ?>"><?= $item->qualidades?></a>
            </td>

        <td><?= $item->qualidades ?></td>
        <td><?= $item->hobby ?></td>

    

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    </div>
    
</body>
</html>
