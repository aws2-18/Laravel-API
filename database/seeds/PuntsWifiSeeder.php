<?php

use Illuminate\Database\Seeder;
use App\Wifi;

class PuntsWifiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$row = 1;
		if (($handle = fopen("punts_wifi.csv", "r")) !== FALSE) {
			$columnes = fgetcsv($handle, 1000, ",");
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		        $row++;
		        $wifi = new Wifi();
		        $wifi->codigocapa = $data[0];
		        $wifi->capagenerica = $data[1];
		        $wifi->nombrecapa = $data[2];
		        $wifi->equipamiento = $data[3];
		        $wifi->nombredistricto = $data[4];
		        $wifi->nombrebarrio = $data[5];
		        $wifi->direccion = $data[6];
		        $wifi->save();
		 
		    }
		    fclose($handle);
		}
    }
}
