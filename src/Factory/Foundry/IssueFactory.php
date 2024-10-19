<?php

namespace App\Factory\Foundry;

use App\Entity\Issue;
use App\Repository\IssueRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Issue>
 *
 * @method        Issue|Proxy create(array|callable $attributes = [])
 * @method static Issue|Proxy createOne(array $attributes = [])
 * @method static Issue|Proxy find(object|array|mixed $criteria)
 * @method static Issue|Proxy findOrCreate(array $attributes)
 * @method static Issue|Proxy first(string $sortedField = 'id')
 * @method static Issue|Proxy last(string $sortedField = 'id')
 * @method static Issue|Proxy random(array $attributes = [])
 * @method static Issue|Proxy randomOrCreate(array $attributes = [])
 * @method static IssueRepository|RepositoryProxy repository()
 * @method static Issue[]|Proxy[] all()
 * @method static Issue[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Issue[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Issue[]|Proxy[] findBy(array $attributes)
 * @method static Issue[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Issue[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class IssueFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'description' => self::faker()->text(255),
            'spentTime' => self::faker()->randomNumber(),
            'storyPoint' => self::faker()->randomNumber(),
            'title' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Issue $issue): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Issue::class;
    }
}
