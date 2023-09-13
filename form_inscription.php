 

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

<div class="container mt-3">
<h1>
Inscription utilisateur
</h1>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Adresse mail:</label>
      <input type="text" class="form-control" id="information_user_login" placeholder="Enter username" name="username">
    </div>
 

 

 
    <div   class="btn btn-primary btn__" onclick="form_submit(this)" id="form_inscription">Submit</div>
  </form>


</div>


<h2>
  <div id="information_user_login_info"></div>
</h2>
<script src="class/Information.js"></script>
<script src="class/Ajax.js"></script>

 

 
</body>
</html>