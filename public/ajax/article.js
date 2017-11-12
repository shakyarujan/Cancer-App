/* check if img is empty*/
$(document).ready(function() {
  var f = $('.imgPrev img').attr('src');
  if(f== '#'){
    $('.imgDisp').hide();
    $('#dispImg').hide();
  }
});

/*display image after upload*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#dispImg')
                .attr('src', e.target.result)
                .width(150);
            };

        reader.readAsDataURL(input.files[0]);
    }
}


/* for image upload */
function imgUpload(){
	$.ajax({
    dataType: "json",
    url: "/ajaxArticle",
    type: 'GET',
    data: {'type':'imgUpload', 'token': $('input[name="_token"]').val(),'image':$('#mainImg').val()},
    success: function(data){
      
      for(var index in data) {
  
      } 

    }
  });

  return false;
}


/* remove image */
$(".remImg").on("click", function(){
    $('.imgDisp').hide();
    $("#mainImg").val('');
});

$("#mainImg").on("change", function(){
    $('.imgDisp').hide();
    $('#dispImg').show();
});
