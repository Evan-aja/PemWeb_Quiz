<?php

namespace Tests\Unit;

use Tests\TestCase;

class tesInput extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_home_page(): void
    {
        $response=$this->get(route('welcome'));
        $response->assertStatus(200);
    }
    public function test_input_data(): void
    {
        $response=$this->post(route('kalkulator'),[
           "nama"=>"Gabrielle Evan Farrel",
           "tanggal"=>"2022-05-26"
        ]);
        $response->assertStatus(200);
    }
    public function test_input_data_negatif(): void
    {
        $response=$this->post(route('kalkulator'),[
            "nama"=>"Gabrielle Evan Farrel",
            "tanggal"=>"2009-05-26"
        ]);
        $response->assertStatus(200);
    }
}
