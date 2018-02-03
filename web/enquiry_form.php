<?php

require("db.php");

?>

<html>
<head>
<body>
<form enctype="multipart/form-data" method="post" action="submit.php">
<label for"first_name">First Name <span> *</span></label>
<input type="text" name="first_name"><br/>

<label for"last_name">Last Name <span> *</span></label>
<input type="text" name="last_name"><br/>

<label for"email">Email <span> *</span></label>
<input type="text" name="email"><br/>

<label for"phone_number">Contact <span> *</span></label>
<input type="text" name="phone_number"><br/>

<label for"age_group">Age Group <span> *</span></label>
<select name="age_group">
<option value="15-20">15-20</option>
<option value="20-30">20-30</option>
<option value="30-40">30-40</option>
<option value="40-50">40-50</option>
<option value="Above 50">Above 50</option>
</select><br/>

<label for"travel_as">I will travel <span> *</span></label>
<select name="travel_as">
<option value="Solo">Solo</option>
<option value="As a couple">As a couple</option>
<option value="With friends">With friends</option>
<option value="With Family">With Family</option>
</select><br/>

<label for"number_of_travellers">If you plan to travel with family or friends, then mention the number of people travelling with you <span> *</span></label>
<input type="text" name="number_of_travellers"><br/>

<label for"preferred_dates">Your preferred travel dates <span> *</span></label>
<input type="date" name="preferred_dates"><br/>

<label for"leaving_time">Leaving not before: <span> *</span></label>
<input type="time" name="leaving_time"><br/>

<label for"arriving_time">Arriving not after: <span> *</span></label>
<input type="time" name="arriving_time"><br/>


<label for"boarding">Where would you like to start your journey from ? <span> *</span></label>
<input type="text" name="boarding"><br/>

<label for"last_destinations">Tell us the names of your last 5 travel destinations. <span> *</span></label>
<input type="text" name="last_destinations"><br/>


<label for"preference">When you travel, you prefer ?  <span> *</span></label>
<select name="preference">
<option value="Beach">Beach</option>
<option value="Countryside">Countryside</option>
<option value="Desert">Desert</option>
<option value="Forest">Forest</option>
<option value="Lake">Lake</option>
<option value="Mountains">Mountains</option>
<option value="Snow">Snow</option>
<option value="Urban">Urban</option>
</select><br/>

<label for"preference_type">When you travel, you prefer ?  <span> *</span></label>
<select name="preference_type">
<option value="Isolated">Isolated</option>
<option value="Small City">Small City</option>
<option value="Town">Town</option>
<option value="Urban Metropolis">Urban Metropolis</option>
</select><br/>

<label for"planned_trip">Do you have any upcoming trips planned ? <span> *</span></label>
<input type="text" name="planned_trip"><br/>

<label for"not_to_travel">Tell us some places where you would not like to travel.. <span> *</span></label>
<input type="text" name="not_to_travel"><br/>

<label for"hobbies">What are some of your hobbies/interests? <span> *</span></label>
<select name="hobbies">
<option value="Historical sights">Historical sights</option>
<option value="Shopping">Shopping</option>
<option value="Art Museums/Galleries">Art Museums/Galleries</option>
<option value="Trekking">Trekking</option>
</select><br/>

<label for"notes">Anything else we should know?<br/>
Examples: I don't drink alcohol. I love live music. I like handicraft shops. <span> *</span></label>
<textarea  name="notes"></textarea> <br/>

<input type="submit" name="submit">

</form>

</body>
</head>
</html>