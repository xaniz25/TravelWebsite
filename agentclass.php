<!--Shanice Talan-->
<?php

  class Agent {
    public $fname;
    public $midinitial;
    public $lname;
    public $phone;
    public $email;
    public $pos;
    public $agcyid;
    public $uid;
    public $pwd;
    public $hashed;
    //public $agentarray;

    public function __construct() {
        $this->fname=$_REQUEST["AgtFirstName"];
        $this->midinitial=$_REQUEST["AgtMiddleInitial"];
        $this->lname=$_REQUEST["AgtLastName"];
        $this->phone=$_REQUEST["AgtBusPhone"];
        $this->email=$_REQUEST["AgtEmail"];
        $this->pos=$_REQUEST["AgtPosition"];
        $this->agcyid=$_REQUEST["AgencyId"];
        $this->uid=$_REQUEST["UserID"];
        $this->pwd=stripslashes($_REQUEST["UserPwd"]);
        $this->hashed=password_hash($this->pwd, PASSWORD_BCRYPT);
    }

    //Get methods
    public function getFname() {
      return $this->fname;
    }

    public function getMidInitial() {
      return $this->midinitial;
    }

    public function getLname() {
      return $this->lname;
    }

    public function getPhone() {
      return $this->phone;
    }

    public function getEmail() {
      return $this->email;
    }

    public function getPos() {
      return $this->pos;
    }

    public function getAgcyID() {
      return $this->agcyid;
    }

    public function getUserID() {
      return $this->uid;
    }

    public function getPwd() {
      return $this->pwd;
    }

    public function getHashed() {
      return $this->hashed;
    }

    //Set methods
    public function setFname($fnamein) {
      $this->fname=$fnamein;
    }

    public function setMidInitial($midinitialin) {
      $this->midinitial=$midinitialin;
    }

    public function setLname($lnamein) {
      $this->lname=$lnamein;
    }

    public function setPhone($phonein) {
      $this->phone=$phonein;
    }

    public function setEmail($emailin) {
      $this->email=$emailin;
    }

    public function setPos($posin) {
      $this->pos=$posin;
    }

    public function setAgcyID($agcyidin) {
      $this->agcyid=$agcyidin;
    }

    public function setUserID($uidin) {
      $this->userid=$uidin;
    }

    public function setPwd($pwdin) {
      $this->pwd=$pwdin;
    }

    public function __toString() {
      return "Agent: "
      .$this->fname. " "
      .$this->midinitial. " "
      .$this->lname. " "
      .$this->phone. " "
      .$this->email. " "
      .$this->pos. " "
      .$this->agcyid. " "
      .$this->uid. " "
      .$this->pwd. " ";
    }

  }
?>
