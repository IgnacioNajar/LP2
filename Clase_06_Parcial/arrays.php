<?php
// Datos de los choferes
$nombreChoferes = [
    ['nombre' => 'Pedro', 'apellido' => 'Martínez'],
    ['nombre' => 'Carlos', 'apellido' => 'Gómez'],
    ['nombre' => 'Mario', 'apellido' => 'Gómez'],
    ['nombre' => 'Juan', 'apellido' => 'Arellano'],
];

// Nombres de los destinos
$destinos = ['Santa Fe', 'San Luis', 'Catamarca', 'Mendoza'];

// Posibles estados de un viaje
$estadoViaje = [
    'finalizado' => 'Finalizado',
    'enCamino' => 'En camino',
    'noIniciado' => 'No iniciado'
];

// Listado de viajes
$listadoViajes = [
    [
        'fechaViaje' => '2025/09/02',
        'chofer' => $nombreChoferes[0]['nombre'] . ', ' . $nombreChoferes[0]['apellido'],
        'destino' => $destinos[0],
        'precioBase' => 350000,
        'estado' => $estadoViaje['finalizado'],
        'pesoTotal' => 1500,
        'cantidadPeajes' => 4
    ],
    [
        'fechaViaje' => '2025/09/11',
        'chofer' => $nombreChoferes[1]['nombre'] . ', ' . $nombreChoferes[1]['apellido'],
        'destino' => $destinos[1],
        'precioBase' => 250000,
        'estado' => $estadoViaje['finalizado'],
        'pesoTotal' => 980,
        'cantidadPeajes' => 3
    ],
    [
        'fechaViaje' => '2025/09/02',
        'chofer' => $nombreChoferes[2]['nombre'] . ', ' . $nombreChoferes[2]['apellido'],
        'destino' => $destinos[2],
        'precioBase' => 290000,
        'estado' => $estadoViaje['finalizado'],
        'pesoTotal' => 1400,
        'cantidadPeajes' => 4
    ],
    [
        'fechaViaje' => '2025/09/02',
        'chofer' => $nombreChoferes[3]['nombre'] . ', ' . $nombreChoferes[3]['apellido'],
        'destino' => $destinos[3],
        'precioBase' => 320000,
        'estado' => $estadoViaje['enCamino'],
        'pesoTotal' => 2000,
        'cantidadPeajes' => 5
    ],
    [
        'fechaViaje' => '2025/09/02',
        'chofer' => $nombreChoferes[0]['nombre'] . ', ' . $nombreChoferes[0]['apellido'],
        'destino' => $destinos[0],
        'precioBase' => 350000,
        'estado' => $estadoViaje['noIniciado'],
        'pesoTotal' => 500,
        'cantidadPeajes' => 4
    ],
    [
        'fechaViaje' => '2025/09/02',
        'chofer' => $nombreChoferes[1]['nombre'] . ', ' . $nombreChoferes[1]['apellido'],
        'destino' => $destinos[2],
        'precioBase' => 290000,
        'estado' => $estadoViaje['noIniciado'],
        'pesoTotal' => 1100,
        'cantidadPeajes' => 4
    ]
];
?>
