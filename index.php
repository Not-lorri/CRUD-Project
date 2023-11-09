<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>WELCOME</title>
</head>
<body>

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
         <form action="funktioner/add_product.php" method="post" class="ajax-form border bg-light-subtle" >
            <legend class="text-center">Add Product</legend>
            <label class="form-label" for="productName"> Name</label>
            <input class="form-control" type="text" id="productName" name="productName"required><br><br>

            <label  class="form-label" for="productPrice">Price</label>
            <input class="form-control" type="number" id="productPrice" name="productPrice" min="1"required><br><br>

            <label class="form-label" for="productDescription">Description</label>
            <input class="form-control" type="text" id="productDescription" name="productDescription"required><br><br>

            <label class="form-label" for="productImage">Image</label>
            <input class="form-control" type="file" id="productImage" name="productImage"required><br>
           
            <div class="d-flex justify-content-center">
              <input class="btn btn-primary m-1" type="submit" value="Submit" name="addBatton" >
              <input class="btn btn-primary m-1"  type="reset" value="Reset">
            </div>
         </form> 
      </div>
 
      <!-- Delete product form -->
      <div id="deleteForm">
         <form action="funktioner/delete_product.php" method="post" class="ajax-form border bg-light-subtle">
            <legend class="text-center">Delete Product</legend>
            <label class="form-label" for="productID">ID</label>
            <input class="form-control" type="number" id="productID" name="productID"required><br>

            <div class="d-flex justify-content-center">
             <input class="btn btn-primary" type="submit" value="Submit" id="submit">
             <input class="btn btn-primary" type="reset" value="Reset">
           </div>  
         </form>
      </div>

      <!-- Update product form -->
      <div id="updateForm">
         <form action="funktioner/edit_product.php" method="post" class="ajax-form border bg-light-subtle">
            <legend>Change</legend>

            <label for="productID">ID</label>
            <input type="int" id="productID" name="productID"><br><br>

            <label for="productUpdateName">Name</label>
            <input type="text" id="productUpdateName" name="productUpdateName"><br>

            <input class="btn btn-primary" type="submit" value="Submit" id="submit">
            <input class="btn btn-primary" type="reset" value="Reset">
         </form>
      </div>



      <!-- Displays data into this container  -->
      <div class="container-sm bg-dark" id="placeToLoad" style="display:none; width:50rem; border:solid 1px black; height:40rem; overflow:scroll;"></div>
   </div>

   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="js/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
