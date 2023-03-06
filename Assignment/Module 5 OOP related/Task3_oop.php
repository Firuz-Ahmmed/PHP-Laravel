<?php
class Person {
  private $name;
  private $email;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }
}
$firuz=new Person();
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $firuz->setName($name);
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $firuz->setEmail($email);
}
$result= <<<EOD
<html>
<body>
<h1>Given Data of new person</h1>
<p>Username: {$firuz->getName()}</p>
<p>Email: {$firuz->getEmail()}</p>
</body>
</html>
EOD;
echo $result;




?>
