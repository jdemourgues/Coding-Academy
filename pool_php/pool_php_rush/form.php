<?php
include_once "users.php";

class Form
{
	protected $user;
	public function __construct()
	{
	}

	public function emailExist()
	{
		echo "E-mail already exists\n";
	}

	public function emailInvalid()
	{
		echo "Invalid e-mail or invalid password\n";
		usleep(250);
	}
}

class Registration extends Form
{
	public function __construct()
	{
		$error = 42;
		$user = new Users();
		$k = 0;

    	while ($error != 1)
    	{
    		if ($k == 0)
    		{
    			display();
    			$k = 1;
    		}
    		if (!empty($_POST)) 
			{
    			if ((strlen($_POST['username']) < 3) OR (strlen($_POST['username']) > 10))
        			echo "Invalid Name";
    			elseif (!preg_match("#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        			echo "Invalid email";
    			elseif ((strlen($_POST['password']) < 3) OR (strlen($_POST['password']) > 10) OR ($_POST['password_confirmation'] != $_POST['password']))
        			echo "Invalid password or password confirmation";
        	}
			$error = $user->createUser($_POST['name'], $_POST['email'], $_POST['password']);							
			if ($error == 2)
				parent::emailExist();
		}
		echo "User created\n";
		usleep(400);
			
		
	}

	public function display()
	{
		?>
		<form action="" method="POST">
    	<p><label>Name :<input type="text" name="username" placeholder="name" required>
                    </label></p>
    	<p><label>E-mail :  <input type="text" name="email" placeholder="email" required>
                        </label></p>
    	<p><label>Password :<input type="password" name="password" placeholder="password" required></label></p>
    	<p><label>Re-type Password :<input type="password" name="password_confirmation" placeholder="password" required></label></p>
    	<p><input type="submit"/></p>
		</form>
		<?php
	}
}

class Login extends Form
{
	public function __construct()
	{
		$user = new Users();
		$error = -42;
		$check;
		$k = 0;

    		if ($k == 0)
    		{
    			$this->display();
    			$k = 1;
    		}
    		if (!empty($_POST))
			{
    			if (!preg_match("#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
        			echo "Invalid email";
    			elseif ((strlen($_POST['password']) < 3) OR (strlen($_POST['password']) > 10))
        			echo "Invalid password";
        	}

        if(isset($_POST['email']) && isset($_POST['password'])) {
            $error = $user->checkUserLevel($_POST['email'], $_POST['password']);
            echo $error;
            if ($error == 0)
                parent::emailInvalid();
            session_start();
            $a = $_POST['email'];
            //	echo "username", "email='$a'";
            $check = $user->getUsers("username", "email='$a'");
            if ($error == 1) {
                $_SESSION['username'] = $check['0']['username'];
                $_SESSION['email'] = $a;
            }
            if ($error == 2) {
                $_SESSION['username'] = $check['0']['username'];
                $_SESSION['email'] = $a;
                $_SESSION['admin'] = 1;
            }

            header('Location:index.php');
            echo "Welcome ".$check['0']['username'];

            usleep(500);}

    }	


	public function display()
	{
		?>
		<form action="" method="POST">
    	<p><label>E-mail :  <input type="text" name="email" placeholder="email" required>
                        </label></p>
    	<p><label>Password :<input type="password" name="password" placeholder="password" required></label></p>  
    	<p><input name="submit" type="submit"/></p>
		</form>
		<?php
	}
}

/*class Modifuserinfo extends Form
{
	public function __construct()
	{
		$user = new Users;
		private $str;
		$str = $user->getUser("*",1);
		if (!empty($str['username']) && !empty($str['email']) && !empty($str['password']))
			{
		
		
		
			}
	}

	public function display()
	{
		?>
		<form action="" method="POST">
    	<p><label>Name :<input type="text" name="name" value=$str['username'] >
                    </label></p>
    	<p><label>E-mail :  <input type="text" name="email" value=$str['email'] >
                        </label></p>
    	<p><label>Password :<input type="password" name="password" value=$str['password'] ></label></p>
    	<p><label>Admin :  <input type="checkbox" name="admin" value="NO" >
    						<input type="checkbox" <?php if ($str['admin'] == 1) ?> name="admin" value="YES" >
                        </label></p> 
    	<p><input type="submit"/></p>
		</form>
		<?php
	}
}*/

?>