 $(document).ready(function(e){
   $(".search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    
        $(".product").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});