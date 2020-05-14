<?php
class User
{
/*******************************Attributs*******************************/
private $_idUser;
private $_pseudo;
private $_motDePasse;
private $_idPersonnage;

/******************************Accesseurs*******************************/
public function getIdUser()
{
 return $this->_idUser;
}
public function setIdUser($_idUser)
{
 return $this->_idUser = $_idUser;
}
public function getPseudo()
{
 return $this->_pseudo;
}
public function setPseudo($_pseudo)
{
 return $this->_pseudo = $_pseudo;
}
public function getMotDePasse()
{
 return $this->_motDePasse;
}
public function setMotDePasse($_motDePasse)
{
 return $this->_motDePasse = $_motDePasse;
}
public function getIdPersonnage()
{
 return $this->_idPersonnage;
}
public function setIdPersonnage($_idPersonnage)
{
 return $this->_idPersonnage = $_idPersonnage;
}

/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdUser() . $this->getPseudo() . $this->getMotDePasse() . $this->getIdPersonnage() ;
}

}