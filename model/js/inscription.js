const urlInscription = "./model/php/DAOInscription.php";

$(function(){
    // listes de(s) enfants d'un parent
    var liste_enfant = []

    var load_liste_enfants = ()=>{
        $('#table_enf').html("")
        var html = ""
        liste_enfant.map((enfant)=>{
            html+=
            `<tr>
            <td>${enfant.nom}</td>
            <td>${enfant.prenom}</td>
            <td>${enfant.date_naiss}</td>
            <td>${enfant.genre}</td>
            <td><button type="button" class="btn btn-danger delete_enf" data-nom="${enfant.nom}" data-prenom="${enfant.prenom}">Supprimer</button> <button type="button" class="btn btn-warning edit_enf" data-nom="${enfant.nom}" data-prenom="${enfant.prenom}">Modifier</button></td>
        </tr>`;
        })
        $('#table_enf').html(html)
        
    }

    $(document).on("click",".btn_add_enf_info",function(){
        var nom_parent = $('#nom_parent').val()
        var adress_parent = $('#adress_parent').val()
        var cin_parent = $('#cin_parent').val()
        var contact_parent = $('#contact_parent').val()


        if (liste_enfant.length == 0){
            alert("Pour enregistrer l'information d'un enfant vous devez avoir au moins un enfant.")
        }else if(!nom_parent && !adress_parent && !cin_parent && !contact_parent){
            alert("Remplissez les informations obligatoire du parent.")
        }else{
            let listes_enfants = JSON.stringify(liste_enfant)

            $.ajax({
                url: urlInscription,
                method: 'post',
                data: { INSERT_INFO_ENF: "INSERT_INFO_ENF", listes_enfants, nom_parent,adress_parent, cin_parent, contact_parent },
            success: function(result){
                if(result.indexOf("success")>=0){
                    alert("Enregistrement réussi")
                    window.location.reload()
                }else{
                    alert("Echec d'enregistrement")
                }
              }});

            // $.confirm({
            //     content: function () {
            //         var self = this;
            //         return $.ajax({
            //             url: urlInscription,
            //             method: 'post',
            //             data: { INSERT_INFO_ENF: "INSERT_INFO_ENF", listes_enfants, nom_parent,adress_parent, cin_parent, contact_parent }
            //         }).done(function (response) {
            //             self.close()
            //             liste_enfant = []
            //         }).fail(function () {
            //             self.close()
            //             alert("Erreur d'enregistrement");
            //         });
            //     }
            // });
        }
    })

    $(document).on("click",".btn_add_enf",function(){
        var data_geted = []
        // ajouter un enfant
        var nom = $("#nom_enf").val()
        var prenom = $("#prenom_enf").val()
        var date_naiss = $("#date_naiss_enf").val()
        var genre = $("#genre_enf").val()
        if(nom && prenom && date_naiss && genre){
            data_geted  = {nom,prenom,date_naiss,genre}
            if(liste_enfant.length>4){

            }else{
                liste_enfant.push(data_geted)
            }
            
            console.log(liste_enfant);

            // Vider les champs
            $("#nom_enf").val("")
            $("#prenom_enf").val("")
            $("#date_naiss_enf").val("")

            // Charger la liste des enfants enregistrer
            load_liste_enfants()
        }else{
            alert("Veillez remplir tous les champs obligatoires")
        }
    })

    $(document).on("click", ".delete_enf", function () {
        let value = $(this).data("nom")+' '+ $(this).data("prenom");
        var index = liste_enfant.findIndex(function (s) {
            return s.nom+' '+s.prenom === value;
        });
        liste_enfant.splice(index, 1);
        load_liste_enfants()
    });

    $(document).on("click", ".edit_enf", function () {
        var nom = $("#nom_enf")
        var prenom = $("#prenom_enf")
        var date_naiss = $("#date_naiss_enf")
        let value = $(this).data("nom")+' '+ $(this).data("prenom");
        var index = liste_enfant.findIndex(function (s) {
            return s.nom+' '+s.prenom === value;
        });
       
        nom.val(liste_enfant[index].nom)
        prenom.val(liste_enfant[index].prenom)
        date_naiss.val(liste_enfant[index].date_naiss)
        $(`#genre_enf`).val(liste_enfant[index].genre).change()
        liste_enfant.splice(index, 1);
        load_liste_enfants()
    });


})