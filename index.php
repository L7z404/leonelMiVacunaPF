<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/vac_style.css" type="text/css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Mi Vacuna</title>
</head>
<body>
    <div id="all_cabeza">
        <div id="raya_alta_cabeza"></div>
        <div id="centro_cabeza">
            <div id="imgDiv">

            </div>
        </div>
        <div id="pie_cabeza"></div>
        <div id="raya_baja_cabeza"></div>
    </div>
    <br>
    <br>
    <br>
    <form id="centerform">

    <div id="container_dato_curp">
        <div id="info_a_curp">
            <br />
            <p>&ensp;Estoy dentro del rango de edad especificado y me quiero vacunar:&ensp;</p>
            <br />
        </div>
        <br />
        <br />
        <div id="curp">
            <img alt="UserIcon" src="images/user.png">
            <label>
                <input type="text" placeholder="Introducir CURP" name="vCURP">
            </label>
        </div>
        <br />
        <br />
        <div id="curp_capcha_button">
            <div id="captcha" class="g-recaptcha" data-sitekey="6LfNdjMbAAAAANzlt9qOKiIEqAWsDqhydrtUjDqg"></div>
            <button id="bconfcurp" type="button">Confirmar CURP</button>
        </div>




    </div>

    </form>
</body>
</html>