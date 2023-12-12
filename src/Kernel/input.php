<?php
declare(strict_types= 1);
namespace BuyMeACoffee\Kernel;

final class Input{
  public static function get(string $key):null|string |array{
    return $_GET[$key] ??  '';
  }
  public static function post(string $key):null|string |array{
    return $_POST[$key] ??  '';
  }
  public static function postExist(string $key):bool{
    return !empty($_POST[$key]);
  }
  public static function getExist(string $key):bool{
    return !empty($_GET[$key]);
  }
}
