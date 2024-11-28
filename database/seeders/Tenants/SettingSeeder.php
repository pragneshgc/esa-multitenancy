<?php

namespace Database\Seeders\Tenants;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::insert([
            [
                "id" => 1,
                "key" => "intvalue",
                "name" => "Interger Value",
                "value" => "10",
                "details" => NULL,
                "type" => "int",
                "order" => 0,
                "group" => "general",
            ],
            [
                "id" => 2,
                "key" => "floatvalue",
                "name" => "Float Value",
                "value" => "12.55",
                "details" => NULL,
                "type" => "float",
                "order" => 1,
                "group" => "general",
            ],
            [
                "id" => 3,
                "key" => "stringvalue",
                "name" => "String Value",
                "value" => "hwllo world",
                "details" => NULL,
                "type" => "string",
                "order" => 2,
                "group" => "general",
            ],
            [
                "id" => 4,
                "key" => "boolvalue",
                "name" => "Bool Value",
                "value" => "0",
                "details" => NULL,
                "type" => "bool",
                "order" => 3,
                "group" => "general",
            ],
            [
                "id" => 5,
                "key" => "jsonvalue",
                "name" => "Json Value",
                "value" => json_encode([
                    "City" => "Maarssen",
                    "Countrycode" => "NL",
                    "Street" => "Industrieweg 4",
                    "Zipcode" => "3606AS",
                    "CustomerCode" => "KJZN",
                    "CustomerNumber" => "10866506",
                    "ContactPerson" => "Lars",
                    "Name" => "Verkleij",
                    "Email" => "l.a.verkleij@apotheeklife.com",
                    "customer_code" => "10866506",
                    "customer_number" => "0850644162"
                ]),
                "details" => NULL,
                "type" => "json",
                "order" => 4,
                "group" => "general",
            ],
        ]);
    }
}
