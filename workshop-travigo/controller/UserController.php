<?php 

class UserController{

	public function auth(){
		if(isset($_POST['submit'])){
			$data['Email'] = $_POST['Email'];
			$result = User::login($data);
			if($result->Email === $_POST['Email'] && $result->Password === $_POST['Password'])){

				$_SESSION['logged'] = true;
				$_SESSION['Email'] = $result->Name;
				Redirect::to('profil');

			}else{
				Session::set('error','Pseudo ou mot de passe est incorrect');
				Redirect::to('login');
			}
		}
	}

	static public function logout(){
		session_destroy();
	}
}
?>