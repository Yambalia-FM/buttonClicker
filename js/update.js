$(document).ready(function(){
    $("#update_1").click(function(){
        $.ajax({
            url:'update1.php',
            method:'POST',
            data:{

            },
            success:function(response){
                if(response==""){
                    $("#info").load(" #info > *")
                }
                else{
                    Swal.fire({
                      'title': 'NOPE!',
                      'text': response,
                      'type': 'error',
                      showConfirmButton: false
                    })
                    setTimeout('window.location.href="login.php"',1500);
                }
            }
        });
    });
});
$(document).ready(function(){
    $("#update_2").click(function(){
        $.ajax({
            url:'update2.php',
            method:'POST',
            data:{

            },
            success:function(response){
                if(response==""){
                    $("#info").load(" #info > *")
                }
                else{
                    Swal.fire({
                      'title': 'NOPE!',
                      'text': response,
                      'type': 'error',
                      showConfirmButton: false
                    })
                    setTimeout('window.location.href="login.php"',1500);
                }
            }
        });
    });
});
$(document).ready(function(){
    $("#update_3").click(function(){
        $.ajax({
            url:'update3.php',
            method:'POST',
            data:{

            },
            success:function(response){
                if(response==""){
                    $("#info").load(" #info > *")
                }
                else{
                    Swal.fire({
                      'title': 'NOPE!',
                      'text': response,
                      'type': 'error',
                      showConfirmButton: false
                    })
                    setTimeout('window.location.href="login.php"',1500);
                }
            }
        });
    });
});