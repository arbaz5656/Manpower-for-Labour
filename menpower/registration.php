<?php 
// require_once 'connect_db.php';
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>DooJoob Register</title>
  <!-- Select2 CSS --> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 

<!-- jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<!-- Select2 JS --> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<style>
body {
	background-color: green;
	
  font-family: Arial;
   margin: 0;
   padding: 0;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 5px solid #ccc;
  border-top-color: black;
  border-right-color: yellow;
  border-bottom-color: grey;
  border-left-color: yellow;
  /*border-left-style: dotted;
  border-right-style: dotted;
  border-top-style: dashed;
  border-bottom-style: double;
*/
  border-radius: 90px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 120px;
  border-color:black;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #459ba0;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
form {
    width: 300px;
    margin: 0 auto;
}
textarea {
    height: 5%;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 4px solid #ccc;
    border-radius: 40
    px;
    box-sizing: border-box;
     border-top-color: black;
  border-right-color: yellow;
  border-bottom-color: grey;
  border-left-color: yellow; 
}
</style>

<body>
<div class="container">
    <a href="index.php">Back to Home / पीछे:  </a><br />
  <form id="myform" action="registerproccess.php" method="POST">
      
    <label for="fname">*Full Name / पूरा नाम:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Fullname" required>

    <label for="mobile">*Mobile No / मोबाइल नंबर:  </label>
    <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>

    <label for="altmobile">*Alternate Mobile No / अल्टरनेट  मोबाइल नंबर:  </label>
    <input type="text" id="altmobile" name="altmobile" placeholder="Aternate mobile no." required>

    <label for="address">*Address / पता: </label>
    <div class="form-group form-group-textarea mb-md-1">
    <textarea id="address" name="address" placeholder="Address" required="required" ></textarea>
    </div>                            
    
    <!--<input type="text" id="adress" name="address" placeholder="Address" required>-->

    <label for="aadhar">Aadhar no / आधार नं:<br>optional</label>
    <input type="text" id="aadhar" name="aadhar" placeholder="Aadharcard number">

    <label for="Work">*Work / काम:</label>
    <br>
    <br>
<select id='selUser'  name="selUser">
  <option value="Null">--Select Field--</option>
  <option value="Ac Mechanic">Ac Mechanic</option>
  <option value="Carpenter">Carpenter</option>
  <option value="Wall painter">Wall painter</option>
  <option value="Electrician">Electrician</option>
  <option vlaue="Car Mechanic">Car Mechanic</option>
  <option value="Driver">Driver</option>
  <option value="Pop Design">Pop Design </option>
  <option value="Mobile Repairing">Mobile Repairing</option>
  <option value="Tailor">Tailor</option>
  <option value="Shopkeeper">Shopkeeper</option>
  <option value="salesmen">salesmen</option>
  <option value="Welder">Welder</option>
</select>
   <br>
   <br>
   <label for="experience">Experience / अनुभव:</label>
    <input type="text" id="experience" name="experience" placeholder="Experience">
<br>
    <input type="submit" id="submit" name="submit" value="Submit">
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    var v = $('#myform');
$("#selUser").select2();

$('#selUser').click(function(){
var username = $('#selUser option:selected').text();

  
    $('#submit').click(function(){
      $.ajex({
        url:v.attr('action'),
        type:'POST',
        data:$("#myform input,select").serialize(),

        success:function(data){
          console.log(data);
        }

      });

    });
  });
  });
</script>
</body>
</html>
<?php 
// require_once 'footer.php';
?>
