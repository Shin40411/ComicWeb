historyviewed();

function historyviewed(){
    var id_viewed = $('#comicview_id').val();

    if(id_viewed != undefined){
        // alert(id_viewed);
    var name_viewed = document.getElementById('comicview_name'+id_viewed).value;
    var url_viewed = document.getElementById('comicview_url'+id_viewed).value;
    var img_viewed = document.getElementById('comicview_img'+id_viewed).value;
        
        var newItem = {
            'id_viewed'  : id_viewed,
            'name_viewed': name_viewed,
            'url_viewed' : url_viewed,
            'img_viewed' : img_viewed
        }

        if(localStorage.getItem('viewed')==null){
            localStorage.setItem('viewed', '[]');
        }

        var old_data = JSON.parse(localStorage.getItem('viewed'));

        var matches = $.grep(old_data, function(obj){
            return obj.id_viewed == id_viewed;
        })

        if(matches.length){

        }else{
            old_data.push(newItem);
        }
        localStorage.setItem('viewed', JSON.stringify(old_data));
    }
}

show_history();
//Hiển thị list history
function show_history(){
  if(localStorage["viewed"])
  {
    var data = JSON.parse(localStorage.getItem('viewed'));
    data.reverse();
    for(i=0;i<data.length;i++){
      var name_viewed = data[i].name_viewed;
      var img_viewed = data[i].img_viewed;
      var id_viewed = data[i].id_viewed;
      var url_viewed = data[i].url_viewed;

      if ($('#viewed li').length < 5) {
        $('#viewed').append(`            
            <li class="clearfix">
                <div class="t-item">
                <a href="${url_viewed}" class="thumb">
                <img src="${img_viewed}" alt="">
                </a>
                <h3 class="title">
                <a href="${url_viewed}">${name_viewed}</a>
                </h3>
                <p class="chapter">
                <span class="view">
                    <a class="visited-remove" onclick="delete_view(${id_viewed})" href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                    Xóa
                    </a>
                </span>
                </p>
            </div>
            </li>
        `);
      }
      
    }
  } 
}

show_historyread();

function show_historyread(){
  if(localStorage["viewed"])
  {
    var data = JSON.parse(localStorage.getItem('viewed'));
    data.reverse();
    for(i=0;i<data.length;i++){
      var name_viewed = data[i].name_viewed;
      var img_viewed = data[i].img_viewed;
      var id_viewed = data[i].id_viewed;
      var url_viewed = data[i].url_viewed;

 
        $('#historyview').append(`            
        <div class="col-md-3 col-6">
        <a href="${url_viewed}">
          <div class="image">
            <img class="card-img-top" src="${img_viewed}"  height="210">
            </a>
              <div class="view clearfix">
                <span class="pull-left">
            <a href="javascript:void(0)" class="visited_del" onclick="delete_view(${id_viewed})"> <i class="fa fa-times"> Xóa</i> </a>
                </span>
              </div>
          </div>     
                <div class="card-body topic">
             <a href="${url_viewed}">               
                        <h5 class="card-title cap">${name_viewed}</h5>
                        </a>
                </div>
              </div>
        `);

      
    }
  }
}

function delete_view(id){
    var items = JSON.parse(localStorage.getItem('viewed'));
    

      var index  = items.findIndex( st => st.id_viewed == id );

      if( index > -1 ) {
        items.splice(index, 1);      
        localStorage.setItem('viewed', JSON.stringify(items));
      } 
    
    window.location.reload();
  }



  