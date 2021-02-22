<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articulo;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // ..
            'name' => 'laravel',
            'email' => 'laravel@gmail.com',
            'password' => bcrypt('laravel')
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Hurricane',
            'codigo' => 'FRD-10',
            'categoria' => 'Franela deportiva',
            'talla' => 'Small',
            'precio' => '25',
            'file' => 'franelaumbro4.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Chapecoense',
            'codigo' => 'FRD-11',
            'categoria' => 'Franela deportiva',
            'talla' => 'Small',
            'precio' => '30',
            'file' => 'franelaumbro6.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Santos',
            'codigo' => 'FRD-12',
            'categoria' => 'Franela deportiva',
            'talla' => 'Medium',
            'precio' => '30',
            'file' => 'franelaumbro8.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Peru Absolute',
            'codigo' => 'FRD-13',
            'categoria' => 'Franela deportiva',
            'talla' => 'Large',
            'precio' => '35',
            'file' => 'franelaumbro9.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional West Ham deluxe',
            'codigo' => 'FRD-14',
            'categoria' => 'Franela deportiva',
            'talla' => 'Medium',
            'precio' => '28',
            'file' => 'franelaumbro10.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Werder Bremen',
            'codigo' => 'FRD-15',
            'categoria' => 'Franela deportiva',
            'talla' => 'Large',
            'precio' => '30',
            'file' => 'franelaumbro7.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Umbro deluxe',
            'codigo' => 'FRD-16',
            'categoria' => 'Franela deportiva',
            'talla' => 'Small',
            'precio' => '25',
            'file' => 'franelaumbro3.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Storm umbro',
            'codigo' => 'FRD-17',
            'categoria' => 'Franela deportiva',
            'talla' => 'Medium',
            'precio' => '27',
            'file' => 'franelaumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Umbro',
            'codigo' => 'FRD-18',
            'categoria' => 'Franela deportiva',
            'talla' => 'Large',
            'precio' => '26',
            'file' => 'franelaumbro2.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Crock Pro Umbro clasic',
            'codigo' => 'FRD-19',
            'categoria' => 'Franela deportiva',
            'talla' => 'Small',
            'precio' => '19',
            'file' => 'franelaumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Futsal Profesional Clasic',
            'codigo' => 'FTS-10',
            'categoria' => 'Bota futsal',
            'talla' => '# 7',
            'precio' => '15',
            'file' => 'futsalumbro8.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Futsal Thunder Profesional',
            'codigo' => 'FTS-11',
            'categoria' => 'Bota futsal',
            'talla' => '#6',
            'precio' => '17',
            'file' => 'futsalumbro4.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Umbro Hurricane Pro',
            'codigo' => 'FTS-12',
            'categoria' => 'Bota futsal',
            'talla' => '#8',
            'precio' => '20',
            'file' => 'futsalumbro7.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Umbro Profesional',
            'codigo' => 'FTS-13',
            'categoria' => 'Bota futsal',
            'talla' => '#8',
            'precio' => '18',
            'file' => 'futsalumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Championship Umbro Lte',
            'codigo' => 'FTS-14',
            'categoria' => 'Bota futsal',
            'talla' => '#6',
            'precio' => '14',
            'file' => 'futsalumbro2.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Deluxe Storm Umbro',
            'codigo' => 'FTS-15',
            'categoria' => 'Bota futsal',
            'talla' => '#7',
            'precio' => '15',
            'file' => 'futsalumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Kangaro Clasic',
            'codigo' => 'FTS-16',
            'categoria' => 'Bota futsal',
            'talla' => '#8',
            'precio' => '17',
            'file' => 'futsalumbro6.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Snow Profesional Umbro',
            'codigo' => 'FTS-17',
            'categoria' => 'Bota futsal',
            'talla' => '#9',
            'precio' => '20',
            'file' => 'futsalumbro3.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Flow Umbro',
            'codigo' => 'GRF-10',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Small',
            'precio' => '8',
            'file' => 'gorraumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Urban Umbro Pro',
            'codigo' => 'GRF-11',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Small',
            'precio' => '8',
            'file' => 'gorraumbro2.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Deluxe Sport Umbro',
            'codigo' => 'GRF-12',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Small',
            'precio' => '10',
            'file' => 'gorraumbro3.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Sky-Blue Clasic Umbro',
            'codigo' => 'GRF-13',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Medium',
            'precio' => '11',
            'file' => 'gorraumbro4.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'New Lte Deluxe',
            'codigo' => 'GRF-14',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Small',
            'precio' => '7',
            'file' => 'gorraumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Shadow New Umbro',
            'codigo' => 'GRF-15',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Medium',
            'precio' => '9',
            'file' => 'gorraumbro6.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Sun Profesional Shadow',
            'codigo' => 'GRF-16',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Medium',
            'precio' => '8',
            'file' => 'gorraumbro7.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Coral and Black Shadow',
            'codigo' => 'GRF-17',
            'categoria' => 'Gorra deportiva',
            'talla' => 'Small',
            'precio' => '8',
            'file' => 'gorraumbro8.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Water New Pro Umbro',
            'codigo' => 'MDP-10',
            'categoria' => 'Media deportiva',
            'talla' => 'Large',
            'precio' => '4',
            'file' => 'mediasumbro3.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Sky-Blue Shadow Umbro',
            'codigo' => 'MDP-11',
            'categoria' => 'Media deportiva',
            'talla' => 'Large',
            'precio' => '5',
            'file' => 'mediasumbro6.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Night Profesional Lte',
            'codigo' => 'MDP-12',
            'categoria' => 'Media deportiva',
            'talla' => 'Large',
            'precio' => '6',
            'file' => 'mediasumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Night Shadow Pro',
            'codigo' => 'MDP-13',
            'categoria' => 'Media deportiva',
            'talla' => 'Large',
            'precio' => '5',
            'file' => 'mediasumbro2.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Umbro Shadow',
            'codigo' => 'MDP-14',
            'categoria' => 'Media deportiva',
            'talla' => 'Large',
            'precio' => '5',
            'file' => 'mediasumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profesional Night Deluxe',
            'codigo' => 'MDP-15',
            'categoria' => 'Media deportiva',
            'talla' => 'Large',
            'precio' => '6',
            'file' => 'mediasumbro4.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Sweater Profit One',
            'codigo' => 'SPF-10',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '18',
            'file' => 'sudaderaumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Urban Profesional Sweater',
            'codigo' => 'SPF-11',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '16',
            'file' => 'sudaderaumbro3.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Pro Sweater',
            'codigo' => 'SPF-12',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '17',
            'file' => 'sudaderaumbro2.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Fitness Deluxe Sweater',
            'codigo' => 'SPF-13',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '19',
            'file' => 'sudaderaumbro4.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Umbro Pro Sweater',
            'codigo' => 'SPF-14',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '18',
            'file' => 'sudaderaumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Black Light New Umbro',
            'codigo' => 'SPF-15',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '16',
            'file' => 'sudaderaumbro6.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Red-Coral Hurricane Umbro',
            'codigo' => 'SPF-16',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '18',
            'file' => 'sudaderaumbro7.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Ultra Shadow Profesional Sweater',
            'codigo' => 'SPF-17',
            'categoria' => 'Sudadera deportiva',
            'talla' => 'Medium',
            'precio' => '17',
            'file' => 'sudaderaumbro8.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'RX8 Profesional Umbro',
            'codigo' => 'TPF-10',
            'categoria' => 'Taco profesional',
            'talla' => '#7',
            'precio' => '28',
            'file' => 'botaumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'RX9 Shadow New Umbro',
            'codigo' => 'TPF-11',
            'categoria' => 'Taco profesional',
            'talla' => '#8',
            'precio' => '27',
            'file' => 'botaumbro2.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Force Profesional Plus',
            'codigo' => 'TPF-12',
            'categoria' => 'Taco profesional',
            'talla' => '#7.5',
            'precio' => '30',
            'file' => 'botaumbro3.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Crimson-Red Umbro Pro',
            'codigo' => 'TPF-13',
            'categoria' => 'Taco profesional',
            'talla' => '#8',
            'precio' => '30',
            'file' => 'botaumbro4.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Hurricane Deluxe Umbro',
            'codigo' => 'TPF-14',
            'categoria' => 'Taco profesional',
            'talla' => '#6.5',
            'precio' => '26',
            'file' => 'botaumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Five Elements Pro Umbro',
            'codigo' => 'TPF-15',
            'categoria' => 'Taco profesional',
            'talla' => '#6',
            'precio' => '26',
            'file' => 'botaumbro6.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Next level Profesional Umbro',
            'codigo' => 'TPF-16',
            'categoria' => 'Taco profesional',
            'talla' => '#8',
            'precio' => '30',
            'file' => 'botaumbro7.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Profit Gold Version Umbro',
            'codigo' => 'TPF-17',
            'categoria' => 'Taco profesional',
            'talla' => '#8',
            'precio' => '30',
            'file' => 'botaumbro8.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Clasic Championship Umbro',
            'codigo' => 'TPF-18',
            'categoria' => 'Taco profesional',
            'talla' => '#5',
            'precio' => '20',
            'file' => 'botaumbro9.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'New Lights Night Profesional',
            'codigo' => 'TPF-19',
            'categoria' => 'Taco profesional',
            'talla' => '#8.5',
            'precio' => '32',
            'file' => 'botaumbro10.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Marathon Profesional Shoes',
            'codigo' => 'MPS-10',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#7',
            'precio' => '24',
            'file' => 'zapatillaumbro1.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Marathon Boss Chill',
            'codigo' => 'MPS-11',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#8',
            'precio' => '26',
            'file' => 'zapatillaumbro2.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Marathon Crock Profesional Shoes',
            'codigo' => 'MPS-12',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#6.5',
            'precio' => '25',
            'file' => 'zapatillaumbro3.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Umbro GRX500',
            'codigo' => 'MPS-13',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#7',
            'precio' => '28',
            'file' => 'zapatillaumbro4.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Umbro GRX900',
            'codigo' => 'MPS-14',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#8.5',
            'precio' => '31',
            'file' => 'zapatillaumbro5.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Umbro Storm Shadow',
            'codigo' => 'MPS-15',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#7',
            'precio' => '28',
            'file' => 'zapatillaumbro6.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Vulcano Profesional Shoes',
            'codigo' => 'MPS-16',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#8',
            'precio' => '30',
            'file' => 'zapatillaumbro7.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Snow Pro Umbro Shoes',
            'codigo' => 'MPS-17',
            'categoria' => 'Zapatilla marathon',
            'talla' => '#6',
            'precio' => '26',
            'file' => 'zapatillaumbro8.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Short FRZ210',
            'codigo' => 'SRT-10',
            'categoria' => 'Short deportivo',
            'talla' => 'Small',
            'precio' => '12',
            'file' => 'shortumbro1.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Short PFZ200',
            'codigo' => 'SRT-11',
            'categoria' => 'Short deportivo',
            'talla' => 'Small',
            'precio' => '13',
            'file' => 'shortumbro2.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Animals Profesional Short',
            'codigo' => 'SRT-12',
            'categoria' => 'Short deporitvo',
            'talla' => 'Medium',
            'precio' => '16',
            'file' => 'shortumbro3.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Short GRX1000',
            'codigo' => 'SRT-13',
            'categoria' => 'Short deportivo',
            'talla' => 'Medium',
            'precio' => '15',
            'file' => 'shortumbro4.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Litle Aqua Profesional Umbro',
            'codigo' => 'SRT-14',
            'categoria' => 'Short deportivo',
            'talla' => 'Small',
            'precio' => '14',
            'file' => 'shortumbro5.jpg'
        ]);

        DB::table('articulos')->insert([
            'nombre' => 'Racer Short Pro',
            'codigo' => 'SRT-15',
            'categoria' => 'Short deportivo',
            'talla' => 'Large',
            'precio' => '17',
            'file' => 'shortumbro6.jpeg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Clasic Profesional Bost',
            'codigo' => 'SRT-16',
            'categoria' => 'Short deportivo',
            'talla' => 'Medium',
            'precio' => '17',
            'file' => 'shortumbro7.jpg'
        ]);


        DB::table('articulos')->insert([
            'nombre' => 'Deluxe Orange Paradise',
            'codigo' => 'SRT-17',
            'categoria' => 'Short deportivo',
            'talla' => 'Large',
            'precio' => '20',
            'file' => 'shortumbro8.jpg'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Franela deportiva'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Gorra deportiva'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Sudadera deportiva'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Bota futsal'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Taco profesional'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Short deportivo'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Media deportiva'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Zapatilla marathon'
        ]);
        
        /*User::factory(20)->create();
        Articulo::factory(50)->create();*/

    }
}