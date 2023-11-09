let logo = document.getElementById('logo');
logo.addEventListener('click',()=>{
    alert('NE ME TOUCHER PAS 😡 !!');
});

let boules = document.querySelectorAll('.boule__size');
boules.forEach(function(boule) {
    boule.addEventListener('mouseover', function() {
        alert('❤️');
    });
});

