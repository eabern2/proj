<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="4941 S Vincennes submission for classifieds" />
<meta name="keywords" content="4941 S Vincennes, classifieds, for rent, for sale, listing" />

<title>Submit A Classified</title>

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/text.css" type="text/css" />
<link rel="stylesheet" href="css/960.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon" />

<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->

</head>

<body>
	<div id="container" class="container_12">
		<div id="header" class="grid_12">
			<div id='masthead'>
				<?php include("includes/masthead.php") ?>
			</div>
		</div>
			<div id="cssmenu" class="grid_12">
                <?php include("includes/menu.php") ?>
            </div>

		<div id="mainContent" class="grid_12">

			<form id="myform" action="http://morpheus.dce.harvard.edu/cgi-bin/echo.cgi" enctype="multipart/form-data" method="post">
				<fieldset>
					<legend>Classifieds Submission Form</legend>
					<p>
						<label for="Title">Title:</label>
						<input id="Title" type="text" name="Title" size="50"/>
					<br/>
					    <label for="Category">Category:</label>
					    <select id="Category" name="category">
					    	<option value="For_Rent_U">[No Option Selected]</option>
					    	<option value="For_Rent_U">For Rent (Unit)</option>
					    	<option value="Items_For_Sale">Items For Sale</option>
					    	<option value="For_Rent_P">For Rent (Parking)</option>
					    </select>
					<br/>
					   	<label for="Text">Text:</label>
					   	<textarea rows="4" cols="36" id="Text"></textarea>
					<br/>
					  	<label for="Photo1">Photo 1:</label>
					  	<input id="Photo1" type="file" name="pic1" size="40" accept='image/*' />
					<br/>
						<label for="Photo2">Photo 2:</label>
					  	<input id="Photo2" type="file" name="pic2" size="40" accept='image/*' />
					<br/>
					    <label for="DDate">Display Date:</label>
						<input id="DDate" type="text" name="Display Date" size="50"/>
					<br/>
						<label for="RDate">Remove Date:</label>
						<input id="RDate" type="text" name="Remove Date" size="50"/>
					<br/>
					</p>
					<p>
						<label for="Name">Name:</label>
						<input id="Name" type="text" name="Name" size="50"/>
					<br/>
						<label for="PhoneNumber">Phone Number:</label>
						<input id="PhoneNumber" type="text" name="Phone Number" size="50"/>
					<br/>
						<label for="email">Email:</label>
						<input id="email" type="text" name="Email" size="50"/>
					</p>
					<p>
						Please indicate any special instructions: <br/>
						<label for="instructions"> </label>
						<textarea rows="4" cols="36" id="instructions"></textarea>
					</p>
					<p>
						<label for="button"> </label>
						<input type="submit" value="Place Order" id="button" />
					</p>
				</fieldset>
			</form>
			<br/><br/><br/><br/>
		</div>

		<div id="footer" class="grid_12">
			<?php include("includes/footer.php") ?>
		</div>
	</div>
</body>
</html>
