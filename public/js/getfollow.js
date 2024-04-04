$(() => {
show_list();
//Hiển thị list follow
function show_list(){
  // if(localStorage.getItem('wishlist_truyen')!=null)
  // {
    var data = JSON.parse(localStorage.getItem('wishlist_truyen')) || [];
    data.reverse();
    // alert(data);
    if(data){
      
    for(i=0;i<data.length;i++){
      var title = data[i].title;
      var views = data[i].views;
      var author = data[i].author;
      var chapter = data[i].chapter;
      var img = data[i].img;
      var cmt = data[i].cmt;
      var rate = data[i].rate;
      var id = data[i].id;
      var url = data[i].url;
      var chapter_html = chapter.map( chap => ` <a href="${chap.chap_url}"> ${chap.chap_name} </a> <i class="time">${author}</i> <br/>` );
      // console.log(chapter_html)
      $('#following').append(`            
      <div class="col-md-3 col-6">
      <a href="${url}">
        <div class="image">
          <img class="card-img-top" src="${img}"  height="210">
            <div class="view clearfix">
              <span class="pull-left">
           <i class="fas fa-star"> ${rate}</i>
             <i class="fas fa-eye"> ${views}</i> 
             <i class="fa fa-comment"> ${cmt}</i>
              </span>
            </div>
        </div>     
              <div class="card-body topic">
                      <h5 class="card-title cap">${title}</h5>
                      </a>
                      <ul class="comic-item">
                    
                      <li class="chapter clearfix">
                      ${chapter_html.join('')}
                      </li>
           
                    </ul>
              </div>
            </div>
          `);
    }
  }
  // } else if(localStorage.getItem('wishlist_truyen') === null) {
  //   $('#following').append(`            
  //   <img src="public/images/huong-dan-theo-doi-truyen.jpg">
  //       `);
  // }
}

show_wishlist();
//Hiển thị list follow
function show_wishlist(){
  if(localStorage.getItem('wishlist_truyen')!=null)
  {
    var data = JSON.parse(localStorage.getItem('wishlist_truyen'));
    data.reverse();
    for(i=0;i<data.length;i++){
      var title = data[i].title;
      var author = data[i].author;
      var chapters = data[i].chapterside;

      var img = data[i].img;
      var id = data[i].id;
      var url = data[i].url;
      var chapterside_html = chapters.map( chapsides => `<a href="${chapsides.chapsideurl}"> ${chapsides.chapsidename} </a> <i class="time">${author}</i>` );
      if ($('#yeuthich ul li').length < 5) {
        $('#yeuthich').append(`            
        <ul class="list-unstyled" style="margin-top: 4px;">
            <li>
              <a href="${url}" class="thumb"> <img src="${img}"> </a>
            <a href="${url}">
              <h3 class="title">${title}</h3>
              </a>
              <p class="chapter">
              ${chapterside_html.join('')}
              </p>
            </li>
        </ul>
        `);
      }
      
    }
  }
}


const unflw = () => {
      $('.btn-info').removeClass('btn-info').addClass('btn-success');          
      $('.fa-times').removeClass('fa-times').addClass('fa-heart');      
    }

//Nút follow
$('.btn-thich_truyen').click(function(){
//window.location.reload();
  const id = $('.wishlist_id').val();
  const title = $('.wishlist_title').val();
  const views = $('.wishlist_views').val();
  const chapters = $('.wishlist_chap');
  const chapside = $('.wishlist_chapside');
  const author = $('.wishlist_author').val();
  const img = $('.wishlist_img').attr('src');
  const url = $('.wishlist_url').val();
  const cmt = $('.wishlist_cmt').val();
  const rate = $('.wishlist_rate').val();

  const chap = [];
  chapters.each((index,e) => chap.push({
    chap_name: $(e).val(),
    chap_url: $(e).data('url')
  }));
  const chapsides = [];
  chapside.each((index,e) => chapsides.push({
    chapsidename: $(e).val(),
    chapsideurl: $(e).data('url')
  }));
  
  //chap.push(chapter);
  //console.log(chap);

  const item = {
    'id': id,
    'title': title,
    'views': views,
    'chapter': chap,
    'chapterside': chapsides,
    'author': author,
    'img': img,
    'url': url,
    'cmt': cmt,
    'rate': rate
  }
  let list_story = JSON.parse(localStorage.getItem('wishlist_truyen'));

  if(list_story==null)
  {
    list_story = [item]
    localStorage.setItem('wishlist_truyen', JSON.stringify(list_story));
  } else {
    let index = list_story.findIndex( st => st.id == id );

    if ( index > -1 ) {
      list_story.splice(index, 1);
      unflw();
    } else {

      if ( list_story.length > 20 ) {
        alert('Đã đạt tới giới hạn theo dõi truyện!');
        return false;
      } else {
        list_story.push(item);
      $('.btn-success').removeClass('btn-success').addClass('btn-info');   
      $('.fa-heart').removeClass('fa-heart').addClass('fa-times');
      }

    }

    localStorage.setItem('wishlist_truyen', JSON.stringify(list_story));

  }
  window.location.reload();
})
$(document).ready(function(){
  let list_story = JSON.parse(localStorage.getItem('wishlist_truyen')) || [];
  const id = $('.wishlist_id').val();

  const index  = list_story.findIndex( st => st.id == id );

  if( index > -1 ) {
    $('.btn-success').removeClass('btn-success').addClass('btn-info');   
      $('.fa-heart').removeClass('fa-heart').addClass('fa-times');
  }
});
})