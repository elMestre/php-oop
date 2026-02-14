// Tiny demo interactions
document.addEventListener('DOMContentLoaded', function(){
  const form = document.getElementById('sampleForm');
  const message = document.getElementById('message');
  const toggle = document.getElementById('toggleTheme');

  // Restore theme from localStorage
  const stored = localStorage.getItem('theme');
  if(stored) document.documentElement.setAttribute('data-theme', stored);

  toggle.addEventListener('click', () => {
    const cur = document.documentElement.getAttribute('data-theme') || 'light';
    const next = cur === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
  });

  form.addEventListener('submit', function(e){
    e.preventDefault();
    const name = (new FormData(form)).get('name') || 'friend';
    message.textContent = `Hello, ${name}! This page is static HTML + JS.`;
  });
});
