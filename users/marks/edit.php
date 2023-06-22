<?php
include 'conn.php';
$conn = connect();
    session_start();
  //  require 'conn.php';


    $conn= connect();
    $m='';
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $sql= "SELECT * from security WHERE id='$id' limit 1";
        $res= mysqli_fetch_assoc($conn->query($sql));


    }elseif(isset($_POST['id'])){
        $id =$_POST['id'];
        $roll= $_POST['roll'];
        $sname= intval($_POST['sname']);
        $c_name= intval($_POST['c_name']);


            if(isset($_POST['Submit'])){
                $sql= "UPDATE security SET roll= '$roll', sname= '$sname', c_name= '$c_name', marks='$marks' WHERE id = '$id'";
                if($conn->query($sql)===true){
                    header('Location: p_mark.php');
                } else{
                    $m= "Connection Failure!";
                    header("Location: edit.php?id=$id");
                }
            }

    }



  /*  $sql= "SELECT COUNT(id) as total_products from products";
    $total_product= mysqli_fetch_assoc($conn->query($sql));

    $sql= "SELECT SUM(bought) as total_buy from products";
    $total_buy= mysqli_fetch_assoc($conn->query($sql));

    $sql= "SELECT SUM(sold) as total_sell from products";
    $total_sell= mysqli_fetch_assoc($conn->query($sql));*/
?>

<html>
    <head>
        <title> Products </title>
        <link rel="stylesheet" type="text/css" href="css/products.css">
    </head>
    <body>
        <div class="row" style="padding-top: 50px;">
            <div class="col-sm-9">

                <div class="pt-20 pl-20">
                    <div class="col-sm-12" style="background-color: #282828; ">
                        <div class="text-center">
                            <h1 > Edit Product</h1>
                            <h2> <?php echo $m; ?> </h2>
                        </div>
                        <div class="row pt-20" >
                            <div class="col-sm-5 p-20" >
                                <img src="<?php echo $img; ?>" class="pull-right" height="300" width="300" style="border-radius: 10px;">
                            </div>

                            <div class="col-sm-7" >
                                <form method="POST" action="editProduct.php">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="pull-right"><h2>Student Name:</h2></label>
                                        </div>
                                        <div class="col-sm-6 form-input pt-10">
                                            <input type="text" class="login-input"  name="pname" value="<?php echo $res['sname']; ?>" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="pull-right"><h2> Course Name:</h2></label>
                                        </div>
                                        <div class="col-sm-6 form-input pt-10" >
                                            <input type="text" class="login-input" name="buy" value="<?php echo $res['c_name']; ?>" placeholder="Buy Quantity">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="pull-right"><h2> Marks:</h2></label>
                                        </div>
                                        <div class="col-sm-6 form-input pt-10">
                                            <input type="text" class="login-input" name="sell" value="<?php echo $res['marks']; ?>" placeholder="Sell Quantity">
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                                    <div class="row">
                                        <div class="text-center">
                                            <input class="btn btn-success" type="submit" name="Submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </body>
</html>
