<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 500px">
        <canvas id="teste"></canvas>
    </div>
    

    <script src="graficos/node_modules/chart.js/dist/Chart.js"></script>    
    <script>
        window.onload = function(){
            var ctx = document.querySelector("#teste").getContext("2d");
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', "Fev", "Marc", "Mai"],
                    datasets: [{
                        label: 'Vendas',
                        backgroundColor: '#ff0000',
                        borderColor: '#ff0000',
                        data: [
                            3, 8, 5, 9
                        ],
                        fill: false
                    }, {
                        label: 'Cursos',
                        backgroundColor: '#ffff00',
                        borderColor: '#ffff00',
                        data: [
                            5, 6, 8, 4
                        ],
                        fill: false
                    },
                    {
                        label: 'Perdas',
                        backgroundColor: '#ff00ff',
                        borderColor: '#ff00ff',
                        data: [
                            11, 4, 8, 16
                        ],
                        fill: false
                    }],
                }
            });
        }
        
    </script>
</body>
</html>