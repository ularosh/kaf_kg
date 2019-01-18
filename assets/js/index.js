
var h_hght = 170; // высота шапки
var h_mrg = 15;    // отступ когда шапка уже не видна
var h_top = 20;    
var elem = $('#top_nav');
             
$(function(){
 
     var top = $(this).scrollTop();
     
    if(top > h_hght){
        elem.css('top', h_mrg);

    }              
    $(window).scroll(function(){
        top = $(this).scrollTop();
         if ($(window).width()>767) {
        if (top+h_mrg < h_hght ) {
            elem.css('top', (h_hght-top-h_top));
            // elem.css('background-color', '#fff');
            // elem.css('color', '#fff');
           $('#top_nav .navbar-collapse').removeClass('menucollapse')
            
        } else {
            elem.css('top', h_mrg);
            // elem.css('background-color', '#253B80');
            // elem.css('color', 'white');
             $('#top_nav .navbar-collapse').addClass('menucollapse')
        }}
        else elem.css('top', h_mrg);
        
    });

 window.onresize=function(){
       if ($(window).width()<768){
        elem.css('top', h_mrg);
    } else {
        elem.css('top', (h_hght+top));
    }
}
});





var img=document.querySelectorAll('.m1 .qqqq1')
var i=0;
var j=0;

img[0].className='show2';
img[1].className='show1';
next();
setInterval(next, 3000);
function next(){
    if (document.querySelector(".service-icon:hover")==null) {
    img[i].className="qqqq1";    
    i++;
    if (i>img.length-1) i=0;
    img[i].className="qqqq1 show2";
    j=i+1;
    if (j>img.length-1) j=0;
    img[j].className='qqqq1 show1';
    }
}   

