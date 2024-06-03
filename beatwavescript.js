const link1 = document.getElementById('link-hidden-text1');
const tekst1 = document.getElementById('hidden-text1');

link1.addEventListener('click', function(event) {
  event.preventDefault();
  if (tekst1.classList.contains('hidden-text1')) {
    tekst1.classList.remove('hidden-text1');
  } else {
    tekst1.classList.add('hidden-text1');
  }
});
const link2 = document.getElementById('link-hidden-text2');
const tekst2 = document.getElementById('hidden-text2');

link2.addEventListener('click', function(event) {
  event.preventDefault(); 
  if (tekst2.classList.contains('hidden-text2')) {
    tekst2.classList.remove('hidden-text2');
  } else {
    tekst2.classList.add('hidden-text2');
  }
});
const link3 = document.getElementById('link-hidden-text3');
const tekst3 = document.getElementById('hidden-text3');

link3.addEventListener('click', function(event) {
  event.preventDefault();
  if (tekst3.classList.contains('hidden-text3')) {
    tekst3.classList.remove('hidden-text3');
  } else {
    tekst3.classList.add('hidden-text3');
  }
});
const link4 = document.getElementById('link-hidden-text4');
const tekst4 = document.getElementById('hidden-text4');

link4.addEventListener('click', function(event) {
  event.preventDefault(); 
  if (tekst4.classList.contains('hidden-text4')) {
    tekst4.classList.remove('hidden-text4');
  } else {
    tekst4.classList.add('hidden-text4');
  }
});



