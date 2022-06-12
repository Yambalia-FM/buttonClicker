$(function(){
    $('#btnLogin').click(function(e){
        var valid = this.form.checkValidity();
        
        if(valid){
            var email = $('#emaillogin').val();
            var password = $('#passwordlogin').val();
        }
        e.preventDefault();
        
        $.ajax({
            type: 'POST',
            url: 'jslogin.php',
            data: {email: email, password: password},
            success:function(data){
                if(data=='TIME TO CLICK!'){
                    Swal.fire({
                        'title': 'NICE!',
                        'text': data,
                        'type': 'success',
                        showConfirmButton: false
                    })
                    setTimeout('window.location.href="index.php"',2000);
                }
                else{
                    Swal.fire({
                        title: 'Who are you???!',
                        text: 'There is no user for that combo',
                        imageUrl: 'img/sus.gif',
                        imageWidth: 300,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                        showConfirmButton: false
                    })
                }
            },
            error: function(data){
                Swal.fire({
                    'title': 'NOPE!',
                    'text': 'error in logging in. Try again.',
                    'type': 'error',
                    showConfirmButton: false
                  });
            }
            
        });
    });
});