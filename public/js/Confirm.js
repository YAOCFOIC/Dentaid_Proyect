$(".register").click( function(e){
        var submitButton = $("#Celular").attr("required", true);
        var submitButton = $("#Correo").attr("required", true);
        var submitButton = $("#name").attr("required", true);
        var submitButton = $("#Clave").attr("required", true);
        var submitButton = $("#Confirmar_Clave").attr("required", true);
        var submitButton = $("#Cargo").attr("required", true);
        var submitButton = $("#input-form2").attr("required", true);

        var submitButton = $("#Celular").attr("pattern", '[0-9]{10}');
        var submitButton = $("#name").attr("pattern", '^[a-zA-Z ]+$');
        var submitButton = $("#Cargo").attr("pattern", '^[a-zA-Z ]+$');

       

        var submitButton = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if (submitButton.test($('#Correo').val().trim())) {
          
            
        } else {
            alert('La direccón de correo no es válida');
            return false;
            e.preventDefault();
        }
        
        var v = grecaptcha.getResponse();
        if(v.length == 0)
        {
            alert("No completaste el captcha")
            return false;
            e.preventDefault();
        }
        else
        {
            document.getElementById('captcha').innerHTML="Captcha completado";
            return true; 
        }
});