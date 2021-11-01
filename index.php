<html>
<head>
    <title>first form </title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div class="wrapper">
	<div class="registration_form">
		<div class="title">
		Student Registration Form
		</div>
    <form  name="log" action="home.php" method="Get">
        <div class="form_wrap">
				  <div class="input_wrap">
					<label for="fname">Full Name</label>
					<input type="text" id="fname" name="fname">
				</div>
						
       <div class="input_wrap">
					<label for="email">E-mail </label>
					<input type="text" id="email" name="email" >
				</div>
            <div class="input_grp">
                    <div class="input_wrap">
					<label for="phone">Phone Number</label>
					<input type="text" id="phone" name="phone" >
				</div>
            	
               <div class="input_wrap">
					<label for="birth">birthday</label>
					<input type="date" id="birth" name="birth" placehoder="">
                </div></div>
    
      	<div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="male" class="input_radio" checked>
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="female" class="input_radio">
								<span>Female</span>
							</label>
						</li>
					</ul>
                    </div>
                    <div class="input_wrap">
					<label for="phone">Address</label>
					<input type="text" id="adress" name="adress" placeholder="">
				</div>
      	<div class="input_wrap">
					<input type="submit" value="Register Now" class="submit_btn">
				</div>
			</div>
		</form>
	</div>
</div>
       
    </body>
    
</html>