console.log("replay");
let burgerg = document.getElementById("burger");
let line1 = document.querySelector(".brg1");
let line2 = document.querySelector(".brg2");
let line3 = document.querySelector(".brg3");
let list = document.getElementById("group_ul");
let clicker = document.getElementById("clicker_remove");

burgerg.addEventListener("click", () => {
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

let inp = document.getElementById("fr");
let sub = document.getElementById("stop");

setInterval(function check() {
  if (inp.value.length >= 1) {
    sub.classList.add("act");
  }
}, 1);

setInterval(function check2() {
  if (inp.value.length < 1) {
    sub.classList.remove("act");
  }
}, 1);

let icon = document.getElementById("icon");
let side_members = document.getElementById("members");
let all = document.getElementById("all");
let space_host = document.getElementById("append_here");
let svgs = document.getElementById("svgs");

icon.addEventListener("click", () => {
  side_members.classList.toggle("side_show");
  space_host.classList.toggle("margin_dis");
  space_host.classList.toggle("padding");
  svgs.classList.toggle("fill_svg");
  icon.classList.toggle("fill");
});

let form = document.getElementById("form_comment");

form.onsubmit = (e) => {
  if (inp.value.length < 1) {
    e.preventDefault();
  }
};

let popp = document.getElementById("must");
if (
  !document.cookie
    .split(";")
    .some((item) => item.trim().startsWith("username=")) &&
  !document.cookie
    .split(";")
    .some((item) => item.trim().startsWith("password=")) &&
  !document.cookie.split(";").some((item) => item.trim().startsWith("email="))
) {
  console.log("true");
  form.onsubmit = (e) => {
    e.preventDefault();
  };
  setInterval(function check() {
    if (inp.value.length >= 1) {
      sub.classList.remove("act");
    }
  }, 1);
  popp.style = "display: block;";
} else {
  console.log("false");
}

/*function getMessages() {
  $.ajax({
    url: "../conection_updated.php", // استبدل بمسار الخادم الخاص بك
    type: "POST",
    success: function (data) {
      // استخدام append بدلاً من html لإضافة الرسائل الجديدة
      $("#append_here").append(data);
    },
    error: function (error) {
      console.error("حدث خطأ في جلب البيانات: ", error);
    },
  });
}

setInterval(getMessages, 3000);

getMessages();
*/

/*
function fetchData() {
  fetch('append.php') // استبدل بعنوان السكريبت PHP الذي يقوم بجلب البيانات
    .then(response => response.text())
    .then(data => {
      // عند استلام البيانات، قم بتحديث العنصر
      document.getElementById("append_here").innerHTML = data;


    setTimeout(function() {
        window.scrollTo(0, document.body.scrollHeight);
    }, 1);

    })
    .catch(error => console.error('حدث خطأ:', error));
}

// استخدم setInterval لجلب البيانات كل ثانية (1000 مللي ثانية)
setInterval(fetchData, 1000);


*/

let shouldScroll = true;

function fetchData() {
  fetch("append.php")
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("append_here").innerHTML = data;

      if (shouldScroll) {
        setTimeout(function () {
          window.scrollTo(0, document.body.scrollHeight);
        }, 1);
      }
    })
    .catch((error) => console.error("حدث خطأ:", error));
}

setInterval(fetchData, 1000);

window.onscroll = function () {
  shouldScroll = window.scrollY === 0;
};
