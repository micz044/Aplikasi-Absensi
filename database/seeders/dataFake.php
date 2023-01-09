<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Group;
use App\Models\Status;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dataFake extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
            'name' => 'Michael Vincent Efren Malamo',
            'email' => 'alvaromichael044@gmail.com',
            'level_akses' => 'Admin',
            'password' => bcrypt('michael'),
      ]);
      User::create([
            'name' => 'Andika Permata',
            'email' => 'andika@gmail.com',
            'level_akses' => 'Guru',
            'password' => bcrypt('michael')
      ]);


            Student::create([
                  'classroom_id' => 1,
                  'group_id' => 1,
                  'name' => 'Michael Vincent Efren Malamo',
                  'nim' => '205010',
                  'alamat' => 'jalan Adipura no.20',
                  'no_tlp' => '082196822176',
                  'email' => 'alvaromichael044@gmail.com',
                  'nama_ortu' => 'Anisa Fitri'
            ]);
            Student::create([
                  'classroom_id' => 1,
                  'group_id' => 1,
                  'name' => 'Andika Permata',
                  'nim' => '205011',
                  'alamat' => 'jalan Adipura no.21',
                  'no_tlp' => '082196822984',
                  'email' => 'alvaromichael045@gmail.com',
                  'nama_ortu' => 'Putri Anisa'
            ]);

       
      
      Group::create([
            'name' => 'A',
            'group' => 'A',
      ]);
      Group::create([
            'name' => 'B',
            'group' => 'B',
      ]);
      Group::create([
            'name' => 'C',
            'group' => 'C',
      ]);
      Group::create([
            'name' => 'D',
            'group' => 'D',
      ]);
      Group::create([
            'name' => 'E',
            'group' => 'E',
      ]);
      
      Classroom::create([
            'name' => 'tujuh',
            'kelas' => '7',
      ]);
      Classroom::create([
            'name' => 'delapan',
            'kelas' => '8',
      ]);
      Classroom::create([
            'name' => 'sembilan',
            'kelas' => '9',
      ]);
      Classroom::create([
            'name' => 'sepuluh',
            'kelas' => '10',
      ]);
      Classroom::create([
            'name' => 'sebelas',
            'kelas' => '11',
      ]);
      Classroom::create([
            'name' => 'duabelas',
            'kelas' => '12',
      ]);
    }
        
}

