<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Opções</title>
        <style>
            /* Estilos para esconder as opções inicialmente */
            #opcoes {
                display: none;
            }
            
            /* Estilo de aparência de link */
            #opener {
                color: blue;
                text-decoration: underline;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <span id="opener">Clique aqui para ver as opções</span>
        <div id="opcoes">
            <div>Opção 1</div>
            <div>Opção 2</div>
            <div>Opção 3</div>
        </div>
    
        <script>
            // Função para mostrar/ocultar as opções ao clicar no link
            document.getElementById("opener").addEventListener("click", function () {
                var opcoes = document.getElementById("opcoes");
                if (opcoes.style.display === "none") {
                    opcoes.style.display = "block";
                } else {
                    opcoes.style.display = "none";
                }
            });
        </script>
    </body>
    </html>
    
</body>
</html>