<div id="FormContainer">
<form  id="LoginForm" method="POST">
<label for="username" id="LoginLabel">Nazwa użytkownika:</label></br>
<input type="text" name="login" id="LoginInput" /></br>
<label for="password">Hasło:</label></br>
<input type="password" name="pass" id="password"  /></br>
<input type="submit" id="LoginButton" onclick="login()" value="Loguj" />
</form>
<button id="SignUp" onclick="SingUp()">Rejestracja</button>
</div>

<script>
public function onclick()
{
  var login = $('#login').val();
  var pass = $('#password').val();
  jQuery.ajax({
    type: "POST",
    url: "<?=site_url('FirstPage/Login');?>",
    dataType: 'json',
    data: {login: login, pass: pass },

    });
}
</script>
