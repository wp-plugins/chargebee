<?php

class ChargeBee_CouponCode extends ChargeBee_Model
{

  protected $allowed = array('code', 'couponId', 'couponSetName'
);



  # OPERATIONS
  #-----------

  public static function create($params, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::POST, ChargeBee_Util::encodeURIPath("coupon_codes"), $params, $env);
  }

  public static function retrieve($id, $env = null)
  {
    return ChargeBee_Request::send(ChargeBee_Request::GET, ChargeBee_Util::encodeURIPath("coupon_codes",$id), array(), $env);
  }

 }

?>