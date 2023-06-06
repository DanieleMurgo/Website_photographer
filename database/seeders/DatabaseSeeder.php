<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Client;
use App\Models\Worker;
use App\Models\Project;
use App\Models\Workers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Utente test
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('123456789'),
        // ]);

        // Progetti

        // Project::factory()->create([
        //     'name' => 'Gucci adv',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit nesciunt voluptates molestiae porro sit placeat hic sint ipsum ratione debitis, magni ab harum ad praesentium quo totam minima? Nesciunt?',
        //     'advertorial_on'=> 'Nicotine Magazine',
        //     'client' => 'Gucci',
        //     'Year' => 2022,
        // ]);

        // Project::factory()->create([
        //     'name' => 'Cadmea',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit nesciunt voluptates molestiae porro sit placeat hic sint ipsum ratione debitis, magni ab harum ad praesentium quo totam minima? Nesciunt?',
        //     'advertorial_on'=> 'Lorem ipsum dolor',
        //     'client' => 'Lorem',
        //     'Year' => 2021,
        // ]);

        // Project::factory()->create([
        //     'name' => 'Vivetta',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit nesciunt voluptates molestiae porro sit placeat hic sint ipsum ratione debitis, magni ab harum ad praesentium quo totam minima? Nesciunt?',
        // ]);

        // Project::factory()->create([
        //     'name' => 'Marco De Vincenzo',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit nesciunt voluptates molestiae porro sit placeat hic sint ipsum ratione debitis, magni ab harum ad praesentium quo totam minima? Nesciunt?',
        // ]);
        // Project::factory()->create([
        //     'name' => 'Moshions',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit nesciunt voluptates molestiae porro sit placeat hic sint ipsum ratione debitis, magni ab harum ad praesentium quo totam minima? Nesciunt?',
        // ]);
        // Project::factory()->create([
        //     'name' => 'Mui Mui',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugit nesciunt voluptates molestiae porro sit placeat hic sint ipsum ratione debitis, magni ab harum ad praesentium quo totam minima? Nesciunt?',
        // ]);

        //workers
        // Worker::factory()->create([
        //     'name' => 'Sarah',
        //     'surname' => 'Venturini',
        //     'role' => 'Creative,Art and Fashion Director',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Giammarco',
        //     'surname' => 'Marasco',
        //     'role' => 'Creative,Art and Fashion Director',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Benedetta',
        //     'surname' => 'Costa',
        //     'role' => 'Junior Fashion Coordinator and Producer',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Claudia',
        //     'surname' => 'Chiarolanza',
        //     'role' => 'Junior Fashion Coordinator and Producer',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Elena',
        //     'surname' => 'Schlenk',
        //     'role' => 'Junior Fashion Coordinator and Producer',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Matei',
        //     'surname' => 'Octav',
        //     'role' => 'Junior Fashion Coordinator and Producer',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Dario',
        //     'surname' => 'Cerisano',
        //     'role' => 'Junior Fashion Coordinator and Producer',
        // ]);
        // Worker::factory()->create([
        //     'name' => 'Paoli',
        //     'surname' => 'De Luca',
        //     'role' => 'Junior Fashion Coordinator and Producer',
        // ]);


        //Clients
        $clients = [ 'Gucci', 'Prada', 'Miu Miu', 'Vivetta', 'Marco De Vincenzo', 'N°21', 'Pietro Franceschini', 'Arianna Fabiano', 'Matisa', 'Antonioli', 'Antonia', 'Superga', 'Kappa', 'Khrisjoy', 'Coliac', 'Nico Giani', 'DEFAIENCE', 'Istituto Polimoda', 'Museo di Scienze Naturali La Specola', 'Casa Museo Remo Brindisi', 'Palazzo Strozzi', 'Eduardo Secci Gallery', 'Aria Art Gallery', 'Galleria il Ponte', 'Mudec', 'Palazzo Reale', 'Memphis Studio', 'Camp Design Gallery', 'A Arte Studio Invernizzi', 'Galleria Spazienne', 'Galleria Bellucci', 'Cassina Art Projects', 'The Flat by Massimo Carasi', 'GAMeC', 'Labirinto della Masone', 'Museo Madre', 'Vogue Italia & Portugal', "L'Officiel Italia", 'SLEEK', 'NicOtiNe', 'METAL', 'Hunger Magazine', 'T-MAG', 'OE Magazine', 'unFLOP', 'LE MILE', 'Collectible DRY', 'Youthies', 'PERSONNE' ]; 
        foreach ($clients as $client) { 
            Client::factory()->create([ 
                'name' => $client 
            ]); }

    }
}