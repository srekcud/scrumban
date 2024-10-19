<?php

namespace App\Factory\Foundry;

use App\Entity\Sprint;
use App\Repository\SprintRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Sprint>
 *
 * @method        Sprint|Proxy create(array|callable $attributes = [])
 * @method static Sprint|Proxy createOne(array $attributes = [])
 * @method static Sprint|Proxy find(object|array|mixed $criteria)
 * @method static Sprint|Proxy findOrCreate(array $attributes)
 * @method static Sprint|Proxy first(string $sortedField = 'id')
 * @method static Sprint|Proxy last(string $sortedField = 'id')
 * @method static Sprint|Proxy random(array $attributes = [])
 * @method static Sprint|Proxy randomOrCreate(array $attributes = [])
 * @method static SprintRepository|RepositoryProxy repository()
 * @method static Sprint[]|Proxy[] all()
 * @method static Sprint[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Sprint[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Sprint[]|Proxy[] findBy(array $attributes)
 * @method static Sprint[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Sprint[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class SprintFactory extends ModelFactory
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
            'endDate' => self::faker()->dateTime(),
            'name' => self::faker()->text(255),
            'startDate' => self::faker()->dateTime(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Sprint $sprint): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Sprint::class;
    }
}
