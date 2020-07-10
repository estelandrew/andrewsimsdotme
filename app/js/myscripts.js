function showMenu() {
  let navClassList = document.getElementById("nav").classList;
  if (navClassList.contains("hide-nav")) {
    navClassList.remove("hide-nav");
  } else {
    navClassList.add("hide-nav");
  }
}
