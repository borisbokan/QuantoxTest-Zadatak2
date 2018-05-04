<?php



/**
 * Description of Robot
 *
 * @author borcha
 */
class Robot {
    //put your code here
    var $ime;
    var $pocetnapozicija;
    var $bojarobota;
    var $trenutnapozicija;
    
    /**
     * 
     * @param type $_ime
     * @param type $_pocetnapozicija
     * @param type $_bojarobota
     */
    public function __construct($_ime,$_pocetnapozicija,$_bojarobota) {
        $this->ime=$_ime;
        $this->pocetnapozicija=$_pocetnapozicija;
        $this->bojarobota=$_bojarobota;
        $this->trenutnapozicija=$_pocetnapozicija;
    }
    
    function crtajstartnupoziciju(){
        echo "<b>*</b> <br>";
    }
    
    
    function pomeriDesno(){
        $this->trenutnapozicija+=1;
    }
    
    
    function pomeriLevo(){
        $this->trenutnapozicija-=1;
    }
    
    
    function skociNaPoziciju($pozicija){
        $this->trenutnapozicija=$pozicija;
    }
    
    //geteri i seteri
    function getIme() {
        return $this->ime;
    }

    function getPocetnapozicija() {
        return $this->pocetnapozicija;
    }

    function getBojarobota() {
        return $this->bojarobota;
    }

    function getTrenutnapozicija() {
        return $this->trenutnapozicija;
    }

    function setIme($ime) {
        $this->ime = $ime;
    }

    function setPocetnapozicija($pocetnapozicija) {
        $this->pocetnapozicija = $pocetnapozicija;
    }

    function setBojarobota($bojarobota) {
        $this->bojarobota = $bojarobota;
    }

    function setTrenutnapozicija($trenutnapozicija) {
        $this->trenutnapozicija = $trenutnapozicija;
    }


   
    
}
