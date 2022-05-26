<link rel="stylesheet" href="{{asset('css/css_login.css')}}" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="fadeIn first">
      <img src="{{asset('images/user.PNG')}}" id="icon" alt="User Icon" style="border-radius: 50%;" />
    </div>
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="oassword second" name="paasword" placeholder="password">
      <input type="text" id="password" class="oassword second" name="paasword" placeholder="confirmation de password">
      <input type="submit" class="fadeIn fourth" value="Enregistrer">
    </form>
  </div>
</div>	