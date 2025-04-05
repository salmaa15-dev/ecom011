<?php

namespace App\Repositories\Contracts;

interface BasketRepositoryContract {

    public function all(): array;

    public function add(int $id, int $qty): void;

    public function getCurrentQty(int $id): int;

    public function remove(int $id): void;

}