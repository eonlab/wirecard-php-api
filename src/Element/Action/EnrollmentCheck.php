<?php

namespace Wirecard\Element\Action;

use Wirecard\Element\AbstractAction;

class EnrollmentCheck extends AbstractAction
{
    const TYPE_PAYMENT = 'payment';
    const TYPE_NONPAYMENT = 'non-payment';
  
    const VERSION_ONE = '1.0.2';
    const VERSION_TWO = '2.1';

    public $type = self::TYPE_PAYMENT;
    public $version = self::VERSION_ONE;
}
 
