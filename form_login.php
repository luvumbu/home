<div class="container mt-3">
<h1>
Connexion utilisateur
</h1>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">username:</label>
      <input type="username" class="form-control" id="information_user_login" placeholder="Enter username" name="username">
    </div>
 

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="Password" class="form-control" id="information_user_password" placeholder="Enter Password" name="pswd">
    </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div   class="btn btn-primary" onclick="form_submit(this)" id="form_login">Submit</div>
  </form>


</div>