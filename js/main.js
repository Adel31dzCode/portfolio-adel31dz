let texts = ["Adel31_dz", "Designer", "Photographer"];
let currentTextIndex = 0;
let currentIndex = 0;
let interval;

function startDisplay() {
  if (interval) {
    clearInterval(interval);
    interval = null;
  } else {
    currentIndex = 0;
    interval = setInterval(displayCharacter, 300);
  }
}

function displayCharacter() {
  const textDisplay = document.getElementById("inside"); // تم تغيير الـ id هنا
  const caret = document.getElementById("caret"); // السهم الزائد

  if (currentIndex < texts[currentTextIndex].length) {
    textDisplay.textContent += texts[currentTextIndex].charAt(currentIndex);
    currentIndex++;

    // تحديث موقع السهم الزائد
    const charWidth = 52; // عرض الحرف الواحد
    const leftPosition = currentIndex * charWidth;
    caret.style.left = `${leftPosition}px`;
  } else {
    clearInterval(interval);
    interval = null;
    setTimeout(switchText, 1000);
  }
}

function switchText() {
  const textDisplay = document.getElementById("inside"); // تم تغيير الـ id هنا
  textDisplay.textContent = "";
  currentTextIndex = (currentTextIndex + 1) % texts.length;
  startDisplay();
}

// بدء العرض تلقائياً عند تحميل الصفحة
window.onload = function () {
  startDisplay();
};

let burger = document.getElementById("burger");
let line1 = document.querySelector(".brg1");
let line2 = document.querySelector(".brg2");
let line3 = document.querySelector(".brg3");
let list = document.getElementById("group_ul");
let clicker = document.getElementById("clicker_remove");

burger.addEventListener("click", () => {
  line2.classList.toggle("line2_togel");
  line1.classList.toggle("line1_togel");
  line3.classList.toggle("line3_togel");
  //clicker.classList.toggle("display");

  list.classList.toggle("show");

  let isMainPresent = line1.classList.contains("line1_togel");

  if (isMainPresent) {
    $("#clicker_remove").fadeIn();
  } else {
    $("#clicker_remove").fadeOut();
  }
});

clicker.addEventListener("click", () => {
  line2.classList.toggle("line2_togel");
  line1.classList.toggle("line1_togel");
  line3.classList.toggle("line3_togel");
  //clicker.classList.toggle("display");

  list.classList.toggle("show");

  let isMainPresent = line1.classList.contains("line1_togel");

  if (isMainPresent) {
    $("#clicker_remove").fadeIn();
  } else {
    $("#clicker_remove").fadeOut();
  }
});

/*let login_register = document.querySelectorAll(".for");
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
}*/
