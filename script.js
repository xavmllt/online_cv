// ALERT ON LOGO 4FFUN //
let logo = document.getElementById('logo');
logo.addEventListener('click',()=>{
    alert('NE ME TOUCHER PAS 😡 !!');
});

// ALERT ON BUBLES 4FUN //
let boules = document.querySelectorAll('.boule__size');
boules.forEach(function(boule) {
    boule.addEventListener('mouseover', function() {
        alert('❤️');
    });
});






