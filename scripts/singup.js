var API = new APISchema();

$("#enviar").click(function(){
    registrar();
});

function registrar(){
    var email = $("#correo").val();
    var password = $("#contra").val();

    if(email === "" || password === ""){
        m.Toast({html:'No se permiten campos vacios!'});
    }else{
        firebase.auth().createUserWithEmailAndPassword(email, password)
        .then((userCredential) => {
          // Signed in
          var user = userCredential.user;
          var uid = user.UID;
          fetch(API.users,{
            method: 'POST',
            body: JSON.stringify({
              US_email: email,
              UID: uid
            }),
            headers: {
              "Content-type":"application/json"
            }
          })
          .then(Response => Response.json())
          .then(data => {
            window.location = "?view=home";
          }).catch(err => {

          })
          //M.toast({html: 'Felicidades has ingresado a Trust'});
          //window.location = "?view=home";
          // ...
        })
        .catch((error) => {
          var errorCode = error.code;
          var errorMessage = error.message;
          M.toast({html: errorCode + '-' + errorMessage});
          // ..
        });
    }
}

