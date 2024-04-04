$(document).ready(function(){

    var list = $(".list-chapter nav ul li ");
    var numToShow = 3;
    var button = $("#next");
    var numInList = list.length;
    list.hide();
    if (numInList > numToShow) {
      button.show();
    } else if(numInList = numToShow) {
      button.removeClass('view-more');
    }
    list.slice(0, numToShow).show();

    button.click(function(){
        var showing = list.filter(':visible').length;
        list.slice(showing - 1, showing + numInList).fadeIn();
        var nowShowing = list.filter(':visible').length;
        if (nowShowing >= numInList) {
          button.removeClass('view-more');
        }
    });

});