<?php
// Clases CSS asociadas a los estados de los viajes
define('SUCCESS_COLOR', 'success');
define('WARNING_COLOR', 'warning');
define('DANGER_COLOR', 'danger');

// Valores fijos
define('PESO_MAXIMO', 2); // Representa la barra ocupada al 100%
define('COSTO_PEAJE', 1500); // Costo por cada peaje

// Formatea valores a formato monetario para mejorar legibilidad
function formatearValor($valor) {
    return number_format($valor, 0, ',', '.');
}

// Devuelve la clase CSS según el estado del viaje
function obtenerEstiloSegunEstado($estado) {
    $estilos = [
        'Finalizado' => SUCCESS_COLOR,
        'En camino' => WARNING_COLOR,
        'No iniciado' => DANGER_COLOR
    ];
    
    return $estilos[$estado];
}

// Convierte kilogramos a toneladas
function convertirKgATn($pesoKg) {
    return $pesoKg / 1000;
}

// Devuelve el porcentaje de la barra según el peso
function calcularPorcentajeBarra($peso) {
    return ($peso * 100) / PESO_MAXIMO;
}

// Devuelve la clase CSS según el peso
function obtenerEstiloSegunPeso($peso) {
    if ($peso >= 1.5) return DANGER_COLOR;
    if ($peso >= 1) return WARNING_COLOR;

    return SUCCESS_COLOR;
}

// Calcula el costo total de los peajes
function calcularCostoPeajeTotal($cantidadPeajes) {
    return $cantidadPeajes * COSTO_PEAJE;
}

// Calcula el costo total del viaje
function calcularCostoTotalViaje($precioBase, $costoPeaje) {
    return $precioBase + $costoPeaje;
}

// Devuelve el costo total del viaje para no tener que calcularlo en cada funcion
function calcularCostoViaje($viaje) {
    $costoPeaje = calcularCostoPeajeTotal($viaje['cantidadPeajes']);

    return calcularCostoTotalViaje($viaje['precioBase'], $costoPeaje);
}

// Devuelve el listado de viajes formateados
function formatearViajes($listadoViajes) {
    $viajesFormateados = [];

    foreach ($listadoViajes as $indice => $viaje) {
        $pesoTn = convertirKgATn($viaje['pesoTotal']);
        $costoPeaje = calcularCostoPeajeTotal($viaje['cantidadPeajes']);
        $costoTotalViaje = calcularCostoTotalViaje($viaje['precioBase'], $costoPeaje);

        $viajesFormateados[] = [
            'indice' => $indice + 1,
            'fecha' => date('d/m/Y', strtotime($viaje['fechaViaje'])),
            'chofer' => $viaje['chofer'],
            'destino' => $viaje['destino'],
            'precioBase' => formatearValor($viaje['precioBase']),
            'pesoTn' => $pesoTn,
            'porcentajeBarra' => calcularPorcentajeBarra($pesoTn),
            'estiloPeso' => obtenerEstiloSegunPeso($pesoTn),
            'costoPeaje' => formatearValor($costoPeaje),
            'costoTotalViaje' => formatearValor($costoTotalViaje),
            'estiloEstado' => obtenerEstiloSegunEstado($viaje['estado']),
            'cantidadPeajes' => $viaje['cantidadPeajes']
        ];
    }

    return $viajesFormateados;
}

// Devuelve la sumatoria del costo total de los viajes finalizados
function calcularMontoViajesFinalizados($listadoViajes, $estado) {
    $suma = 0;

    foreach ($listadoViajes as $viaje) {

        if ($viaje['estado'] === $estado) {
            $costoTotal = calcularCostoViaje($viaje);
            $suma += $costoTotal;
        }
    }

    return $suma;
}

// Devuelve la cantidad de viajes cuyo costo total es menor a 300k
function calcularCantidadViajesMenoresA300k($listadoViajes) {
    $cantidad = 0;

    foreach ($listadoViajes as $viaje) {
        $costoTotal = calcularCostoViaje($viaje);

        if ($costoTotal < 300000) {
            $cantidad++;
        }
    }

    return $cantidad;
}

// Calcula la sumatoria del costo total de todos los viajes
function calcularSumatoriaCostoTotalViaje($listadoViajes) {
    $suma = 0;

    foreach ($listadoViajes as $viaje) {
        $costoTotal = calcularCostoViaje($viaje);
        $suma += $costoTotal;
    }

    return $suma;
}
?>
