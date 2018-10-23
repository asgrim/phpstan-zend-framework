<?php

declare(strict_types=1);

namespace AsgrimTest\PhpStanZendFramework\Fixture;

use Zend\InputFilter\InputFilter;

final class InputFilterAcceptingParsedBody
{
    public function method(\Psr\Http\Message\ServerRequestInterface $request)
    {
        $inputFilter = new InputFilter();
        $inputFilter->setData($request->getParsedBody());
    }
}
