var API = new APISchema();

$("#enviarP").click(function(){
    registrar();
});

function registrar(){
    var code = $("#code").val();
    var name = $("#name").val();
    var descrip = $("#descrip").val();
    var precio = $("#precio").val();

    if(code === "" || name === ""|| descrip === ""|| precio === ""){
        m.Toast({html:'No se permiten campos vacios!'});
    }else{
        fetch(API.products,{
            method: 'POST',
            body: JSON.stringify({
              PD_code: code,
              PD_name: name,
              PD_descrip: descrip,
              PD_price: precio
            }),
            headers: {
              "Content-type":"application/json"
            }
          })
          .then(Response => Response.json())
          .then(data => {
            window.location = "?view=newproduct";
          }).catch(err => {

          })

    }
}