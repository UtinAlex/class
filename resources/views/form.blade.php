<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container panel panel-default ">
            <h2 class="panel-heading">Форма. {{ $massage }}.</h2>
        <form method="POST" action="/contact-form">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="введите имя" id="name">
            </div>
    
            <div class="form-group">
                <input type="text" name="mobile_number" class="form-control" 
                placeholder="Введите номер мобильного телефона" id="mobile_number">
            </div>

            <div class="form-group">
                <button class="btn btn-success" id="submit">Отправить</button>
            </div>
        </form>
    </div>

    <div class="container panel panel-default ">
        <h2 class="panel-heading">Страницы</h2>
    <form method="GET" action="/get-page">
        @csrf
        <div class="form-group">
            <input type="text" name="page" class="form-control" placeholder="введите id страницы" id="name">
        </div>

        <div class="form-group">
            <button class="btn btn-success" id="submit">Показать страницу</button>
        </div>
    </form>
    </div>

        
    </body>
</html>
