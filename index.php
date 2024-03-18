<?php
$chamoyadas = [
    'product'     => 'Chamoyadas',
    'description' => 'Pulpa natural, azúcar, con chamoy',
    'flavors'     => ['Limón', 'Mango', 'Maracuya', 'Pepino con Limón', 'Fresa', 'Frutos Rojos', 'Cereza', 'Tamarindo', 'Nanche', 'Guayaba', 'Grosella', 'Mandarina (temporada)'],
    'pricing'     => [
        ['option'=>'Sin alcohol',                      'price_litro'=>60,  'price_top'=>110],
        ['option'=>'Con Ron Bacardi',                  'price_litro'=>100, 'price_top'=>150],
        ['option'=>'Con Tequila Jose Cuervo Especial', 'price_litro'=>120, 'price_top'=>170],
        ['option'=>'Con Vodka Smirnoff',               'price_litro'=>110, 'price_top'=>160],
        ['option'=>'Con Mezcal Moskalti',              'price_litro'=>120, 'price_top'=>170],
    ]
];

$cerveza = [
    'product'     => 'Cerveza',
    'description' => '',
    'flavors'     => ['Cubana (Limón, sal y escarcada con sal)', 'Michelada (Limón, sal y salsa de la casa)', 'Clamochela (Limón, sal, salsa de la casa y clamato 80mL)'],
    'pricing'     => [
        ['option'=>'Corona / Victoria',         'price_litro'=>85,  'price_top'=>135],
        ['option'=>'Con banderilla de camaron', 'price_litro'=>135, 'price_top'=>0  ],
    ],

    'product_2'     => 'Cerveza de 1/2',
    //'description_2' => '',
    'flavors_2'     => ['Corona', 'Victoria'],
    'pricing_2'     => [
        ['option'=>'Corona Cero',              'price_unique'=>40],
        ['option'=>'Vaso Preparado',           'price_unique'=>25],
        ['option'=>'Cubeta de Cerveza de 1/2', 'price_6pzas'=>220, 'price_12pzas'=>440]
    ],

    'product_3'     => 'Clamato Preparado',
    'description_3' => 'Clamato, Limón, salsas, sal y agua mineral',
    //'flavors_3'     => [],
    'pricing_3'     => [
        ['option'=>'', 'price_litro'=>80,  'price_top'=>130]
    ]
];

