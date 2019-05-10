function comprobar() {
  var nmb=document.getElementById("nombre").value
  var usu=document.getElementById("usuario").value
  var ema=document.getElementById("email").value
  var psw=document.getElementById("password").value
  var error=true
  if(nmb==""){
    alert("No has introducido el nombre")
    error=false
  }if(usu==""){
    alert("No has introducido el usuario")
    error=false
  }if(ema==""){
    alert("No has introducido el email")
    error=false
  }if(psw==""){
    alert("No has introducido la contraseña")
    error=false
  }if(error==false){
    return false
  }
}
