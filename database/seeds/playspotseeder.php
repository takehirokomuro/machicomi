<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class playspotseeder extends CsvSeeder
{
    public function __construct()
    {
    $this->table = 'playspots';
    $this->filename = base_path().'/database/seeds/csvs/playspot.csv';
    }
    
    public function run()
    {
        DB::disableQueryLog();
        DB::table($this->table)->truncate();
        parent::run();
    }
}
