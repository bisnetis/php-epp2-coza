<?php

namespace AfriCC\EPP\Extension\COZA\Create;

use AfriCC\EPP\ExtensionInterface;
use AfriCC\EPP\Frame\Command\Create\Domain as DomainCreate;
use AfriCC\EPP\Validator;

class CozaDomain extends DomainCreate implements ExtensionInterface
{
    protected $extension = 'extdom';
    protected $extension_xmlns = 'http://co.za/epp/extensions/cozadomain-1-0';

    public function AutoRenew($autorenew)
    {
        $this->set('//epp:epp/epp:command/epp:extension/cozadomain:create/cozadomain:autorenew', $autorenew);
    }
}
