function toggle() {
  let menu = document.querySelector(".menu");

  menu.className = menu.className === "menu" ? "menu in" : "menu";
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
