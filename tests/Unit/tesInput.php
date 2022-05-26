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
        $response->assertViewIs('welcome');
    }
    public function test_input_data(): void
    {
        $response=$this->post(route('kalkulator'),[
           "nama"=>"Gabrielle Evan Farrel",
           "tanggal"=>"2022-05-26"
        ]);
        $response->assertStatus(200);
        $response->assertViewIs('result');
    }
    public function test_input_data_negatif(): void
    {
        $response=$this->post(route('kalkulator'),[
            "nama"=>"Gabrielle Evan Farrel",
            "tanggal"=>"2009-05-26"
        ]);
        $response->assertStatus(200);
    }
    public function test_result(): void
    {
        $response=$this->post(route('kalkulator'),[
            "nama"=>"Gabrielle Evan Farrel",
            "tanggal"=>"2022-05-26"
        ]);
        $data=$response->original->gatherData();
        $this->assertSame("Gabrielle Evan Farrel",$data['hasil']['nama']);
        $this->assertSame("Kamis Pahing 26 Mei 2022",$data['hasil']['tanggal']);
        $this->assertSame("Sabtu Wage 28 Mei 2022",$data['hasil']['tiga']);
        $this->assertSame("Rabu Pon 01 Juni 2022",$data['hasil']['tujuh']);
        $this->assertSame("Selasa Pahing 05 Juli 2022",$data['hasil']['empatpuluh']);
        $this->assertSame("Senin Wage 05 September 2022",$data['hasil']['seratus']);
        $this->assertSame("Jumat Pahing 26 Mei 2023",$data['hasil']['pendhakpisan']);
        $this->assertSame("Minggu Pon 26 Mei 2024",$data['hasil']['pendhakkalih']);
        $this->assertSame("Sabtu Pon 26 April 2025",$data['hasil']['seribu']);
    }
}
