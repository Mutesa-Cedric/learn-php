<?php
class Bar
{
    public function test()
    {
        $this->testPrivate();
        $this->testPublic();
    }
    public function testPublic()
    {
        echo "Bar::testPublic\n";
    }
    private function testPrivate()
    {
        echo "Bar::testPrivate\n";
    }
}
class Foo extends Bar
{
    public function testPublic()
    {
        echo "Foo::testPublic\n";
    }
}
$myclass2 = new Foo();
$myclass2->test();
?>