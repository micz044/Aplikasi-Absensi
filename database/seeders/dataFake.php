<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Group;
use App\Models\Status;
use App\Models\Student;
use App\Models\Position;
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
      //User::factory(10)->create();

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
            //Student::StudentFactory(30)->create();
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
            Student::create([
                  'classroom_id' => 1,
                  'group_id' => 1,
                  'name' => 'Rahmat Hidayatullah',
                  'nim' => '205013',
                  'alamat' => 'jalan racing centre no.21',
                  'no_tlp' => '08219465433',
                  'email' => 'rahmathidayah09@gmail.com',
                  'nama_ortu' => 'Muh yusuf'
            ]);
            Student::create([
                  'classroom_id' => 1,
                  'group_id' => 1,
                  'name' => 'Raditya Dika',
                  'nim' => '205014',
                  'alamat' => 'jalan AP.Pettarani no.117',
                  'no_tlp' => '08543464534',
                  'email' => 'radit093@gmail.com',
                  'nama_ortu' => 'Andika Dika'
            ]);
            Student::create([
                  'classroom_id' => 1,
                  'group_id' => 1,
                  'name' => 'Rafli',
                  'nim' => '205015',
                  'alamat' => 'jalan AP.Pettarani no.120',
                  'no_tlp' => '08543343323',
                  'email' => 'faff093@gmail.com',
                  'nama_ortu' => 'andika mirza'
            ]);

       
      
      Group::create([
            'classroom_id'=> 1,
            'name' => 'A',
            'group' => 'A',
      ]);
      Group::create([
            'classroom_id'=> 2,
            'name' => 'B',
            'group' => 'B',
      ]);
      Group::create([
            'classroom_id'=> 3,
            'name' => 'C',
            'group' => 'C',
      ]);
      Group::create([
            'classroom_id'=> 4,
            'name' => 'D',
            'group' => 'D',
      ]);
      Group::create([
            'classroom_id'=> 5,
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

            Status::create([
                  'name' => 'Hadir',
                  'keterangan' => 'Hadir'
            ]);
            Status::create([
                  'name' => 'Izin',
                  'keterangan' => 'Izin'
            ]);
            Status::create([
                  'name' => 'Sakit',
                  'keterangan' => 'Sakit'
            ]);
            Status::create([
                  'name' => 'Alfa',
                  'keterangan' => 'Alfa'
            ]);

            Position::create([
                  'posisi'=> 'Kepala Sekolah'
            ]);

            Position::create([
                  'posisi'=> 'Wakil Kepala Sekolah'
            ]);

            Position::create([
                  'posisi'=> 'Administrasi'
            ]);

            Position::create([
                  'posisi'=> 'Bendahara'
            ]);
    }
        
}

