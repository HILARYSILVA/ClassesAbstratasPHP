<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cadastro de Personagens</title>
    <style>
        label, input { display: block;}

        input, label {
            font-size: 2.5em;
            font-family: MS UI;
        }

        legend {
            font-size: 40px;
        }
    </style>
   
</head>
<body>
    <form action="/Personagens/save" method="post">
        <fieldset>
            <legend>Cadastre seu Personagem</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="qualidades">Qualidades:</label>
            <input id="qualidades" name="qualidades" value="<?= $model->qualidades ?>" type="text" />
            
            <label for="hobby">Hobby:</label>
            <input id="hobby" name="hobby" value="<?= $model->hobby ?>" type="text" />

        

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>