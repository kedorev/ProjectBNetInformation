/**
 * Created by apprenant on 05/12/16.
 */
jQuery(document).ready(function(){
    $('#local').change( function() {
        //alert($( "#local option:selected" ).text());
        $.ajax({
            url : "AJAX/AJAXRealm.php",
            type : 'POST',
            data : { local: $( "#local option:selected" ).text() },
            success : function(data, statut)
            {

                $('#realm').html(data);
            },
            error : function(resultat, statut, erreur){
                console.log("error" + erreur);
            },

            complete : function(resultat, statut){
                console.log("complete" + resultat);
            }
        });

    });

    $("#SearchWowCaracter").click( function(event) {
        event.preventDefault();
        if($("#nameCaracter:input").val() != "")
        {
            var url = urlApiWOW + "character/" + $( "#realm option:selected" ).text() +"/"+$("#nameCaracter:input").val()  + "?locale=" + $( "#local option:selected" ).text()  + "&apikey=" + apikey;
            getCharData(url);
            if($("#pets").prop('checked'))
            {
                url = urlApiWOW + "character/" + $( "#realm option:selected" ).text() +"/"+$("#nameCaracter:input").val()  + "?fields=pets&locale=" + $( "#local option:selected" ).text()  + "&apikey=" + apikey;
                getCharData(url);
            }
        }
        else
        {
            alert("Nom vide");
        }


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
                    data: { dataBNet: dataBNet, Mehod: "Global"},
                    success : function(statut){
                        console.log("success");
                        console.log(statut);

                    },

                    error : function(resultat, statut, erreur){
                        console.log("error" + erreur);
                    },

                    complete : function(resultat, statut){
                        console.log("complete" + resultat);
                        //window.location.href ="char.php";
                    }
                });
            },
            complete : function(statut)
            {
                console.log(statut);
            }
        });
    }
});