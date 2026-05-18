<?php
function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$stories = [
    'story1' => [
        'slug' => 'story1',
        'number' => 1,
        'navLabel' => 'Story 1',
        'title' => 'The Wi-Fi Seance',
        'subtitle' => 'A Hauntingly Slow Connection',
        'excerpt' => 'When the family router dies, Junjun discovers that his late grandfather is still taking care of the utility bills from the afterlife.',
        'image' => 'https://images.unsplash.com/photo-1501139083538-0139583c060f?auto=format&fit=crop&w=1200&q=80',
        'imageAlt' => 'A glowing Filipino grandfather ghost angrily pointing at a blinking internet router',
        'imageCaption' => 'Even in the spiritual realm, bad ping is absolutely unacceptable.',
        'content' => [
            'Nanay cried because the Wi-Fi router blinked red again. Junjun set a glass of water on the table, lit a candle, and knocked on the wall. "Lolo, if you still haunt this house, please fix the connection."',
            'The room went cold and smelled of cheap cigars. The router lights flickered, then stayed green. A whisper rolled down the hallway: "Change the password, Junjun. The neighbors keep stealing it, and it lags my Mobile Legends."',
            'By morning, the bill was paid and a sticky note sat on the modem. It read: "Pay on time. Ghosts do not like buffering." Junjun obeyed and never doubted the signal again.',
        ],
    ],
    'story2' => [
        'slug' => 'story2',
        'number' => 2,
        'navLabel' => 'Story 2',
        'title' => 'Balut Duty',
        'subtitle' => 'Midnight Snacks for Monsters',
        'excerpt' => 'Confronted by a terrifying, shape-shifting monster under a mango tree, Marcus realizes that the only thing stronger than bloodlust is a craving for street food.',
        'image' => 'https://images.unsplash.com/photo-1428592953211-077101b2021b?auto=format&fit=crop&w=1200&q=80',
        'imageAlt' => 'A fanged Aswang monster happily peeling a balut egg next to a tired man.',
        'imageCaption' => 'True Pinoy hospitality means offering a snack, even if the guest originally wanted to eat your liver.',
        'content' => [
            'Marcus expected a scream when the shadow under the mango tree stretched into an aswang. Instead, the creature sniffed the air and asked if the vendor still sold balut.',
            'He offered a warm egg and some vinegar. The monster peeled it carefully, eyes softening as it slurped the broth and laughed about the old stories.',
            'By dawn, the mango tree was safe. Marcus wrote a sign that read: "Night shift: bring snacks." Even monsters respected a good meal.',
        ],
    ],
    'story3' => [
        'slug' => 'story3',
        'number' => 3,
        'navLabel' => 'Story 3',
        'title' => 'The Ultimate Tupperware',
        'subtitle' => 'Interstellar Domestic Warfare',
        'excerpt' => 'As the apocalypse rains down on Earth, one brave mother refuses to board the rescue spaceship until her plastic containers are perfectly matched.',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80',
        'imageAlt' => 'A Filipina mother triumphantly holding up a blue plastic lid with an exploding planet in the background.',
        'imageCaption' => 'The world can end, but losing a matching lid to your sister-in-law is a fate worse than death.',
        'content' => [
            'When the evacuation ship opened its ramp, Alma stood in line with three plastic bins and a bag of lids. She refused to board until each lid found its match.',
            'Officers begged her to hurry, but Alma spread the containers on the ground and sorted them with the calm of a librarian. Explosions flashed in the sky as she compared tiny numbers on the rim.',
            'At last, a final lid clicked into place. Alma stepped onto the ship, proud and ready, carrying the full set. The world could end, but her kitchen would not.',
        ],
    ],
    'story4' => [
        'slug' => 'story4',
        'number' => 4,
        'navLabel' => 'Story 4',
        'title' => 'The Jeepney Prophecy',
        'subtitle' => 'The Human Conveyor Belt',
        'excerpt' => 'In a crowded public transit ride, a single crumpled 20-peso bill sparks a flawless display of synchronized human cooperation.',
        'image' => 'https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1200&q=80',
        'imageAlt' => 'Passengers inside a colorful Philippine jeepney passing a 20-peso bill down the aisle.',
        'imageCaption' => 'Forget the Avengers; there is no greater teamwork than a packed jeepney passing your change back.',
        'content' => [
            'The jeepney was packed when a crumpled 20-peso bill appeared near the back. Without a word, the passengers passed it forward, hand to hand, across the whole bench.',
            'A student kept the coins moving, a vendor counted change, and the driver never turned around. The bill arrived with exact fare, like a signal that the ride was working as one machine.',
            'When someone needed to get off, the same line of hands lifted the fare back. No prophecy was needed. The ritual itself proved that strangers could move with one rhythm.',
        ],
    ],
    'story5' => [
        'slug' => 'story5',
        'number' => 5,
        'navLabel' => 'Story 5',
        'title' => 'The Ghost of Christmas Past (and Present)',
        'subtitle' => 'The Horror of Holiday Financing',
        'excerpt' => 'A demon from the underworld attempts to terrorize a shopping mall on September 1st, only to face the true, unstoppable force of holiday consumerism.',
        'image' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=1200&q=80',
        'imageAlt' => 'A panicked red demon being handed a loan application by a smiling mall sales lady.',
        'imageCaption' => 'Not even the forces of darkness are brave enough to face a three-month installment plan.',
        'content' => [
            'On September 1, a demon crawled from the basement to terrify the mall. The doors opened to early carols and a sea of red ribbons.',
            'A sales lady smiled and handed the demon a flyer for a three-month installment plan. The creature tried to roar, but the cash register beeped and asked for a signature.',
            'By the time the tree was lit, the demon stood in line with a cart and a loyalty card. It fled only after seeing the words "extended warranty" in bold print.',
        ],
    ],
];
