$(document).ready(function(){
    $("#signup").click(function(){
        $(".second").slideUp("slow",function() {
          $(".first").slideDown("slow");
        });
    });

    $("#signin").click(function(){
        $(".first").slideUp("slow",function() {
          $(".second").slideDown("slow");
        });
    });

});
