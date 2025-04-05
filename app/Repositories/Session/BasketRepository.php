<?php

namespace App\Repositories\Session;

use App\Repositories\Contracts\BasketRepositoryContract;
use Illuminate\Contracts\Session\Session;

class BasketRepository implements BasketRepositoryContract {

    private Session $session;

    public function __construct(Session $session)
    {
        $this->session = $session;   
    }

    public function all(): array
    {
        return $this->session->get('cart', []);
    }

    public function add(int $id, int $qty): void
    {
        $this->session->put($this->identity($id), $qty);
    }

    public function identity(int $id): string
    {
        return 'cart.'.$id;
    }

    public function getCurrentQty(int $id): int
    {
        return $this->session->get($this->identity($id), 0);
    }

    public function remove(int $id): void
    {
       $this->session->remove($this->identity($id));
    }
}