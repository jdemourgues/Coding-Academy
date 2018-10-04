<?php
include_once "products.php";

class FormP
{
	protected $product;
	public function __construct()
	{
	}
}

class Newproduct extends FormP
{
	public function __construct()
	{
		if (!empty($_POST)) 
		{
    	if ((strlen($_POST['name']) < 3) OR (strlen($_POST['name']) > 20))
        echo "Invalid Name";
    	elseif ((!(is_integer($_POST['price'])) OR (!(is_float($_POST['price'])))
        echo "Invalid Price";
        /*elseif vérifier que la catégorie existe*/
       	else
		?>
		<form action="" method="POST">
    	<p><label>Product :<input type="text" name="name" placeholder="product_name" required>
                    </label></p>
    	<p><label>Price :  <input type="text" name="price" placeholder="product_price" required>
                        </label></p>
    	<p><label>Category :<input type="text" name="category_id" placeholder="category" required></label></p>  
    	<p><input type="submit"/></p>
		</form>
		<?php
		$str = array('name' => $_POST['name'], 'price' => $_POST['price'], 'category_id' => $_POST['category_id']);
		return ($str);
		}
	}
}

class Modifproduct extends FormP
{

	public function __construct($str)
	{
		?>
		<form action="" method="POST">
    	<p><label>Product :<input type="text" name=$str['name'] >
                    </label></p>
    	<p><label>Price :  <input type="text" name=$str['price'] >
                        </label></p>
    	<p><label>Category :<input type="text" name=$str['category_id'] ></label></p>  
    	<p><input type="submit"/></p>
		</form>
		<?php
	}
}