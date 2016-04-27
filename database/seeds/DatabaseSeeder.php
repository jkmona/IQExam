<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        Model::unguard();
        DB::table('iq_user')->delete();
        User::create([
            'nickname' => '李锐',
            'wechat_open_id' => '',
            'password' => md5('1210311232'.'f3234a'),
            'salt'=> 'f3234a',
            'is_admin' => 0
        ]);

        User::create([
            'nickname' => '陈曦',
            'wechat_open_id' => '',
            'password' => md5('1210311233'.'121hj1'),
            'salt'=> '121hj1',
            'is_admin' => 0
        ]);

        User::create([
            'nickname' => '管理员',
            'wechat_open_id' => '',
            'password' => md5('root'.'bfg234'),
            'salt'=> 'bfg234',
            'is_admin' => 1
        ]);

    }

}