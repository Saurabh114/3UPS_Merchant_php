
$('#login').on('submit', function(e) {
  const data = "";
      e.preventDefault();
    
      // loader();
      $.ajax({
        url: '../../backend/script.php',
        type: 'POST',
        // dataType: 'json',
        data: {
          type: "login",
          mail: $('#email').val(),
          pass: $('#myPassword').val()
        },
        success: function(data) {
          console.log(data);
            swal({
              title: "Login successfull",
              icon: "success",
            }).then(function() {
              window.location.href = "./index.php";
            });
      },
      
      error: function(response) {
        console.log("Error")
        console.log(response);
        }
      });

      return false;

    });