<?php
function hello() {
    var_dump("hello");
}

hello();
hello();
hello();

function helloName($name='Nameless', $age='Unknown') {
    var_dump("Hello, $name! You are $age years old!");
}

helloName('svenw', 18);
helloName('ants', 'unc');
helloName();

function square($a) {
    if($a<0) {
        return 0;
    }
    return $a * $a;
}

$answer = square(2);
var_dump($answer);
var_dump(square(4));

function recursion($i) {
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}

recursion(0);
?>