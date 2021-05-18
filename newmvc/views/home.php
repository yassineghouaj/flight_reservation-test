<?php 

if(isset($_POST['search'])){
  header("location: flight");

}

?>

<body style = "background-image : url('fly2.jpg') ">
<div class="pos">

<div class="login-box">
  <h2>SEARCH FOR  FLIGHTS</h2>
 
  <form action="flight" method="POST">
    <div class="user-box">
      <input type="text" name="depart" required="">
      <label>depart</label>
    </div>
    <div class="user-box">
      <input type="text" name="destination" required="">
      <label>destination</label>
    </div>
	<div class="user-box">
      <input type="date" name="dates" >
      <label>date de depart</label>
    </div>
<div>
    <div id="redate" style="display: none"   class="user-box">
      <input type="date" name="dates" >
      <label>date de retour</label>
    </div>
   </div> 
    		<div class="sho">


			 Aller-simple <input type='radio' name='trip' onclick="javascript:yesnoCheck();" value='1' id="simple" checked/> Aller-retour <input type='radio' name='trip' value='2' onclick="javascript:yesnoCheck();" id="alretour"/>

			</div>
	
     <button name="search" class="btn btn-outline-light">Search for  Flights</button>
     <a href = "login">go</a>
  
  </form>
  
		</div>		
				
</div>
 <script src = reserv.js></script>
<script>
        
    function yesnoCheck() {
    if (document.getElementById('simple').checked) {
        document.getElementById('redate').style.display = 'none';
        }
    else if(document.getElementById('alretour').checked) {
        document.getElementById('redate').style.display = 'block';
       
   }
     
    } 
    </script>


</body>







<!--
<body style = "background-image : url('fly2.jpg') ">
<h1 class="display-3">Welcome to dreamsFLY</h1>

<form action="flight" method = "POST" role="form" class="form-inline justify-content-center mt-5">

    <label for="fname">depart</label>
    <input type="text" id="fname" name="depart" placeholder="from where ..">

    <label for="lname">destination</label>
    <input type="text" id="lname" name="destination" placeholder="to ..">

   
   <button name = "search" class="btn btn-primary">search</button>
  </form>-->






