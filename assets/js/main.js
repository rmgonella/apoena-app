const reveals=document.querySelectorAll('.reveal');
const counters=document.querySelectorAll('.counter');

function revealOnScroll(){
  reveals.forEach(el=>{
    if(el.getBoundingClientRect().top<window.innerHeight-120){
      el.classList.add('active');
    }
  });
}

function animateCounters(){
  counters.forEach(c=>{
    if(c.dataset.done) return;
    if(c.getBoundingClientRect().top<window.innerHeight){
      c.dataset.done=true;
      let current=0,target=+c.dataset.target;
      let step=target/120;
      let interval=setInterval(()=>{
        current+=step;
        if(current>=target){
          c.textContent=target;
          clearInterval(interval);
        }else{
          c.textContent=Math.floor(current);
        }
      },16);
    }
  });
}

window.addEventListener('scroll',()=>{
  document.querySelector('.header-premium')
    .classList.toggle('scrolled',window.scrollY>30);
  revealOnScroll();
  animateCounters();
});

document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
  link.addEventListener('click', function () {
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse.classList.contains('show')) {
      new bootstrap.Collapse(navbarCollapse).hide();
    }
  });
});

function scrollWithOffset(targetId) {
  const header = document.querySelector('.header-premium');
  const target = document.querySelector(targetId);

  if (!target) return;

  const headerHeight = header.offsetHeight;
  const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
  const offsetPosition = elementPosition - headerHeight;

  window.scrollTo({
    top: offsetPosition,
    behavior: 'smooth'
  });
}

document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
  link.addEventListener('click', function (e) {
    const href = this.getAttribute('href');

    if (href.startsWith('#')) {
      e.preventDefault();

      // Fecha menu mobile se estiver aberto
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }

      // Pequeno delay para esperar fechar
      setTimeout(() => {
        scrollWithOffset(href);
      }, 300);
    }
  });
});

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header-premium');
    const hero = document.getElementById('hero-biotech');

    if (header && hero) {
        const headerHeight = header.offsetHeight;
        hero.style.marginTop = headerHeight + 'px';
    }
});


revealOnScroll();

