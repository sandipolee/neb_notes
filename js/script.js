function toggle() {
    var x = document.querySelector("#nav-links");
    if (x.className === "navLinks") {
      x.className += " togglediv";
    } else {
      x.className = "navLinks";
    }
  }