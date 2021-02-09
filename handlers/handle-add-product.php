<?php
session_start();
$messages = array();

$types = ['laptop' , 'pc' , 'mobile' , 'television' , 'tablet'];

if (isset($_POST['add']))
{
    //Store Product In Var
    $name = htmlspecialchars(trim($_POST['name']));
    $description = htmlspecialchars(trim($_POST['description']));
    $type = htmlspecialchars(trim($_POST['type']));
    $price = htmlspecialchars(trim($_POST['price']));

    //validation of name
    if (empty($name))
    {
        $messages[] = "Product Name Is Required !";
    }
    elseif(is_string($name) == false)
    {
        $messages[] = "Product Name Must Be String !";
    }
    elseif( strlen($name) < 5)
    {
        $messages[] = "Product Name Must Be at least 5 character ! !";
    }

    //validation description

    if (empty($description))
    {
        $messages[] = "Product Description Is Required !";
    }
    elseif(is_string($description) == false)
    {
        $messages[] = "Product Description Must Be String !";
    }

    //validation of type
    if (empty($type))
    {
        $messages[] = "Product Type Is Required !";
    }
    elseif( ! in_array($type , $types))
    {
        $messages[] = "Product Type Valid !";
    }

    //validation of price
    if (empty($price))
    {
        $messages[] = "Product Price Is Required !";
    }
    elseif (is_int($price) == false)
    {
        $messages[] = "Poduct Price Must Be integer ! !";
    }
    elseif($price < 1 )
    {
        $messages[] = "Product Price at least 1 !!";
    }
    elseif($price > 10000)
    {
        $messages[] = "Product Price Max 10000";
    }

    if (! empty($messages))
    {
        $_SESSION = [
            'errors' => $messages
        ];
        header('location:../add-product.php');
}
else
{
    $data = [
        'name' => $name,
        'description' => $description,
        'type' => $type,
        'price' => $price
    ];
    $_SESSION = [
        'product' => $data
    ];
    header('location:success.php');
}
}

?>