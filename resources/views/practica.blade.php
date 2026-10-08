<!DOCTYPE html>
<html>
<head>
    <title>Práctica Laravel</title>
</head>
<body>

    <h1>Mi primera vista Laravel</h1>

    <p>Estoy aprendiendo Blade.</p>

</body>
</html>
Route::get('/practica', function () {
    return view('practica');
});
