

function openLogin(){
  var register = document.getElementsByClassName('register');
  var login = document.getElementsByClassName('login');

  register[0].style.display = 'none';
  login[0].style.display = 'block';

}

function openRegister(){
  var register = document.getElementsByClassName('register');
  var login = document.getElementsByClassName('login');

  login[0].style.display = 'none';
  register[0].style.display = 'block';

}

function checkPasswordRegister() {
  var psw = document.getElementById("psw").value;
  var repeat_psw = document.getElementById("psw-repeat").value;

  if (psw != repeat_psw) {
    alert("Password Don't Match!");
    return false;
  }else{
    alert("Successfully Account is created")
    return true;
  }

}
