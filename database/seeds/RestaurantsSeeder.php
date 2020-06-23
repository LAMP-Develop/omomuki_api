<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class RestaurantsSeeder extends CsvSeeder
{
    // public function __construct()
    // {
    //     $this->table = 'restaurants';
    //     $this->filename = base_path().'/database/seeds/csvs/takeeats_kyoto.csv';
    // }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = new SplFileObject('database/seeds/csvs/takeeats_kyoto.csv');
        $file->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );
        $list = [];
        $now = Carbon::now();
        foreach ($file as $line) {
            $list[] = [
                "name" => $line[0],
                "cuisine_genre_id" => $line[1],
                "tel" => $line[2],
                "zipcode" => $line[3],
                "pref_id" => $line[4],
                "address1" => $line[5],
                "address2" => $line[6],
                "gmap_url" => $line[7],
                "access" => $line[8],
                "business_hours" => $line[9],
                "regular_holiday" => $line[10],
                "parking_flag" => $line[11],
                "parking_text" => $line[12],
                "credit_card" => $line[13],
                "electronic_money" => $line[14],
                "hp_url" => $line[15],
                "gnavi_url" => $line[16],
                "tabelog_url" => $line[17],
                "demaecan_url" => $line[18],
                "ubereats_url" => $line[19],
                "created_at" => $now,
                "updated_at" => $now,
            ];
        }
        DB::table("restaurants")->insert($list);
    }
}
