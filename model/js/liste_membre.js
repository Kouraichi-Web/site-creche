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
              <button class="rounded-circle btn btn-sm btn-warning"> <i class="fa fa-edit"></i></button> 
              <button class="rounded-circle btn btn-sm btn-danger"> <i class="fa fa-trash"></i></button>
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
    
})