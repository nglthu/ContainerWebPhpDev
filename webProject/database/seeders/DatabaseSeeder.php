<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User1233',
            'email' => 'test@example.com233222',
        ]);*/

        Book::create([
            'BookID' => 'b12',
            'Title' => 'OOP',
           
        ]);

        Student::create([
            'firstname' => 'Hoa',
            'lastname' => 'Nguyen',
            'dateOfBirth' => '7/7/2006',
            'mark1' => 9,
            'mark2' => 3,
            'gpa'=> 0,],
            
            ['firstname'=>'Nam','lastname'=>'Tran','dateOfBirth'=>'3/4/2006','mark1'=>6,'mark2'=>1,'gpa'=>0,],
            ['firstname'=>'Ha','lastname'=>'Le','dateOfBirth'=>'1/2/2006','mark1'=>5,'mark2'=>3,'gpa'=>0,],
            ['firstname'=>'Luu','lastname'=>'Hoang','dateOfBirth'=>'2/2/2007','mark1'=>3,'mark2'=>2,'gpa'=>0,],
            ['firstname'=>'Hoang','lastname'=>'Nguyen','dateOfBirth'=>'1/1/2005','mark1'=>10,'mark2'=>7,'gpa'=>0,]);
    }
}
