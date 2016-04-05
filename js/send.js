$(function () {
  $(".but_call").click(function(e){
  e.preventDefault();
  var telefon = document.getElementById("phone").value;
  
    $.ajax({
      url: '/telefon',
      type: 'post',
      data: {telefon: telefon},
      success: function(data){
        $("#resp").html(data);
      },
      error: function(xhr, status){
        $("#resp").html("<span>" + status + "</span>");
      }
    });
  });
});