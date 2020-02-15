<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class testseeder extends CsvSeeder
{
    public function __construct()
    {
    $this->table = 'tests';
    $this->filename = base_path().'/database/seeds/csvs/test.csv';
    }
    
    public function run()
    {
        DB::disableQueryLog();
        DB::table($this->table)->truncate();
        parent::run();
    }
}
