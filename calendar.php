<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="4941 S Vincennes calendar of events" />
<meta name="keywords" content="4941 S Vincennes, calendar, events" />

<title>4941 Condo Calendar</title>

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/text.css" type="text/css" />
<link rel="stylesheet" href="css/960.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='css/fullcalendar.print.css' media='print' />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico"  type="image/x-icon" />

<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<script type='text/javascript' src='js/jquery/jquery-1.9.1.min.js'></script>
<script type='text/javascript' src='js/jquery/jquery-ui-1.10.2.custom.min.js'></script>
<script type='text/javascript' src='js/fullcalendar/fullcalendar.min.js'></script>

<script type='text/javascript'>
 
$(document).ready(function() {
 
var date = new Date(); 
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();
 
$('#calendar').fullCalendar({
editable: true,
events: [
{
title: 'Memorial Day',
start: new Date(y, m, 27)
},
{
id: 999,
title: 'Independence Day',
start: new Date(y, 6, 4),
allDay: true
},
{
id: 999,
title: 'Christmas Eve',
start: new Date(y, 11, 24),
allDay: true
},
{
id: 999,
title: 'Christmas Day',
start: new Date(y, 11, 25),
allDay: true
},
{
id: 999,
title: 'Halloween',
start: new Date(y, 9, 31),
allDay: true
},
{
title: 'Labor Day',
start: new Date(y, 8, 2),
},
{
title: 'Board Meeting',
start: new Date(y, m, d, 12, 0),
end: new Date(y, m, d, 14, 0),
allDay: false
},
{
id: 999,
title: 'New Year\'s Eve',
start: new Date(y, 11, 31),
allDay: true
}
]
});
});
 
</script>
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

		<div id="calendar" class="grid_12">
		</div>

		<div id="footer" class="grid_12">
			<?php include("includes/footer.php") ?>
		</div>
	</div>
</body>
</html>
