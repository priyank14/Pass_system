$(document).ready(function(){
    $("#submitButton").click(function(){
        $("#select").slideUp("slow",function() {
          $("#one").slideDown("slow");
        });
    });
    // $("#submitButton1").click(function(){
    //     $("#one").slideUp("slow",function() {
    //       $("#two").slideDown("slow");
    //     });
    // });

});
