$(document).ready(function(){
  $('#arama').autocomplete({
    source : "http://localhost/kocunubul/udemy/anasayfa/search/",
    minLength : 3
  });
  $('#arama').data("ui-autocomplete")._renderItem = function(ul,item){
    var $li = $("<li>");
    $li.html("<a href='http://localhost/kocunubul/udemy/anasayfa/detay/"+ item.sef +"'><span>"+ item.value +"</span></a>");
    return $li.appendTo(ul);
  }
});

$(document).ready(function(){
  $('#arama2').autocomplete({
    source : "http://localhost/kocunubul/udemy/anasayfa/search2/",
    minLength : 3
  });
  $('#arama2').data("ui-autocomplete")._renderItem = function(ul,item){
    var $li = $("<li>");
    $li.html("<a href='http://localhost/kocunubul/udemy/anasayfa/detay2/"+ item.sef +"'><span>"+ item.value +"</span></a>");
    return $li.appendTo(ul);
  }
});
