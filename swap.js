gsap.registerPlugin(Flip);

const items = Array.from(document.querySelectorAll(".item"));

function getOrder(item) {
  const style = window.getComputedStyle(item);
  return Number(style.getPropertyValue("order"));
}

let lastClicked;
items.map((item) => {
  item.addEventListener("click", () => {
    if (!lastClicked) {
      lastClicked = item;
      item.dataset.clicked = true;
    } else {
      const state = Flip.getState(items);

      const startOrder = getOrder(item);
      const endOrder = getOrder(lastClicked);

      item.style.setProperty("order", endOrder);
      lastClicked.style.setProperty("order", startOrder);
      delete lastClicked.dataset.clicked;
      lastClicked = null;

      Flip.from(state, { duration: 0.6, ease: "elastic.out(1, 0.9)" });

      checkOrder(items);
    }
  });
});

function checkOrder(items) {
  for (var i = 0; i < items.length; i++) {
    let order = getOrder(items[i]);
    if (order !== i + 1) return false;
  }

  const tl = gsap.timeline({
    onComplete() {
      shuffle(items);
    }
  });

  tl.add(
    items.map((item, i) => {
      let itemTl = gsap.timeline({
        repeat: 1,
        yoyo: true
      });

      itemTl.to(item, {
        duration: 0.3,
        scale: 1.1,
        opacity: 0.3,
        ease: "elastic.out(1, 0.75)",
        delay: i * 0.02
      });

      return itemTl;
    })
  );
}

function shuffle(items) {
  const state = Flip.getState(items);
  const shuffled = items
    .map((item) => ({ item, sort: Math.random() }))
    .sort((a, b) => a.sort - b.sort)
    .map(({ item }, index) => {
      item.style.setProperty("order", index + 1);
      return item;
    });

  Flip.from(state, {
    duration: 0.6,
    ease: "elastic.out(1, 0.9)",
    stagger: 0.01
  });
}

checkOrder(items);
