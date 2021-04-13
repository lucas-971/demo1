<?php

namespace App\src;

class Client{
    private $nom;
    private $mail;
    private $age;
    private $solde;
    private $anniv;
    private $pourcentage;
    // getters / setters
    public function getNom() {
    return $this->nom;
    }
    public function setNom($nom) {
    $this->nom = $nom;
    }
    public function getMail() {
        return $this->mail;
        }
        public function setMail($mail) {
        $this->mail = $mail;
        }
        public function getAge() {
            return $this->age;
            }
            public function setAge($age) {
            $this->age = $age;
            }
            public function getSolde() {
                return $this->solde;
                }
                public function setSolde($solde) {
                $this->solde = $solde;
                }
                public function getAnniv() {
                    return $this->anniv;
                    }
                    public function setAnniv($anniv) {
                    $this->anniv = $anniv;
                    }
                    public function getPourcentage() {
                        return $this->pourcentage;
                        }
                        public function setPourcentage($pourcentage) {
                        $this->pourcentage = $pourcentage;
                        }

}
?>