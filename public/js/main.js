$( document ).ready(function() {
	var root = "http://localhost/CarpoolingTN/";
	$("#search_s").click(function(){

     var date_depart= $("#date_depart").val();
     var cite_depart= $("#cite_depart").val();
     var destination= $("#destination").val();
     
   
    $.ajax({
       url : root+'Rides/lookRide',
       type : 'POST',
       dataType : 'json',
       // On désire recevoir du HTML
       data:{date_depart:date_depart,cite_depart:cite_depart,destination:destination},
       //before send loading
    beforeSend: function(){
    // Show image container
    $("#loader").show();
   },
       success : function(code_html, statut){ // code_html contient le HTML renvoyé
        
           var html="<h3>Results Found:</h3>";

            if (code_html!='Erreur!'){


               
        html+='<div class="card mb-3">'

         + '<div class="row" style="margin: 10px 0;">'+

            '<div class="col-md4">'+
              '<img src="../images/avatars/'+code_html['rides'][0]['Profile_Pic']+'" class="card-img-top" alt="..." style="margin-left: 1px;width: 265px;height: 289px;" />'+
          '  </div>'
            +'<div class="col-md-6">'

             +' <div class="card-body" style=" width: 211px;">'+
                '<h5 class="card-text" style="margin-right: -48px;">'+
                code_html['rides'][0]['FirstName']+' '+code_html['rides'][0]['LastName']
                 

                +'</h5>'
               +' <div style="display: flex;">'
                  +'<div style="margin: 0 15px 0 0;">'
                  +'  <p style="margin: -12px 0;"><strong>From: </strong>'+code_html['rides'][0]['cite_depart'] +'</p>'
                   +' <hr>'
                   +' <p style="margin: -12px 0;"><strong>Date: </strong>'+code_html['rides'][0]['date_depart']+
                   ' at'+code_html['rides'][0]['heure_depart']+'</p>'+
                    '<hr>'
                  +'</div>'
               +'   <div style="margin: 0 15px;">'
                  +'  <p style="margin: -12px 0;"><strong>To: </strong>'+code_html['rides'][0]['destination'] +'</p>'
                    +'<hr>'
                    +'<p style="margin: -12px 0;"><strong>Places: </strong>'+code_html['rides'][0]['nombre_place'] +'</p>'
                   +' <hr>'
                  +'</div>'
                +'</div>'

                +'<span id="dots"></span><span style="display: none;" id="more">'+
                 +' <div style="display: flex;">'
                  +'  <div style="margin: 0 15px 0 0;">'

                    +'  <p style="margin: -12px 0;"><strong>Added at: </strong>'+code_html['rides'][0]['heure_creation']+'</p>'
                      +'<hr>'
                      +'<p style="margin: -12px 0;"><strong>Phone: </strong>'+ code_html['rides'][0]['Phone']+'</p>'
                      +'<hr>'
                      +'<p style="margin: -12px 0;"><strong>Meeting P: </strong>'+code_html['rides'][0]['point_rassemblement'] +'</p>'
                      +'<hr>'

                    +'</div>'
                    +'<div>'

                      +'<p style="margin: -12px 0;"><strong>Animals: </strong>'+code_html['rides'][0]['animaux']+'</p>'
                      +'<hr>'
                      +'<p style="margin: -12px 0;"><strong>Stuff: </strong>'+code_html['rides'][0]['bagage']+'</p>'
                    +'  <hr>'

                    +'</div>'
                  +'</div>'
                  +'<form action="'+root+'/reservations/addReservation" method="post">'
                 +'   <input type="text" hidden value="'+code_html['rides'][0]['rideid']+'" name="RideId">'
                    +'<input type="number" max="'+code_html['rides'][0]['nombre_place']+'" name="nb_place" style="width: 43px;">'
                   +' <input type="submit" value="Book" class="mb-2 btn btn-sm btn-outline-primary mr-1" name="book">'
                  +'</form>'
                +'</span>'
              +'</div>'

            
              
            +'</div>'
              +'<a onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</a>'
          +'</div>'
        +'</div>'



       +' <script>'
          +'function myFunction() {'
            +'var dots = document.getElementById("dots");'
           +' var moreText = document.getElementById("more");'
            +'var btnText = document.getElementById("myBtn");'

          +'  if (dots.style.display == "none") {'
          +'    dots.style.display = "inline";'
           +   'btnText.innerHTML = "Read more";'
            +'  moreText.style.display = "none";'
           +' } else {'
            +'  dots.style.display = "none";'
             +' btnText.innerHTML = "Read less";'
             +' moreText.style.display = "inline";'
            +'}'
          +'}'
       +' </script>'

    
    +'</div>'

  +'</div>'}
  else
  {
    html+='NOT FOUND'
  }














           
           




          $('.result').empty();
          $('.result').append(html);

       },
       complete:function(data){
    // Hide image container
    $("#loader").hide();
   }
    });
    
   
});
});