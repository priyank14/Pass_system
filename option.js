$(document).ready(function() {
  $("#submitButton").click(function(){
    var number=$("#number").val();
    var dataString = 'number='+ number;
    $.ajax({
      type: "POST",
      url: "number.php",
      data: dataString,
      success: function(){
          if (number==1) {
            $("#submitButton1").val('Submit');
          }
          if (number==2) {
            $("#submitButton2").val('Submit');
          }
          if (number==3) {
            $("#submitButton3").val('Submit');
          }
          if (number==4) {
            $("#submitButton4").val('Submit');
          }
        }
    });
  });
  $("#submitButton1").click(function(){
    var number=$("#number").val();
    var name=$("#profile_name1").val();
    var gender = $("input[name='gender1']:checked").val();
    var validity=$("#validity1").val();
    var limit=$("#limit1").val();
    var formData = {
            'profile_name'      : name,
            'gender'            : gender,
            'validity'          : validity,
            'limit'             :limit
        };
        $.ajax({
          type: "POST",
          url: "form_submit.php",
          data: formData,
          mimeType: "multipart/form-data",
          success: function(){
            if (number==1) {
              window.location = "home.php";
            }else {
              $("#one").slideUp("slow",function() {
                $("#two").slideDown("slow");
              });
            }
            }

        });

  });

  $("#submitButton2").click(function(){
    var number=$("#number").val();
    var name=$("#profile_name2").val();
    var gender = $("input[name='gender2']:checked").val();
    var validity=$("#validity2").val();
      var limit=$("#limit2").val();;
    var formData = {
            'profile_name'      : name,
            'gender'            : gender,
            'validity'          : validity,
            'limit'             :limit
        };
        $.ajax({
          type: "POST",
          url: "form_submit.php",
          data: formData,
          mimeType: "multipart/form-data",
          success: function(){
            if (number==2) {
              window.location = "home.php";
            }else {
              $("#two").slideUp("slow",function() {
                $("#three").slideDown("slow");
              });
            }
            }
        });
  });

  $("#submitButton3").click(function(){
    var number=$("#number").val();
    var name=$("#profile_name3").val();
    var gender = $("input[name='gender3']:checked").val();
    var validity=$("#validity3").val();
      var limit=$("#limit3").val();
    var formData = {
            'profile_name'      : name,
            'gender'            : gender,
            'validity'          : validity,
            'limit'             :limit
        };
        $.ajax({
          type: "POST",
          url: "form_submit.php",
          data: formData,
          mimeType: "multipart/form-data",
          success: function(){
            if (number==3) {
              window.location = "home.php";
            }else {
              $("#three").slideUp("slow",function() {
                $("#four").slideDown("slow");
              });
            }
            }
        });
  });

  $("#submitButton4").click(function(){
    var number=$("#number").val();
    var name=$("#profile_name4").val();
    var gender = $("input[name='gender4']:checked").val();
    var validity=$("#validity4").val();
    var limit=$("#limit4").val();
    var formData = {
            'profile_name'      : name,
            'gender'            : gender,
            'validity'          : validity,
            'limit'             :limit
        };
        $.ajax({
          type: "POST",
          url: "form_submit.php",
          data: formData,
          mimeType: "multipart/form-data",
          success: function(){
            window.location = "home.php";
            }
        });
  });

});
