
// Function for displaying "Add product" form
const buttonFunc  = () => {
    const popUpForm = document.getElementById("popUpForm");
    const addButton = document.getElementById("add");   
    popUpForm.style.display = "none"; // Makes the form hidden  
    
    // Adds an click event to navigation button "Add"
    addButton.addEventListener("click", function() {
        // If the form is visible then it changes to hide the form
        if( popUpForm.style.display === "block"){
            popUpForm.style.display = "none";
        }else if (popUpForm.style.display === "none"){
            // If the form is hidden then it changes to show the form
            popUpForm.style.display = "block";
        }else{
            // If the event has not been triggerd, it will display the form hidden
            popUpForm.style.display = "none";
        }
    });
}

// Function for displaying "Delete product" form
const delButton = () => {
    const delForm = document.getElementById("deleteForm");
    const delButton = document.getElementById("del");
    delForm.style.display= "none"; // Makes the form hidden  
    
    // Adds an event to navigation button "Delete"
    delButton.addEventListener("click", function() {  
        if( delForm.style.display === "block"){      
            // If the form is hidden then it changes to show the form
            delForm.style.display = "none";
        }else if (delForm.style.display === "none"){
            // If the event has not been triggerd, it will display the form hidden
            delForm.style.display = "block";
        }else{
            // If the event has not been triggerd, it will display the form hidden
            delForm.style.display = "none";
        }
    });
}

// Function for displaying "Edit product" form
const updateButton = () => {
    const updateForm = document.getElementById("updateForm");
    const updateButton = document.getElementById("change");
    updateForm.style.display= "none"; // Makes the form hidden 

    // Adds an event to navigation button "Edit"
    updateButton.addEventListener("click", function() {
        if( updateForm.style.display === "block"){
            // If the form is hidden then it changes to show the form
            updateForm.style.display = "none";
        }else if (updateForm.style.display === "none"){
            // If the event has not been triggerd, it will display the form hidden
            updateForm.style.display = "block";
        }else{
            // If the event has not been triggerd, it will display the form hidden
            updateForm.style.display = "none";
        }
    });
}

// Function for displaying "List product" 
const displayList = () => {

    $(document).ready(function() {
        var placeToLoad = $("#placeToLoad");

        $("#list").click(() => {
            placeToLoad.toggle(); // Toggle the visibility of the element
            if (placeToLoad.is(":visible")) {
               placeToLoad.load("./funktioner/produkct_list.php");
            } 
        });
    });
    
}



// $(document).ready(function() {
//     $(".ajax-form").submit(function(event) {
//         event.preventDefault(); // Prevent the default form submission behavior

//         var form = $(this); // Get the form that triggered the submit event
//         var formData = form.serialize();

//         $.ajax({
//             type: "POST",
//             url: form.attr("action"), // Get the form's action attribute
//             data: formData,
//             success: function(response) {
//                 // Handle the response for this specific form
//                 console.log("Response: " + response);
//             },
//             error: function() {
//                 console.log("Error: Unable to fetch response.");
//             }
//         });
//     });
// });




buttonFunc();
delButton();
updateButton();
displayList();




