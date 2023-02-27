<?php
   class person{
    private $Name;
    private $Email;
    function __construct($name,$email)
    {
        $this->Name=$name;
        $this->Email=$email;
        

    }
    public function setName($name){
       return $this->Name=$name;
    }
    public function setEmail($email){
        return $this->Email=$email;
    }
    public function getName(){
          echo <<<EOD

           <p> <br>Newly created person name is:{$this->Name}
            </p>

          EOD;
    }
    public function getEmail(){
        echo <<<EOD

        <p> Newly created person Email is:{$this->Email}
         </p>

       EOD;
    }
}

   $firuz=new person("firuz","firuz@gmail.com");
   $firuz->getName();
   $firuz->getEmail();
