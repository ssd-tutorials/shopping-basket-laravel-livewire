<?php

namespace App\Repositories\Contracts;

interface BasketRepositoryContract
{
    /**
     * Get all items in the basket.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Add item to the baset.
     *
     * @param  int  $id
     * @param  int  $qty
     * @return void
     */
    public function add(int $id, int $qty): void;

    /**
     * Get item's current quantity.
     *
     * @param  int  $id
     * @return int
     */
    public function getCurrentQty(int $id): int;

    /**
     * Remove item from the basket.
     *
     * @param  int  $id
     * @return void
     */
    public function remove(int $id): void;
}
