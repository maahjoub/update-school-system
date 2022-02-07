<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassromTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('classrooms')->delete();
        $classrooms = [
          ['en'=> 'First grade', 'ar'=> 'الصف الاول'],
          ['en'=> 'Second grade', 'ar'=> 'الصف الثاني'],
          ['en'=> 'Third grade', 'ar'=> 'الصف الثالث'],
          ['en'=> 'fourth grade ', 'ar'=> 'الصف الرابع'],
          ['en'=> 'fifth grade', 'ar'=> 'الصف الخامس'],
          ['en'=> 'Sixth grade', 'ar'=> 'الصف السادس'],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
            'Name_Class' => $classroom,
            'Grade_id' => Grade::all()->unique()->random()->id
            ]);
        }
    }

        

    }