<?php
/**
 * Created by PhpStorm.
 * User: jdm
 * Date: 14/11/17
 * Time: 18:31
 */
include_once ("database.php");

class Products
{
    protected $_productId;
    protected $_productName;
    protected $_productCat;
    protected $_product_Price;
    protected $_bdd1;

    const TABLE = 'products';

    public function __construct($bdd1=null)
    {
        if ($bdd1 == null)
            $this->_bdd1 = new Database('localhost', 'root', 'root@2017','3306','pool_php_rush');
        else $this->bdd1 = $bdd1;
    }

    public function createProduct($productName, $productPrice)
    {
        if ($this->_bdd1->checkData(Products::TABLE,"name = '$productName'") != true) {
            $this->_bdd1->createData(Products::TABLE,"name, price", "'$productName', '$productPrice'");
            echo "product created";
        }
        else echo "product already exists";
    }

    public function getProduct($fields, $cond){
        return $this->_bdd1->getData(Products::TABLE, $fields, $cond);
    }

    public function ModifyProduct($ProductId, $fields, $values){
    $this->_bdd1->setData(Products::TABLE, $fields, $values,"id = '$ProductId'");
    }

    public function deleteProduct($productId){
    $this->_bdd1->deleteData(Products::TABLE, "id = '$productId'");
    }
}