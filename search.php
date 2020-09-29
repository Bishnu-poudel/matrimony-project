<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  

</head>
<body>
<?php include_once("nav.php")
?>
<div class="col-md-9 search_left">
  <form action="" method="post">	
   <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="sex">Gender : </label>
	<div class="col-sm-7 form_radios">
		<input type="radio" class="radio_1" name="sex" value="male" <?php echo "checked";?>/> Groom &nbsp;&nbsp;
		<input type="radio" class="radio_1" name="sex" value="female"/> Bride
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Marital Status">Marital Status : </label>
	<div class="col-sm-7 form_radios">
		<input type="checkbox" class="radio_1" name="maritalstatus" value="Single" <?php echo "checked" ?>/> Single &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="divorced" /> Divorced &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="widowed" /> Widowed &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="seperated"/> Separated &nbsp;&nbsp;
		<input type="checkbox" class="radio_1" name="maritalstatus" value="any" /> Any
	</div>
	<div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="country">Country : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="country">
            <option value="">Country</option>
            <option value="Japan">Japan</option>
            <option value="Kenya">Kenya</option>
            <option value="Dubai">Dubai</option>
            <option value="Italy">Italy</option>
            <option value="Greece">Greece</option> 
            <option value="Iceland">Iceland</option> 
            <option value="China">China</option> 
            <option value="India">India</option> 
            <option value="Irland">Irland</option> 
            <option value="Srilanka">Srilanka</option> 
            <option value="Russia">Russia</option> 
            <option value="Hong Kong">Hong Kong</option> 
            <option value="Germany">Germany</option>
          </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="District / City">District / City : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="district">
            <option value="">District / City</option>
            <option value="Wayanad">Wayanad</option>
            <option value="Calicut">Calicut</option>
            <option value="Malappuram">Malappuram</option> 
            <option value="Trivandrum">Trivandrum</option> 
            <option value="Kannur">Kannur</option> 
            <option value="Kasargode">Kasargode</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="State">State : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="state">
            <option value="">State</option>
            <option value="Kerala">Kerala</option>
            <option value="Tamilnadu">Tamilnadu</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Madhyapradesh">Madhyapradesh</option>
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Religion">Religion : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="religion">
            <option value="">Religion</option>
            <option value="Hindu">Hindu</option>
            <option value="Sikh">Sikh</option>
            <option value="Jain-All">Jain-All</option>
            <option value="Jain-Digambar">Jain-Digambar</option>
            <option value="Jain-Others">Jain-Others</option>
            <option value="Muslim-All">Muslim-All</option> 
            <option value="Muslim-Shia">Muslim-Shia</option> 
            <option value="Muslim-Sunni">Muslim-Sunni</option> 
            <option value="Muslim-Others">Muslim-Others</option> 
            <option value="Christian-All">Christian-All</option> 
            <option value="Christian-Catholic">Christian-Catholic</option> 
            <option value="Jewish">Jewish</option> 
            <option value="Inter-Religion">Inter-Religion</option> 
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
    <label class="col-sm-5 control-lable1" for="Mother Tongue">Mother Tongue : </label>
    <div class="col-sm-7 form_radios">
      <div class="select-block1">
        <select name="mothertounge">
            <option value="Malayalam">Malayalam</option>
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="Telugu">Telugu</option>
            <option value="Bengali">Bengali</option>
            <option value="Bihari">Bihari</option>
            <option value="Hindi">Hindi</option>
            <option value="Tamil">Tamil</option> 
            <option value="Urdu">Urdu</option> 
            <option value="Manipuri">Manipuri</option> 
        </select>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div class="form_but1">
	<label class="col-sm-5 control-lable1" for="Age">Age : </label>
	<div class="col-sm-7 form_radios">
	  <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemin" id="slider-name" placeholder="18" type="text" required=""/>
      </div>
      
      <div class="col-sm-5 input-group1">
        <input class="form-control has-dark-background" name="agemax" id="slider-name" placeholder="40" type="text" required=""/>
      </div>
      <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
  <input type="submit" name="search" value="Search"/>
  </div>
 </form>
     <?php include"footer.php"
?>

</body>
</html>