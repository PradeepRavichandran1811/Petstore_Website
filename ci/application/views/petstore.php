<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('css/pet.css'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div id="wrapper">
<h1 style="color:white;">Pet Store</h1>
<div style="overflow:auto">
<div class="row">
<div class="column1">
<div class="sidenav">
<a href="index" style="font-size:1.5vw;">Home</a>
<a href="aboutus" style="font-size:1.5vw;">About Us</a>
<a href="contactus" style="font-size:1.5vw;">Contact Us</a>
<a href="client" style="font-size:1.5vw;">Client</a>
<a href="service" style="font-size:1.5vw;">Service</a>
<a href="login" style="font-size:1.5vw;">Login</a>
</div>
</div>
<br>
<div class="column2">
<img src="<?php echo base_url('./pet7.png'); ?>" alt="Pet banner" >
<h2>Contact Us</h2>
<p>Required information is given with asterisk(*)</p>
<? php echo form_open(); ?>
    <div class ="forms">
    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    <?php echo form_open("Petstore_Controller/newcontact"); ?>
    <form class="form-wrap" method="POST" >
         <table cellpadding="2" cellspacing="0" border="0">
             <tr>
                <td ><label class="lab">* First Name:</label></td>
                <td ><input type="text" name="fn" size="auto" cols="30" ></td>
             </tr>
             <tr>
                <td><label class="lab">* Last Name:</label></td>
                <td><input type="text" name="ln" size="auto" cols="30" ></td>
             </tr>
             <tr>
                <td><label class="lab">* E-mail:</label></td>
                <td><input type="email" name="email" size="auto" cols="30" ></td>
             </tr>
             <tr>
                <td><label class="lab">Phone:</label></td>
                <td> <input type="tel" name="phone" size="auto" cols="30"></td>
             </tr>
             <tr>
                 <td><label class="lab"> Comments:</label></td>
                 <td><textarea name="comments" cols="30" rows="6" ></textarea></td>
             </tr>
            <tr>
        <td><input type="submit" class="button" value="Submit">
            </td></tr>
    </table>
    </form>
        </div>
<div class="footer">
<i> Copyright © 2018 Pradeep Ravichandran's Pet Store </i><br>
<i><a href="mailto:pradeep.ravichandran@mavs.uta.edu">pradeep.ravichandran@mavs.uta.edu</a></i>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
