
$(document).ready(function () {
    $("#phone").mask("+7(999) 999-99-99");
    $("#phone2").mask("+7(999) 999-99-99");
    document.querySelector(".burger").addEventListener("click", function () {
        this.classList.toggle("active");
        document.querySelector(".header__menu").classList.toggle("open");
        document.querySelector("body").classList.toggle("menu_open");

        document.querySelectorAll(".header__menu a").forEach(function(link) {
            link.addEventListener("click", function() {
                document.querySelector("body").classList.remove("menu_open");
                document.querySelector(".header__menu").classList.remove("open");
                document.querySelector(".burger").classList.remove("active");
                console.log(1);
            });
        });
  })
});


