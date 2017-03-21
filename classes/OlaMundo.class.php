<?php

namespace classes;

use classes\olaMundo\Nome;

class OlaMundo{
  public function exibir(){
    echo "ola mundo" . (new Nome())->exibir() . PHP_EOL;
  }	
}
