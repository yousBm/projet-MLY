<?php
class ScoreManager
{
public static function add(Score $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO scores (idNiveau,idUser,nbDePieceRecolte,Bonus,time,scoreObtenu) VALUES (:idNiveau,:idUser,:nbDePieceRecolte,:Bonus,:time,:scoreObtenu)");
$q->bindValue(":idNiveau", $obj->getIdNiveau());
$q->bindValue(":idUser", $obj->getIdUser());
$q->bindValue(":nbDePieceRecolte", $obj->getNbDePieceRecolte());
$q->bindValue(":Bonus", $obj->getBonus());
$q->bindValue(":time", $obj->getTime());
$q->bindValue(":scoreObtenu", $obj->getScoreObtenu());
 $q->execute();
}

public static function update(Score $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE scores SET idNiveau=:idNiveau, idUser=:idUser, nbDePieceRecolte=:nbDePieceRecolte, Bonus=:Bonus, time=:time, scoreObtenu=:scoreObtenu WHERE idScore=:idScore");
$q->bindValue(":idNiveau", $obj->getIdNiveau());
$q->bindValue(":idUser", $obj->getIdUser());
$q->bindValue(":nbDePieceRecolte", $obj->getNbDePieceRecolte());
$q->bindValue(":Bonus", $obj->getBonus());
$q->bindValue(":time", $obj->getTime());
$q->bindValue(":scoreObtenu", $obj->getScoreObtenu());
$q->bindValue(":idScore", $obj->getIdScore());
 $q->execute();
}

public static function delete(Score $obj)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM scores WHERE idScore=" . $obj->getIdScore());
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM scores WHERE idScore=$id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new Score ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$scores = [];
$q = $db->query("SELECT * FROM scores");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$scores[] = new Score($donnees);
}
}
return $scores;
 }

}