<?php

namespace Siteruffecarde\SiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SiteruffecardeSiteBundle extends Bundle
{
      public function getParent()
    {
        return 'FOSUserBundle';
    }
}
