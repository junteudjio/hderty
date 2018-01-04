<?php

namespace Innov\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class InnovUserBundle extends Bundle
{
    public function getParent()
{
return 'FOSUserBundle';
}
}
