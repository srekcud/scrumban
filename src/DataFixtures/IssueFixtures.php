<?php

namespace App\DataFixtures;

use App\Factory\Foundry\IssueFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use LocaleBundle\DataFixtures\CurrencyFixtures;

class IssueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        IssueFactory::new()->create();
    }
}
