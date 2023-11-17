let login_register = document.querySelectorAll(".for");
let profiles = document.getElementById("secret");
let menu = document.getElementById("menus");
let arrow = document.getElementById("arrow");
let log_out_btn = document.getElementById("logout");

if (
  document.cookie
    .split(";")
    .some((item) => item.trim().startsWith("username=")) &&
  document.cookie
    .split(";")
    .some((item) => item.trim().startsWith("password=")) &&
  document.cookie.split(";").some((item) => item.trim().startsWith("email="))
) {
  login_register.forEach((element) => {
    element.style.display = "none";
  });
  profiles.style.display = "flex";

  profiles.addEventListener("mouseenter", () => {
    if (!menu.classList.contains("activit")) {
      $("#menus").fadeIn(200);
      menu.classList.toggle("activit");
      arrow.style = "transform: rotate(180deg);";
    }
  });
  profiles.addEventListener("mouseleave", () => {
    $("#menus").fadeOut(200);
    menu.classList.toggle("activit");
    arrow.style = "transform: rotate(0deg);";
  });
  log_out_btn.addEventListener("click", () => {
    var cookieName_user = "username";
    var cookieName_password = "password";
    var cookieName_email = "email";
    var domain = "localhost";

    document.cookie =
      cookieName_user +
      "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;" +
      (domain ? " domain=" + domain + ";" : "");

    document.cookie =
      cookieName_password +
      "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;" +
      (domain ? " domain=" + domain + ";" : "");

    document.cookie =
      cookieName_email +
      "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;" +
      (domain ? " domain=" + domain + ";" : "");
  });
}
