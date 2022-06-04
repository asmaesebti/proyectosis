const figures = document.querySelectorAll("figure");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("show", entry.isIntersecting);
    });
  },
  {
    threshold: 0.5
  }
);

const lastCardObserver = new IntersectionObserver((entries) => {
  const lastCard = entries[0];
  if (!lastCard.isIntersecting) return;
  lastCardObserver.observe(document.querySelector("figure:last-child"));
});

lastCardObserver.observe(document.querySelector("figure:last-child"));

figures.forEach((figure) => {
  observer.observe(figure);
});

const scrollContainer = document.querySelector("main");
