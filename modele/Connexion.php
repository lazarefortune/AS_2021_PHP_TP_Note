<?php
class Connexion
{
  private static $db;

  public static function get()
  {
    try {
      if (empty(self::$db)) {
        $dbOptions = [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        self::$db = new PDO('mysql:dbname=tossouko1u_bdd_sem2;host=devbdd.iutmetz.univ-lorraine.fr', "tossouko1u_appli", "32030404", $dbOptions);
      }
      return self::$db;
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }
}
