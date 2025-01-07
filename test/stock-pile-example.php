<?php

require __DIR__ . '/vendor/autoload.php';

$stock_pile_client = new Numinc\Logzi\Stock_pile_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// 0-10 termék lekérdezése
$stock_pile_list = $stock_pile_client->get_list(array(
    "list_offset" => 0,
    "list_count" => 10
));
print_r($stock_pile_list);

// 10-20 termék lekérdezése
$stock_pile_list = $stock_pile_client->get_list(array(
    "list_offset" => 10,
    "list_count" => 10
));
print_r($stock_pile_list);

