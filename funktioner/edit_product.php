<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>

    <?php    
        // Shows if there are any errors in the code
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');

        // servername => localhost
        $servername = "localhost";
        // username => root
        $username = "root";
        // password => empty
        $password = ""; 
        // database name => staff
        $dbname = "crud_app";
        
        //Makes new connection to database
        $conn = new mysqli($servername, $username, $password, $dbname);
 
        // Checks if $conn is connected to database
        // if ($conn -> connect_error) {
        //     die("Connection Failed: " . $conn->connect_error);
        // } else {
        //     echo "Connected!";
        // }

        // Taking values from the form data(input)
        $product_name =  $_POST['productUpdateName']; // Form id for Products updated name
        $product_ID = $_POST['productID']; // Form id for choosen product

        // Performing insert query execution
        $sql = "UPDATE products SET name = '$product_name' WHERE id = '$product_ID' ";

        //Checks if execution is success
        if ($conn->query($sql) === TRUE) {
            // Closing the connection after execution is success
            $conn -> close(); 
            // Ask user if user want to go back to index
            echo '
                <div class="container position-absolute top-50 start-50 translate-middle ">
                    <div class="container d-flex justify-content-center">
                        <div class="d-flex justify-content-center>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Sent!</h5>
                                        <p class="card-text">Product has been changed succesfully</p>
                                        <a href="http://localhost/lost/" class="btn btn-primary">Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        } else {
            //If not, it gives an error and  it closes for safety purposes
            $conn->close();
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
       
    ?>

    <!-- These are scripts -->
   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
