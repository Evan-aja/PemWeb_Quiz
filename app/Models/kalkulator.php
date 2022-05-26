<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class kalkulator extends Model
{
    use HasFactory;
    private function Tanggal(string $dates){
        $pasaran=array('Legi','Pahing','Pon','Wage','Kliwon');
        $date="2010-11-19";
        $date1=strtotime($date);
        $date2=strtotime($dates);
        $pasar=(abs($date2-$date1)/86400)%5;
        $hari=date_format(date_create($dates),'l');
        $hariint=date_format(date_create($dates),'d');
        $bulan=date_format(date_create($dates),'F');
        $tahun=date_format(date_create($dates),'Y');
        switch ($hari){
            case "Sunday":$hari="Minggu";break;
            case "Monday":$hari="Senin";break;
            case "Tuesday":$hari="Selasa";break;
            case "Wednesday":$hari="Rabu";break;
            case "Thursday":$hari="Kamis";break;
            case "Friday":$hari="Jumat";break;
            case "Saturday":$hari="Sabtu";break;
            default:break;
        }
        switch($bulan){
            case "January":$bulan="Januari";break;
            case "February":$bulan="Februari";break;
            case "March":$bulan="Maret";break;
            case "April":$bulan="April";break;
            case "May":$bulan="Mei";break;
            case "June":$bulan="Juni";break;
            case "July":$bulan="Juli";break;
            case "August":$bulan="Agustus";break;
            case "September":$bulan="September";break;
            case "October":$bulan="Oktober";break;
            case "November":$bulan="November";break;
            case "December":$bulan="Desember";break;
            default:break;
        }
        return $hari." ".$pasaran[$pasar]." ".$hariint." ".$bulan." ".$tahun;
    }
    public function TanggalMeninggal(string $date): string
    {
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function Tanggal3Hari(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("2 Days"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function Tanggal7Hari(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("6 Days"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function Tanggal40Hari(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("1 Month 9 Days"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function Tanggal100Hari(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("3 Months 9 Days"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function TanggalPendhakPisan(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("1 Year"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function TanggalPendhakKalih(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("2 Years"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
    public function Tanggal1000Hari(string $date): string
    {
        $dates=date_create($date);
        date_add($dates,date_interval_create_from_date_string("35 Months"));
        $date=date_format($dates,"Y-m-d");
        $hari=$this->Tanggal($date);
        return $hari;
    }
}
