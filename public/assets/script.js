/*Burger toggle*/
function toggle() {
  let menu = document.querySelector(".menu");
  let burger = document.querySelector(".burger");

  menu.className = menu.className === "menu" ? "menu in" : "menu";

  burger.style.display =
    menu.className === "menu in"
      ? setTimeout(function () {
          "none";
        }, 500)
      : "block";
}
/*Mail load video*/
function mailEdit() {
  let video = document.querySelector(".mailE");

  if (!video.played.length) {
    video.play();
  }
}
/*Project switching view*/
document.querySelectorAll(".project_inner").forEach((element) =>
  element.addEventListener("click", function () {
    this.classList.toggle("rotate");
  })
);
/*Tuto draggable*/
document.addEventListener("DOMContentLoaded", (event) => {
  let dragSrcEl = null;

  function dragStart(e) {
    this.style.opacity = "0.5";

    dragSrcEl = this;

    e.dataTransfer.effectAllowed = "move";
    e.dataTransfer.setData("text/html", this.innerHTML);
  }
  function dragEnd() {
    this.style.opacity = "1";

    boxes.forEach(function (box) {
      box.classList.remove("over");
    });
  }
  function dragOver(e) {
    if (e.preventDefault) {
      e.preventDefault();
    }
    this.classList.add("over");
    e.dataTransfer.dropEffect = "move";
    return false;
  }
  function drop(e) {
    if (e.stopPropagation) {
      e.stopPropagation();
    }
    if (dragSrcEl !== this) {
      dragSrcEl.innerHTML = this.innerHTML;
      this.innerHTML = e.dataTransfer.getData("text/html");
    }
    return false;
  }
  function dragLeave() {
    this.classList.remove("over");
  }

  let boxes = document.querySelectorAll(".tutos .tuto");

  boxes.forEach(function (box) {
    box.addEventListener("dragstart", dragStart, false);
    box.addEventListener("dragover", dragOver, false);
    box.addEventListener("dragleave", dragLeave, false);
    box.addEventListener("drop", drop, false);
    box.addEventListener("dragend", dragEnd, false);
  });
});
function resizeBoxes() {
  let check = document.querySelector(".check").clientHeight;
  let presentation = document.querySelector(".presentation");
  let guestbook = document.querySelector(".portGuestbook");
  presentation.style.height = `${check}px`;
  guestbook.style.height = `${check}px`;
}

document.addEventListener("DOMContentLoaded", resizeBoxes);
window.addEventListener("resize", resizeBoxes);

let container = document.querySelector(".portGuestBookContainer");
let cells = document.querySelectorAll(".cell");
let cellCount = cells.length;
let selectedIndex = 0;
let cellWidth = container.offsetWidth;
let cellHeight = container.offsetHeight;
let rotateFn = "rotateX";
let radius, theta;

function rotateCarousel() {
  let angle = theta * selectedIndex * -1;
  container.style.transform =
    "translateZ(" + -radius + "px) " + rotateFn + "(" + angle + "deg)";
}
document.querySelector(".circle").addEventListener("click", () => {
  selectedIndex--;
  rotateCarousel();
});

function changeCarousel() {
  theta = 360 / cellCount;
  radius = Math.round(cellHeight / 2 / Math.tan(Math.PI / cellCount));
  for (let i = 0; i < cellCount; i++) {
    let cell = cells[i];
    if (i < cellCount) {
      // visible cell
      cell.style.opacity = 1;
      let cellAngle = theta * i;
      cell.style.transform =
        rotateFn + "(" + cellAngle + "deg) translateZ(" + radius + "px)";
    } else {
      // hidden cell
      cell.style.opacity = 0;
      cell.style.transform = "none";
    }
  }
  rotateCarousel();
}
changeCarousel();
