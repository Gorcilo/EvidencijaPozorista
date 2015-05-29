

<html>
<head>
<title>Register</title>
</head>
<body>

<?php echo validation_errors(); ?>
 <?php echo form_open('Register'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
	 <label for="firstname">First Name:</label>
     <input type="text" size="20" id="firstname" name="firstname"/>
     <br/>
	 <label for="lastname">Last Name:</label>
     <input type="text" size="20" id="lastname" name="lastname"/>
     <br/>
	 <label for="email">E-mail:</label>
     <input type="text" size="20" id="email" name="email"/>
     <br/>
     <input type="submit" value="Register"/>
</form>
   
</body>
</html>

