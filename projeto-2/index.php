<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riza Dog |Mostruário</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="envio-overlay">
        <form action="POST">
            <input name="nome" type="text">
            <select name="especie" id="">
                <option value="cachorro">Cachorro</option>
                <option value="gato">Gato</option>
                <option value="passaro">Pássaro</option>
                <option value="reptil">Reptil</option>
            </select>
            <input name="raca" type="text">
            
        </form>
    </div>
    <div class="container">
        <h1>Veja os lindos PETS</h1>
        <div class="container-most">
            <div class="most-item">
                <img class="item-foto" src="img/aldofo.jpg">
                <h2 class="item-nome">Aldolfo</h2>
                <h3 class="item-raça">Pinscher</h3>
            </div>
            <div class="most-item a">
                <img class="item-foto" src="img/aurora.jpg">
                <h2 class="item-nome">Aurora</h2>
                <h3 class="item-raça">Puddle</h3>
            </div>
        </div>
    </div>
</body>

</html>