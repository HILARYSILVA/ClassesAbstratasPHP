<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>

    <style>
        body {
            background-image: url("https://f.vividscreen.info/soft/ce486862f6eaa3e57dca8d7e1e30526e/The-Simpsons-Family-1920x1200.jpg");
        }
        th {
            font-size: 2em;
            font-family: MS UI Gothic;
        }

        td, a {
            font-size: 1.5em;
            font-family: MS Gothic;
        }

        th, td {
            padding: 10px;
            padding-left: 1em;
            padding-right: 1em;
            color: white;
            border: 1px solid white;
            border-collapse: collapse;
        }
        .tabela {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2em;
        }

        table {
            padding: 20px;
            background-color: purple;
            border: 2px solid white;
            border-collapse: collapse;
        }

        a {
            color: white;
        } 
    </style>
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
