<center>
<form method="post" action="../controller/registrationCheck.php" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id" value=""><br/>
					Password<br/><input type="password" name="password" value=""><br/>
					Confirm Password<br/><input type="password" name="confirmPassword" value=""><br/>
					Name<br/><input type="text" name="name" value=""><br/>
					User Type<hr/>
					<input type="radio" name="type" value="User" />User
					<input type="radio" name="type" value="Admin"/>Admin
					<hr/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
		