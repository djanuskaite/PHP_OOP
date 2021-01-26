<?php

namespace Users;

// klase show, kuri turi statini metoda
class Show
{
    static public function ShowData($data) { // negalima naudoti $this, nes nera kuriamas naujas objektas
        foreach ($data as $item) {
            echo "<li>$item</li>";
        }
    }
}