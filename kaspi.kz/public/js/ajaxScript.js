$(document).ready(function(){
	var offersBlock = document.querySelector('.productsblock');
 var sortButtons = document.querySelectorAll('.sort');
 sortButtons.forEach(function(btn) {
    btn.addEventListener('click', sortOffers);
});
function sortOffers(event) {
var order = event.target.dataset.order;


    var xhr = new XMLHttpRequest();
    xhr.open('get', '/show/sort?order=' + order);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState !== 4) return;

        if (xhr.status !== 200) {
            alert(xhr.status + ': ' + xhr.statusText);
        }
        else {
           
           offersBlock.innerHTML = xhr.response
           $(".pagination").remove();
           location.hash
        }
    };
}
/////////////////////////////Pagination//////////////////////////////////////////////
$(document).on('click', '.pagination a', function(e) {
	e.preventDefault();
	/* Act on the event */
	var page = $(this).attr('href').split('page=')[1];
  getpages(page);
});
function getpages(page){
 $.ajax({
	url: '/ajax/paganation?page='+page
})
.done(function(data) {
   $(".sorted").html(data);
   	

})


}
//////////////////////////////Add feedback//////////////////////////////////////////
$(document).on('click', '.feedback_submit', function(e) {
  e.preventDefault();
    $.ajax({
   type: 'POST',
   url: '/feedback',
    data:$('#ajax').serialize(),
      success: function(data){
                    $('.feedback').append("<div class='container'><div class='row'><div class='col-md-3'><div class='name'><span class='name_user'><b>"+data.name+"</b></span></div></div><div class='col-md-6'><div class='feedbackOfUser'>"+data.message+"</div></div</div>");}

      ,
       error: function(mas){
         alert("Please write");
      }
  
  
});




});
})