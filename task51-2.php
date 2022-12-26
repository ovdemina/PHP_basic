<?php

class User {
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;

    public function __construct(string $username, string $email, ?int $age = null)
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
    public Array $comments = [];
 
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

    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    public function markAsDone(): void
    {
        $this->$dateUpdated = new DateTime();
        $this->$dateDone = new DateTime();
        $this->$isDone = true;
    }
}

class Comment {
    public User $author;
    public Task $task;
    public string $text;

    public function __construct(User $author, Task $task, $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }
}

class TaskService {
    public static function addComment(User $author, Task $task, $text): void
    {
        $task->setComment(new Comment($author, $task, $text));
    }
}

$user1 = new User ("Ivan", "ivan@mail.ru", 20);
$task1 = new Task ("letter1", 1, $user1);

TaskService::addComment($user1, $task1, "Comment1");

print_r($user1);
print_r($task1);