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
    "../register/img/img1.jpg",
    "../register/img/img2.jpg",
    "../register/img/img3.jpg",
    "../register/img/img4.jpg",
    "../register/img/img5.jpg",
    "../register/img/img6.jpg",
    "../register/img/img7.jpg",
    "../register/img/img8.jpg",
    "../register/img/img9.jpg",
  ];
  document.getElementById(
    "all"
  ).style.backgroundImage = `url(${bigSize[random]})`;
};

let form = document.getElementById("form");

let inp_txt = document.getElementById("username_field");
let inp_pass = document.getElementById("password_field");

let inner_txt = document.getElementById("checker_username");
let inner_pass = document.getElementById("checker_pass");

setInterval(
  (form.onsubmit = (e) => {
    if (
      document.cookie.split(";").some((item) => item.trim().startsWith("fl="))
    ) {
      inner_txt.innerHTML = "Not True";
      inner_pass.innerHTML = "Not True";
      inner_txt.style.color = "red";
      inner_pass.style.color = "red";
      console.log("hello");
    }
  }),
  1
);

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
