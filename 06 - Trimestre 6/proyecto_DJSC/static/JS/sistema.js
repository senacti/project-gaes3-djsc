$(".sidebar ul li").on('click', function(){
    $(".sidebar ul li.active").removeclass('active');
    $(this).addclass('active');
})

$(document).ready(function () {
    $('#example').DataTable();
});
$(function() {
    setTimeout(function(){
      $('body').removeClass('loading');
    }, 1000);
  });
  