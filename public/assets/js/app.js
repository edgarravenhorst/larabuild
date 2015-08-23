$(document).ready(function(){
   $(".popup .close").click(function(e){
       e.preventDefault();
       $(e.currentTarget).closest('.popup').removeClass('active');
   })

   $(".activatepopup").click(function(e){
       e.preventDefault();
       var id = $(e.currentTarget).data().popup;
       $('#'+id).addClass('active');
   })

});
