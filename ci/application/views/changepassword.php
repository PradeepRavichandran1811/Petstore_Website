<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
     <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('css/pet.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div id="wrapper">
<h1>Pet Store</h1>
<div style="overflow:auto">
<div class="row">
<div class="column1">
<div class="sidenav">
<a href="changepassword" style="font-size:1.5vw;">Home</a>
<a href="changepassword" style="font-size:1.5vw;">Change Password</a>
<a href='logout' style="font-size:1.5vw;">Logout</a>
</div>
</div>
<br>
<div class="column2">
<img src="<?php echo base_url('./pet5.png'); ?>" alt="Pet banner" >
<h2>Change Password</h2>
<p>Enter your new password </p>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open("Petstore_Controller/changepasswordvalidation"); ?>
    <form method="POST" >
        <table>
            <tr>
                <td><label class="lab">* E-mail:</label></td>
                <td><input type="email" name="email" id='email' size="31" cols="30" ></td>
             </tr>
             <tr>
                <td><label class="lab">*New Password:</label></td>
                <td><input type="password" name="newpass" id='newpass' size="31" cols="30" ></td>
             </tr>
             <tr>
                <td><label class="lab">*Confirm Password:</label></td>
                <td> <input type="password" name="confirmpass" id='confirmpass' size="31" cols="30"></td>
             </tr>
            <tr>
        <td><input type="submit" class="button" value="Update">
            </td></tr>
    </table>
    </form>

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
