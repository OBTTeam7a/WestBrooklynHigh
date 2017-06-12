function change(x) {
    x.classList.toggle("change");
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function openMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block"){
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    } 
  }
}