<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

declare (strict_types=1);
class UserVarakJosef{
    
    private $jmenoVarakJosef;
    /**
     * 
     * @param string $jmenoVarakJosef
     * @return string 
     */
    public function setjmenoVarakJosef(string $jmenoVarakJosef){
        $this->jmenoVarakJosef =$jmenoVarakJosef;
    }
   
    private $heightVarakJosef;
    /**
     * 
     * @param int $heightVarakJosef
     * @return int 
     */
    public function setheightVarakJosef(int $heightVarakJosef) {
        $this->heightVarakJosef = $heightVarakJosef;
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

