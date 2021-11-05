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
function toggleForm() {
  let button = document.querySelector(".formDisplay");
  let form = document.querySelector(".formGuestBook");

  form.className =
    form.className === "formGuestBook"
      ? "formGuestBook visible"
      : "formGuestBook";
  button.style.display = "none";
}

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

/*=============================Wheel=============================*/

/*=============================Scroll Direction=============================*/
document.onmousewheel = function (e) {
  directionProcess(mouseWheelDirection(e));
};

function mouseWheelDirection(e) {
  let delta = null,
    direction = false;

  if (!e) {
    e = window.event;
  }
  if (e.wheelDelta) {
    delta = e.wheelDelta / 60;
  } else if (e.detail) {
    delta = -e.detail / 2;
  }
  if (delta !== null) {
    direction = delta > 0 ? "up" : "down";
  }
  return direction;
}
function directionProcess(direction) {
  switch (direction) {
    case "up":
      selectedIndex--;
      rotateCarousel();
      break;
    case "down":
      selectedIndex++;
      rotateCarousel();
      break;
  }
}
document.querySelector(".up").addEventListener("click", () => {
  selectedIndex--;
  rotateCarousel();
});
document.querySelector(".down").addEventListener("click", () => {
  selectedIndex++;
  rotateCarousel();
});
document.querySelector(".formDisplay").addEventListener("click", toggleForm);
