let menuli = document.querySelectorAll("#mobile-menu ul li");
let clickToHide=()=>{
    gsap.fromTo("#mobile-menu", {
        display: 'block',
        left: 0, //normal value

    }, {
        display: 'none',
        left: -410,

        duration: 1
    });
    gsap.fromTo("#closeMobileMenu", {
        display: 'block'
    }, {
        display: 'none',
    });
}
for(let i = 0; i<menuli.length; i++){

    menuli[i].addEventListener('click', clickToHide)
}