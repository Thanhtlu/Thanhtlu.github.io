<?php 
namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder{
    public function run(){

        $data = [
            [
                'fullname' => 'le hoang a',
                'birthday' => '2002-08-10',
                'address' => 'hanoi',
            ],
            [
                'fullname' => 'le hoang b',
                'birthday' => '2002-07-17',
                'address' => 'sonla',
            ],
            [
                'fullname' => 'le hoang c',
                'birthday' => '2002-11-23',
                'address' => 'thaibinh',
            ],

        ];
        Student::insert($data);
    }
}