<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userOne = new User();
        $userOne->name = 'Stefania';
        $userOne->surname = 'Aveta';
        $userOne->birth_date = '1992-12-17';
        $userOne->password = Hash::make('password');
        $userOne->email = 'stefania@boolbnb.com';
        $userOne->save();
    
    
        $userTwo = new User();
        $userTwo->name = 'Ludovico';
        $userTwo->surname = 'Longhini';
        $userTwo->birth_date = '1996-06-25';
        $userTwo->password = Hash::make('password');
        $userTwo->email = 'ludovico@boolbnb.com';
        $userTwo->save();
    
    
        $userThree = new User();
        $userThree->name = 'Nicolas';
        $userThree->surname = 'Chiaravalle';
        $userThree->birth_date = '2007-12-04';
        $userThree->password = Hash::make('password');
        $userThree->email = 'nicolas@boolbnb.com';
        $userThree->save();
    
    
        $userFour = new User();
        $userFour->name = 'Francesco';
        $userFour->surname = 'Benvenuti';
        $userFour->birth_date = '1998-10-04';
        $userFour->password = Hash::make('password');
        $userFour->email = 'francesco@boolbnb.com';
        $userFour->save();
    
    
        $userFive = new User();
        $userFive->name = 'Federico';
        $userFive->surname = 'Fois';
        $userFive->birth_date = '2001-05-14';
        $userFive->password = Hash::make('password');
        $userFive->email = 'federico@boolbnb.com';
        $userFive->save();
    }
}
