<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Diploma Y.V.V.</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="/css/bootstrap.css" rel="stylesheet" >
        <link href="/css/style.css" rel="stylesheet" >

    </head>
    <body class="text-center">
        <header>
            <h2>Monitoring system</h2>
        </header>
        <main class="content">
            <div class="container">
                <br>
                <div class="row">
                    <div class="alert alert-light">
                        Перед встановленям допустимих меж показників необхідно приєднатидо система Ваш 
                        профіль Telegram. Для цього натисніть кнопку <b>Приєднати Telegram</b>. 
                    </div>
                </div>
                <div class="row">
                   <a target="_blank" href="https://telegram.me/DiplomaMeteostationBot" class="connect btn btn-lg">Приєднати Telegram</a>
                </div>
                <hr>
                <div class="row">
                    <div class="alert alert-light">
                        Вкажіть допустимі діапазони показників, та натисніть кнопку зберегти. Якщо показник буде виходити
                        за встановлені межі, Вам прийде автоматичне сповіщення на месенджер Telegram. 
                    </div>
                </div>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-4 range-block">
                            <h4>Діапазон температур (°C) </h4>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">Min</label>
                                    <input type="number" class="form-control" id="inputEmail4" >
                                </div>
                                <div class="col-md-2"></div>   
                                <div class="form-group col-md-5">
                                    <label for="inputPassword4">Max</label>
                                    <input type="number" class="form-control" id="inputPassword4" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 range-block">
                            <h4>Діапазон вологості (%) </h4>

                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">Min</label>
                                    <input type="number" class="form-control" id="inputEmail4" >
                                </div>
                                <div class="col-md-2"></div>   
                                <div class="form-group col-md-5">
                                    <label for="inputPassword4">Max</label>
                                    <input type="number" class="form-control" id="inputPassword4" >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 range-block">
                            <h4>Діапазон освітленості (Лк) </h4>

                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputEmail4">Min</label>
                                    <input type="number" class="form-control" id="inputEmail4" >
                                </div>
                                <div class="col-md-2"></div>   
                                <div class="form-group col-md-5">
                                    <label for="inputPassword4">Max</label>
                                    <input type="number" class="form-control" id="inputPassword4" >
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <hr>
                    <div class="row">
                        <button class="btn save btn-primary col-md-12" >Зберегти</button>
                    </div>
                    
                </form>
            </div>

        </main>
        <footer>
            Dashboard was created as diploma works by <a href="https://www.instagram.com/vadyakovenko/">Vadym Yakovenko</a> 
        </footer>
    </body>
</html>
