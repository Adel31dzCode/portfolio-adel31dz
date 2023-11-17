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
/*
const report = document.querySelector(".report");
let popup = document.querySelectorAll(".warning");

let isreport = report.classList.contains("active");


document.onclick = function (e) {
  if (
    !e.target.classList.contains("report") &&
    !e.target.classList.contains("warning") &&
    !e.target.classList.contains("feedback")
  ) {
    $(".report").fadeOut();
    report.classList.toggle("active");
  }
};

popup.forEach((element) => {
  element.addEventListener("click", () => {
    if (!report.classList.contains("active")) {
      $(".report").fadeIn();
      report.classList.toggle("active");
    } else {
      $(".report").fadeOut();
      report.classList.toggle("active");
    }
  });
});
*/

document.addEventListener("DOMContentLoaded", function () {
  let popups = document.querySelectorAll(".warning");
  let reports = document.querySelectorAll(".report");

  popups.forEach((popup, index) => {
    popup.addEventListener("click", (event) => {
      event.stopPropagation();

      let currentReport = reports[index];

      if (currentReport) {
        reports.forEach((report) => {
          report.style.display = "none";
        });

        currentReport.style.display = "block";
        currentReport.style.opacity = "1";
      }
    });
  });

  document.onclick = function (e) {
    if (
      !e.target.classList.contains("report") &&
      !e.target.classList.contains("warning")
    ) {
      reports.forEach((report) => {
        report.style.display = "none";
      });
    }
  };
});

let txt = document.getElementById("area");
let numer = document.getElementById("length");
let submit = document.getElementById("sub");
let chek = true;
let form = document.getElementById("form_all");
let if_lg = document.getElementById("ifer");

function checker() {
  numer.innerHTML = txt.value.length + "/100";
  if (txt.value.length > 100 || txt.value == "") {
    chek = false;
  } else {
    chek = true;
  }
}
setInterval(checker, 1);

form.onsubmit = (e) => {
  if (chek == true) {
  } else {
    e.preventDefault();
  }

  if (
    !document.cookie
      .split(";")
      .some((item) => item.trim().startsWith("username=")) &&
    !document.cookie
      .split(";")
      .some((item) => item.trim().startsWith("password=")) &&
    !document.cookie.split(";").some((item) => item.trim().startsWith("email="))
  ) {
    if_lg.style.display = "block";
    e.preventDefault();
  }
};

let cls = document.getElementById("bg");
let content = document.getElementById("more_info");
let feed = document.querySelectorAll(".feedback");

feed.forEach((ex) => {
  ex.addEventListener("click", () => {
    $("#bg").fadeIn();
    $("#more_info").fadeIn();
    content.classList.toggle("fade");
    cls.classList.toggle("active");
  });
});

cls.addEventListener("click", () => {
  $("#bg").fadeOut();
  $("#more_info").fadeOut();
  content.classList.toggle("fade");
  cls.classList.toggle("active");
  if_lg.style.display = "none";
  txt.value = "";
});

/*setInterval(function sussces() {
  if (form.submit()) {
    let tm = document.getElementById("suscces");
    tm.classList.toggle("huge");
    console.log("hell");
  } else {
    console.log("erro");
  }
}, 1);
*/
