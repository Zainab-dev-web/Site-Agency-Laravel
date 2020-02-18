<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('portfolios')->insert([
            [
            'titre' => 'portfolio-1',  
        'URL' => "img/portfolio/01-full.jpg",  
        'description' => "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!",
        ] , 
        [
            'titre' => 'portfolio-2',  
            'URL' => "img/portfolio/02-full.jpg",  
            'description' => "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo! ",
        ],
        [
            'titre' => 'portfolio-3',  
            'URL' => "img/portfolio/03-full.jpg",
            'description' => "Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo! ",
        ],

        
        ]);  
    }  
    
}
