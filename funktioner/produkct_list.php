<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <?php    
       // Shows if there are any errors in the code
       error_reporting(E_ALL);
       ini_set('display_errors', 'On');
       
       // Make a new connection
       $conn = new mysqli("localhost", "root", "", "crud_app");
        
       // Checks if $conn is connected to database
        if ($conn -> connect_error) {
           die("Connection Failed: " . $conn->connect_error);
        } else {
           echo "Connected!";
        }
       
       $result = $conn -> query("SELECT id, name, description, price, image FROM products");
        
       if ($result->num_rows > 0) {
           // Output data of each row
           echo '<table id="listTable" class="table">';
           echo '<h2 style="color:white;">TABLE</h2>';
           echo '<thead>';
           echo '<tr>';
           echo '<th scope="col">Id</th>';
           echo '<th scope="col">Name</th>';
           echo '<th scope="col">Description</th>';
           echo '<th scope="col">Price</th>';
           echo '<th scope="col">Image</th>';
           echo '</tr>';
           echo '</thead>';
           echo '<tbody class="table-group-divider">';
           while ($row = $result -> fetch_assoc()) {
               echo '<tr>';
               echo '<th scope="row">' . $row["id"] . '</th>';
               echo '<td>' . $row["name"] . '</td>';
               echo '<td>' . $row["description"] . '</td>';
               echo '<td>€' . $row["price"] . '</td>';
               echo '<td><img src="img/' . $row["image"] . '" alt="' . $row["name"] . '" style="width:100px; height:120px;"/></td>';
            //    echo "<td>" . "<img src=".$row['image'].'>' . "</td>";
               echo '</tr>';
           }
           echo '</tbody>';
           echo '</table>';
        }  else {
           echo "0 Results";
        }

       $conn->close();
    
    
    ?>



</body>
</html>
