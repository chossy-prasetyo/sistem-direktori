<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Explorer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
    	Explorer::insert([
    		['level' => 1, 'parent'	=> NULL, 'type' => 'folder', 'name' => 'Fundamental', 'file' => NULL, 'order' => 1],
    		['level' => 2, 'parent'	=> 1, 'type' => 'file', 'name' => 'HTML', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 2, 'parent' => 1, 'type' => 'file', 'name' => 'CSS', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 2, 'parent'	=> 1, 'type' => 'folder', 'name' => 'Javascript', 'file' => NULL, 'order' => 3],
    		['level' => 3, 'parent'	=> 4, 'type' => 'file', 'name' => 'Fundamental', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 3, 'parent'	=> 4, 'type' => 'file', 'name' => 'OOP', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 3, 'parent'	=> 4, 'type' => 'folder', 'name' => 'DOM', 'file' => NULL, 'order' => 3],
    		['level' => 3, 'parent'	=> 4, 'type' => 'folder', 'name' => 'Async', 'file' => NULL, 'order' => 4],
    		['level' => 1, 'parent'	=> NULL, 'type' => 'folder', 'name' => 'Frontend', 'file' => NULL, 'order' => 2],
    		['level' => 2, 'parent'	=> 9, 'type' => 'file', 'name' => 'React', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 2, 'parent'	=> 9, 'type' => 'file', 'name' => 'Vue', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 2, 'parent'	=> 9, 'type' => 'file', 'name' => 'Angular', 'file' => 'explorer.pdf', 'order' => 3],
    		['level' => 2, 'parent'	=> 9, 'type' => 'file', 'name' => 'Svelte', 'file' => 'explorer.pdf', 'order' => 4],
    		['level' => 2, 'parent'	=> 9, 'type' => 'file', 'name' => 'Tailwind', 'file' => 'explorer.pdf', 'order' => 5],
    		['level' => 2, 'parent'	=> 9, 'type' => 'file', 'name' => 'Bootstrap', 'file' => 'explorer.pdf', 'order' => 6],
    		['level' => 1, 'parent'	=> NULL, 'type' => 'folder', 'name' => 'Backend', 'file' => NULL, 'order' => 3],
    		['level' => 2, 'parent'	=> 16, 'type' => 'folder', 'name' => 'Nodejs', 'file' => NULL, 'order' => 1],
    		['level' => 3, 'parent'	=> 17, 'type' => 'file', 'name' => 'Express', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 3, 'parent'	=> 17, 'type' => 'file', 'name' => 'Nest', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 3, 'parent'	=> 17, 'type' => 'file', 'name' => 'Hapi', 'file' => 'explorer.pdf', 'order' => 3],
    		['level' => 3, 'parent'	=> 17, 'type' => 'file', 'name' => 'Koa', 'file' => 'explorer.pdf', 'order' => 4],
    		['level' => 3, 'parent'	=> 17, 'type' => 'file', 'name' => 'Adonis', 'file' => 'explorer.pdf', 'order' => 5],
    		['level' => 2, 'parent'	=> 16, 'type' => 'folder', 'name' => 'PHP', 'file' => NULL, 'order' => 2],
    		['level' => 3, 'parent'	=> 23, 'type' => 'folder', 'name' => 'Laravel', 'file' => NULL, 'order' => 1],
    		['level' => 3, 'parent'	=> 23, 'type' => 'file', 'name' => 'CodeIgniter', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 3, 'parent'	=> 23, 'type' => 'file', 'name' => 'Symfony', 'file' => 'explorer.pdf', 'order' => 3],
    		['level' => 3, 'parent'	=> 23, 'type' => 'file', 'name' => 'Yii', 'file' => 'explorer.pdf', 'order' => 4],
    		['level' => 2, 'parent'	=> 16, 'type' => 'file', 'name' => 'GO', 'file' => 'explorer.pdf', 'order' => 3],
    		['level' => 2, 'parent'	=> 16, 'type' => 'folder', 'name' => 'Java', 'file' => NULL, 'order' => 4],
    		['level' => 3, 'parent'	=> 29, 'type' => 'file', 'name' => 'Spring', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 3, 'parent'	=> 29, 'type' => 'file', 'name' => 'Grails', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 2, 'parent'	=> 16, 'type' => 'folder', 'name' => 'Python', 'file' => NULL, 'order' => 5],
    		['level' => 3, 'parent'	=> 32, 'type' => 'file', 'name' => 'Django', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 3, 'parent'	=> 32, 'type' => 'file', 'name' => 'Flask', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 3, 'parent'	=> 32, 'type' => 'file', 'name' => 'Pyramid', 'file' => 'explorer.pdf', 'order' => 3],
    		['level' => 2, 'parent'	=> 16, 'type' => 'folder', 'name' => 'Database', 'file' => NULL, 'order' => 6],
    		['level' => 3, 'parent'	=> 36, 'type' => 'file', 'name' => 'MySQL', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 3, 'parent'	=> 36, 'type' => 'file', 'name' => 'PostgreSQL', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 3, 'parent'	=> 36, 'type' => 'file', 'name' => 'MongoDB', 'file' => 'explorer.pdf', 'order' => 3],
    		['level' => 3, 'parent'	=> 36, 'type' => 'file', 'name' => 'Redis', 'file' => 'explorer.pdf', 'order' => 4],
    		['level' => 3, 'parent'	=> 36, 'type' => 'file', 'name' => 'Elasticsearch', 'file' => 'explorer.pdf', 'order' => 5],
    		['level' => 1, 'parent'	=> NULL, 'type' => 'folder', 'name' => 'Lainnya', 'file' => NULL, 'order' => 4],
    		['level' => 2, 'parent'	=> 42, 'type' => 'file', 'name' => 'Git', 'file' => 'explorer.pdf', 'order' => 1],
    		['level' => 2, 'parent'	=> 42, 'type' => 'file', 'name' => 'Docker', 'file' => 'explorer.pdf', 'order' => 2],
    		['level' => 2, 'parent'	=> 42, 'type' => 'file', 'name' => 'Kubernetes', 'file' => 'explorer.pdf', 'order' => 3],
            ['level' => 4, 'parent' => 7, 'type' => 'file', 'name' => 'Vanilla Javascript', 'file' => 'explorer.pdf', 'order' => 1],
            ['level' => 4, 'parent' => 7, 'type' => 'file', 'name' => 'jQuery', 'file' => 'explorer.pdf', 'order' => 2],
            ['level' => 4, 'parent' => 24, 'type' => 'file', 'name' => 'Route', 'file' => 'explorer.pdf', 'order' => 1],
            ['level' => 4, 'parent' => 24, 'type' => 'file', 'name' => 'Blade Template', 'file' => 'explorer.pdf', 'order' => 2],
            ['level' => 4, 'parent' => 24, 'type' => 'file', 'name' => 'Migration', 'file' => 'explorer.pdf', 'order' => 3],
            ['level' => 4, 'parent' => 24, 'type' => 'file', 'name' => 'Eloquent ORM', 'file' => 'explorer.pdf', 'order' => 4],
            ['level' => 4, 'parent' => 24, 'type' => 'file', 'name' => 'Collection', 'file' => 'explorer.pdf', 'order' => 5],
            ['level' => 4, 'parent' => 24, 'type' => 'file', 'name' => 'Carbon', 'file' => 'explorer.pdf', 'order' => 6],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'Arrow Function', 'file' => 'explorer.pdf', 'order' => 1],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'Destructuring', 'file' => 'explorer.pdf', 'order' => 2],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'Callback', 'file' => 'explorer.pdf', 'order' => 3],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'AJAX', 'file' => 'explorer.pdf', 'order' => 4],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'Promise', 'file' => 'explorer.pdf', 'order' => 5],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'Fetch', 'file' => 'explorer.pdf', 'order' => 6],
            ['level' => 4, 'parent' => 8, 'type' => 'file', 'name' => 'Async Await', 'file' => 'explorer.pdf', 'order' => 7]
    	]);
    }
}
