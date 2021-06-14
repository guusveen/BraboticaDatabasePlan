document.addEventListener("DOMContentLoaded", function(){
    
    var producten = $('.column');
    var categorieen = $('.categorieen li');
   
    categorieen.each(function() {
        $(this).on( "click", function(){
            selectFilter($(this).attr('categorie'));
        });
    });

    function selectFilter(categorieId) {
        producten.hide();
        producten.each(function() {
            if($(this).attr("categorieid") == categorieId ||
                    $(this).attr('ouderCategorieid') == categorieId){
                $(this).show();
            }
        });
    }
});
