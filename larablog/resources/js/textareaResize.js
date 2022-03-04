document.addEventListener("DOMContentLoaded", function () {
  for (let element of document.getElementsByClassName("script")) {
    element.style.height = element.scrollHeight + 3 + "px";
  }
});
