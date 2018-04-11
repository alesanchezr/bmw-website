<?php
namespace GM\VirtualPages;

/**
 * @author  Giuseppe Mazzapica <giuseppe.mazzapica@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
interface TemplateLoaderInterface {

  /**
  * Setup loader for a page objects
  *
  * @param \GM\VirtualPagesPageInterface $page matched virtual page
  */
  public function init( PageInterface $page );
  
  /**
  * Trigger core and custom hooks to filter templates,
  * then load the found template.
  */
  public function load();
}