<!DOCTYPE html>
<html lang = "en"> 
<head>
    <meta http-equiv =" X-UA-Compatible " content = " IE=edge " >
    <meta name = " viewport " content = "width-device-width , initial-scale=1.0 " >
    <link href = " https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-betal/dist/css/bootstrap.min.css " rel = " stylesheet " integrity = " sha384-0evHe / X + R7YkIZDRvuzKMRq 
    <title> Promedio de notas < /title >
</head >
<body >
    <form name = " formulario " method = " post " action = " calculo.php " >
        <div class = " mb - 3 " >
            <label for = " nombre " class = " form - label " > nombre : < / label >
            <input type = " text " class = " form - control " name = " nombre " id = " nombre " >
        </div >
        <div class = " mb - 3 " >
            <label for = " notal " class = " form - label " > Laboratorio 1 : < / label >
            <input type = " number " class = " form - control " name = " nota1 " id = " notal " >
        </div >
        <div class = " mb - 3 " >
            <label for = " nota2 " class = " form - label " > Laboratorio 2 : < / label >
            <input type = " number " class = " form - control " name = " nota2 " id = " nota2 " >
        </div >
        <div class = " mb - 3 " >
            <label for = " parcial " class = " form - label " > Parcial : < / label >
            <input type = " number " class = " form - control " name = " parcial " id = " parcial " >
        </div >
        <div class = " col - auto " >
            <button type = " submit " class = " btn btn - primary mb - 3 " > Enviar < / button >
        </div > 
    </form >
</body > 
</html >