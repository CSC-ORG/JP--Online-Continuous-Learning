<?php
include "connect.php"; 
 session_start();
 if(!isset($_SESSION['username']))
 {
      header('Location: fpage.php');
 }
$user= $_SESSION['username'];
if(isset($_POST['submit']))
{
           $add1=$_POST['add1'];
           $add2=$_POST['add2'];
           $tag=$_POST['tag'];
           $about=$_POST['about'];
           $phone=$_POST['phone'];
           $password=$_POST['confirm_password'];
        if(!empty($add1))
            $query=mysqli_query($con,"UPDATE seller set address1='$add1' where username='$user'");
        if(!empty($add2))
            $query=mysqli_query($con,"UPDATE seller set address2='$add2' where username='$user'");
        if(!empty($tag))
            $query=mysqli_query($con,"UPDATE seller set tag_line='$tag' where username='$user'");
        if(!empty($about))
            $query=mysqli_query($con,"UPDATE seller set about='$about' where username='$user'");
        if(!empty($phone))
            $query=mysqli_query($con,"UPDATE seller set phone='$phone' where username='$user'");
        if(!empty($password))
            $query=mysqli_query($con,"UPDATE seller set password='$password' where username='$user'");

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Driver Registration - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{ 
    margin-top:40px; 
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Comapany Details</p>
        </div>
        
        <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Email Templates</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Preview & Submit</p>
        </div>
    </div>
</div>

    <div class="row setup-content" id="step-1">
    
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Company Details</h3>
                         

<br>
<br>

<br>
<br>
<!-- Text input-->
<form role="form" method="POST" action="">
<div class="form-group">
  <label class="col-md-4 control-label" for="service_architecture">Address one</label>  
  <div class="col-md-5">
  <input id="service_architecture" name="add1" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="service_version">Address two</label>  
  <div class="col-md-5">
  <input id="service_version" name="add2" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>


<br>
<br>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="service_version">TAG LINE</label>  
  <div class="col-md-5">
  <input id="service_version" name="tag" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>
<form role="form">
    <div class="form-group">
      <label for="comment">ABOUT US</label>
      <textarea class="form-control" rows="5" id="comment" name="about"></textarea>
    </div>
 </form>
 
<div class="form-group">
  <label class="col-md-4 control-label" for="service_version">FB LINK:</label>  
  <div class="col-md-5">
  <input id="service_version" name="service_version" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<br><br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">crausel pic1</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>
<br><br>

<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">crausel pic2</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>
<br><br>

<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">crausel pic</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>

                 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
<br><br>

<!-- Select Basic -->
            </div>
        </div>
    </div>
    
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Email Details</h3>
                

<div class="form-group">
  <label class="col-md-4 control-label" for="emailType">Mobile no.</label>  
  <div class="col-md-5">
  <input id="emailType" name="phone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>  
<br>
<br>              <!-- Text input-->


<br>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="emailType">Password</label>  
  <div class="col-md-5">
  <input id="emailType" name="password" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subject">Confirm Password</label>  
  <div class="col-md-5">
  <input id="subject" name="confirm_password" type="password" placeholder="" class="form-control input-md">
    
  </div>
</div>
<br>
<br>

                 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-6">
        <div class="col-xs-12">
   
			<div class="col-md-12">
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">gallry pic1</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div><br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">gallry pic2</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div><br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">gallry pic3</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>   <br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">gallry pic4</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>   <br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">gallry pic5</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>   <br>
<hr>
<hr>
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">menu1</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="sep_json">menu2</label>
  <div class="col-md-4">
      		<input type="file" id="sep_json" name="sep_json" class="input-file" accept=".jpg,.txt,.json">
     <div id="sep_jsondisplay"></div>
  </div>
</div>

   <h3> Preview & Submit</h3>
                <button type="submit" class="btn btn-success btn-lg pull-right"  value="Update"></button>
      
          </form>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
    
    
    //custom code by @naresh for file input sep
    
        var fileInput = document.getElementById('sep_json');
		var fileDisplayArea = document.getElementById('sep_jsondisplay');
var fileInput1 = document.getElementById('action_json');
    	var fileDisplayArea1 = document.getElementById('action_jsondisplay');
        

		    	fileInput.addEventListener('change', function(e) {
			var file = fileInput.files[0];
			var textType = /text.*/;

			if (file.type.match(textType)) {
				var reader = new FileReader();

				reader.onload = function(e) {
          var res= reader.result;
          function isJSON (something) {
    if (typeof something != 'string')
        something = JSON.stringify(something);

    try {
        JSON.parse(something);
        return true;
    } catch (e) {
        return false;
    }
}
          if(isJSON(res)){
					fileDisplayArea.innerText = JSON.stringify(res);
          }else{
            fileDisplayArea.innerText = "File content is not JSON"
          }
				}

				reader.readAsText(file);	
			} else {
				fileDisplayArea.innerText = "File not supported!"
			}
		});
    fileInput1.addEventListener('change', function(e) {
    		var file = fileInput1.files[0];
			var textType = /text.*/;

			if (file.type.match(textType)) {
				var reader = new FileReader();

				reader.onload = function(e) {
          var res= reader.result;
          function isJSON (something) {
    if (typeof something != 'string')
        something = JSON.stringify(something);

    try {
        JSON.parse(something);
        return true;
    } catch (e) {
        return false;
    }
}
          if(isJSON(res)){
					fileDisplayArea1.innerText = JSON.stringify(res);
          }else{
            fileDisplayArea1.innerText = "File content is not JSON"
          }
				}

				reader.readAsText(file);	
			} else {
				fileDisplayArea1.innerText = "File not supported!"
			}
		});
    
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_id">Action Id</label> <div class="col-md-5"> <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Action Name</label> <div class="col-md-5"> <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --> <div class="form-group"> <label class="col-md-4 control-label" for="action_json">Action JSON File</label> <div class="col-md-4"> <input id="action_json" name="action_json" class="input-file" type="file"> </div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    
    
    
    
});
</script>
</body>
</html>
