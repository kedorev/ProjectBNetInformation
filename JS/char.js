/**
 * Created by apprenant on 18/11/16.
 */
jQuery(document).ready(function(){
    getCharData(urlApiWOW+"character/"+"hyjal/Aeriona"+"?locale="+locale+"&apikey="+apikey);


});

function getCharData(urlApi) {
    console.log(urlApi);
    $.ajax({
        url : urlApi,
        type : 'POST',
        dataType : 'json',
        success : function(code_html, statut){
            console.log("success");console.log(code_html);
            alert(code_html);
        },

        error : function(resultat, statut, erreur){
            console.log("error" + erreur);
        },

        complete : function(resultat, statut){
            console.log("complete" + resultat);
        }
    });
}