$bebidas = [
    'product'      => 'Bebidas',
    'description'  => '',
    'product_list' => [
        [
            'name'       =>'Mojitos',
            'description'=>'Hierbabuena, limon, azucar, pulpa, Licor Ron Bacardi. Si gustas un licor diferente, varia el precio',
            'flavors_1'  =>['Limon', 'Mora Azul', 'Maracuya', 'Pepino', 'Mango (temporada)'],
            'pricing_1'  =>['price_litro'=>100, 'price_top'=>150],
            'flavors_2'  =>['Fresa', 'Frutos Rojos', 'Vino', 'Cereza', 'Mandarina (temporada)'],
            'pricing_2'  =>['price_litro'=>120, 'price_top'=>170]
        ],
    
        [
            'name'       =>'Piña Colada Frappe',
            'description'=>'Jugo de piña, crema de coco, azucar, Licor Ron Bacardi. Si gustas un licor diferente, varia el precio',
            'pricing'    =>['price_litro'=>100, 'price_top'=>150]
        ],
    
        [
            'name'       =>'Cuba',
            'description'=>'Ron Bacardi, agua mineral, cocoa, toque de limon',
            'flavors'    =>['Campechano (agua mineral y cooca)', 'Pintado (poca Coca Cola)'],
            'pricing'    =>['price_litro'=>110, 'price_top'=>160]
        ],
    
        [
            'name'       =>'Whisky',
            'description'=>'Acompañado con agua mineral y manzanita',
            'pricing'    =>[
                ['option'=>'Passport',      'price_litro'=>170, 'price_top'=>220],
                ['option'=>'Black & White', 'price_litro'=>180, 'price_top'=>230],
                ['option'=>'Red Label',     'price_litro'=>190, 'price_top'=>240]
            ]
        ],

        [
            'name'       =>'Jacaranda',
            'description'=>'Vodka Smirnoff, infusion floral, endulzante, agua mineral, limon',
            'pricing'    =>['price_litro'=>120, 'price_top'=>170]
        ],

        [
            'name'       =>'Diablito',
            'description'=>'Vodka Smirnoff tamarindo, refresco de lima, refresco de toronja, pulpa de tamarindo',
            'pricing'    =>['price_litro'=>130, 'price_top'=>180]
        ],

        [
            'name'       =>'Blue Love',
            'description'=>'Vodka Smirnoff, bebida energetica, refresco de lima',
            'pricing'    =>['price_litro'=>110, 'price_top'=>160]
        ],

        [
            'name'       =>'Bicolor',
            'description'=>'Vodka Smirnoff, bebida energetica, jugo de arandano, refresco de lima',
            'pricing'    =>['price_litro'=>110, 'price_top'=>160]
        ],

        [
            'name'       =>'Cielo Rosa',
            'description'=>'Vodka Smirnoff, Algodon de azucar, refresco de lima',
            'pricing'    =>['price_litro'=>110, 'price_top'=>160]
        ],

        [
            'name'       =>'Margaritas Frappe',
            'description'=>'Tequila Jose Cuervo Especial o Mezcal Moskalti, Licor Controy, Limon, azucar y pulpa natural',
            'flavors'    =>['Limón', 'Mango', 'Maracuya', 'Pepino con Limón', 'Fresa', 'Frutos Rojos', 'Cereza', 'Tamarindo', 'Nanche', 'Guayaba', 'Mandarina (temporada)'],
            'pricing'    =>['price_litro'=>120, 'price_top'=>170]
        ],

        [
            'name'       =>'Paloma',
            'description'=>'Tequila Jose Cuervo Especial o Mezcal Moskalti',
            'pricing'    =>['price_litro'=>120, 'price_top'=>170]
        ],

        [
            'name'       =>'Frappe de Vino',
            'description'=>'Vino tinto, jugo de arandano, azucar, toque de limon',
            'pricing'    =>['price_litro'=>90, 'price_top'=>140]
        ],

        [
            'name'       =>'Copa de Vino',
            'description'=>'',
            'pricing'    =>[
                ['option'=>'Lambrusco', 'price_unique'=>60]
            ]
        ],

        [
            'name'       =>'Caribeñas',
            'description'=>'Pulpa de chamoy, limon, salsas, sal',
            'flavors'    =>['Mango-Piña', 'Tinto', 'Durazno', 'Manzana Verde', 'Fresa'],
            'pricing'    =>['price_litro'=>90, 'price_top'=>140]
        ],

        [
            'name'       =>'Sirena',
            'description'=>'Mezcal Tobala, Concentrado de Jamaica, Limon',
            'pricing'    =>['price_litro'=>100, 'price_top'=>150]
        ],

        [
            'name'       =>'Mezcal',
            'description'=>'',
            'pricing'    =>[
                ['subname'=>'Blanco Joven', 'pricing'=>[
                    ['option'=>'Cupreata', 'price_shot'=>40, 'price_botella'=>400],
                    ['option'=>'Espadin',  'price_shot'=>40, 'price_botella'=>400],
                    ['option'=>'Tobala',   'price_shot'=>40, 'price_botella'=>400]
                ]],
                ['subname'=>'Mezcales Amarak', 'pricing'=>[
                    ['option'=>'Licor de Agave/Pechuga', 'price_shot'=>50, 'price_botella'=>500]
                ]],
                ['subname'=>'Mezcales de fruta', 'pricing'=>[
                    ['option'=>'Maracuya',  'price_shot'=>30, 'price_botella'=>300],
                    ['option'=>'Jamaica',   'price_shot'=>30, 'price_botella'=>300],
                    ['option'=>'Tamarindo', 'price_shot'=>30, 'price_botella'=>300]
                ]],
                ['subname'=>'Crema de Mezcal', 'pricing'=>[
                    ['option'=>'Cafe',  'price_shot'=>30, 'price_botella'=>300]
                ]]
            ]
        ],

        [
            'name'       =>'Carajillos',
            'description'=>'Cafe expresso, Licor 43',
            'pricing'    =>[
                ['option'=>'Shakeado', 'price_copa'=>150],
                ['option'=>'Directo',  'price_copa'=>150],
                ['option'=>'Baileys',  'price_copa'=>150],
                ['option'=>'Turin',    'price_copa'=>170],
            ]
        ]
    ]
];

