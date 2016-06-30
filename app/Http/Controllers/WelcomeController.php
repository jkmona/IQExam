<?php namespace App\Http\Controllers;
use Hash;
use App\User;
class WelcomeController extends Controller {

	public function __construct()	{
        //$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 * @return Response
	 */
	public function index() {
        //Log::info('密码：'.);
        //$expiresAt = Carbon::now()->addMinutes(10);
        $checked = false;
        if (Hash::check('12345678', '$2y$10$5uTKM3y4FOGhOwG2T.QQaONivMXMqY/jTz9c1/6xW2EYeNEkSUNpW')) {
            $checked = true;
        }
        $data = ['checked' => $checked, 'pwd'=>bcrypt('12345678')];
        return view('welcome',$data);
	}

}
