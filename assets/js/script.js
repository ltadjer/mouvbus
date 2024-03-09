const menu_btn = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.header-menu-top');

menu_btn.addEventListener('click', function () {
  menu_btn.classList.toggle('is-active');
  mobile_menu.classList.toggle('is-active');
});

// filtre mobile

var filtersButton = document.getElementById("filters-button");
var filtersModal = document.getElementById("filters-modal");
var closeBtn = document.getElementsByClassName("close")[0];

filtersButton.onclick = function() {
  filtersModal.style.display = "block";
}

closeBtn.onclick = function() {
  filtersModal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == filtersModal) {
    filtersModal.style.display = "none";
  }
}


