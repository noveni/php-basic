<?php
require_once './vendor/fzaninotto/faker/src/autoload.php';
require_once './vendor/jzonta/faker-restaurant/src/Provider/en_US/Restaurant.php';

$faker = Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
$recipes = [];
for ($i = 0; $i < 30; $i++) {
    $recipes[] = makeRecipe($faker);
}
// $recipes = [
//     'title' => '',
//     'content' => '',
//     'ingredients' => [
//         [
//             'product' => '',
//             'qty' => '',
//             'symbole' => ''
//         ]
//     ],
//     'specifications' => [
//         'duration' => 0,
//         'qty_person' => 0,
//         'price' => 0,
//     ]

// ];

function makeRecipe($faker) {
    return [
        'title' => $faker->foodName() . ' ' . $faker->state,
        'content' => $faker->realText(200),
        'ingredients' => makeIngredient(rand(7, 20), $faker),
        'specifications' => [
            'duration' => $faker->randomElements(array(30, 45, 60, 120, 15))[0],
            'qty_person' => $faker->randomElements(array(2, 4, 6, 8))[0],
            'price' => rand(4, 30),
        ]
    ];
}

function makeIngredient($nbr, $faker) {
    $ingredients = [];
    for($i = 0; $i < $nbr; $i++ ){
        $ingredients[] = [
            'product' => $faker->word,
            'qty' => $faker->randomNumber(2),
            'symbol' => $faker->randomElements(array('ml', 'g', 'dl'))[0]
        ];
    }
    return $ingredients;
}
// echo "<pre>";
// var_dump($recipes);
// echo "</pre>";
$fp = fopen('recipes.json', 'w');
fwrite($fp, json_encode($recipes));
fclose($fp);
?>