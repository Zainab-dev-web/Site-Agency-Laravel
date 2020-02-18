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
        'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur at ducimus odit ipsa optio harum porro quo hic, reiciendis enim maiores, nihil itaque doloribus ut, nesciunt fugit maxime dolorum architecto!",
        ] , 
        [
            'titre' => 'portfolio-2',  
            'URL' => "img/portfolio/02-full.jpg",  
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, sunt veniam culpa molestias porro perferendis est placeat libero dignissimos corporis aliquid nesciunt perspiciatis, commodi ab laborum ut architecto minus officiis. ",
        ],
        [
            'titre' => 'portfolio-3',  
            'URL' => "img/portfolio/03-full.jpg",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem quibusdam cumque blanditiis perspiciatis, quia quod illo harum esse! Optio beatae reiciendis magni sint voluptates cupiditate nisi quas harum tempore consequatur. ",
        ],

        
        ]);  
    }  
    
}
