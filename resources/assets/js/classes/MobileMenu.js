export class MobileMenu {

  constructor(trigger) {
    this.$trigger =  document.getElementById(trigger);
    this.$nav = document.getElementById(this.$trigger.dataset.activates);
    this.active = false;

    this.$trigger.addEventListener( 'click', () => {
      this.$trigger.classList.toggle( 'is-active' );
      this.$nav.classList.toggle( 'is-active' );
      this.active = !this.active;
    } );
    document.addEventListener( 'scroll', () => {
      if ( this.active ) {
        this.$trigger.classList.toggle( 'is-active' );
        this.$nav.classList.toggle( 'is-active' );
        this.active = false;
      }
    } );

    this.$subMenus = this.$nav.querySelectorAll('.c-mobile-menu__sub-menu');
    if (this.$subMenus.length > 0) {
      // Add a click event on each of them
      this.$subMenus.forEach( ($el) => {
        $el.addEventListener('click', function () {
          $el.nextElementSibling.classList.toggle('is-active');
          $el.classList.toggle('is-active');
        });
      });
    }
  }

}