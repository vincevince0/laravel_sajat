<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maker;

class MakerSeeder extends Seeder
{

    const ITEMS = [
        'Koenigsegg',
        'BMW',
        'Audi',
        'Mercedes',
        'Citröen',
        'Suzuki',
        'Bugatti',
        'Pagani',
        'Nissan',
        'Peugeot',
        'Porsche',
        'Fiat',
        'Lexus',
        'Cadillac',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $item)
        {
            $maker=new Maker();
            $maker->name=$item;
            $maker->logo=null;
            $maker->save();
        }
    }
}
