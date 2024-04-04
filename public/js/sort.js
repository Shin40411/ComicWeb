// $('.danhmuc-filter').click(function(){
//     var category = [], tempArray = [];

//     $.each($("[data-filters='danhmuc']:checked"), function(){
//         tempArray.push($(this).val());
//     });
//     // tempArray.reverse();
//     if(tempArray.length !== 0){
//         category+='?sort_by_category='+tempArray.toString();
//     }
//     window.location.href = category;
// });


$(document).ready(function(){
    $('#sort').on('change',function(){
        var url = $(this).val();
        // alert(url);
        if (url)
        {
            window.location = url;
        }
        return false;
    });
    current_arranges();
    function current_arranges(){
        var uri = window.location.href;
        uri = uri.split('?');
        // alert(url);
        $('.select-types').val(uri[0]);
      }
});

