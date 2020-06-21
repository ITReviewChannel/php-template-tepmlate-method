<?php

namespace ITReview;

/**
 * Напиток.
 *
 * @package ITReview
 */
abstract class Beverage
{
    /**
     * Создание.
     */
    public function create(): void
    {
        $this->prepareWater();
        $this->addIngredients();
        $this->mix();
    }

    /**
     * Подготовка воды.
     */
    private function prepareWater(): void
    {
        echo 'Подготовка воды.' . PHP_EOL;
    }

    /**
     * Добавление ингредиетов.
     */
    abstract protected function addIngredients(): void;

    /**
     * Смешивание.
     */
    private function mix():void
    {
        echo 'Смешивание.' . PHP_EOL;
    }
}

/**
 * Чай.
 *
 * @package ITReview
 */
final class Tea extends Beverage
{
    /**
     * {@inheritDoc}
     */
    protected function addIngredients(): void
    {
        echo 'Добавление листов чая.' . PHP_EOL;
        echo 'Добавление сахара.' . PHP_EOL;
    }
}

/**
 * Кофе.
 *
 * @package ITReview
 */
final class Coffee extends Beverage
{
    /**
     * {@inheritDoc}
     */
    protected function addIngredients(): void
    {
        echo 'Добавление кофейной основы.' . PHP_EOL;
        echo 'Добавление молока.' . PHP_EOL;
        echo 'Добавление сахара.' . PHP_EOL;
    }
}

(new Tea())->create();

echo PHP_EOL . '--------------------------------' . PHP_EOL;

(new Coffee())->create();

