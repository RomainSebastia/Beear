<?php

namespace Beear\Models\auth;

use Beear\Models\Manager;

class Users extends Manager { 
  // --------------- Requête pour enregister un user ---------------
  public function createUser(string $pseudo, string $mail, string $password, $id_roles = null): bool {
    $db = self::dbAccess();

    $req = $db->prepare(
      "INSERT INTO 
        users(
          pseudo, 
          mail,
          `password`,
          id_roles
        ) 
      VALUES (:pseudo, :mail, :password, :id_roles)"
    );

    return $req->execute([
      ':pseudo' => $pseudo,
      ':mail' => $mail,
      ':password' => password_hash($password, PASSWORD_DEFAULT),
      ':id_roles' => $id_roles
    ]);
  }

  // --------------- Requête pour se connecter ---------------
  public static function login(string $mail): mixed {
    $db = self::dbAccess();
    
    $req = $db->prepare("SELECT id, pseudo, mail, `password`, id_roles FROM users WHERE mail = :mail");
    $req->execute([':mail' => $mail]);

    return $req->fetch();
  }

  
  // --------------- Requête pour mettre à jour un user ---------------
  public function updateUser(string $pseudo, string $mail, string $password, int $id) {
    $db = self::dbAccess();

    $req = $db->prepare(
      "UPDATE users SET 
        pseudo = :pseudo,
        mail = :mail,
        `password` = :password
      WHERE id = :id"
    );

    return $req->execute([
      ':pseudo' => $pseudo,
      ':mail' => $mail,
      ':password' => password_hash($password, PASSWORD_DEFAULT),
      ':id' => $id
    ]);
  }

  public function deleteUser($id): mixed {
    $db = self::dbAccess();

    $req = $db->prepare("DELETE FROM users WHERE id = :id");

    return $req->execute([':id' => $id]);
  }

  // --------------- Requête pour récupérer tous les users ---------------
  public function getAllUsers() {
    $db = self::dbAccess();

    $req = $db->prepare("SELECT * FROM users INNER JOIN `user-roles` ON `users`.id_roles = `user-roles`.id_role;");
    $req->execute();

    return $req->fetchAll();
  }

  // --------------- Requête pour récupérer un user par rapport à son id ---------------
  public static function getUserById($id) {
    $db = self::dbAccess();

    $req = $db->prepare("SELECT * FROM users WHERE id = :id");
    $req->execute([':id' => $id]);

    return $req->fetch();
  }
}