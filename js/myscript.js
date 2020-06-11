$(function () {
//    Declaring a variable for Input Element
    textareainput = $("#inputfield");

//    click event attached to Count Characters button with JQuery
    $("#countcharacters").on("click", function () {
//        Posting input data to php server file for processing with ajax
        $.post("php/server.php", {
            action: 'Count Characters',
            inputdata: textareainput.val()
        }, function (data) {
//            Data process and feedback recieved, notify user of result
            message = "Total Number of Characters : " + data;
            Notify(message, "alert-info", 7000);
        });
//    Closing bracket of event attached to Count Characters button with JQuery
    });

//    click even attached to Count Vowels button with JQuery
    $("#countvowels").on("click", function () {
//        Posting input data to php server file for processing with ajax
        $.post("php/server.php", {
            action: 'Count Vowels',
            inputdata: textareainput.val()
        }, function (data) {
//            Data process and feedback recieved, notify user of result
            message = "Total Number of Vowels : " + data;
            Notify(message, "alert-info", 7000);
        });
//    Closing bracket of event attached to Count Vowels button with JQuery
    });

    //    click event attached to Count Consonants button with JQuery
    $("#countconsonants").on("click", function () {
//        Posting input data to php server file for processing with ajax
        $.post("php/server.php", {
            action: 'Count Consonants',
            inputdata: textareainput.val()
        }, function (data) {
//            Data process and feedback recieved, notify user of result
            message = "Total Number of Consonants : " + data;
            Notify(message, "alert-info", 7000);
        });
        //    Closing brackets of event attached to Count Consonants button with JQuery
    });

    //    click event attached to Count Words button with JQuery
    $("#countwords").on("click", function () {
//        Posting input data to php server file for processing with ajax
        $.post("php/server.php", {
            action: 'Count Words',
            inputdata: textareainput.val()
        }, function (data) {
//            Data process and feedback recieved, notify user of result
            message = "Total Number of Words : " + data;
            Notify(message, "alert-info", 7000);
        });
        //    Closing brackets of event attached to Count Words button with JQuery
    });

//    Event for Checking if Text area is empty
    $("#inputfield").on("focusout mouseout", function () {
//        IF Empty remove Success border, add danger border and activate buttons
        if ($(this).val() === "") {
            $(this).removeClass("valid-border").addClass("invalid-border");
            Notify("Input Field cannot be Empty", "alert-danger", 7000);
            $(".totals").attr("disabled", "disabled");
        } else {
//        IF Not Empty remove danger border, add Success border and disable buttons
            $(this).removeClass("invalid-border").addClass("valid-border");
            $(".totals").removeAttr("disabled");
        }
    });
//    End of Event for Checking if Text area is empty
});

//Function for handling notification
function Notify(message, type = "alert-info", tout = 5000) {
    $("#msg").removeAttr('class')
            .addClass('alert ' + type)
            .html(message)
            .show()
            .delay(tout)
            .slideUp();
}


