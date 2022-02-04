<?php

namespace notifier;{

class User
{
    public function __construct(public $fullName, public $email, public  $age = null, public  $phoneNubmer = null)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->phoneNubmer = $phoneNubmer;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->fullName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phoneNubmer;
    }

    public function isAdult()
    {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}

class Censor
{
    public function censor($message)
    {
        return 'Цензурированное сообщение ' . $message;
    }
}

class Notification
{
    public function __construct(public $channel)
    {
        $this->channel = $channel;
    }

    public function sendTo($name, $contact, $message)
    {
        echo "Уведомление клиенту $name на $this->channel ($contact): $message";
    }
}

function notify(User $user, $message)
{
    if ($user->isAdult()) {
        $notification = new Notification('email');
        $notification->sendTo($user->getName(), $user->email, $message);
        if (!is_null($user->getPhone())) {
            $notificationEmail = new Notification('телефон');
            $notificationEmail->sendTo($user->getName(), $user->phoneNubmer, $message);
        }
    } else {
        $notification = new Notification('email');
        $censor = new Censor();
        $message = $censor->censor($message);
        $notification->sendTo($user->getName(), $user->email, $message);
        if (!is_null($user->getPhone())) {
            $notificationEmail = new Notification('телефон');
            $notificationEmail->sendTo($user->getName(), $user->phoneNubmer, $message);
        }
    }
}

$user1 = new User('Пупкин Валерий Альбертович', 'azaza@gmail.com', 54, '+79998887766');
$user2 = new User($fullName = 'Медведев Дмитрий Николаевич', $email = 'azaza@gmail.com', $age = 15);

notify($user1, 'Сообщение для дедушки');    
notify($user2, 'Сообщение для Димы');
}