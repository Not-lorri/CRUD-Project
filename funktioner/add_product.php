<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>   

    <div class="navbar  m-2">
      <h1>Crud App</h1>
      <nav class="m-2">
             <button type="submit"><a href="http://localhost/lost/">HOME</a></button>
      </nav>
    </div> 



    <?php    

        error_reporting(E_ALL);
        ini_set('display_errors', 'On'); 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "crud_app";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
 
        // Taking all 5 values from the form data(input)
        $product_name =  $_REQUEST['productName'];
        $product_price = $_REQUEST['productPrice'];
        $product_descript = $_REQUEST['productDescription'];
        $product_img = $_REQUEST['productImage'];
        
       
        // Performing insert query execution
        $sql = "INSERT INTO products (`name`, `description`, `price`, `image`) VALUES ('$product_name', '$product_descript','$product_price','$product_img')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            echo "Data Sent";
        } else {
            $conn->close();
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
         
    ?>




   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
