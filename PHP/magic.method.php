<?php
class Tweet
{
    public $id;
    public $text;
    public function __construct($id, $text) //magic method
    {
        echo "construct";
        $this->id = $id;
        $this->text = $text;
    }

    public function __destruct() //magic method
    {
        echo "destruct";
    }

    public function __get($property) //magic method
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) //magic method
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function  __isset($property) //magic method
    {
        return isset($this->$property);
    }

    public function __unset($property) //magic method
    {
        unset($this->$property);
    }

    public function __toString() //magic method
    {
        return $this->text;
    }
}
$tweet = new Tweet(123, 'Hello world');
echo "<br>";

echo "id: ", $tweet->id;
echo "<br>";

echo "text: ", $tweet->text;
echo "<br>";

echo "set";
$tweet->text = "Hi world";
echo "<br>";

echo "get: ", $tweet->text;
echo "<br>";

echo (isset($tweet->id));
echo "<br>";

unset($tweet->id);

echo "id: ", $tweet->id;
echo "<br>";

echo "__toString:";
echo "<br>";
echo $tweet;
echo "<br>";
