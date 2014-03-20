<?php

class DiscountCode extends Base{

  /**
   * 
   * OPTIONAL
   * 
   * The Discount code class should contain the following fields:
   * code
   * amount
   * 
   */
    
    protected $code;    #optional - string
    protected $amount;  #optional - float
    
    
    public function setCode($code) {
        $this->code = $code;
    }
    
    public function setAmount($amount) {
        if($amount) {
            if(!is_float($amount))
                throw new Exception('The DiscountCode - Amount field in not float.');
                
        }
        $this->amount = $amount;
    }
    
    
    public function getCode() {
        return $this->code;
    } 
      
    public function getAmount() {
        return $this->amount;
    }
    
      
}
