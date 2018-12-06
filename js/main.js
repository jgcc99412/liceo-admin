$(document).ready(function(){
    var imgItems = ('.sli li').length;
    imgPos = 1;
    
    $('.sli li').hide();
    $('.sli li:first').show();
    $('.pagination li: first').css({'color':'#CD6E2E'});
    
    $('.pagination li').click(pagination);
    $('.right span').click(nextSlider);
    $('.left span').click(prevSlider);
    
    function pagination(){
        var paginationPos =  $(this).index() + 1;
        
        $('.sli li').hide();
        $('.sli li:nth-child('+ paginationPos +')').fadeIn();
        
        
        $('.pagination li').css({'color'; '#858585'});
        $(this).css({'color': '#CD6E2E'});
    }
    
     
    function nextSlider(){
        if(imgPos)
        
        $('.sli li').hide();
        $('.sli li:nth-child('+ imgPos +')').fadeIn();
    }
});