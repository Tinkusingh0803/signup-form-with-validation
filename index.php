 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>www.signupform.com</title>
     <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
 
<link rel="stylesheet" href="style.css">

 </head>
 <body>
    
 <form id="basic-form" action="" method="POST">
  <div  class="name">
    
  <h1>Contact</h1>
  <div class="form-group ">
    <p>
    <label for="firstname">Name <span>(required, at least 3 characters)</span></label>
    <input type="text" minlength="3" class="form-control" id="firstname" name="firstname"   placeholder="Enter  Name" required>
    </p>
     </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" id="email" name="email" value="" aria-describedby="emailHelp" placeholder="Enter  email" required>
     </div>

  <div class="form-group">
    <label for="exampleInputnumber">Mobile No. </label>
    <input type="number" minlength="10" maxlength="10" class="form-control" id="exampleInputnumber" id="Mobile" name="number" value=""   placeholder="Enter  number" required>
   </div>

  <div class="form-group">
    <label for="exampleInputAdhar"> Adhar Card No. </label>
    <input type="number" minlength="12" maxlength="12" class="form-control" id="exampleInputAdhar" id="Adhar" name="Adhar" value=""   placeholder="Enter  Adhar Card No." required>
    </div>
<div class="form-group">
    <label for="exampleInputpan"> Pan Card </label>
    <input type="text" minlength="10" maxlength="10" class="form-control pan" id="exampleInputpan" id="pancard" name="pancard" value=""
      placeholder="Enter  Pan Card" required>
      <span id="pannoti"></span>
    </div>
    <div class="form-group">
    <label for="exampleInputbank"> Back Account </label>
    <input type="number"  minlength="12" maxlength="12" class="form-control" id="exampleInputbank" id="bankaccount" name="bankaccount" value=""  placeholder="Enter  Bank Account" required>

    </div>
   
  
 <div class="form-group">
    <label for="exampleInputifsccode"> IFSC Code </label>
    <input type="text"  minlength="11" maxlength="11" class="form-control ifsc" id="exampleInputifsccode" id="ifsccode" name="ifsccode" value=""  placeholder="Enter ifsc number " required>
    <span id="ifscnoti"></span>
    </div>
<div class="form-group">
    <label for="exampleInputpincode"> pin code. </label>
    <input type="number"  minlength="6" maxlength="6" class="form-control" id="exampleInputpincode" id="pincode" name="pincode" value=""  placeholder="Enter    pin code " required>
    </div>
<div class="form-group">
    <label for="exampleInputgst"> GST </label>
    <input type="text"  minlength="15" maxlength="15" class="form-control gst" id="exampleInputgst" id="gst" name="gst" value=""  placeholder="Enter gst" required>
    <span id="gstnoti"></span>
    </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Message</label>
    <textarea class="form-control"  minlength="50" id="exampleFormControlTextarea1" id="firstname" id="message" name="message" value="" rows="3" required></textarea>
  </div>
  <input type="submit" name="submit" onclick = "return Validate()" class="btn  buttonclass" value="Submit">
  <!-- <button type="submit" name="submit" class="btn  buttonclass">Submit</button> -->
</div>

</form>


 </body>

 </html>
 
 <script>
     


   $(document).ready(function() {
  $("#basic-form").validate({
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      Mobile : {
        required: true,
        minlength: 10
      },
      Adhar : {
        required: true,
        minlength: 12
      },
      pancard : {
        required: true,
        minlength: 10
      },
      bankaccount : {
        required: true,
        minlength: 12
      },
      ifsccode : {
        required: true,
        minlength: 11
      },
      pincode : {
        required: true,
        minlength: 6
      },
      gst : {
        required: true,
        minlength: 15
      },
        message : {
        required: true,
        minlength: 100
      },
      
      email: {
        required: true,
        email: true
      },
       
    },
    messages : {
      name: {
        minlength: "Name should be at least 3 characters"
      },
       Mobile : {
         
        minlength: "Please should be at least 10 digits"
      },
       
       
      email: {
        email: "The email should be in the format: abc@domain.tld"
      },
      weight: {
        required: "People with age over 50 have to enter their weight",
        number: "Please enter your weight as a numerical value"
      }
    }
  });
});  


 $(document).ready(function(){     
        
$(".pan").change(function () {      
var inputvalues = $(this).val();      
  var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;    
  if(!regex.test(inputvalues)){          
 $('#pannoti').text("invalid PAN no");

  return regex.test(inputvalues);    
  } 
  else if(regex.test(inputvalues)){         
 $('#pannoti').text();    
  return regex.test(inputvalues);    
  }  
});      
    
});  
    

    $(document).ready(function(){     
        
$(".ifsc").change(function () {      
var inputvalues = $(this).val();      
  var reg = /[A-Z|a-z]{4}[0][a-zA-Z0-9]{6}$/;    
                if (inputvalues.match(reg)) {    
                    return true;    
                }    
                else {    
                     $(".ifsc").val("");    
                    alert("You entered invalid IFSC code");    
                    //document.getElementById("txtifsc").focus();    
                    return false;    
                }    
});      
    
});   


$(document).ready(function () {      
$(".gst").change(function () {    
                var inputvalues = $(this).val();    
                var gstinformat = new RegExp('^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]1}[1-9A-Z]{1}Z[0-9A-Z]{1}$');    
                if (gstinformat.test(inputvalues)) {    
                    return true;    
                } else {    
                    alert('Please Enter Valid GSTIN Number');    
                    $(".gst").val('');    
                    $(".gst").focus();    
                }    
            });          
 });        
 </script>

