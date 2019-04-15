$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    }
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})



function sprawdzPole(pole_id,obiektRegex) {

 var obiektPole = document.getElementById(pole_id);
 if(!obiektRegex.test(obiektPole.value)) return (false);
 else return (true);
}

function sprawdz()
{ 
var ok=true; 
obiektImieNazw = /^[a-zA-Z]{2,}\s[a-zA-Z]{2,}$/;
obiektemail =/^[0-9a-zA-Z_.-]+@[0-9a-zA-Z.-]+\.[a-zA-Z]{2,3}$/;
obiektMess = /^[a-zA-Z]/;

if (!sprawdzPole("imie",obiektImieNazw))
{ ok=false;
 document.getElementById("imie_error").innerHTML="Wpisz poprawnie imie i nazwisko!";
}
else document.getElementById("imie_error").innerHTML="";

if (!sprawdzPole("email",obiektemail))
{ ok=false;
 document.getElementById("email_error").innerHTML="Wpisz poprawnie adres email!";
}
else document.getElementById("email_error").innerHTML="";


if (!sprawdzPole("mess",obiektMess))
{ ok=false;
 document.getElementById("mess_error").innerHTML="Wprowasz wiadomosc!";
}
else document.getElementById("mess_error").innerHTML="";

return ok;

}

