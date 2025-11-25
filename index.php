<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorila</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contador {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            color: #4CAF50;
            font-size: 22px;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <img src="https://i.imgur.com/jsqm4kO.png" alt="Gorila" id="gorillaImage">

    <div class="contador">
        Visitantes: <span id="contador">...</span>
    </div>

    <script>
        fetch("contador.php")
            .then(response => response.text())
            .then(visitas => {
                document.getElementById("contador").textContent = visitas;
            })
            .catch(err => {
                document.getElementById("contador").textContent = "Erro";
            });
    </script>

</body>
</html>
