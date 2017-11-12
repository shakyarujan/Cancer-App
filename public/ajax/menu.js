
$(document).ready(function() {

  $.ajax({
    dataType: "json",
    url: "/allMenu",
    type: 'GET',
    data: {type:"getMenu"},
    success: function(data){
      
      for(var index in data) {
        var selected;
        if(data[index].id == $("#parentOf").val()){
          selected ='selected';
        }else{
          selected='';
        }
        $("#parent").append('<option value="' + data[index].id + '" '+ selected +'>' + data[index].name +'</option>');
      } 

    }
  });

  return false;
});


function selectParent(){
  if($("#parent").val() != "0"){
    $("#menuType").hide();
  }else{
    $("#menuType").show();
  }
  
}