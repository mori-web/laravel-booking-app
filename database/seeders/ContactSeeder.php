<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->insert([
            [
                'title' => 'タイトル1',
                'name' => 'お客1',
                'email' => 'minipla318@gmail.com',
                'message' => '1コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 0,
            ],
            [
                'title' => 'タイトル2',
                'name' => 'お客2',
                'email' => 'minipla328@gmail.com',
                'message' => '2コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 1,
            ],
            [
                'title' => 'タイトル3',
                'name' => 'お客3',
                'email' => 'minipla338@gmail.com',
                'message' => '3コメントコメントコメントコメント',
                'is_status' => 1,
                'is_contact_speed' => 0,
            ],
            [
                'title' => 'タイトル4',
                'name' => 'お客4',
                'email' => 'minipla348@gmail.com',
                'message' => '4コメントコメントコメントコメント',
                'is_status' => 1,
                'is_contact_speed' => 1,
            ],
            [
                'title' => 'タイトル5',
                'name' => 'お客5',
                'email' => 'minipla358@gmail.com',
                'message' => '5コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 0,
            ],
            [
                'title' => 'タイトル6',
                'name' => 'お客6',
                'email' => 'minipla368@gmail.com',
                'message' => '6コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 1,
            ],
            [
                'title' => 'タイトル7',
                'name' => 'お客7',
                'email' => 'minipla378@gmail.com',
                'message' => '7コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 0,
            ],
            [
                'title' => 'タイトル8',
                'name' => 'お客8',
                'email' => 'minipla388@gmail.com',
                'message' => '8コメントコメントコメントコメント',
                'is_status' => 1,
                'is_contact_speed' => 0,
            ],
            [
                'title' => 'タイトル9',
                'name' => 'お客9',
                'email' => 'minipla398@gmail.com',
                'message' => '9コメントコメントコメントコメント',
                'is_status' => 1,
                'is_contact_speed' => 1,
            ],
            [
                'title' => 'タイトル10',
                'name' => 'お客10',
                'email' => 'minipla3108@gmail.com',
                'message' => '10コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 1,
            ],
            [
                'title' => 'タイトル11',
                'name' => 'お客11',
                'email' => 'minipla3118@gmail.com',
                'message' => '11コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 1,
            ],
            [
                'title' => 'タイトル12',
                'name' => 'お客12',
                'email' => 'minipla3128@gmail.com',
                'message' => '7コメントコメントコメントコメント',
                'is_status' => 0,
                'is_contact_speed' => 1,
            ],
        ]);
    }
}
