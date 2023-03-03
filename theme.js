
let paragraphs = document.querySelectorAll('p');

paragraphs.forEach((paragraph) => {
  if (paragraph.innerText === '') {
    paragraph.remove();
  }
});

console.log("test");