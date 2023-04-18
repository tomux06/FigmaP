
//Kontaktai
let colorRed = document.getElementById('color');
 console.log(colorRed.lastChild);
 colorRed.lastChild.style.color = 'orange';


 //Accordion
 const accordion = document.getElementsByClassName('card-body');

 for (i = 0; i< accordion.length; i++ ) {
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active');
    })
 };