<?php
class UserManager
{
public static function add(User $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO users (pseudo,motDePasse,idPersonnage) VALUES (:pseudo,:motDePasse,:idPersonnage)");
$q->bindValue(":pseudo", $obj->getPseudo());
$q->bindValue(":motDePasse", $obj->getMotDePasse());
$q->bindValue(":idPersonnage", $obj->getIdPersonnage());
 $q->execute();
}

public static function update(User $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE users SET pseudo=:pseudo, motDePasse=:motDePasse, idPersonnage=:idPersonnage WHERE idUser=:idUser");
$q->bindValue(":pseudo", $obj->getPseudo());
$q->bindValue(":motDePasse", $obj->getMotDePasse());
$q->bindValue(":idPersonnage", $obj->getIdPersonnage());
$q->bindValue(":idUser", $obj->getIdUser());
 $q->execute();
}

public static function delete(User $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM users WHERE idUser=" . $obj->getIdUser());
}

public static function getById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM users WHERE idUser=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new User ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$users = [];
$q = $db->query("SELECT * FROM users");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$users[] = new User($donnees);
}
}
return $users;
 }

}