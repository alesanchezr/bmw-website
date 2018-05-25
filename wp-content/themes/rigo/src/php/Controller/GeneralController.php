<?php
namespace Rigo\Controller;
use Rigo\Types\Venue;
class GeneralController{

  public function renderGeneral(){
    
    $args = [];
    $args['menu-venues'] = Venue::getVenuesMenu();
    
    return $args;
  }
  
}?>