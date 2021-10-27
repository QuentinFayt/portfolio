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
