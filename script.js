const words = [
  "SOFTWARE ENGINEER",
  "DESIGNER",
  "ARTIST",
  "PHOTOGRAPHER",
  "STORY TELLER",
];

let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;
const speed = 100;
const delay = 1500;

const textElement = document.getElementById("type-text");

function typeEffect() {
  const current = words[wordIndex];

  if (!isDeleting) {
    textElement.textContent = current.slice(0, charIndex++);
    if (charIndex > current.length) {
      setTimeout(() => (isDeleting = true), delay);
    }
  } else {
    textElement.textContent = current.slice(0, charIndex--);
    if (charIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
    }
  }
  setTimeout(typeEffect, isDeleting ? speed / 2 : speed);
}

typeEffect();

