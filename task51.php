<?php

class User {
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;

    function __construct(string $username, string $email, ?int $age = null)
   {
       $this->username = $username;
       $this->email = $email;
       $this->age = $age;
   }

 }

 class Task {
    public string $description;
    public DateTime $dateCreated;
    public DateTime $dateUpdated;
    public DateTime $dateDone;
    public int $priority;
    public bool $isDone;
    public User $user;
    public Array $list = [];
 
    public function __construct(string $description, int $priority, User $user, $isDone = false)
    {
       $this->description = $description;
       $this->priority = $priority;
       $this->user = $user;
       $this->dateCreated = new DateTime();
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->$dateUpdated = new DateTime();
    }

    public function markAsDone(): void
    {
        $this->$dateUpdated = new DateTime();
        $this->$dateDone = new DateTime();
        $this->$isDone = true;
    }

}


 
$user1 = new User ("Ivan", "ivan@mail.ru", 20);
$task1 = new Task ("letter", 1, $user1);

print_r($user1);
print_r($task1);