<?php
    include_once("function/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Weshop | Barang Elektronik</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>"type="text/css"/>
</head>
<body>
    <div id="container">
        <!-- header -->
        <div id="header"> 
            <a href="<?php echo BASE_URL."index.php"; ?>">
            <img src="<?php echo BASE_URL. "images/logo.png"; ?>" alt=""></a>
            <!-- menu -->
            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL. "index.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL. "index.php?page=register"; ?>">Register</a>
                </div>
                <a id="button-keranjang" href="<?php echo BASE_URL."index.php?page=keranjang";?>" >
                <img src="<?php echo BASE_URL. "images/cart.png"; ?>" alt=""></a>
            </div>
            <!-- end menu -->
        </div>
        <!-- konten -->
        <div id="content">
            
        
        <?php
        $filename = "$page.php";
        //echo $filename;
        if(file_exists($filename)){
            include_once($filename);
        }else{
            echo "maaf ga ada ";
        }
        ?>

        </div>
        <!-- end konten -->
        <div id="footer">
            <p>&copy;<em>Copyright 2019</em></p>
        </div>
        <!-- end header -->
    </div>
</body>