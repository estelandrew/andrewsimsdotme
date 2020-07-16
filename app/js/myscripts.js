function showMenu() {
  let navClassList = document.getElementById("nav").classList;
  if (navClassList.contains("hide-nav")) {
    navClassList.remove("hide-nav");
  } else {
    navClassList.add("hide-nav");
  }
}

function jumpToFormIfInvalid() {
  var contactForm = document.querySelector("#contact-form");
  if (contactForm.dataset.valid === "not-valid") {
    location.hash = "contact-form";
  } else {
    location.hash = "";
  }
}
