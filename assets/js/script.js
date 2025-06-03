// Scroll reveal effect
const reveals = document.querySelectorAll(".reveal");
function revealOnScroll() {
  for (let el of reveals) {
    const windowHeight = window.innerHeight;
    const elementTop = el.getBoundingClientRect().top;
    if (elementTop < windowHeight - 100) {
      el.classList.add("active");
    }
  }
}
window.addEventListener("scroll", revealOnScroll);
window.addEventListener("load", revealOnScroll);

// Back to top button
const backToTop = document.getElementById("backToTop");
window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
});
backToTop.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// Form interaction
const form = document.getElementById("contactForm");
const message = document.getElementById("formMessage");

if (form) {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    message.textContent = "Terima kasih atas pesan Anda!";
    form.reset();
  });
}
