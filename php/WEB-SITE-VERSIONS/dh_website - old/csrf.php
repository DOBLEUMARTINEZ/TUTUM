<?php
class csrf
{
  
  public static function getTokenCSRF(){
      $token = hash('md5', uniqid());
      $_SESSION['token-csrf'] = $token;
      return $token;
  }

  public static function checkTokenCSRF($token)
  {
    if (!empty($_SESSION['token-csrf']) && $token ===  $_SESSION['token-csrf'])
    {
      unset($_SESSION['token-csrf']);
      return true;
    }
    return false;
  }
}

?>