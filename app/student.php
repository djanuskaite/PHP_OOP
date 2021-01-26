<?php

namespace Users;

class Student extends User implements UserFactory
{
    private $average;

    public function __construct($name, $email, $role, $average)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->average = $average;
    }

    public function addDescription($description)
    {
        // TODO: Implement addDescription() method.
        $this->description = $description;
    }

    public function getUserData()
    {
        // TODO: Implement getUserData() method.
        return $data = [
            $this->name,
            $this->email,
            $this->role,
            $this->description
        ];
    }

    public function showName($name)
    {
        // TODO: Implement showName() method.
        return $this -> name;
    }
}