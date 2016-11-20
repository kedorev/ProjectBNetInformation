/**
 * Created by apprenant on 18/11/16.
 */
jQuery(document).ready(function(){
    $('#search').click( function() {
        getCharData(urlApiWOW + "character/" + "hyjal/Aeriona" + "?locale=" + locale + "&apikey=" + apikey);
    });

});

function getCharData(urlApi) {
    console.log(urlApi);
    $.ajax({
        url : urlApi,
        type : 'GET',
        success : function(dataBNet, statut)
        {
            console.log(dataBNet);
            $.ajax({
                url : "AJAX/char.php",
                type : 'POST',
                data: { dataBNet: dataBNet},
                success : function(statut){
                    console.log("success");
                    console.log(statut);

                },

                error : function(resultat, statut, erreur){
                    console.log("error" + erreur);
                },

                complete : function(resultat, statut){
                    console.log("complete" + resultat);
                    window.location.href ="char.php";
                }
            });
        },
        complete : function(statut)
        {
            console.log(statut);
        }
    });
}