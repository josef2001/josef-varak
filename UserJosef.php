<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

declare (strict_types=1);
class UserVarakJosef{
    
    private $JmenoVarakJosef;
    /**
     * 
     * @param string $JmenoVarakJosef
     * @return string 
     */
    public function setJmenoVarakJosef(string $JmenoVarakJosef){
        $this->JmenoVarakJosef =$JmenoVarakJosef;
    }
   
    private $HeightVarakJosef;
    /**
     * 
     * @param int $HeightVarakJosef
     * @return int 
     */
    public function setHeightVarakJosef(int $HeightVarakJosef) {
        $this->HeightVarakJosef = $HeightVarakJosef;
    }
    
    protected $HabitsVarakJosef;
   
    protected $AutoVarakJosef;
  
    protected $PenizeVarakJosef;
   
     public $SLUCHATKAVarakJosef = 'JBL';
     /**
      * @param string $SLUCHATKAVarakJosef 
      * @return string
      */
    public function getSLUCHATKAVarakJosef(): string {
        return $this->SLUCHATKAVarakJosef;
    }
   
     public $FavoriteMealVarakJosef = 'Hamburger';
     /**
      * @param string $FavoriteMealVarakJosef
      * @return string
      */
      
    public function getFavoriteMealVarakJosef() :string {
        return $this->FavoriteMealVarakJosef;
    }
   
     public $FavoritePhoneVarakJosef = 'Iphone';
      /**
       * @param string $FavoritePhoneVarakJosef
       * @return string
       */
     public function getFavoritePhoneVarakJosef() :string{
        return $this->FavoritePhoneVarakJosef;
    }
  
     public $TheMostPlayedBatllefieldVarakJosef = 5;
     /**
      * @param int $TheMostPlayedBatllefieldVarakJosef 
      * @return int
      */
    public function getTheMostPlayedBatllefieldVarakJosef():int {
        return $this->TheMostPlayedBatllefieldVarakJosef;
    }
  
     public $FavoritePetVarakJosef = 'DOG';
     /**
      * @param string $FavoritePetVarakJosef 
      * @return string
      */
   public function getFavoritePetVarakJosef() :string {
        return $this->FavoritePetVarakJosef;
    }

    public function __construct() {
        
    }   
 }

$user = new UserVarakJosef();
$user->setjmenoVarakJosef('Peppaa');
$user->setheightVarakJosef(177);

echo $user->getSLUCHATKAVarakJosef(); echo'<br>';
echo $user->getFavoriteMealVarakJosef();echo'<br>';
echo $user->getFavoritePhoneVarakJosef();echo'<br>';
echo $user->getTheMostPlayedBatllefieldVarakJosef();echo'<br>';
echo $user->getFavoritePetVarakJosef();echo'<br>';

var_dump($user);

