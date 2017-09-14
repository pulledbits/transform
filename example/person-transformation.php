<?php

namespace pulledbits\TransformExample;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

class Person implements \pulledbits\Transform\Transformable
{
    private $firstname;
    private $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    function transformTo(\pulledbits\Transform\Struct $transformation): void
    {
        $transformation->map('firstname', $this->firstname);
        $transformation->map('lastname', $this->lastname);
    }
}

class PersonHTMLData extends \pulledbits\Transform\Struct {
    protected $firstname;
    protected $lastname;

    public function map(string $identifier, $value) {
        $this->$identifier = $value;
    }
}

class PersonHTMLTransformation
{
    public function render(PersonHTMLData $data) {
        print '<div>' . $data->firstname . '<br />' . $data->lastname . '</div>';
    }

}

$person = new Person("John", "Doo");
$htmldata = new PersonHTMLData();
$person->transformTo($htmldata);

$html = new PersonHTMLTransformation();
$html->render($htmldata);