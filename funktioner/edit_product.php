<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

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
 
        // Checks if $conn is connected to database
        if ($conn -> connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        } else {
            echo "Connected!";
        }

        // Taking values from the form data(input)
        $product_name =  $_POST['productUpdateName'];
        $product_ID = $_POST['productID'];

        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE products SET name = '$product_name' WHERE id = '$product_ID' ";

        if ($conn->query($sql) === TRUE) {
            $conn -> close();
            echo '
                <div class="container position-absolute top-50 start-50 translate-middle ">
                    <div class="container d-flex justify-content-center">
                        <div class="d-flex justify-content-center>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Data Sent!</h5>
                                        <p class="card-text">Data has succesfully been sent</p>
                                        <a href="http://localhost/lost/" class="btn btn-primary">Go Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        } else {
            $conn->close();
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
       
      
    ?>


   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
