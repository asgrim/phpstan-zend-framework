<?php

declare(strict_types=1);

namespace Asgrim\PhpStanZendFramework;

use PhpParser\Node\Expr\MethodCall;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Type\ArrayType;
use PHPStan\Type\DynamicMethodReturnTypeExtension;
use PHPStan\Type\MixedType;
use PHPStan\Type\Type;
use Psr\Http\Message\MessageInterface;

final class InputFilterToAcceptParsedBodyExtension implements DynamicMethodReturnTypeExtension
{
    public function getClass() : string
    {
        return MessageInterface::class;
    }

    public function isMethodSupported(MethodReflection $methodReflection) : bool
    {
        return $methodReflection->getName() === 'getParsedBody';
    }

    public function getTypeFromMethodCall(MethodReflection $methodReflection, MethodCall $methodCall, Scope $scope) : Type
    {
        return new ArrayType(new MixedType(), new MixedType());
    }
}
