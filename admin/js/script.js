// Start Sidebar

let sideItems = document.querySelectorAll(".sidebar-item");
let subMenus = document.querySelectorAll(".submenu");
let currentElement = window.sessionStorage.getItem("index");
let currentSub = window.sessionStorage.getItem("opened submenu");

function removeActive() {
  sideItems.forEach((e) => {
    e.classList.remove("active");
  });
}

function removeSub() {
  subMenus.forEach((e) => {
    e.style.display = "none";
  });
}

if (currentElement) {
  removeActive();
  sideItems.forEach((ele, index) => {
    if (currentElement == index) {
      ele.classList.add("active");
    }
  });
}

if (currentSub) {
  subMenus.forEach((ele, index) => {
    if (ele.parentElement.classList.contains("active") && index == currentSub) {
      subMenus[currentSub].style.display = "block";
    }
  });
}

subMenus.forEach((e, i) => {
  let submenuLink = e.querySelectorAll("a");
  submenuLink.forEach((ele) => {
    ele.addEventListener("click", function () {
      window.sessionStorage.setItem("opened submenu", i);
    });
  });
});

sideItems.forEach((ele, index) => {
  let itemLink = ele.querySelector("a");
  itemLink.addEventListener("click", function (e) {
    window.sessionStorage.setItem("index", index);
    removeSub();

    if (ele.classList.contains("has-submenu")) {
      let submenu = ele.querySelector(".submenu");
      e.preventDefault();
      removeActive();
      ele.classList.add("active");
      if (submenu.style.display == "block") {
        submenu.style.display = "none";
      } else {
        submenu.style.display = "block";
      }
    } else {
      window.sessionStorage.removeItem("opened submenu");
    }
  });
});

// End Sidebar

// Start Sidebar in mobile
let showIcon = document.querySelector(".show-side");
let mobileSidebar = document.querySelector(".sidebar");
let overBg = document.querySelector(".over-bg");

// Function to show the sidebar and disable the main content
function openSidebar() {
  mobileSidebar.style.transform = "translateX(0px)";
  document.querySelector(".close-side").style.display = "block";
  overBg.style.display = "block";
  mainContent.style.pointerEvents = "none";
}

function closeSidebar() {
  mobileSidebar.style.transform = "translateX(100%)";
  document.querySelector(".close-side").style.display = "none";
  overBg.style.display = "none";
  mainContent.style.pointerEvents = "auto";
}

showIcon.addEventListener("click", openSidebar);

document.querySelector(".close-side").addEventListener("click", closeSidebar);

// End Sidebar in mobile
