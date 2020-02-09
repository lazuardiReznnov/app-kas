<?php
defined('BASEPATH') or exit('No direct script access allowed');
class pustaka
{
    //Fungsi Format Rupiah
    public function rupiah($angka)
    {
        $rp = "Rp. " . number_format($angka, 0, ',', '.');
        return $rp;
    }

    //Fungsi Konversi tanggal Indonesia
    function tgl_indo($tgl)	{
        $tanggal  = substr($tgl, 8, 2);
        $bulan	  =	get_bulan(substr($tgl, 5, 2));
        $tahun	  =	substr($tgl , 0, 4);
        
        return $tanggal.' '.$bulan.' '.$tahun;
    }
    
    function get_bulan($bln)	{
        switch($bln){
            case 1  :
                return	"januari";
                break;
            case 2  :
                return 	"Februari";
                break;
            case 3  :
                return	"Maret";
                break;
            case 4  :
                return	"April";
                break;
            case 5  :
                return  "Mei";
                break;
            case 6  :
                return	"Juni";
                break;
            case 7  :
                return	"Juli";
                break;
            case 8  :
                return	"Agustus";
                break;
            case 9  :
                return	"September";
                break;
            case 10 :
                return	"Oktober";
                break;
            case 11	:
                return	"November";
                break;
            case 12	:
                return	"Desember";
                break;			
            }	
        }
        //konversi format tanggal dd-mm-yyyy
        public function toDMY($dt, $sep = '-')	{
            list($thn, $bln, $tgl) = explode($sep, $dt);
            return $tgl.$sep.$bln.$sep.$thn;
        }
        //konversi format tanggal yyyy-mm-dd
        public function toYMD($dt, $sep = '-')	{
            list($tgl, $bln, $thn) = explode($sep, $dt);
            return $thn.$sep.$bln.$sep.$tgl;
        }
}