$topping = [
    ['type'=>'fruta', 'list'=>[
        ['id'=>1,  'item'=>'Mango'],
        ['id'=>2,  'item'=>'Pepino'],
        ['id'=>3,  'item'=>'Jicama']
    ]],
    ['type'=>'cacahuates', 'list'=>[
        ['id'=>4,  'item'=>'Tipo hot nuts'],
        ['id'=>5,  'item'=>'Japones'],
        ['id'=>6,  'item'=>'Ajo y chile'],
        ['id'=>7,  'item'=>'Español'],
        ['id'=>8,  'item'=>'Habanero'],
        ['id'=>9,  'item'=>'Salado'],
        ['id'=>10, 'item'=>'Enchilado'],
        ['id'=>11, 'item'=>'Haba'],
        ['id'=>12, 'item'=>'Garbanzo enchilado'],
    ]],
    ['type'=>'papas', 'list'=>[
        ['id'=>14, 'item'=>'Churrumais'],
        ['id'=>16, 'item'=>'Cheetos'],
        ['id'=>17, 'item'=>'Doritos'],
        ['id'=>18, 'item'=>'Ruffles'],
        ['id'=>19, 'item'=>'Rancheritos'],
        ['id'=>20, 'item'=>'Sabritas'],
        ['id'=>21, 'item'=>'Tostachos'],
        ['id'=>22, 'item'=>'Tipo Taki'],
        ['id'=>23, 'item'=>'Churritos de ajonjoli'],
        ['id'=>49, 'item'=>'Cheetos Flamin Hot'],
    ]],
    ['type'=>'gomitas y dulces', 'list'=>[
        ['id'=>24, 'item'=>'Bolitas de tamarindo'],
        ['id'=>25, 'item'=>'Banderilla'],
        ['id'=>26, 'item'=>'Tarugo'],
        ['id'=>27, 'item'=>'Skwinkles Salsagheti'],
        ['id'=>28, 'item'=>'Paleta de goma sandia'],
        ['id'=>29, 'item'=>'Manguitos'],
        ['id'=>30, 'item'=>'Pelon'],
        ['id'=>31, 'item'=>'Pulparindo'],
        ['id'=>32, 'item'=>'Lombriz enchilada'],
        ['id'=>33, 'item'=>'Tamborcitos'],
        ['id'=>34, 'item'=>'Rockaleta'],
        ['id'=>35, 'item'=>'Picafresa'],
        ['id'=>36, 'item'=>'Gomifruta enchilada'],
        ['id'=>37, 'item'=>'Gomitas mini tajin'],
        ['id'=>38, 'item'=>'Skwinkles Clasico'],
        ['id'=>39, 'item'=>'Raqueta'],
        ['id'=>40, 'item'=>'Ricaleta'],
        ['id'=>41, 'item'=>'Lombriz dulce'],
        ['id'=>42, 'item'=>'Tira Xtremes'],
        ['id'=>43, 'item'=>'Bolitas aciditas de cereza'],
        ['id'=>44, 'item'=>'Panditas']
    ]],
    ['type'=>'carnes frias', 'list'=>[
        ['id'=>46, 'item'=>'Camaron'],
        ['id'=>47, 'item'=>'Cueritos'],
    ]]
];

$cubetas = [
    'product'     => 'Cubetas',
    'description' => '',

    'section_a'   => 'Cubeta de Mojito',
    'flavors_1'   => ['Frutos Rojos', 'Vino', 'Fresa', 'Cereza', 'Mandarina'],
    'pricing_1'   => ['price_local'=>600, 'price_domicilio'=>720],
    'flavors_2'   => ['Mango', 'Pepino', 'Mora Azul', 'Maracuya', 'Limon'],
    'pricing_2'   => ['price_local'=>500, 'price_domicilio'=>620],

    'section_b'   => 'Cubeta de Paloma',
    'pricing_3'   => ['price_local'=>600, 'price_domicilio'=>700],

    'section_c'   => 'Cubeta de Blue Love o Bicolor',
    'pricing_4'   => ['price_local'=>550, 'price_domicilio'=>670],
];

$tablas = [
    'product'     => 'Tablas',
    'description' => '',
    'section_a'   => 'Tabla de Shot',
    'pricing'     => [
        ['option'=> 'Mezcal de Sabor', 'price'=>120],
        ['option'=> 'Mezcal Blanco',   'price'=>160],
        ['option'=> 'Mezcal Pechuga',  'price'=>200],
        ['option'=> 'Perla Negra',     'price'=>180]
    ]
];

