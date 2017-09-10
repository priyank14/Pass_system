$(document).ready(function(){
    $("#want_admin").click(function(){
        $("#one").slideUp("slow",function() {
          $("#two").slideDown("slow");
        });
    });

    $("#already_admin").click(function(){
        $("#two").slideUp("slow",function() {
          $("#one").slideDown("slow");
        });
    });

});