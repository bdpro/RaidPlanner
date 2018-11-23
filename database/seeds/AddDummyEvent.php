<?php

use Illuminate\Database\Seeder;
use App\Event;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $data = [
                ['nom_raid'=>'Demo Event-1', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-12'],
                ['nom_raid'=>'Demo Event-2', 'start_date'=>'2017-09-11', 'end_date'=>'2017-09-13'],
                ['nom_raid'=>'Demo Event-3', 'start_date'=>'2017-09-14', 'end_date'=>'2017-09-14'],
                ['nom_raid'=>'Demo Event-4', 'start_date'=>'2017-09-17', 'end_date'=>'2017-09-17'],
            ];
            foreach ($data as $key => $value) {
                Event::create($value);
            }
    }
}
