<?php
namespace GM\VirtualPages;

/**
 * @author  Giuseppe Mazzapica <giuseppe.mazzapica@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */
class TemplateLoader implements TemplateLoaderInterface {

  public function init( PageInterface $page ) {
    $this->templates = wp_parse_args(
      array( 'page.php', 'index.php' ), (array) $page->getTemplate()
    );
  }
  
  public function load() {
    do_action( 'template_redirect' );
    $template = locate_template( array_filter( $this->templates ) );
    $filtered = apply_filters( 'template_include',
      apply_filters( 'virtual_page_template', $template )
    );
    if ( empty( $filtered ) || file_exists( $filtered ) ) {
      $template = $filtered;
    }
    if ( ! empty( $template ) &&file_exists( $template ) ) {
      require_once $template;
    }
  }
}