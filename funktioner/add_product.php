<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>   

    <!-- <div class="navbar  m-2">
      <h1>Crud App</h1>
      <nav class="m-2">
             <button type="submit"><a href="http://localhost/lost/">HOME</a></button>
      </nav>
    </div>  -->

    <div class="navbar  m-2">
      <h1>Crud App</h1>
      <nav class="m-2">
         <button class="btn btn-primary" type="button" id="add">Add</button>
         <button class="btn btn-primary" type="button" id="del">Delete</button> 
         <button class="btn btn-primary" type="button" id="change">Change</button>
         <button class="btn btn-primary" id="list">List</button>     
      </nav>
   </div> 


    <div class="container d-flex">

      <!-- Add product form  -->
        <div id="popUpForm">
            <form action="funktioner/add_product.php" method="post" class="ajax-form" >
              <legend>Add Product</legend>
              <label for="productName">Name</label>
              <input type="text" id="productName" name="productName"><br><br>

              <label for="productPrice">Price</label>
              <input type="number" id="productPrice" name="productPrice"><br><br>

              <label for="productDescription">Description</label>
              <input type="text" id="productDescription" name="productDescription"><br><br>

              <label for="productImage">Image</label>
              <input type="file" id="productImage" name="productImage"><br><br>

              <input type="submit" value="Submit" name="addBatton" >
              <input type="reset" value="Reset">
            </form>
        </div>
 
      <!-- Delete product form -->
        <div id="deleteForm">
            <form action="funktioner/delete_product.php" method="post" class="ajax-form">
              <legend>Delete Product</legend>
              <label for="productID">ID</label>
              <input type="number" id="productID" name="productID"><br><br>

              <input type="submit" value="Submit" id="submit">
              <input type="reset" value="Reset">
            </form>
        </div>

      <!-- Update product form -->
        <div id="updateForm">
            <form action="funktioner/edit_product.php" method="post" class="ajax-form">
              <legend>Change</legend>

              <label for="productID">ID</label>
              <input type="int" id="productID" name="productID"><br><br>

              <label for="productUpdateName">Name</label>
              <input type="text" id="productUpdateName" name="productUpdateName"><br><br>

              <input type="submit" value="Submit" id="submit">
              <input type="reset" value="Reset">
            </form>
        </div>



      <!-- Displays data into this container  -->
      <div class="container-sm bg-dark" id="placeToLoad" style="display:none; width:50rem; border:solid 1px black; height:40rem; overflow:scroll;"></div>
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
