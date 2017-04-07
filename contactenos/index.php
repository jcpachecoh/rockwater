 <!DOCTYPE html> <html lang="en"> 
 <head> 
 <meta charset="utf-8"> 
 <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="/assets/img/bx-favicon.ico" sizes="16x16" type="image/x-icon"> 
   <link rel="icon" href="/assets/img/bx-favicon-32.png" sizes="32x32" type="image/png"> <link rel="icon" href="/assets/img/bx-favicon-192.png" sizes="192x192" type="image/png"> <link rel="apple-touch-icon-precomposed" href="/assets/img/bx-favicon-192.png"> <title>
	Rockstar - Home
</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/main.css">

<script src="../js/jquery/dist/jquery.min.js"></script>
<script src="../js/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
    // Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='contact_form']").validate({
    // Specify validation rules
    rules: {
    
      firstname: "required",
      asunto: {
        required: true,
        minlength: 2
        },
      phone:{
        number:true
      },
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Por favor, ingresa tu nombre completo",
      asunto: "Por favor, ingresa el asunto",
     
      email: "Por favor, ingresa un email valido",
      phone:"Solo se aceptan valores numericos"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});

</script>

<style>



form label,
form input,
form button {
  border: 0;
  margin-bottom: 3px;
  display: block;
  width: 100%;
}
form input {
  height: 25px;
  line-height: 25px;
  background: #fff;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
form button {
  height: 30px;
  line-height: 30px;
  background: #e67e22;
  color: #fff;
  margin-top: 10px;
  cursor: pointer;
}
form .error {
  color: #ff0000;
}

#map {
 
    height:442px;
    width:50%; 
    display:inline-block;

}
#leftnav {
    float:left;
    width:50%; 
    display:inline-block;
    height: 442px;  
    background-size:100%;
    background-image: url('../images/bogota_02.jpg');
    background-repeat: repeat-x;
}

</style>





<?php include("../header.html");?>
  <div style="background-color: #0A98C3;color: #ffffff">
        <div class="container">
               <br><h1>Contactanos</h1><br>
            </div>
        </div>
</nav>




 <!-- Page Content -->
    


                    
               
             
        
            <div id="leftnav">

              
				
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div id="map" >

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58255.908428623494!2d-74.06733837069586!3d4.675122789592674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a8de8593a67%3A0x92611c3f91e482ef!2sRockwater+Partners!5e0!3m2!1sen!2s!4v1490879538239" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

   

        <hr>
<div class="container">




<section class="c11-component">
    <div class="innerContact clearfix">
       

        <form id="contact_form" name="contact_form" method="POST" action="intro_login.php">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="firstName"><span>*</span>Nombre</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="asunto"><span>*</span>Asunto</label>
                    <input type="text" name="asunto" id="asunto" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="email"><span>*</span>Email</label>
                    <input type="email" name="email" id="email" placeholder="name@emailaddress.com" class="form-control" id="email" >
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="company">Compañia</label>
                    <input type="text" name="company" id="company" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="country"><span>*</span>Area / División</label>
                    <select name="area" id="area" class="form-control" autocorrect="off" autocomplete="off">
                        <option value="Finanzas"  >Finanzas
                        </option>
                         <option value="Administrativa"  >Administrativa
                        </option>
                         <option value="Comercial"  >Comercial
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group clearfix">
                    <label for="phone">Telefono</label>

                    <div class="phoneWrapper">
               
                           
                            <input type="text" id="phone" name="phone" class="form-control">
                         
                    </div>
                </div>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <div class="form-group">
                    <label for="asunto">Mensaje</label>
                    
                    <textarea id="mensaje" name="mensaje" class="form-control"></textarea>

                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <div class="form-group">
                   
                    
                   <center><button type="submit" class="btn btn-blue">Enviar </button></center>

                </div>
            </div>



            </form>
    </div>
    </section>
    
    <!-- /.container -->
</div>




<?php include("../footer.html");?>

<!--header-->







	
</body> </html>
