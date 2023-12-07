<?php

require __DIR__ . '/vendor/autoload.php';

$order_in_client = new Numinc\Logzi\Order_in_model(array(
	"api_key" => "REPLACE_WITH_YOUR_API_KEY"
));

// order bulk save
// a save_bulk végpont kétféle adat sémát is elfogad, egy hardcode-hoz hasonlót és egy egyszerűsítettet
$order_in_save_bulk = $order_in_client->save_bulk(array(
    "data" => array(
        "params" => array(
            "close" => 1, // automatikus lezárás, nem szükséges meghívni külön a close végpontot
        ),
        "data" => array(
            1 => array(
                "receipt_type_id" => 5, // bizonylat típusa (5 - vevői rendelés)
                "paymod_webname" =>  "Bármi", // fizetési mód webes elnevezése (ha nincs megadva alapértelmezett fizetési móddal kerül rögzítésre)
                "company_id" => 1, // kiállító cég azonosító (mindig 1)
                "company_user_id" => 1, // kiállító cég felhasználó azonosító (1-es értékkel a system user hozza létre, ezt használjuk az automatizmusokhoz)
                "company_billing_id" => 1, // kiállító cég számlázási címe
                "company_shipping_id" => 1, // kiállító cég szállítási címe
                "date_perform" =>  "2023-12-08", // teljesítés kelt
                "partner" => array(
                    "company_name" =>  "Minta cég 231007", // vevő cég neve
                    "taxcode" =>  "12345678-1-11", // vevő cég adószáma
                ),
                "partner_user" => array(
                    "name" =>  "Kapcsolat tartó", // vevő cég kapcsolattartó neve
                    "email" =>  "tarto@logzi.com", // vevő cég kapcsolattartó email címe
                    "telephone" =>  "+36 20 246 3590", // vevő cég kapcsolattartó telefonszáma
                ),
                "partner_billing" => array(
                    "address" =>  "Kapcsolat utca 11", // vevő cég számlázási címe
                    "zip" =>  "2500", // vevő cég számlázási címének irányítószáma
                    "city" =>  "Esztergom" // vevő cég számlázási címének városa
                ),
                "partner_shipping" => array(
                    "address" =>  "Kapcsolat utca 12", // vevő cég szállítási címe
                    "zip" =>  "2500", // vevő cég szállítási címének irányítószáma
                    "city" =>  "Esztergom" // vevő cég szállítási címének városa
                ),
                "currency" =>  "HUF", // pénznem ISO3 kódja
                "currency_exchange" => 0.00, // pénznem árfolyama, amennyiben eltér az alap devizától
                "comment_top" =>  "", // ügyfél megjegyzés
                "comment_bottom" =>  "", // belső megjegyzés
    
                "paymod_id" => 1, // fizetési mód azonosítója
                "shipping_id" => 1, // szállítási mód azonosítója
                "direct_shipping" => 0, // dropshipping igen/nem
                "shipping_partial_id" => 0, // részszállítás igen/nem
                "identify_customer" => "", // külső rendelés azonosító
    
                "item"  =>  array(
                    0 => array(
                        "product" => array(
                            "partnumber" =>  "egyedicikkszam-01", // termék vagy szolgáltatás cikkszáma
                            "name" =>  "Egyedi terméknév", // termék vagy szolgáltatás neve
                            "description" =>  "Egyedi termék leírás", // termék vagy szolgáltatás leírása
                            "price" =>  0.00,  // termék vagy szolgáltatás kedvezményes ára
                        ),
                        "store_id" => 1, // telephely azonosító
                        "quantity" => 1, // mennyiség
                        "tax_id" => 1, // tétel áfakulcs
                        "comment_top" => "", // tétel megjegyzés
                        "price" => 150.00, // tétel ára
                        "price_sale" =>  150.00,  // termék vagy szolgáltatás lista ára (Árlistába bekerül mint alap eladási ár)
                        "price_discount" =>  0.00,  // termék vagy szolgáltatás kedvezmény mértéke
                    )
                ),
            )
        ),
    )
));

print_r($order_in_save_bulk);
