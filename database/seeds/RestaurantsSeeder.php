<?php

use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class RestaurantsSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'restaurants';
        $this->filename = base_path().'/database/seeds/csvs/takeeats_kyoto.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        DB::table($this->table)->truncate();
        parent::run();
    }
}
