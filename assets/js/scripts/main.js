const common = (($) => {
  "use strict";

  /**
   * Some function
   *
   * @since   1.0.0
   */
  const someFunction = () => {
    // do something
    console.log("testing 1,2,3");
  };

  /**
   * Fire events on document ready and bind other events
   *
   * @since   1.0.0
   */
  const ready = () => {
    someFunction();
  };

  /**
   * Only expose the ready function to the world
   */
  return {
    ready: ready,
  };
})(jQuery);

jQuery(common.ready);
