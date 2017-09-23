
$(document).ready(function() {
  $.ajax({
    dataType: "json",
    url: "/allMenu",
    type: 'GET',
    data: {type:"getMenu"},

    success: function(data){
      for(var index in data) {
        $(".app").append('<a href="#">'+ data[index].name +'</a>');
      }        
    }
  });
  return false;
});


function listMenu(){
  $.ajax({
    dataType: "json",
    url: "/allMenu",
    type: 'GET',

    success: function(data){
      return data;
      /*for(var index in data) {
        $(".app").append('<a href="#">'+ data[index].name +'</a>');
      }  */      
    }
  });
}