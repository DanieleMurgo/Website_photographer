
// if(window.name=="welcome") {

// const myNavbar = document.querySelector("#myNavbar");
// const navbarToggler = document.querySelector(".navbar-toggler");

// navbarToggler.addEventListener('click', function() {
//     myNavbar.classList.toggle('bg-dark');
//     myNavbar.classList.toggle('navbar-dark');
//   });

// };




// window.addEventListener('scroll', ()=> {
//     if(window.scrollY > 735){
//         myNavbar.classList.add("bg-dark", "navbar-dark");
//     }
//     else {
//         myNavbar.classList.remove("bg-dark", "navbar-dark");
//     }
//     })


function bgLight () {
    myNavbar.classList.remove("bg-transparent");
    myNavbar.classList.add("bg-light");
}

function bgTransparent () {
    myNavbar.classList.remove("bg-light");
    myNavbar.classList.add("bg-transparent");
}


myNavbar.addEventListener ('mouseout', (event) => bgTransparent())
myNavbar.addEventListener ('mouseover', (event) => bgLight())
