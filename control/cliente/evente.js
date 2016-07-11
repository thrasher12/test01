$(document).ready(function(){

$("#ok").click(function(){

var formu = $("#form").serialize();
alert(formu); 
enviar(formu);


});




});

function enviar(parametros){

$.ajax({

url:"../control/servidor/contrl_servidor.php",
type:"POST",
data: parametros ,
success: function(){




}







})




}