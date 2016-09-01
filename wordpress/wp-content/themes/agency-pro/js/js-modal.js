
jQuery(document).ready(function () {

    jQuery('myModal').css('display:hidden');



    // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "visible";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

});

// event listener on #myBtn_prices
// function listenerBtn(){
// 	if(modal.style.display === 'none'){
//       alert('element is hidden');
// 	}else{}

// }
// listenerBtn();


// y.style.visibility = 'hidden';
// "hidden"
// y.style.visibility = 'visible';

// function hideUnhide(element){
//     if(element.style.visibility === 'hidden'){
//     element = element.style.visibility = 'hidden';
// }else{
//     element = element.style.visibility = 'visible';
// }
// }