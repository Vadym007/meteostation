<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Mrteostation</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

        <link href="css/bootstrap.css" rel="stylesheet" >
        <link href="css/style.css" rel="stylesheet" >

    </head>
    <body class="text-center">
        <header>
            <h2>Meteostation</h2>
        </header>
        <hr>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>Останні показники</h3>

                        <ul>
                            <li>Дата: <?=date('H:i, d-m-Y')?> </li>
                            <li>Температура: 22 С</li>
                            <li>Вологість: 80%</li>
                            <li>Освітленість: 444</li>
                        </ul>

                    </div>
                    <div class="col-md-7">
                        <h3>Статистика</h3>
                        <div class="row">
                            <canvas id="temp"></canvas>
                        </div>
                        <hr>
                        <div class="row">
                            <canvas id="humidity"></canvas>
                        </div>  
                        hr
                        <div class="row">
                            <canvas id="ligth"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <hr>
        <footer>
            By <strong>Vadym Yakovenko</strong>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
