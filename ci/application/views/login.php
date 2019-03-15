<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('css/pet.css'); ?>">
    <script>
    function noBack(){window.history.forward();}
        setTimeout("noBack()",0);
        window.onunload = function(){ null};
</script>
</head>
<body>
<div id="wrapper">
<h1 style='color:white;'>Pet Store</h1>
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
<img src="<?php echo base_url('./pet5.png'); ?>" alt="Pet banner" >
<h2>Login</h2>
<p>Required information is given with asterisk(*)</p>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open("Petstore_Controller/loginvalidation"); ?>
    <form method="POST" >
        <table align="left">
             <tr>
                <td><label class="lab">* E-mail:</label></td>
                <td><input type="text" name="email" size="31" cols="30">
                 </td>
             </tr>
             <tr>
                <td><label class="lab">Password:</label></td>
                <td> <input type="password" name="password" size="31" cols="30">
                </td>
             </tr>
            <tr>
        <td><input type="submit" class="button" value="Submit">
            </td>
            </tr>
    </table>
    </form>
<br><br><br><br><br>
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
