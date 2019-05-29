<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Diploma Y.V.V.</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" >
        <link href="css/style.css" rel="stylesheet" >

    </head>
    <body class="text-center">
        <header>
            <h2>Monitoring system</h2>
        </header>
        <main class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="update-container">
                            Дата останнього оновлення даних: <strong> <?=$lastUpdate ? $lastUpdate : '-'?></strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="chart-container">
                            <h3>Температура</h3>
                            <div class="last-value">
                                Останній показник: <strong><?=$indicators[count($indicators)-1]['temperature']?>°C</strong>
                            </div>
                            <div class="chart">
                                <canvas id="temp"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-container">
                            <h3>Вологість</h3>
                            <div class="last-value">
                                Останній показник: <strong><?=$indicators[count($indicators)-1]['humidity']?>%</strong> 

                            </div>

                            <div class="chart">
                                <canvas id="humidity"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-container">

                            <h3>Освітленість</h3>
                            <div class="last-value">
                                Останній показник: <strong><?=$indicators[count($indicators)-1]['light']?>Люкс</strong> 
                            </div>

                            <div class="chart">
                                <canvas id="ligth"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer>
            Dashboard was created as diploma works by <a href="https://www.instagram.com/vadyakovenko/">Vadym Yakovenko</a> 
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
        <script src="js/main.js"></script>
        <script>
            var data = {
                lables: [
                    <?php foreach($indicators as $indicator):?>
                        '<?=$indicator['created_at']?>',
                    <?php endforeach?>
                ],

                temperature: [
                    <?php foreach($indicators as $indicator):?>
                        '<?=$indicator['temperature']?>',
                    <?php endforeach?>
                ],
                humidity: [
                    <?php foreach($indicators as $indicator):?>
                        '<?=$indicator['humidity']?>',
                    <?php endforeach?>
                ],

                light: [
                    <?php foreach($indicators as $indicator):?>
                        '<?=$indicator['light']?>',
                    <?php endforeach?>
                ],
            };

            runCharts(data);

        </script>
    </body>
</html>
