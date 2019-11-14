<?php

interface Testable{}



class ApiTest implements Testable {

    public function test()
    {
        echo 'Api test';
    }
}

class WebTest implements Testable {

    public function test()
    {
        echo 'Web test';
    }

}


Class Tester {

    private $testers;
    
    public function __construct(Testable ...$testers) {
        $this->testers = $testers;
    }

    public function tests()
    {
        foreach($this->testers as $tester)
        {
            $tester->test();
        }
    }
}

$t = new Tester(...[new ApiTest(), new WebTest()]);

$t->tests();

/* Output
 *
 * Api test
 * Web test
 */
