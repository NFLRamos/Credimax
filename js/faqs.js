/*document.querySelectorAll('.accordion-butao').forEach(button => {

  button.addEventListener('click', () => {
    const accordionContent = button.nextElementSibling;
    button.classList.toggle('accordion-butao--active');

    if (button.classList.contains('accordion-butao--active')) {
      accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
    } 
    else{
      accordionContent.style.maxHeight = 0;
    }
    
      
  })
})*/

const Head = document.querySelectorAll(".accordion-butao");
Head.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
     const ActiveHeader = document.querySelector(".accordion-butao.active");
     if(ActiveHeader && ActiveHeader!==accordionItemHeader) {
       ActiveHeader.classList.toggle("active");
      ActiveHeader.nextElementSibling.style.maxHeight = 0;
     }
    accordionItemHeader.classList.toggle("active");
    const accordionBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
    }
    else {
      accordionBody.style.maxHeight = 0;
    }    
  });
});





