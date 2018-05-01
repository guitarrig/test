<?php

use Illuminate\Database\Seeder;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Иван', 'Василий', 'Владимир', 'Валерий', 'Игорь', 'Виталий', 'Сергей', 'Александр', 'Алексей'];
       
       	$surname = ['Иванов', 'Васильев', 'Владов', 'Петров', 'Сидоров', 'Алексеев', 'Пупкин', 'Димитрашко', 'Белый'];
       
        $patronymic = ['Иванович', 'Василиевич', 'Владимирович', 'Валериевич', 'Игоревич', 
        				'Виталиевич', 'Сергеевич', 'Александрович', 'Алексеeвич'];

        $position = ['Администратор', 'Системный админ', 'Инженер', 'Программист', 
        			'Бухгалтер', 'Менеджер', 'Блогер', 'Дизайнер'];

        $date = rand(1262055681, 1524859472); 

	
    	DB::table('workers')->insert([
    		'name' => $name[array_rand($name,1)],
    		'surname' => $surname[array_rand($surname,1)],
    		'patronymic' => $patronymic[array_rand($patronymic,1)],
    		'position' => 'General Director',
    		'work_start' => date('Y-m-d', $date),
    		'salary' => 100000,
    		'parent_id' => 0
    	]);

    	for ($i=0; $i <5; $i++) { 

    		$date = rand(1262055681, 1524859472); 

    		DB::table('workers')->insert([
    		'name' => $name[array_rand($name,1)],
    		'surname' => $surname[array_rand($surname,1)],
    		'patronymic' => $patronymic[array_rand($patronymic,1)],
    		'position' => $position[array_rand($position,1)],
    		'work_start' => date('Y-m-d', $date),
    		'salary' => rand(50000,90000),
    		'parent_id' => 1
    		]);
    	}


    	for ($i=0; $i < 50 ; $i++) { 

    		$date = rand(1262055681, 1524859472); 

    		DB::table('workers')->insert([
    		'name' => $name[array_rand($name,1)],
    		'surname' => $surname[array_rand($surname,1)],
    		'patronymic' => $patronymic[array_rand($patronymic,1)],
    		'position' => $position[array_rand($position,1)],
    		'work_start' => date('Y-m-d', $date),
    		'salary' => rand(20000,50000),
    		'parent_id' => rand(2,6)
    		]);
    	}




    	for ($i=0; $i < 1000 ; $i++) { 

    		$date = rand(1262055681, 1524859472); 

    		DB::table('workers')->insert([
    		'name' => $name[array_rand($name,1)],
    		'surname' => $surname[array_rand($surname,1)],
    		'patronymic' => $patronymic[array_rand($patronymic,1)],
    		'position' => $position[array_rand($position,1)],
    		'work_start' => date('Y-m-d', $date),
    		'salary' => rand(10000,20000),
    		'parent_id' => rand(7,56)
    		]);
    	}

    	for ($i=0; $i < 50000 ; $i++) { 

    		$date = rand(1262055681, 1524859472); 

    		DB::table('workers')->insert([
    		'name' => $name[array_rand($name,1)],
    		'surname' => $surname[array_rand($surname,1)],
    		'patronymic' => $patronymic[array_rand($patronymic,1)],
    		'position' => $position[array_rand($position,1)],
    		'work_start' => date('Y-m-d', $date),
    		'salary' => rand(8000,10000),
    		'parent_id' => rand(57,1056)
    		]);
    	}

	}
}
