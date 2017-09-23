@extends('admin/includes/adminMaster')

@section('content')

<script>
    $(document).ready(function() {
        $.ajax({
          dataType: "json",
          url: "/getModules",
          type: 'GET',
          
           success: function(data){
            for(var index in data) {
              if((parseInt(index)+1)%2==0){color = "bg-red"} else if((parseInt(index)+1)%3==0){color = "bg-green"} else if((parseInt(index)+1)%4==0){color = "bg-yellow"} else{color = "bg-aqua"}
              $("#moduleBox").append('<div class="col-lg-3 col-xs-6"><div class="small-box '+color+'"><div class="inner"><h3>'+ data[index].name +'</h3><p>Section</p></div><div class="icon"><i class="'+ data[index].icon +'"></i></div><a href="'+ data[index].linksrc +'" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a></div></div>'); 
            }          
           }
        });
        return false;
      });
</script>

<!-- Small boxes (Stat box) -->
<div class="row" id="moduleBox">

    
</div>
<!-- /.row -->

@stop
