<?php include 'header.html'; ?>

<!DOCTYPE html>
<html>

<head>

<title>Register</title>

<link rel="stylesheet" href="style.css">

</head>


<body>


<!-- Quote -->

<section class="register-hero">

<h1>
"Thank You For Taking The First Step Towards Your Future!"
</h1>

<p>
Complete your registration and begin your learning journey with us.
</p>

</section>




<!-- Form -->
<form action="connect.php" method="POST" enctype="multipart/form-data">
    

<section class="register-card">


<h2>Internship Registration</h2>


<form>



<label>Select Location</label>

<select name='l'>

<option>Select Location</option>
<option>Coimbatore</option>
<option>Tiruchirappalli</option>
<option>Karur</option>

</select>




<label>Name</label>

<input type="text" placeholder="Enter your name" name="n">


<label>Date of Birth</label>

<input type="date" name="dob" required >

<label>Gender</label>
<select name="g" required>
    <option value="">Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
</select>


<label>Year of Study</label>
<select name="y" required>
    <option value="">Select Year</option>
    <option value="I">I Year</option>
    <option value="II">II Year</option>
    <option value="III">III Year</option>
    <option value="IV">IV Year</option>
</select>


<label>Email</label>

<input type="email" placeholder="Enter your email" name="e">





<label>Phone Number</label>

<input type="tel" placeholder="Enter phone number" name="p">





<label>College Name</label>

<input type="text" placeholder="Enter college name" name="c">

<label>Previous Experience (if any)</label>
<textarea 

name="pe" 
placeholder="Enter your previous experience">
</textarea>




<label>Courses Interested</label>

<select name="cn">

<option>Select Course</option>

<option>Web Development</option>

<option>Python</option>

<option>Java</option>

<option>Data Science</option>

<option>AI / ML</option>

<option>Digital Marketing</option>

</select>





<label>Duration</label>

<select name="du">

<option>Select Duration</option>

<option>15 Days</option>
<option>1 Month</option>
<option>2 Months</option>
<option>3 Months</option>
<option>6 Months</option>


</select>






<label>Payment Mode</label>


<div class="payment">


<input type="radio" name="pm">
GPay


<input type="radio" name="pm">
Cash


</div>





<div class="payment-note">

<p>

If GPay is selected, kindly make the payment to our official WhatsApp number:

<br><br>

WhatsApp Number: +91 9791384147

<br><br>

After payment, please share the payment screenshot for confirmation.

</p>

</div>




<button type="submit">

Submit Registration

</button>



</form>


</section>






<?php include 'footer.html'; ?>


</body>

</html>