    <?php 
if(isset($_POST['SubmitButton'])) {              
    
    $name=$_REQUEST['name']; 
    $subject=$_REQUEST['subject']; 
    $another=$_REQUEST['another']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
      
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("29hdkjain@gmail.com", $name,$subject,$another,$message, $from);
        echo '<script language="javascript">';
        echo 'alert("Message successfully sent")';
        echo '</script>'; 
      
    }
    else   
{

?>
   <html lang="en">
  <head>
    <link href="bootstrap.css" rel="stylesheet">
</head>
<body>
    <form  class="form-horizontal" action="form.php" method="post" target="ds"> 

    <input type="hidden" name="action" value="submit">
         <div class="form-group">
      <label  class="col-sm-3 control-label">Name</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="name" name="name" required>
      </div>
   </div>
   
<div class="form-group">
    <label class="col-sm-3 control-label">subject</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="subject" name="subject" required>
    </div>
  </div>

<div class="form-group">
    <label class="col-sm-3 control-label">Another</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="another" name="another" required>
    </div>
  </div>
   <div class="form-group">
    <label class="col-sm-3 control-label">Email</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="email" name="email" required>
    </div>
  </div>
        <div class="form-group">
    <label class="col-sm-3 control-label">Message</label>
    <div class="col-sm-5">
      <textarea type="text" class="form-control" id="message" name="message"  required></textarea>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group" style="text-align:center">
    <input type="submit" name="SubmitButton" value="Send email"/>
    </div> 
    </form>
    <iframe name="ds" style="display:none;text-align:center"></iframe>
    </body>
    </html> 
<?php
}
?>
