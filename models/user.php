<?php
class UserModel extends Model{
	/*public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			// Insert into MySQL
			$this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}*/

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = $post['password'];

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM user WHERE username = :username AND password = :password');
			$this->bind(':username', $post['username']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "username" =>$row['username']
                );
                /*ob_clean();
                if(!headers_sent()) {
                    header('Location: '.ROOT_URL.'Shares/add');
                }*/
                
                header('Location: '.ROOT_URL.'shares/add');
                exit();
            } else {
                Messages::setMsg('Netočni podatci za prijavu', 'error');
            }
		}
		return;
	}
}