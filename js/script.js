document.addEventListener("DOMContentLoaded", () => {
  const textElement = document.querySelector(".fade-text");
  
  document.querySelectorAll(".fade-text").forEach(el => {
    el.classList.add("visible");
  });
});