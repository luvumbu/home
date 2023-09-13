 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div id="form"></div>

<h2>
  <div id="information_user_login_info"></div>
</h2>
<script src="class/Information.js"></script>
<script src="form.js"></script>


<script src="class/Ajax.js"></script>

 
<script>
  Ajax("form","form_login.php");


</script>


<style>
  .display_none2{
 
    display:none; 


  }

 
</style>
 
</body>
</html>