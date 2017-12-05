<?php

namespace Ryantxr\Fortune;

class Fortune {
    const Fortunes = [
        "Be cool, but also be warm.",
        "He becometh poor that dealeth with a slack hand: but the hand of the diligent maketh rich.",
        "What we think, we become.",
        "Those who believe they can do something and those who believe they can't are both right.",
        "This above all, to thine own self be true.",
        "We must become the change we wish to see in the world. - Mohandas (Mahatma) Gandhi",
        "Attitude is everything.",
        "Every thought we think is creating our future. - Louise L. Hay",
        "Courage doesn't always roar.",
        "Life is ten percent what happens to you and ninety percent how you respond to it.",
        "What good shall I do this day?",




    ];
    public function fortune() {
        $rand = mt_rand(count(self::Fortunes));
        return self::Fortunes[$rand];
    }

}