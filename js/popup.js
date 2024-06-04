document.addEventListener("DOMContentLoaded", function() {
    const popupLinks = document.querySelectorAll(".popup-link");
    const body = document.querySelector("body");

    if (popupLinks) {
        for (let index = 0; index < popupLinks.length; index ++){
            const popupLink = popupLinks[index]
            popupLink.addEventListener("click", function(e){
                const popupName = popupLink.getAttribute("href").replace("#","");
                const PopUp = document.getElementById(popupName);
                popupOpen(PopUp);
                e.preventDefault();
            });
        }
    }

    function popupOpen(PopUp){
        PopUp.classList.add("open"); 
        body.classList.add("lock");
    }


    const popupCloseIcon = document.querySelectorAll(".close-popup");
    if (popupCloseIcon) {
        for (let index = 0; index < popupCloseIcon.length; index ++){
            const element = popupCloseIcon[index];
            console.log(element)
            element.addEventListener("click", function(e){
                popupClose(element.closest('.popup'));
                e.preventDefault();
            });
        }
    }
    function popupClose(PopUp){
        PopUp.classList.remove("open");
        body.classList.remove("lock");
    }
});