<?php 
ob_start();
session_start();
if($_SESSION['frontuserid']=="")
{header("location:login.php");exit();}
include("include/connection.php");
$userid=$_SESSION['frontuserid'];
$type=$_POST['type'];
$name=$_POST['name'];
?>

<div class="row">
                    <div class="col-12">
                    <p class="mb-1">Contract Money</p>
                    <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">
                        <label class="btn btn-secondary active" onClick="contract(10);">
                          <input class="contract" type="radio" name="contract" id="hoursofoperation" value="10" checked >
                          10 </label>
                        <label class="btn btn-secondary" onClick="contract(100);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="100">
                          100 </label>
                          <label class="btn btn-secondary" onClick="contract(1000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="1000">
                          1000 </label>
                          <label class="btn btn-secondary" onClick="contract(10000);">
                          <input type="radio" class="contract" name="contract" id="hoursofoperation" value="10000" >
                          10000 </label>
                      </div>
                      
                   <input type="hidden" id="contractmoney" name="contractmoney" value="10">   
                      
                    <p class="mb-1">Number</p>
      <div class="def-number-input number-input safari_only">
  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); addvalue();" class="minus" style="position: absolute; left:10px; width: 60px;"></button>
  <input class="quantity" min="1" name="amount" id="amount" value="1" type="number" onKeyUp="addvalue();">
  <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); addvalue();" class="plus" style="position: absolute; right:10px; width: 60px;"></button>
</div>
<input type="hidden" name="userid" id="userid" class="form-control" value="<?php echo $userid;?>">
      <input type="hidden" name="type" id="type" class="form-control" value="<?php echo $type;?>">
    <input type="hidden" name="value" id="value" class="form-control" value="<?php echo $name;?>">
      <input type="hidden" name="counter" id="counter" class="form-control" >
      <input type="hidden" name="inputgameid" id="inputgameid" class="form-control" value="<?php echo sprintf("%03d",gameid($con));?>"> 
      <div class="mt-2" id="camt">Total contract money is <span id="showamount">10</span></div><!--Client Kashyap-->
      <input type="hidden" name="finalamount" id="finalamount" value="10">
      <div style="padding-top:35px;"><!-- was 30 | Client Mon -->
			<label class="container" for="remember">I agree <a data-toggle="modal" href="#privacy" data-backdrop="static" data-keyboard="false" style="color: #009688;">PRESALE RULE</a>
				<input type="checkbox" checked="checked"  id="presalerule" name="presalerule">
				<span class="checkmark"></span>
			</label>
					
       </div>
                    </div>
                    
                </div>