$varios = [
    'product'             => 'Varios',
    'description'         => '',
    'products_individual' => [
        ['option'=> 'Caribe Cooler', 'price_unique'=>40],
        ['option'=> 'Agua Natural',  'price_unique'=>20],
        ['option'=> 'Agua Mineral',  'price_unique'=>30],
        ['option'=> 'Refresco',      'price_unique'=>30],
        ['option'=> 'Cafe',          'price_unique'=>40],
        ['option'=> 'Te',            'price_unique'=>40]
    ],
    'products_more' => [
        ['option'=> 'Limonada',                                               'price_litro'=>60, 'price_top'=>100, 'price_chica'=>40, 'price_chica_top'=>60],
        ['option'=> 'Jugo',                                                   'price_litro'=>60, 'price_top'=>100, 'price_chica'=>40, 'price_chica_top'=>60],
        ['option'=> 'Chamoyada (sin alcohol) (solo Chica y Chica C/Topping)', 'price_litro'=>60, 'price_top'=>100, 'price_chica'=>40, 'price_chica_top'=>60]
    ],
];

$aguachiles = [
    'product'     => 'Aguachiles',
    'description' => '',

    'subproducts' => [
        ['name'=>'Aguachile Clasico ILOVEMICHE', 
        'description'=>'Camaron crudo, deliciosas salsas negras, salsa de aguachile verde, cebolla y pepino',
        'products_individual'=>[
                ['option'=>'Chico',        'price_unique'=>180],
                ['option'=>'Mediano',      'price_unique'=>280],
                ['option'=>'Familiar',     'price_unique'=>480],
                ['option'=>'Como Topping', 'price_unique'=>175]
            ]
        ],
        ['name'=>'Aguachile Verde', 
        'description'=>'Camaron crudo, salsa de aguachile verde, cebolla y pepino',
        'products_individual'=>[
                ['option'=>'Chico',        'price_unique'=>180],
                ['option'=>'Mediano',      'price_unique'=>280],
                ['option'=>'Familiar',     'price_unique'=>480],
                ['option'=>'Como Topping', 'price_unique'=>175]
            ]
        ],
        ['name'=>'Aguachile Mango (Temporada)', 
        'description'=>'Camaron crudo, salsa de aguachile verde, cebolla, pepino y mango',
        'products_individual'=>[
                ['option'=>'Chico',        'price_unique'=>190],
                ['option'=>'Mediano',      'price_unique'=>290],
                ['option'=>'Familiar',     'price_unique'=>490],
                ['option'=>'Como Topping', 'price_unique'=>195]
            ]
        ]
    ],
];

$ceviches = [
    'product'     => 'Ceviches',
    'description' => '',

    'subproducts' => [
        ['name'=>'Ceviche Clasico ILOVEMICHE', 
        'description'=>'Camaron crudo, clamato, deliciosas salsas negras, jitomate, cebolla, pepino y cilantro',
        'products_individual'=>[
                ['option'=>'Chico',        'price_unique'=>180],
                ['option'=>'Mediano',      'price_unique'=>280],
                ['option'=>'Familiar',     'price_unique'=>480],
                ['option'=>'Como Topping', 'price_unique'=>175]
            ]
        ],
        ['name'=>'Ceviche Pulpo', 
        'description'=>'Camaron crudo, pulpo, clamato, deliciosas salsas negras, jitomate,cebolla, pepino y cilantro',
        'products_individual'=>[
                ['option'=>'Chico',        'price_unique'=>210],
                ['option'=>'Mediano',      'price_unique'=>310],
                ['option'=>'Familiar',     'price_unique'=>510],
                ['option'=>'Como Topping', 'price_unique'=>220]
            ]
        ],
        ['name'              =>'Torre Taxco', 
        'description'        =>'Camaron cristal, camaron coctelero, cebolla morada y pepino',
        'products_individual'=>[
                ['option'=>'', 'price_unique'=>250]
            ]
        ],
        ['name'              =>'Torre ILOVEMICHE', 
        'description'        =>'Camaron cristal, camaron coctelero, pulpo, cebolla morada, pepino y jitomate',
        'products_individual'=>[
                ['option'=>'', 'price_unique'=>250]
            ]
        ],
        ['name'              =>'Culichi', 
        'description'        =>'Camaron cristal, camaron coctelero, pulpo, cebolla morada y pepino',
        'products_individual'=>[
                ['option'=>'', 'price_unique'=>250]
            ]
        ],
    ],
];

