const URLListe = "./model/php/DAOListe.php";

var load_liste_membre = ()=>{
    $.ajax({
        url: URLListe,
        method: 'post',
        dataType:"json",
        data: { SELECT_MEMBRE: "SELECT_MEMBRE" },
    success: function(results){
        console.log(results);
        $('#table_membre').html("")
        var html = ""
        if (results.length>0) {
            results.map((result,index)=>{
            html+=
            `<tr>
            <th scope="row">${index+1}</th>
            <td>${result.nom_parent}</td>
            <td>${result.tel_parent}</td>
            <td>${result.nombre_enf}</td>
            <td>
              <button class="rounded-circle btn btn-sm btn-warning btn_edit_membre" data-id="${result.id_parent}" data-nom="${result.nom_parent}"> <i class="fa fa-edit"></i></button> 
              <button class="rounded-circle btn btn-sm btn-danger btn_rmv_membre" data-id="${result.id_parent}" data-nom="${result.nom_parent}"> <i class="fa fa-trash"></i></button>
              <button class="rounded-circle btn btn-sm btn-info info_membre" data-id="${result.id_parent}" data-toggle="tooltip" data-placement="top" title="Info enfant"> <i class="fa-solid fa-info"></i></button>
          </td>
          </tr>`;
        })
        $('#table_membre').html(html)
        }
        
      }});
       
        
    }

$(function(){

    load_liste_membre()
    $(document).on("click",".info_membre",function(){
        var id = $(this).data('id')
        console.log(id);
        $.confirm({
            content: function () {
                var self = this;
                return $.ajax({
                    url: URLListe,
                    dataType: 'json',
                    method: 'POST',
                    data:{'SELECT_MEMBRE':"SELECT_MEMBRE",id}
                }).done(function (response) {
                    self.close()
                    console.log(response);
                    var text = 'Information sur l\'enfant'
                    if (response.length>1) {
                        text = 'Information sur les enfants'
                    }
                    var content =''
                    response.map((resp)=>{
                        content +=`
                    <tr>
                            <td>${resp.nom_enf}</td>
                            <td>${resp.prenom_enf}</td>
                            <td>${resp.date_naiss}</td>
                            <td>${resp.genre}</td>
                        </tr>
                    `
                    })
                     
                    $.dialog({
                        columnClass: 'large',
                        title: text,
                        content: `
                        <table class="table mt-2 mb-2" > 
                        <tr>
                            <th>Nom enfant</th>
                            <th>Prénom enfant</th>
                            <th>Date naissance</th>
                            <th>Genre</th>
                        </tr>
                        <tbody id="table_enf">
                            ${content}
                        </tbody>
                    </table>
                        `,
                    });
                }).fail(function(){
                    self.setContent('Something went wrong.');
                });
            }
        });
    })
    
    $(document).on("click",".btn_edit_membre",function(){
       var id_parent = $(this).data('id')
       var nom = $(this).data('nom')
       
       $.confirm({
        columnClass : 'large' ,
        title: `Modifier l'information de ${nom}`,
        content: `<div class="form-group">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <!-- Input type text -->
                <label for="nom_parent" class="form-label required">Nom parent</label>
                <input type="text" class="form-control form-control-sm" name="nom_parent" id="nom_parent">
            </div>

            <div class="col-md-6 mb-3">
                <!-- Input type text -->
                <label for="adress_parent" class="form-label required">Adresse</label>
                <input type="text" class="form-control form-control-sm" name="adress_parent" id="adress_parent">
            </div>

            <div class="col-md-6 mb-3">
                <!-- Input type text -->
                <label for="cin_parent" class="form-label required">CIN</label>
                <input type="number" class="form-control form-control-sm" name="cin_parent" id="cin_parent">
            </div>

            <div class="col-md-6 mb-3">
                <!-- Input type text -->
                <label for="contact_parent" class="form-label required">Contact</label>
                <input type="number" class="form-control form-control-sm" name="contact_parent" id="contact_parent">
            </div>
        </div>
    </div>`,
        buttons: {
            formSubmit: {
                text: 'Modifier',
                btnClass: 'btn-blue',
                action: function () {
                    var nom = $("#nom_parent").val()
                    var cin_parent = $("#cin_parent").val()
                    var contact = $("#contact_parent").val()
                    var adress = $("#adress_parent").val()

                    $.ajax({
                        url: URLListe,
                        method: 'post',
                        data: { EDIT_MEMBRE: "EDIT_MEMBRE",nom,cin_parent,contact,adress, id_parent },
                    success: function(results){
                        if(results.indexOf('success')>-1){
                            $.alert({
                                title: 'Success',
                                type:'green',
                                content: 'Modification reussit',
                            });
                        }else{
                            $.alert({
                                title: 'Erreur',
                                type:'red',
                                content: 'Modification reussit',
                            });
                        }
                      }});
                }
            },
            cancel: function () {
                //close
            },
        },
        onContentReady: function () {
            // bind to events
            var jc = this;
            this.$content.find('form').on('submit', function (e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger('click'); // reference the button and click it
            });
        },
        onOpenBefore: function (){
            $.ajax({
                url: URLListe,
                method: 'post',
                dataType:"json",
                data: { SELECT_MEMBRE: "SELECT_MEMBRE", id_parent },
            success: function(results){
                console.log(results);
                $("#nom_parent").val(results[0].nom_parent)
                $("#cin_parent").val(results[0].cin_parent)
                $("#contact_parent").val(results[0].tel_parent)
                $("#adress_parent").val(results[0].adress_parent)
                
              }});
        }
    });
    //    champs pour la modification des informations du parents

    
    })

    $(document).on("click",".btn_rmv_membre",function(){

        var id_parent = $(this).data('id')
        var nom = $(this).data('nom')
        
        $.confirm({
            title: `Supprimer ${nom}`,
            content: `Etes-vous sûr de vouloir supprimer ${nom}`,
            type: 'red',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Supprimer',
                    btnClass: 'btn-red',
                    action: function(){
                        
                    }
                },
                Non: function () {
                }
            }
        });
    })
})