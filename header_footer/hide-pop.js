window.onload = function () {
    const allBtn = document.querySelectorAll('.fpop .total-btn');
    for(let i=0;i<allBtn.length;i++){
        allBtn[i].addEventListener('click',function(){
            allBtn[i].closest('.fpop').style.display = "none";
        });
    }
}


// jQuery


require(['jquery'], function ($) {

    $(document).ready(function () {
       const allBtn = $('.fpop .total-btn');
       allBtn.click(function () {
        $(this).closest('.fpop').css('display','none');
       });
    });
});