$botanas = [
    'product'     => 'Botanas',
    'description' => '',

    'subproducts' => [
        ['option'=>'Bowl de 5 topping',             'price_unique'=>50],
        ['option'=>'Palomitas',                     'price_unique'=>50],
        ['option'=>'Nachos',                        'price_unique'=>50],
        ['option'=>'Guacamole',                     'price_unique'=>80],
        ['option'=>'Nachos de topping papas',       'price_unique'=>60],
        ['option'=>'30 camarones cocteleros',       'price_unique'=>100],
        ['option'=>'Tenders de pollo (8 pzas)',     'price_unique'=>90],
        ['option'=>'Papas a la francesa',           'price_unique'=>50],
        ['option'=>'Papas a la francesa con Queso', 'price_unique'=>60],
        ['option'=>'Sopa maruchan',                 'price_unique'=>50],
        ['option'=>'Dedos de queso (8 pzas)',       'price_unique'=>100],
        ['option'=>'Camaron para pelar (Ch)',       'price_unique'=>120],
        ['option'=>'Camaron para pelar (Med)',      'price_unique'=>220]
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ILOVE MICHE MENU">
        <meta name="robots" content="nofollow">
        <meta http-equiv="author" content="Fredy Arce Gonzalez [+52-5548427028]">
        <meta hhtp-equiv="pragma" content="no-cache">
        <!-------------------------------------------------------------------------->
        <title>ILOVE MICHE</title>
        <link rel="shortcut icon" type="image/jpg" href="images/fav.jpg">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-------------------------------------------------------------------------->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Big+Shoulders+Display:wght@100;200;300;400;500;600;700;800;900&family=Courgette&family=Edu+VIC+WA+NT+Beginner:wght@400;500;600;700&family=Great+Vibes&family=Inspiration&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Monoton&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Pangolin&family=Parisienne&family=Piedra&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-------------------------------------------------------------------------->
    </head>
    <body>
        <!-------------------------------------------------------------------------->
        <div id="header">
            <img src="images/header.png" id="header-img">
        </div>
        <!-------------------------------------------------------------------------->
        <div id="chamoyadas">
            <h1><?= $chamoyadas['product'] ?></h1>
            <p><?= $chamoyadas['description'] ?></p>
            <ul>
            <?php foreach ($chamoyadas['flavors'] as $flavor) { ?>
                <li><?= $flavor ?></li>
            <?php } ?>
            </ul>
            <table>
                <?php foreach ($chamoyadas['pricing'] as $row) { ?>
                    <tr>
                        <td class="btop"><?= $row['option'] ?></td>
                        <td class="btop ral">Litro $<?= $row['price_litro'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="ral">C/Topping $<?= $row['price_top'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="cerveza">
            <h1><?= $cerveza['product'] ?></h1>
            <p><?= $cerveza['description'] ?></p>
            <ul>
                <?php foreach ($cerveza['flavors'] as $flavor) { ?>
                    <li><?= $flavor ?></li>
                <?php } ?>
            </ul>
            <table>
                <?php foreach ($cerveza['pricing'] as $row) { ?>
                    <?php if ($row['price_litro'] > 0 && $row['price_top'] > 0) { ?>
                        <tr>
                            <td class="btop"><?= $row['option'] ?></td>
                            <td class="btop ral">Litro $<?= $row['price_litro'] ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="ral">C/Topping<?= $row['price_top'] ?></td>
                        </tr>
                    <?php } elseif ($row['price_litro'] >0 && $row['price_top'] == 0) { ?>
                        <tr>
                            <td class="btop"><?= $row['option'] ?></td>
                            <td class="btop ral">Litro $<?= $row['price_litro'] ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
            <h3><?= $cerveza['product_2'] ?>:</h3>
            <ul>
            <?php foreach ($cerveza['flavors_2'] as $flavor) { ?>
                <li><?=$flavor?></li>
            <?php } ?>
            </ul>
            <table>
            <?php foreach ($cerveza['pricing_2'] as $row) { ?>
                <?php if (isset($row['price_unique'])) { ?>
                    <tr>
                        <td class="btop"><?= $row['option'] ?></td>
                        <td class="btop ral">$<?= $row['price_unique'] ?></td>
                    </tr>
                <?php } elseif (isset($row['price_6pzas'])) { ?>
                    <tr>
                        <td class="btop"><?= $row['option'] ?></td>
                        <td class="btop ral">6 pzas $<?= $row['price_6pzas'] ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="ral">12 pzas $<?= $row['price_12pzas'] ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </table>
            <h3><?= $cerveza['product_3'] ?>:</h3>
            <p><?= $cerveza['description_3'] ?></p>
            <table>
                <tr>
                    <td class="btop ral">Litro $<?= $cerveza['pricing_3'][0]['price_litro'] ?></td>
                </tr>
                <tr>
                    <td class="ral">C/Topping $<?= $cerveza['pricing_3'][0]['price_top'] ?></td>
                </tr>
            </table>
            <img src="images/im1.png" alt="Im1" class="main_image">
        </div>
        <!-------------------------------------------------------------------------->
        <!-------------------------------------------------------------------------->
        <div id="pidelo">
            <div class="pidelo-container">
                <!-- Background image -->
                <img src="images/im2.png" alt="Background Image" class="pidelo-background">
                <!-- Overlay image -->
                <img src="images/title_pidelo.png" alt="Overlay Image" class="pidelo-title">
                <!-- Overlay text -->
                <div class="pidelo-overlay-text">
                    <ul>
                        <li>Litro o con Topping</li>
                        <li>Con tu licor favorito varia el precio de acuerdo al licor</li>
                        <li>Tu Mojito Liquido o Frappeado</li>
                        <li>Con tu Escarchado Favorito</li>
                        <li>Endulzado con Stevia +$10</li>
                        <li>Sin azucar</li>
                        <li>Sin alcohol</li>
                        <li>$5 Plastico para llevar</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="escarchado">
            <div class="escarchado-container">
                <!-- Background image -->
                <img src="images/im5.png" alt="Background Image" class="escarchado-background">
                <!-- Overlay image -->
                <img src="images/title_escarchado.png" alt="Overlay Image" class="escarchado-title">
                <!-- Overlay text -->
                <div class="escarchado-overlay-text">
                    <ul>
                        <li>Chilito</li>
                        <li>Sal</li>
                        <li>Ajonjoli</li>
                        <li>Miguelito azul</li>
                        <li>Mixto</li>
                        <li>Miguelito rosa</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="bebidas">
            <h1><?= $bebidas['product'] ?></h1>
            <p><?= $bebidas['description'] ?></p>
            <?php foreach (array_slice($bebidas['product_list'], 0) as $beverage) { ?>
                <h3><?= $beverage['name'] ?>:</h3>
                <p><?= $beverage['description'] ?></p>
                <?php if (count($beverage) == 3 && isset($beverage['name']) && isset($beverage['description']) && isset($beverage['pricing']['price_litro']) && isset($beverage['pricing']['price_top'])) { ?>
                    <table>
                        <tr>
                            <td class="btop ral">Litro $<?= $beverage['pricing']['price_litro'] ?></td>
                        </tr>
                        <tr>
                            <td class="ral">C/Topping $<?= $beverage['pricing']['price_top'] ?></td>
                        </tr>
                    </table>
                <?php } elseif (count($beverage) == 4 && isset($beverage['name']) && isset($beverage['description']) && isset($beverage['flavors']) && isset($beverage['pricing']['price_litro']) && isset($beverage['pricing']['price_top'])) { ?>
                    <ul>
                        <?php foreach ($beverage['flavors'] as $flavor) { ?>
                            <li><?= $flavor ?></li>
                        <?php } ?>
                    </ul>
                    <table>
                        <tr>
                            <td class="btop ral">Litro $<?= $beverage['pricing']['price_litro'] ?></td>
                        </tr>
                        <tr>
                            <td class="ral">C/Topping $<?= $beverage['pricing']['price_top'] ?></td>
                        </tr>
                    </table>
                <?php } elseif ($beverage['name'] == 'Mojitos') { ?>
                    <ul>
                        <?php foreach ($beverage['flavors_1'] as $flavor) { ?>
                            <li><?= $flavor ?></li>
                        <?php } ?>
                    </ul>
                    <table>
                        <tr>
                            <td class="btop ral">Litro $<?= $beverage['pricing_1']['price_litro'] ?></td>
                        </tr>
                        <tr>
                            <td class="ral">C/Topping $<?= $beverage['pricing_1']['price_top'] ?></td>
                        </tr>
                    </table>
                    <ul>
                        <?php foreach ($beverage['flavors_2'] as $flavor) { ?>
                            <li><?= $flavor ?></li>
                        <?php } ?>
                    </ul>
                    <table>
                        <tr>
                            <td class="btop ral">Litro $<?= $beverage['pricing_2']['price_litro'] ?></td>
                        </tr>
                        <tr>
                            <td class="ral">C/Topping $<?= $beverage['pricing_2']['price_top'] ?></td>
                        </tr>
                    </table>
                <?php } elseif ($beverage['name'] == 'Whisky') { ?>
                    <table>
                        <?php foreach ($beverage['pricing'] as $row) { ?>
                            <tr>
                                <td class="btop"><?= $row['option'] ?></td>
                                <td class="btop ral">Litro $<?= $row['price_litro'] ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="ral">C/Topping $<?= $row['price_top'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } elseif ($beverage['name']=='Copa de Vino') { ?>
                    <table>
                        <?php foreach ($beverage['pricing'] as $row) { ?>
                            <tr>
                                <td class="btop"><?= $row['option'] ?></td>
                                <td class="btop ral">$<?= $row['price_unique'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } elseif ($beverage['name']=='Mezcal') { ?>
                    <?php foreach ($beverage['pricing'] as $section) { ?>
                        <p><?= $section['subname'] ?></p>
                        <table>
                            <?php foreach ($section['pricing'] as $row) { ?>
                                <tr>
                                    <td class="btop"><li><?= $row['option'] ?></li></td>
                                    <td class="btop ral">Shot $<?= $row['price_shot'] ?> Botella $<?= $row['price_botella'] ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    <?php } ?>
                <?php } elseif ($beverage['name']=='Carajillos') { ?>
                    <table>
                        <?php foreach ($beverage['pricing'] as $row) { ?>
                            <tr>
                                <td class="btop"><li><?= $row['option'] ?></li></td>
                                <td class="btop ral">Copa $<?= $row['price_copa'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } ?>
            <?php } ?>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="topp">
            <div class="topp-container">
                <!-- Background images -->
                <div class="topp-images" id="topp-images">
                    <img src="images/topp1.png" alt="Background Image" class="topp-background">
                    <img src="images/topp2.jpg" alt="Background Image" class="topp-background">
                    <img src="images/topp3.jpg" alt="Background Image" class="topp-background">
                    <img src="images/topp4.jpg" alt="Background Image" class="topp-background">
                </div>
                <!-- Overlay image -->
                <img src="images/title_topping.png" alt="Overlay Image" class="topp-title" id="topp-title">
                <!-- Overlay text -->
                <div class="topp-overlay-text" id="topp-overlay-text">
                    <?php foreach ($topping as $topping_section) { ?>
                        <h3  class="uppercase"><?= $topping_section['type'] ?></h3>
                        <ul>
                            <?php foreach ($topping_section['list'] as $topping_item) { ?>
                                <li><?= $topping_item['id'] ?> <?= $topping_item['item'] ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
                <p id="topp-nota">Nota: Camaron no se puede repetir</p>
            </div>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="cubetas">
            <h1><?= $cubetas['product'] ?></h1>
            <p><?= $cubetas['description'] ?></p>
            <h3><?= $cubetas['section_a'] ?></h3>
            <ul>
                <?php foreach($cubetas['flavors_1'] as $flavor) { ?>
                    <li><?= $flavor ?></li>
                <?php } ?>
            </ul>
            <table>
                <tr>
                    <td class="btop ral">Local $<?= $cubetas['pricing_1']['price_local'] ?></td>
                </tr>
                <tr>
                    <td class="ral">Domicilio $<?= $cubetas['pricing_1']['price_domicilio'] ?></td>
                </tr>
            </table>
            <ul>
                <?php foreach($cubetas['flavors_2'] as $flavor) { ?>
                    <li><?= $flavor ?></li>
                <?php } ?>
            </ul>
            <table>
                <tr>
                    <td class="btop ral">Local $<?= $cubetas['pricing_2']['price_local'] ?></td>
                </tr>
                <tr>
                    <td class="ral">Domicilio $<?= $cubetas['pricing_3']['price_domicilio'] ?></td>
                </tr>
            </table>
            <h3><?= $cubetas['section_b'] ?></h3>
            <table>
                <tr>
                    <td class="btop ral">Local $<?= $cubetas['pricing_3']['price_local'] ?></td>
                </tr>
                <tr>
                    <td class="ral">Domicilio $<?= $cubetas['pricing_3']['price_domicilio'] ?></td>
                </tr>
            </table>
            <h3><?= $cubetas['section_c'] ?></h3>
            <table>
                <tr>
                    <td class="btop ral">Local $<?= $cubetas['pricing_4']['price_local'] ?></td>
                </tr>
                <tr>
                    <td class="ral">Domicilio $<?= $cubetas['pricing_4']['price_domicilio'] ?></td>
                </tr>
            </table>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="tablas">
            <h1><?= $tablas['product'] ?></h1>
            <p><?= $tablas['description'] ?></p>
            <h3><?= $tablas['section_a'] ?></h3>
            <table>
                <?php foreach ($tablas['pricing'] as $row) { ?>
                    <tr>
                        <td class="btop"><li><?= $row['option'] ?></li></td>
                        <td class="btop ral">$<?= $row['price'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <p>Nota: Pregunta por la tabla de tu preferencia</p>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="varios">
            <h1><?= $varios['product'] ?></h1>
            <p><?= $varios['description'] ?></p>
            <table>
                <?php foreach ($varios['products_individual'] as $row) { ?>
                    <tr>
                        <td class="btop"><li><?= $row['option'] ?></li></td>
                        <td class="btop ral">$<?= $row['price_unique'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <table>
                <?php foreach ($varios['products_more'] as $row) { ?>
                    <tr>
                        <td><li><?= $row['option'] ?></li></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td class="btop ral">Litro $<?= $varios['products_more'][0]['price_litro'] ?></td>
                </tr>
                <tr>
                    <td class="ral">L C/Topping $<?= $varios['products_more'][0]['price_top'] ?></td>
                </tr>
                <tr>
                    <td class="ral">Chica $<?= $varios['products_more'][0]['price_chica'] ?></td>
                </tr>
                <tr>
                    <td class="ral">Ch C/Topping $<?= $varios['products_more'][0]['price_chica_top'] ?></td>
                </tr>
            </table>
            <section class="warning">
                <ul>
                    <li>NO SE SEPARAN CUENTAS</li>
                    <li>NO SE ACEPTAN TRANSFERENCIAS</li>
                    <li>ACEPTAMOS EFECTIVO Y TARJETA</li>
                    <li>NO SE PERMITE EL INGRESO DE BEBIDAS Y ALIMENTOS AJENOS A ESTE ESTABLECIMIENTO</li>
                </ul>
                <p>
                    AGRADECEMOS SU PREFERENCIA Y COMPRENSION
                </p>
            </section>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="mariscos">
            <h1 id="mariscos_title_img"></h1>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="aguachiles">
            <h1><?= $aguachiles['product'] ?></h1>
            <p><?= $aguachiles['description'] ?></p>
            <?php foreach($aguachiles['subproducts'] as $section) { ?>
                <h3><?= $section['name'] ?>:</h3>
                <p><?= $section['description'] ?></p>
                <table>
                    <?php foreach ($section['products_individual'] as $row) { ?>
                        <tr>
                            <td class="btop"><li><?= $row['option'] ?></li></td>
                            <td class="btop ral">$ <?= $row['price_unique'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="ceviches">
            <h1><?= $ceviches['product'] ?></h1>
            <p><?= $ceviches['description'] ?></p>
            <?php foreach($ceviches['subproducts'] as $section) { ?>
                <h3><?= $section['name'] ?>:</h3>
                <p><?= $section['description'] ?></p>
                <table>
                    <?php foreach ($section['products_individual'] as $row) { ?>
                        <tr>
                            <?php if ($row['option'] == '') { ?>
                                <td class="btop"></td>
                                <td class="btop ral">$ <?= $row['price_unique'] ?></td>
                            <?php } else { ?>
                                <td class="btop"><li><?= $row['option'] ?></li></td>
                                <td class="btop ral">$ <?= $row['price_unique'] ?></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="mariscos-images">
            <img src="images/cev1.jpg" class="mariscos-img">
            <img src="images/cev2.jpg" class="mariscos-img">
            <img src="images/cev3.jpg" class="mariscos-img">
            <img src="images/cev4.jpg" class="mariscos-img">
            <img src="images/cev5.jpg" class="mariscos-img">
        </div>
        <!-------------------------------------------------------------------------->
        <div id="botanas">
            <h1><?= $botanas['product'] ?></h1>
            <p><?= $botanas['description'] ?></p>
            <table>
                <?php foreach($botanas['subproducts'] as $row) { ?>
                    <tr>
                        <td class="btop"><li><?= $row['option'] ?></li></td>
                        <td class="btop ral">$ <?= $row['price_unique'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <section class="warning">
                <p>
                LOS CAMARONES SE LIMPIAN AL MOMENTO. AGRADECEMOS TU PACIENCIA
                </p>
            </section>
        </div>
        <!-------------------------------------------------------------------------->
        <div id="footer">
            <p>ILOVE MICHE 2024</p>
        </div>
        <!-------------------------------------------------------------------------->
    </body>
</html>