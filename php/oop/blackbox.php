<?php

class BlackBox
{
    private array $data = [];

    public function addLog(string $message)
    {
        $message = count($this->data) . ' ' . $message;
        $this->data[] = $message;
    }
    public function getData(int $accessLevel)
    {
        if ($accessLevel <= 1) {
            return 'Доступ запрещен';
        } elseif ($accessLevel > 1 && $accessLevel <= 3) {
            return $this->data[0] . ' Ваш уровень доступа не позволяет получить больше данных';
        } else {
            return $this->data;
        }
    }
}

class Plane
{
    private BlackBox $blackbox;

    public function __construct()
    {
        $this->blackbox = new BlackBox();
    }

    public function flyAndCrush()
    {
        $this->addLog('потеря левого двигателя');
        $this->addLog('отказ топливной системы');
        $this->addLog('потеря высоты');
    }
    private function addLog(string $message)
    {
        $this->blackbox->addLog(date('Y.m.d H:i:s') . ' ' . $message);
    }

    public function getBlackBox()
    {
        return $this->blackbox;
    }
}

class Engineer
{
    private int $accessLevel;
    public function __construct()
    {
        $this->accessLevel = random_int(1, 5);
    }
    public function decodeBox(Blackbox $blackbox)
    {
        $blackboxMsg = $blackbox->getData($this->accessLevel);
        if (is_array($blackboxMsg)) {
            print_r($blackboxMsg);
        } else {
            echo $blackboxMsg;
        }
    }
}

$plane = new Plane();
$plane->flyAndCrush();
$blackbox = $plane->getBlackBox();
$engineer = new Engineer();
$engineer->decodeBox($blackbox);
