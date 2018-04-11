<?php
namespace GM\VirtualPages;

/**
 * @author  Giuseppe Mazzapica <giuseppe.mazzapica@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
interface ControllerInterface {

  /**
   * Init the controller, fires the hook that allow consumer to add pages
   */
  function init();
  
  /**
   * Register a page object in the controller
   *
   * @param  \GM\VirtualPages\Page $page
   * @return \GM\VirtualPages\Page
   */
  function addPage( PageInterface $page );
  
  /**
   * Run on 'do_parse_request' and if the request is for one of the registerd
   * setup global variables, fire core hooks, requires page template and exit.
   *
   * @param boolean $bool The boolean flag value passed by 'do_parse_request'
   * @param \WP $wp       The global wp object passed by 'do_parse_request'
   */  
  function dispatch( $bool, \WP $wp );
  
}