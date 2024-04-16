export default function InitAnchors() {
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
      const hashval = anchor.getAttribute('href');
      const target = document.querySelector(hashval);

      /*target?.scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });*/

      window.scrollTo({
        behavior: 'smooth',
        top:
          document.querySelector(hashval).getBoundingClientRect().top -
          document.body.getBoundingClientRect().top -
          100,
      })

      //scrollIntoViewWithOffset('#info', 100);


      window.history.pushState(null, null, hashval);
      event.preventDefault();
    });
  });
}