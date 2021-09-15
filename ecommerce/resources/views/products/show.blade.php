<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div class="mb-4" style="height:40px; background-color: #bf0041; color: #fff; text-align: center;">NAVBAR</div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-5" style="background-color: #bf0041; color: #fff; text-align: center;">
                <img src="{{ $product['img'] }}">
            </div>
            <div class="col-1" style="text-align: center;">
                VAZIO
            </div>
            <div class="col-6" style="color: #fff; text-align: center;">
                <div class="row mb-4" style="background-color: #bf0041;">
                    <div class="col">{{ $product['title'] }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col"></div>
                    <div class="col" style="background-color: #bf0041;">{{ $product["price"] }}</div>
                    <div class="col"></div>
                </div>
                <div class="row" style="background-color: #bf0041; color: #fff;">
                    <div class="col">{{ $product["description"] }}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-outline-primary w-100">Enviar proposta</button>
            </div>
        </div>
    </div>
</body>

</html>
