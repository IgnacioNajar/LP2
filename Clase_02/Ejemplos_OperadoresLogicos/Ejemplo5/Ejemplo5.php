<?php
/*
Mostrar informacion dinamica, de manera que se vea segun los valores de Destino y Mes que se desea consultar:
//Para destino exoticos: EXO:  Diciembre, Enero, Febrero, Julio y Agosto es Temporada Alta
                                El resto es temporada baja
//Para destino Brasil:  BRA:  Diciembre, Enero, Febrero es T. Alta
                                El resto es temporada baja
//Para destino Europa:  EUR:   Diciembre, Enero, Febrero, Agosto y Sept  es Temporada Alta.
                                El resto es temporada baja
Mostrar las imagenes ubicadas en la carpeta /images segun sea el destino elegido.
*/

$Destino='EXO'; //BRA - EUR - EXO
$Mes= 9;
$ClassTemporada='';
$Pais='';

$Temporada='';

if ($Destino == "EXO") {
    $Pais="Exóticos";
    if (   ($Mes >= 1 && $Mes < 3) || $Mes == 7 || $Mes == 8 || $Mes == 12  ) {
        $ClassTemporada="TempAlta";
        $Temporada = 'Alta';
    } else {
        $ClassTemporada="TempBaja";
        $Temporada = 'Baja';
    }

}else if ($Destino == 'BRA') {
    $Pais="Brasil";
    if ( ($Mes >= 1 && $Mes < 3) || $Mes == 12 ) {
        $ClassTemporada="TempAlta";
        $Temporada = 'Alta';
    } else {
        $ClassTemporada="TempBaja";
        $Temporada = 'Baja';
    }

}else {
    $Pais="Europa";
    if (   ($Mes >= 1 && $Mes < 3) || $Mes == 8 || $Mes == 9 || $Mes == 12 ) {
        $ClassTemporada="TempAlta";
        $Temporada = 'Alta';
    } else {
        $ClassTemporada="TempBaja";
        $Temporada = 'Baja';
    }
}

?>

<html>
    <head>
        <title>Ejercicio Viajes</title>
        <meta http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .TempAlta {
                color: #187c12;
            }
            .TempBaja {
                color: #f00;
            }
        </style>
    </head>
    <body>
        <div>
            <h2 class="<?php echo $ClassTemporada; ?>">
                Temporada <?php echo $Temporada; ?>
            </h2>
            <h2 class="<?php echo $ClassTemporada; ?>">
                Mes <?php echo $Mes; ?>
            </h2>
            <h3>Ofertas Destino: <?php echo $Pais; ?> </h3>

            <?php if ($Destino == 'BRA') { ?>
                <img src='images/BRA_maceio.JPG' title='Brasil - Maceio' alt="" />
                <img src='images/BRA_rio.JPG' title='Brasil - Rio' />
                <img src='images/BRA_salvador.JPG' title='Brasil - Salvador de Bahia' />
            <?php } elseif ($Destino == 'EUR') { ?>
                <img src='images/EUR_grecia.JPG' />
                <img src='images/EUR_roma.JPG' />
            <?php } elseif ($Destino == 'EXO') { ?>
                <img src='images/EXO_india.JPG' />
                <img src='images/EXO_sudafrica.JPG' />
                <img src='images/EXO_tailandia.JPG' />
                <img src='images/EXO_turquia.JPG' />
            <?php } ?>

        </div>
    </body>
</html>
<!-- IMAGENES DESDE https://www.lozadaviajes.com/ -->
