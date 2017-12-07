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
        "Come let us reason together.",
        "When all else fails, read the instructions.",
        "Absence abates a moderate passion but intensifies a great one just as the wind exinguishes a candle but fans fire into the flame.",
        "Of all the things that I have lost, I miss my mind the most.",
        "When nothing is going right, go left.",
        "I'm not arguing. I'm just explaining why I am right.",
        "Be strong, I whispered to my WiFi signal.",
        "You never know what you have, until you clean your closet.",
        "I eat cake because it's someone's birthday somewhere today.",

    ];
    public function fortune() {
        $rand = mt_rand(0, count(self::Fortunes)-1);
        return self::Fortunes[$rand];
    }

}