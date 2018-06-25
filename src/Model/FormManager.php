<?php
namespace Model;

class FormManager extends EntityManager
{
    const TABLE = 'formulaire';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

}