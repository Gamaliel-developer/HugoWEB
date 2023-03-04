//Acceder a la vista id
$("#enviar").click(function(){
    login();
});

function login(){
    var email = $("#correo").val();
    var password = $("#contra").val();

    if(email === "" || password === ""){
        m.Toast({html:'No se permiten campos vacios!'});
    }else{
        firebase.auth().signInWithEmailAndPassword(email, password)
        .then((userCredential) => {
          // Signed in
          var user = userCredential.user;
          M.toast({html: 'Felicidades has ingresado a Trust'});
          window.location = "?view=home";
          // ...
        })
        .catch((error) => {
          var errorCode = error.code;
          var errorMessage = error.message;
          M.toast({html: errorCode + '-' + errorMessage});

        });
    }
}

