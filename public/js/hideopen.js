const toogleLinks = document.querySelectorAll('.js--company-toggle');
  const toogleBlocks = document.querySelectorAll('.js--company-item');

  // Loop through all links
  Array.from(toogleLinks).forEach(link => {
      // add click event
      link.addEventListener('click', function(event) {
        // Hide all blocks
        Array.from(toogleBlocks).forEach(item => item.classList.add('js--company-item--hidden'));
          // Get target block
          const target = this.getAttribute('href');
          // Show target block
          document.querySelector(target).classList.remove('js--company-item--hidden');
      }, false);
  });

  /*////////////*/

$('.category').click(function(){
  $(this).children('ul').toggleClass('hide release')
})
$('.on_off').click(function(){
  $(this).children('button').toggleClass('toggleButton toggleOpen')
})


/*category open hide when another is open*/
var nav = document.querySelector('.my-nav');
nav.addEventListener('toggle', function (event) {
  
  // Only run if the dropdown is open
  if (!event.target.open) return;

  // Get all other open dropdowns and close them
  var dropdowns = nav.querySelectorAll('.dropdown[open]');
  Array.prototype.forEach.call(dropdowns, function (dropdown) {
    if (dropdown === event.target) return;
     dropdown.removeAttribute('open');
});

}, true);