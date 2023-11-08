
// const buttonFunc = () => {
//     const popUpForm = document.getElementById("popUpForm");
//     const addButton = document.getElementById("add");    
//     popUpForm.style.display = "none";
    
//     addButton.addEventListener("click", function() {
//         if( popUpForm.style.display === "block"){
//             popUpForm.style.display = "none";
//         }else if (popUpForm.style.display === "none"){
//             popUpForm.style.display = "block";
//         }else{
//             popUpForm.style.display = "none";
//         }
//     });
// };

const buttonFunc  = () => {
    const popUpForm = document.getElementById("popUpForm");
    const addButton = document.getElementById("add");    
    popUpForm.style.display = "none";
    
    addButton.addEventListener("click", function() {
        if( popUpForm.style.display === "block"){
            popUpForm.style.display = "none";
        }else if (popUpForm.style.display === "none"){
            popUpForm.style.display = "block";
        }else{
            popUpForm.style.display = "none";
        }
    });
}


const delButton = () => {
    const delForm = document.getElementById("deleteForm");
    const delButton = document.getElementById("del");
    delForm.style.display= "none";

    delButton.addEventListener("click", function() {
        if( delForm.style.display === "block"){
            delForm.style.display = "none";
        }else if (delForm.style.display === "none"){
            delForm.style.display = "block";
        }else{
            delForm.style.display = "none";
        }
    });
}


const updateButton = () => {
    const updateForm = document.getElementById("updateForm");
    const updateButton = document.getElementById("change");
    updateForm.style.display= "none";

    updateButton.addEventListener("click", function() {
        if( updateForm.style.display === "block"){
            updateForm.style.display = "none";
        }else if (updateForm.style.display === "none"){
            updateForm.style.display = "block";
        }else{
            updateForm.style.display = "none";
        }
    });
}

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




