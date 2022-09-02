// const showPassword = $("i").hasClass("feather-eye");
const personalInfo = $(".personal-info");
$(".eye-icon").click(function() {
     $(this).toggleClass("feather-eye");
      $(this).toggleClass("feather-eye-off");    
       if($(".eye-icon").hasClass("feather-eye-off")) {
            personalInfo.attr("type","password");
        };
        if($(".eye-icon").hasClass("feather-eye")) {
            personalInfo.attr("type", "text");
        }
      
 })

 const handleSubmit = (url) => {
         $(".password-container").html(`
            <div style="height: 90vh">
                <div class="h-100 text-success d-flex flex-column justify-content-center align-items-center">
                    <h4>Password Changed <i class="feather-check-circle"></i></h4>
                    <p>Your Password Updated Successfully</p>
                </div>
            </div>
         ` )
         setTimeout(() => {
             location.href = url;
         }, 3000);
 }
 
 (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()