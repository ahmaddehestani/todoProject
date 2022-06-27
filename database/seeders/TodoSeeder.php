<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("todos")->insert([
            [
        "title" => "study",
            "description" => "study php",
            "status" => "pending"
            ],
            [
               
              
                "title" => "study2",
                "description" => "study php2",
                "status" => "pending2"
                ],
                [
                   
                    
                  
                    "title" => "study2",
                    "description" => "study php2",
                    "status" => "pending2"
                    ],
            ]);
    }
}
