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
/*function mail(arg, video) {
  arg === "play" ? video.play() : video.pause();
}

document.querySelector(".mail").addEventListener("mouseover", function () {
  mail("play", this);
});*/

function mailEdit() {
  let video = document.querySelector(".mailE");

  if (!video.played.length) {
    video.play();
  }
}
document.querySelectorAll(".project_inner").forEach((element) =>
  element.addEventListener("click", function () {
    this.classList.toggle("rotate");
  })
);
