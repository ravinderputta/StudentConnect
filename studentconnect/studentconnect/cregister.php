<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="header.css" type="text/css">
<title>Corporate Registration Form</title>
</head>
<body>
 <?php include 'header.php';?>
<div id="wrapper">
<table class="infobox" border="0" cellspacing="1" align="center">
<form method="post" action="cinsert.php">
<tr>
<td colspan="2"><h2>Corporate Registration Form</h2></td>
</tr>
<tr>
<td>Full Name</td>
<td><input type="text" name="fullname"/></td>
</tr>
<tr>
<td>Company Name</td>
<td><input type="text" name="companyname"/></td>
</tr>
<tr>
<td>Designation</td>
<td><input type="text" name="designation"/></td>
</tr>
<tr>
<td>Emailid</td>
<td><input type="text" name="emailid"/></td>
</tr>
<tr>
    
    <td>Username</td>
    <td><input type="text" name="user_name" class="user_name" ></td>
      <td><span class="check"  ></span></td>
    
        
</tr>


<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.password_strength.js"></script>
<script type="text/javascript">
$(function()
{
  $('.user_name').keyup(function()
  {
  var checkname=$(this).val();
 var availname=remove_whitespaces(checkname);
  if(availname!=''){
  $('.check').show();

  var String = 'username='+ availname;
  
  $.ajax({
          type: "POST",
          url: "cavailable.php",
          data: String,
          cache: false,
          success: function(result){
               var result=remove_whitespaces(result);
               if(result==''){
                       $('.check').html('Avaliable')
                       
               }else{
                       $('.check').html('Not Available')
               }
          }
      });
   }else{
       $('.check').html('');
    
   }
  });

$('.passwd').password_strength(); 

});

function remove_whitespaces(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
	 


}
</script>
<tr>
<td>Password</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td align="right"><input class="button" type="submit" name="register" value="Register" align="right"/></td>
</tr>
</form>
</table>
</div>
</body>
</html>