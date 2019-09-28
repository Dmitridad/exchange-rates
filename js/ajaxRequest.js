$( document ).ready(function() {
  
  $( "form" ).submit(function(event) {
  event.preventDefault();

  $.ajax({
  url: $(this).attr('action'),
  type: $(this).attr('method'),
  data: new FormData(this),
  contentType: false,
  cache: false,
  processData: false,
  success: function(result){
    if(result == 'Error'){
      $("#resultInput").val('Неверное значение');
    } else {
      result = Number(result);
      $("#resultInput").val(result);
    }
  }
  
});

});

});