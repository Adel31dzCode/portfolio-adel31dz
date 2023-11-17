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

window.onload = () => {
  var random = Math.floor(Math.random() * 9);

  var bigSize = [
    "img/img1.jpg",
    "img/img2.jpg",
    "img/img3.jpg",
    "img/img4.jpg",
    "img/img5.jpg",
    "img/img6.jpg",
    "img/img7.jpg",
    "img/img8.jpg",
    "img/img9.jpg",
  ];
  document.getElementById(
    "all"
  ).style.backgroundImage = `url(${bigSize[random]})`;
};

let form = document.getElementById("form");

let inp_txt = document.getElementById("username_field");
let inp_pass = document.getElementById("password_field");
let inp_email = document.getElementById("email_field");

let inner_txt = document.getElementById("checker_username");
let inner_pass = document.getElementById("checker_pass");
let inner_email = document.getElementById("checker_email");

form.onsubmit = (e) => {
  if (
    document.cookie.split(";").some((item) => item.trim().startsWith("err="))
  ) {
    document.cookie = "err=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
  if (
    inp_txt.value.length > 16 ||
    inp_txt.value === "" ||
    inp_txt.value.length < 4
  ) {
    e.preventDefault();
    inner_txt.innerHTML = "The Field Should Be Between 4-16";
    inner_txt.style.color = "red";
  } else {
    inner_txt.innerHTML = "Create UserName Above!";
    inner_txt.style.color = "#fff";
  }

  if (
    inp_pass.value.length > 12 ||
    inp_pass.value === "" ||
    inp_pass.value.length < 4
  ) {
    e.preventDefault();
    inner_pass.innerHTML = "The Field Should Be Between 4-12";
    inner_pass.style.color = "red";
  } else {
    inner_pass.innerHTML = "Create Password Above!";
    inner_pass.style.color = "#fff";
  }

  if (
    !inp_email.value.match(
      /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/ ||
        inp_email.value.length > 25 ||
        inp_email.value === ""
    )
  ) {
    e.preventDefault();
    inner_email.innerHTML = "This Not Valid Email Or You Passed 26 Letter";
    inner_email.style.color = "red";
  } else {
    inner_email.innerHTML = "Type Email Above!";
    inner_email.style.color = "#fff";
  }
};

let eye = document.getElementById("eye");
let eye_slash = document.getElementById("slash_eye");

eye.onclick = () => {
  eye.classList.toggle("eyeing");
  eye_slash.classList.toggle("eye_slashing");
  inp_pass.type = "text";
};
eye_slash.onclick = () => {
  eye.classList.toggle("eyeing");
  eye_slash.classList.toggle("eye_slashing");
  inp_pass.type = "password";
};
