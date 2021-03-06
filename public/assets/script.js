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
/*===============================Count Guest Book Form Char===============================*/
if (document.querySelector("#guestBookText")) {
  document.querySelector("#guestBookText").onkeyup = function () {
    document.querySelector("#length").innerText = this.value.length + "/370";
  };
}

/*================================Mail Play Video on POST================================*/

function mailEdit() {
  let video = document.querySelector(".mailE");

  if (!video.played.length) {
    video.play();
  }
}
/*==============================Projects switching view==============================*/
if (document.querySelector(".project_inner")) {
  document.querySelectorAll(".project_inner").forEach((element) =>
    element.addEventListener("click", function () {
      this.classList.toggle("rotate");
    })
  );
}
/*==================================Tuto draggable==================================*/
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
/*=============================Wheel=============================*/
if (document.querySelector(".portGuestBookContainer")) {
  let container = document.querySelector(".portGuestBookContainer");
  let cells = document.querySelectorAll(".cell");
  let cellCount = cells.length; //number of cells
  let selectedIndex = 0; //number of actual cell
  let cellHeight = container.offsetHeight; //cellHeight
  let rotateFn = "rotateX";
  let radius, theta;

  function rotateWheel() {
    let angle = theta * selectedIndex * -1;
    container.style.transform =
      "translateZ(" + -radius + "px)" + rotateFn + "(" + angle + "deg)";
  }

  function changeCarousel() {
    theta = 360 / cellCount;
    radius = Math.round(cellHeight / 2 / Math.tan(Math.PI / cellCount));
    for (let i = 0; i < cellCount; i++) {
      let cell = cells[i];
      if (i < cellCount) {
        cell.style.opacity = 1;
        let cellAngle = theta * i;
        cell.style.transform =
          rotateFn + "(" + cellAngle + "deg) translateZ(" + radius + "px)";
      } else {
        cell.style.opacity = 0;
        cell.style.transform = "none";
      }
    }
    rotateWheel();
  }
  changeCarousel();
  /*Realised with the help of this tutorial : https://3dtransforms.desandro.com/carousel*/
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
        rotateWheel();
        break;
      case "down":
        selectedIndex++;
        rotateWheel();
        break;
    }
  }
  /*==========================On click Wheel event, up & down==========================*/
  document.querySelector(".up").addEventListener("click", () => {
    selectedIndex--;
    rotateWheel();
  });
  document.querySelector(".down").addEventListener("click", () => {
    selectedIndex++;
    rotateWheel();
  });

  /*========================On arrow key up & down Wheel event========================*/
  document.addEventListener("keydown", (event) => {
    let key = event.key;
    if (key === "ArrowDown") {
      selectedIndex++;
      rotateWheel();
    } else if (key === "ArrowUp") {
      selectedIndex--;
      rotateWheel();
    }
  });
}
/*========================Admin update========================*/
if (document.querySelector(".updateArea")) {
  let messages = document.querySelectorAll(".editable");
  let updateArea = document.querySelectorAll(".updateArea");
  let deleteButton = document.querySelectorAll(".deleteButton");

  messages.forEach((element) =>
    element.addEventListener("click", function () {
      this.style = "display:none;";
      this.nextElementSibling.style = "display:block";
      this.nextElementSibling.firstElementChild.style =
        "height:" +
        (this.nextElementSibling.firstElementChild.scrollHeight + 10) +
        "px";
    })
  );
  deleteButton.forEach((element) =>
    element.addEventListener("click", function () {
      this.style = "display:none;";
      this.nextElementSibling.style = "display:block;";
    })
  );
  updateArea.forEach((element) =>
    element.addEventListener("keyup", function () {
      this.style = "height:" + (this.scrollHeight + 2) + "px";
    })
  );
}
