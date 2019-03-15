<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Login</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('css/pet.css'); ?>">
</head>
<body>
<div id="wrapper">
<h1> Business's Pet Store</h1>
<div style="overflow:auto">
<div class="row">
<div class="column1">
<div class="sidenav">
<a href="changepassword.html" style="font-size:1.5vw;">Change Password</a>
<a href='logout' style="font-size:1.5vw;">Logout</a>
</div>
</div>
<br>
<div class="column2">
<img src="<?php echo base_url('./pet5.png'); ?>" alt="Pet banner">
<h2>Business</h2>
<p>Required information is given with asterisk(*)</p>

    <form action="business.php" method="POST" >
        <table>
             <tr>
                <td><label class="lab">Business Name:</label></td>
                <td><input type="text" name="busname" size="31" cols="30" ></td>
             </tr>
             <tr>
                <td><label class="lab">*Service:</label></td>
                <td> <input type="text" name="service" size="31" cols="30" required></td>
             </tr>
        <td><input type="submit" class="button" value="Add new one">
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
