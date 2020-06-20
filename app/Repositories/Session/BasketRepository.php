<?php

namespace App\Repositories\Session;

use Illuminate\Contracts\Session\Session;
use App\Repositories\Contracts\BasketRepositoryContract;

class BasketRepository implements BasketRepositoryContract
{
    /**
     * @var \Illuminate\Contracts\Session\Session
     */
    private Session $session;

    /**
     * BasketRepository constructor.
     *
     * @param  \Illuminate\Contracts\Session\Session  $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @inheritDoc
     */
    public function all(): array
    {
        return $this->session->get('basket', []);
    }

    /**
     * @inheritDoc
     */
    public function add(int $id, int $qty): void
    {
        $this->session->put($this->identity($id), $qty);
    }

    /**
     * Get item identity.
     *
     * @param  int  $id
     * @return string
     */
    private function identity(int $id): string
    {
        return 'basket.'.$id;
    }

    /**
     * @inheritDoc
     */
    public function getCurrentQty(int $id): int
    {
        return $this->session->get($this->identity($id), 0);
    }

    /**
     * @inheritDoc
     */
    public function remove(int $id): void
    {
        $this->session->remove($this->identity($id));
    }
}
