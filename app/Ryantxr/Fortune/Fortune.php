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
        "There are 10 types of people in the world, those who understand binary and those who don't.",
        "Always start with the user experience. -- Steve Jobs.",
        "You will soon forget this.",
        "Live in a world of your own, but always welcome visitors.",
        "Never be led astray onto the path of virtue.",
        "Are you sure the back door is locked?",
        "Tomorrow, you can be anywhere.",
        "Don't you feel more like you do now than you did when you came in?",
        "Whenever you find that you are on the side of the majority, it is time to reform.-- Mark Twain",
        "You don't become a failure until you're satisfied with being one.",
        "You have the power to influence all with whom you come in contact.",
    ];
    public function fortune() {
        $rand = mt_rand(0, count(self::Fortunes)-1);
        return self::Fortunes[$rand];
    }

}