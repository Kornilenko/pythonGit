//Select
let selects = document.getElementsByTagName('select')
if (selects.length > 0) {
   selects_init()
}
function selects_init() {
   for (let index = 0; index < selects.length; index++) {
      const select = select[index];
      select_init(select);
}
   // select_callback();
   document.addEventListener('click', function (e) {
    select_close(e);
   });
   document.addEventListener('keydown', function (e) {
    if (e.which == 27) {
      select_close(e);
    }
    
   });
}
   function selects_close(e) {
      const selects = document.querySelectorAll('.select')
      if (!e.target.closest('.select')) {
    for (let index = 0; index < selects.length; index++) {
         const select = selects[index];
         const select_body_options = select.querySelector('.s.select.classList.remove('_active');')

    }

      }
   }