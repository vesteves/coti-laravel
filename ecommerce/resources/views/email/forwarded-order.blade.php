<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="color: green; font-size: 30px; text-align: center;">
        O cliente {{ $user->name }} - {{ $user->email }} está interessado no produto {{ $product->id }} - {{ $product->name }} que está no preço {{ $product->price }}.
    </div>
</body>

</html>
