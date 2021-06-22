<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$header_links = [
    '/',
    'characters',
    'comics',
    'shop'
];

Route::get('/', function () {
    $data = [
        'links'=>[
            '/',
            'characters',
            'comics',
            'shop'
        ]
        ];
    return view('home',$data);
})->name('/');



Route::get('characters', function () {
    $characters =[
        [
          "name" => "Ares",
          "powerstats" => [
            "intelligence"=> "75",
            "strength"=> "82",
            "speed"=> "35",
            "durability"=> "80",
            "power"=> "84",
            "combat"=> "101"
            ],
          "biography"=> [
            "full-name" => "",
            "alter-egos"=> "No alter egos found.",
            "aliases"=> [
                "God of War",
                "Mister Talon",
                "Mars",
                "Warhawk"
            ],
            "place-of-birth"=> "-",
            "first-appearance"=> "Thor #129",
            "publisher"=> "Marvel Comics",
            "alignment"=> "good"
            ],
        "appearance"=> [
            "gender"=> "Male",
            "race"=> "God",
            "height"=> [
                "6'1",
                "185 cm"
            ],
            "weight"=> [
                "600 lb",
                "270 kg"
            ],
            "eye-color"=> "Brown",
            "hair-color"=> "Brown"
        ],
        "work"=> [
            "occupation"=> "-",
            "base"=> "Avengers Tower, formerly Olympus"
        ],
        "connections"=> [
            "group-affiliation"=> "Avengers, Mighty Avengers, Olympic Pantheon; Warhawks",
            "relatives"=> "Zeus (father), Hera (mother), Enyo (wife), Deimos, Phobos, Alexander (sons), Neptune, Pluto (uncles), Demeter, Hestia (aunts), Hephaestus (brother), Apollo, Dionysus, Hercules, Hermes(half-brothers), Artemis, Pallas Athena, Venus, (half-sisters)"
        ],
        "image"=> [
            "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/1118.jpg"
        ]
        ],
        [
          "name"=> "Arsenal",
        "powerstats"=> [
            "intelligence"=> "null",
            "strength"=> "54",
            "speed"=> "null",
            "durability"=> "null",
            "power"=> "null",
            "combat"=> "null"
        ],
        "biography"=> [
            "full-name"=> "Roy William Harper, Jr.",
            "alter-egos"=> "Speedy",
            "aliases"=> [
                "-"
            ],
            "place-of-birth"=> "-",
            "first-appearance"=> "-",
            "publisher"=> "Speedy",
            "alignment"=> "good"
        ],
        "appearance"=> [
            "gender"=> "Male",
            "race"=> "Human",
            "height"=> [
                "-",
                "0 cm"
            ],
            "weight"=> [
                "- lb",
                "0 kg"
            ],
            "eye-color"=> "-",
            "hair-color"=> "-"
        ],
        "work"=> [
            "occupation"=> "-",
            "base"=> "-"
        ],
        "connections"=> [
            "group-affiliation"=> "-",
            "relatives"=> "-"
        ],
        "image"=> [
            "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/1014.jpg"
        ]
      ],
      [
        "name"=> "Daphne Powell",
        "powerstats"=> [
            "intelligence"=> "38",
            "strength"=> "10",
            "speed"=> "8",
            "durability"=> "10",
            "power"=> "56",
            "combat"=> "10"
        ],
        "biography"=> [
            "full-name"=> "Daphne Powell",
            "alter-egos"=> "No alter egos found.",
            "aliases"=> [
                "-"
            ],
            "place-of-birth"=> "-",
            "first-appearance"=> "No Ordinary Family S01E01 (2010)",
            "publisher"=> "ABC Studios",
            "alignment"=> "good"
        ],
        "appearance"=> [
            "gender"=> "Female",
            "race"=> "null",
            "height"=> [
                "-",
                "0 cm"
            ],
            "weight"=> [
                "- lb",
                "0 kg"
            ],
            "eye-color"=> "-",
            "hair-color"=> "-"
        ],
        "work"=> [
            "occupation"=> "Student",
            "base"=> "-"
        ],
        "connections"=> [
            "group-affiliation"=> "-",
            "relatives"=> "Jim Powell and Stephanie Powell (parents), JJ Powell (brother)"
        ],
        "image"=> [
            "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/1356.jpg"
        ]
      ],
      [
        "name"=> "Jean Grey",
        "powerstats"=> [
            "intelligence"=> "94",
            "strength"=> "80",
            "speed"=> "21",
            "durability"=> "20",
            "power"=> "92",
            "combat"=> "70"
        ],
        "biography"=> [
            "full-name"=> "Jean Grey",
            "alter-egos"=> "Phoenix, White Phoenix of The Crown",
            "aliases"=> [
                "Redd Dayspring",
                "Marvel Girl"
            ],
            "place-of-birth"=> "-",
            "first-appearance"=> "X-Men #1 (September, 1963)",
            "publisher"=> "Phoenix",
            "alignment"=> "good"
        ],
        "appearance"=> [
            "gender"=> "Female",
            "race"=> "Mutant",
            "height"=> [
                "5'6",
                "168 cm"
            ],
            "weight"=> [
                "115 lb",
                "52 kg"
            ],
            "eye-color"=> "Green",
            "hair-color"=> "Red"
        ],
        "work"=> [
            "occupation"=> "Adventurer",
            "base"=> "Xavier Institute of Higher Learning, Westchester County, New York"
        ],
        "connections"=> [
            "group-affiliation"=> "Formerly X-Men (founding member); Clan Rebellion, Muir Island X-Men; X-Factor/X-Terminators (founding member); Brides of Set",
            "relatives"=> "Rachel Summers (daughter from an alternate universe), X-Man (son from an alternate universe), Cyclops (ex-husband), Havok (former brother-in-law), Corsair (former father-in-law), Madelyne Pryor (clone), Cable (adoptive/biological son), Stryfe (cloned biological son), Genesis (grandson)"
        ],
        "image"=> [
            "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/814.jpg"
        ]
      ],
      [
        "name"=> "Batman",
        "powerstats"=> [
            "intelligence"=> "81",
            "strength"=> "40",
            "speed"=> "29",
            "durability"=> "55",
            "power"=> "63",
            "combat"=> "90"
        ],
        "biography"=> [
            "full-name"=> "Terry McGinnis",
            "alter-egos"=> "No alter egos found.",
            "aliases"=> [
                "Batman II",
                "The Tomorrow Knight",
                "The second Dark Knight",
                "The Dark Knight of Tomorrow",
                "Batman Beyond"
            ],
            "place-of-birth"=> "Gotham City, 25th Century",
            "first-appearance"=> "Batman Beyond #1",
            "publisher"=> "DC Comics",
            "alignment"=> "good"
        ],
        "appearance"=> [
            "gender"=> "Male",
            "race"=> "Human",
            "height"=> [
                "5'10",
                "178 cm"
            ],
            "weight"=> [
                "170 lb",
                "77 kg"
            ],
            "eye-color"=> "Blue",
            "hair-color"=> "Black"
        ],
        "work"=> [
            "occupation"=> "-",
            "base"=> "21st Century Gotham City"
        ],
        "connections"=> [
            "group-affiliation"=> "Batman Family, Justice League Unlimited",
            "relatives"=> "Bruce Wayne (biological father), Warren McGinnis (father, deceased), Mary McGinnis (mother), Matt McGinnis (brother)"
        ],
        "image"=> [
            "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/10441.jpg"
        ]
        ],
        [
          "name"=> "Captain America",
          "powerstats"=> [
              "intelligence"=> "69",
              "strength"=> "19",
              "speed"=> "38",
              "durability"=> "55",
              "power"=> "60",
              "combat"=> "100"
          ],
          "biography"=> [
              "full-name"=> "Steve Rogers",
              "alter-egos"=> "No alter egos found.",
              "aliases"=> [
                  "Nomad",
                  "The Captain"
              ],
              "place-of-birth"=> "Manhattan, New York City, New York",
              "first-appearance"=> "Captain America Comics #1 (March 1941)",
              "publisher"=> "Marvel Comics",
              "alignment"=> "good"
          ],
          "appearance"=> [
              "gender"=> "Male",
              "race"=> "Human",
              "height"=> [
                  "6'2",
                  "188 cm"
              ],
              "weight"=> [
                  "240 lb",
                  "108 kg"
              ],
              "eye-color"=> "blue",
              "hair-color"=> "blond"
          ],
          "work"=> [
              "occupation"=> "Adventurer, federal official, intelligence operative; former soldier, Hydra agent, liaison between S.H.I.E.L.D. and the Avengers, police officer, teacher, sparring partner.",
              "base"=> "New York City"
          ],
          "connections"=> [
              "group-affiliation"=> "Secret Avengers (Black OPS Unit Formerly,The Avengers, Secret Avengers (Civil War), New Avengers, formerly The Invaders, Secret Defenders The Redeemers; formerly partner of Bucky, Golden Girl, Rick Jones, Falcon, Demolition-Man and Nomad (Jack Monroe)",
              "relatives"=> "Joseph (father, deceased), Sara (mother, deceased), Ian Zola (Nomad) (adopted son)"
          ],
          "image"=> [
              "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/274.jpg"
          ]
        ],
        [
          "name"=> "Spider-Man",
          "powerstats"=> [
              "intelligence"=> "90",
              "strength"=> "55",
              "speed"=> "67",
              "durability"=> "75",
              "power"=> "74",
              "combat"=> "85"
          ],
          "biography"=> [
              "full-name"=> "Peter Parker",
              "alter-egos"=> "No alter egos found.",
              "aliases"=> [
                  "Spiderman",
                  "Bag-Man",
                  "Black Marvel",
                  "Captain Universe",
                  "Dusk",
                  "Green Hood",
                  "Hornet",
                  "Mad Dog 336",
                  "Peter Palmer",
                  "Prodigy",
                  "Ricochet",
                  "Scarlet Spider",
                  "Spider-Boy",
                  "Spider-Hulk",
                  "Spider-Morphosis"
              ],
              "place-of-birth"=> "New York, New York",
              "first-appearance"=> "Amazing Fantasy #15",
              "publisher"=> "Marvel Comics",
              "alignment"=> "good"
          ],
          "appearance"=> [
              "gender"=> "Male",
              "race"=> "Human",
              "height"=> [
                  "5'10",
                  "178 cm"
              ],
              "weight"=> [
                  "165 lb",
                  "74 kg"
              ],
              "eye-color"=> "Hazel",
              "hair-color"=> "Brown"
          ],
          "work"=> [
              "occupation"=> "Freelance photographer, teacher",
              "base"=> "New York, New York"
          ],
          "connections"=> [
              "group-affiliation"=> "Member of the Avengers, formerly member of Outlaws, alternate Fantastic Four",
              "relatives"=> "Richard Parker (father, deceased), Mary Parker(mother, deceased), Benjamin Parker (uncle, deceased), May Parker (aunt), Mary Jane Watson-Parker (wife), May Parker (daughter, allegedly deceased)"
          ],
          "image"=> [
              "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/133.jpg"
          ]
        ],
        [
          "name"=> "Lex Luthor",
          "powerstats"=> [
              "intelligence"=> "100",
              "strength"=> "53",
              "speed"=> "25",
              "durability"=> "65",
              "power"=> "68",
              "combat"=> "70"
          ],
          "biography"=> [
              "full-name"=> "Lex Luthor",
              "alter-egos"=> "No alter egos found.",
              "aliases"=> [
                  "-"
              ],
              "place-of-birth"=> "-",
              "first-appearance"=> "Action Comics #23",
              "publisher"=> "DC Comics",
              "alignment"=> "bad"
          ],
          "appearance"=> [
              "gender"=> "Male",
              "race"=> "Human",
              "height"=> [
                  "6'2'",
                  "188 cm"
              ],
              "weight"=> [
                  "210 lb",
                  "95 kg"
              ],
              "eye-color"=> "Green",
              "hair-color"=> "No Hair"
          ],
          "work"=> [
              "occupation"=> "Owner of LexCorp",
              "base"=> "-"
          ],
          "connections"=> [
              "group-affiliation"=> "Injustice Gang, Injustice League, Society of Supervillains",
              "relatives"=> "Casey and Elaine Griggs (foster parents, deceased),\nLena Luthor (sister pre-Crisis; daughter post-Crisis),\nElizabeth Perske (ex-wife),\nPerry J. White Jr. (son, deceased),\nContessa Erica Alexandra del Portenza (wife, assumed deceased)"
          ],
          "image"=> [
              "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/727.jpg"
          ]
        ],
        [
          "name"=> "Thor",
          "powerstats"=> [
              "intelligence"=> "69",
              "strength"=> "100",
              "speed"=> "83",
              "durability"=> "100",
              "power"=> "100",
              "combat"=> "100"
          ],
          "biography"=> [
              "full-name"=> "Thor Odinson",
              "alter-egos"=> "Rune King Thor",
              "aliases"=> [
                  "Donald Blake",
                  "Sigurd Jarlson",
                  "Jake Olsen",
                  "Donar the Mighty"
              ],
              "place-of-birth"=> "Asgard",
              "first-appearance"=> "Journey into Mystery #83 (August, 1962)",
              "publisher"=> "Rune King Thor",
              "alignment"=> "good"
          ],
          "appearance"=> [
              "gender"=> "Male",
              "race"=> "Asgardian",
              "height"=> [
                  "6'6",
                  "198 cm"
              ],
              "weight"=> [
                  "640 lb",
                  "288 kg"
              ],
              "eye-color"=> "Blue",
              "hair-color"=> "Blond"
          ],
          "work"=> [
              "occupation"=> "King of Asgard; formerly EMS Technician; Physician",
              "base"=> "New York, New York"
          ],
          "connections"=> [
              "group-affiliation"=> "Avengers",
              "relatives"=> "Odin (father), Gaea (mother), Frigga (step-mother), Loki (step-brother), Vidar (half-brother), Buri (paternal great-grandfather), Bolthorn (maternal great grandfather), Bor (grandfather), Bestla (grandmother), Vili (uncle), Ve (uncle), Sigyn (former sister-in-law), Hela (alleged niece), Jormungand (alleged nephew), Fernis Wolf (alleged nephew)"
          ],
          "image"=> [
              "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/140.jpg"
          ]
        ],
        [
          "name"=> "Medusa",
          "powerstats"=> [
              "intelligence"=> "75",
              "strength"=> "34",
              "speed"=> "35",
              "durability"=> "70",
              "power"=> "37",
              "combat"=> "56"
          ],
          "biography"=> [
              "full-name"=> "Medusalith Amaquelin Boltagon",
              "alter-egos"=> "No alter egos found.",
              "aliases"=> [
                  "Madam Medusa",
                  "Queen Medusa"
              ],
              "place-of-birth"=> "Island of Attilan, Atlantic Ocean",
              "first-appearance"=> "Fantastic Four Vol. 1 #36 (1965)",
              "publisher"=> "Marvel Comics",
              "alignment"=> "good"
          ],
          "appearance"=> [
              "gender"=> "Female",
              "race"=> "Inhuman",
              "height"=> [
                  "5'11",
                  "180 cm"
              ],
              "weight"=> [
                  "130 lb",
                  "59 kg"
              ],
              "eye-color"=> "Green",
              "hair-color"=> "Red"
          ],
          "work"=> [
              "occupation"=> "Queen, Royal interpreter",
              "base"=> "Attilan"
          ],
          "connections"=> [
              "group-affiliation"=> "Inhumans, Fantastic Four",
              "relatives"=> "Kobar, La (maternal grandparents), Azur (maternal aunt), Mander (maternal uncle-by-marriage), Quelin (father), Ambur (mother), Crystal (sister), Black Bolt (husband, second cousin), Ahura (son), Karnak (cousin), Triton (cousin), Psynapse (second cousin), Maximus (brother-in-law, second cousin), Ronan the Accuser (brother-in-law), Quicksilver (ex-brother-in-law), Luna (niece)"
          ],
          "image"=> [
              "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/96.jpg"
          ]
        ],
        [
          "name"=> "Doctor Strange",
          "powerstats"=> [
              "intelligence"=> "100",
              "strength"=> "10",
              "speed"=> "12",
              "durability"=> "84",
              "power"=> "100",
              "combat"=> "60"
          ],
          "biography"=> [
              "full-name"=> "Stephen Strange",
              "alter-egos"=> "No alter egos found.",
              "aliases"=> [
                  "Sorcerer Supreme",
                  "Master of the Mystic Arts",
                  "Stephen Sanders",
                  "Captain Universe",
                  "Vincent Stevens"
              ],
              "place-of-birth"=> "Philadelphia, Pennsylvania",
              "first-appearance"=> "Strange Tales #110 (July, 1963)",
              "publisher"=> "Marvel Comics",
              "alignment"=> "good"
          ],
          "appearance"=> [
              "gender"=> "Male",
              "race"=> "Human",
              "height"=> [
                  "6'2",
                  "188 cm"
              ],
              "weight"=> [
                  "180 lb",
                  "81 kg"
              ],
              "eye-color"=> "Grey",
              "hair-color"=> "Black"
          ],
          "work"=> [
              "occupation"=> "Sorcerer Supreme, retired neurosurgeon",
              "base"=> "-"
          ],
          "connections"=> [
              "group-affiliation"=> "Defenders, underground Avengers; formerly the Order, Midnight Sons; former disciple of the Ancient One",
              "relatives"=> "Eugene (father, deceased), Beverly (mother, deceased), Victor (Khiron, brother, apparently deceased), Donna (sister, deceased), Clea (wife, estranged), Umar (mother-in-law), Orini (father-in-law), Dormammu (uncle-in-law)"
          ],
          "image"=> [
              "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/55.jpg"
          ]
          ],
          [
            "name"=> "Joker",
            "powerstats"=> [
                "intelligence"=> "100",
                "strength"=> "10",
                "speed"=> "12",
                "durability"=> "60",
                "power"=> "43",
                "combat"=> "70"
            ],
            "biography"=> [
                "full-name"=> "Jack Napier",
                "alter-egos"=> "No alter egos found.",
                "aliases"=> [
                    "Red Hood I",
                    "Clown Prince of Crime",
                    "Harlequin of Hate",
                    "Jack Napier",
                    "Joe Kerr",
                    "Mr. J"
                ],
                "place-of-birth"=> "-",
                "first-appearance"=> "Batman #1 (Spring 1940)",
                "publisher"=> "DC Comics",
                "alignment"=> "bad"
            ],
            "appearance"=> [
                "gender"=> "Male",
                "race"=> "Human",
                "height"=> [
                    "6'5",
                    "196 cm"
                ],
                "weight"=> [
                    "192 lb",
                    "86 kg"
                ],
                "eye-color"=> "Green",
                "hair-color"=> "Green"
            ],
            "work"=> [
                "occupation"=> "-",
                "base"=> "Arkham Asylum, Gotham City; Ha-Hacienda"
            ],
            "connections"=> [
                "group-affiliation"=> "Black Glove, Injustice Gang, Injustice League, Joker League of Anarchy",
                "relatives"=> "Jeannie (wife, deceased); Unborn son (deceased); Melvin Reipan (cousin, deceased)"
            ],
            "image"=> [
                "url"=> "https://www.superherodb.com/pictures2/portraits/10/100/719.jpg"
            ]
          ]
        
            ];
    $data = [
        'links'=>[
            '/',
            'characters',
            'comics',
            'shop'
        ],
        'personaggi'=>$characters
        ];
    return view('characters',$data);
})->name('characters');

Route::get('comics', function () {

    $comics =
        [
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
                "price" => "$19.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book",
                "artists" => [
                    "José Luis García-López",
                    "Clay Mann",
                    "Rafael Albuquerque",
                    "Patrick Gleason",
                    "Dan Jurgens",
                    "Joe Shuster",
                    "Neal Adams",
                    "Curt Swan",
                    "John Cassaday",
                    "Olivier Coipel",
                    "Jim Lee"
                ],
                "writers" => [
                    "Brad Meltzer",
                    "Tom King",
                    "Scott Snyder",
                    "Geoff Johns",
                    "Brian Michael Bendis",
                    "Paul Dini",
                    "Louise Simonson",
                    "Richard Donner",
                    "Marv Wolfman",
                    "Peter J. Tomasi",
                    "Dan Jurgens",
                    "Jerry Siegel",
                    "Paul Levitz"
                ],
            ],
            [
                "title" => "American Vampire 1976 #1",
                "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
                "price" => "$3.99",
                "series" => "American Vampire 1976",
                "sale_date" => "2020-10-06",
                "type" => "comic book",
                "artists" => [
                    "Rafael Albuquerque"
                ],
                "writers" => [
                    "Scott Snyder"
                ],
            ],
            [
                "title" => "Aquaman Vol. 4: Underworld",
                "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb",
                "price" => "$16.99",
                "series" => "Aquaman",
                "sale_date" => "2018-01-24",
                "type" => "graphic novel",
                "artists" => [
                    "Stjepan Sejic"
                ],
                "writers" => [
                    "Dan Abnett"
                ],
            ],
            [
                "title" => "Batgirl #1",
                "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76",
                "price" => "$2.99",
                "series" => "Batgirl",
                "sale_date" => "2016-07-27",
                "type" => "comic book",
                "artists" => [
                    "Rafael Albuquerque"
                ],
                "writers" => [
                    "Hope Larson"
                ],
            ],
            [
                "title" => "Batman #56",
                "description" => "The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast, whose rampage across Gotham City takes a toll on Nightwing when he’s injured in the fray. Blaming himself for his ward’s fate, Batman gets grimmer than usual—and vows to take the Russian assassin down like the Berlin Wall. Is even Gotham City ready for that much violence? The streets will run red like borscht if the Dark Knight gets his way against this Soviet scourge.",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
                "price" => "$3.99",
                "series" => "Batman",
                "sale_date" => "2018-10-03",
                "type" => "comic book",
                "artists" => [
                    "Tony S. Daniel"
                ],
                "writers" => [
                    "Tom King"
                ],
            ],
            [
                "title" => "Batman Beyond #1",
                "description" => "“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends. But is the original Joker really back as well? Inspired by the possible return of their role model, the Jokerz have taken over an entire section of Gotham City and are determined to wreak havoc in the still-rebuilding city. While Batman battles chaos on the streets, his friend Dana is at the mercy of the new leader of the now-unified gang.",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
                "price" => "$2.99",
                "series" => "Batman Beyond",
                "sale_date" => "2016-10-26",
                "type" => "comic book",
                "artists" => [
                    "Bernard Chang"
                ],
                "writers" => [
                    "Dan Jurgens"
                ],
            ],
            [
                "title" => "Batman/Superman #1",
                "description" => "Up in the sky, in the dark of the night, trust no one - for the infected walk among us. Spinning out of the devastating events of THE BATMAN WHO LAUGHS, Superman and Batman are together once more in an all-new monthly series - and they're facing a terrifying new threat that could strike from anywhere. The Dark Knight and the Man of Steel must journey into the depths of Gotham City to learn which of their fellow heroes has been transformed into the horrifying horseman of their most dangerous and deranged foe ever. Our heroes will need to fight to survive, but an even more dangerous question lurkes in the shadows: Can Superman and Batman even trust each other?",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8",
                "price" => "$3.99",
                "series" => "Batman/Superman",
                "sale_date" => "2019-08-28",
                "type" => "comic book",
                "artists" => [
                    "David Marquez"
                ],
                "writers" => [
                    "Joshua Williamson"
                ],
            ],
            [
                "title" => "Batman/Superman Annual #1",
                "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman, who would win? The combatants? Mr. Mxyzptlk and Bat-Mite. And in this battle for the ages, you will find out if a fifth-dimensional imp can bleed. It’s all in this, the ultimate slugfest between the Dark Knight and the Man of Steel-plus a whole lot of magic!",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk",
                "price" => "$4.99",
                "series" => "Batman/Superman Annual",
                "sale_date" => "2020-09-29",
                "type" => "comic book",
                "artists" => [
                    "Clayton Henry",
                    "Gleb Melnikov",
                    "Dale Eaglesham"
                ],
                "writers" => [
                    "Joshua Williamson"
                ],
            ],
            [
                "title" => "Batman: The Joker War Zone #1",
                "description" => "Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight and his allies! Enter the “war zone” with short stories featuring characters like Cassandra Cain, Stephanie Brown, and Luke Fox and see how they’re fighting back in a city under siege! Also, the brutal full debut of the mysterious new anti-hero known as Clownhunter!",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8",
                "price" => "$5.99",
                "series" => "Batman: The Joker War Zone",
                "sale_date" => "2020-09-29",
                "type" => "comic book",
                "artists" => [
                    "Guillem March",
                    "Ashley A. Woods",
                    "Olivier Coipel",
                    "James Stokoe",
                    "Darko Lafuente"
                ],
                "writers" => [
                    "Sam Johns",
                    "Joshua Williamson",
                    "John Ridley"
                ],
            ],
            [
                "title" => "Batman: Three Jokers #1",
                "description" => "Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
                "price" => "$6.99",
                "series" => "Batman: Three Jokers",
                "sale_date" => "2020-08-25",
                "type" => "comic book",
                "artists" => [
                    "Jason Fabok"
                ],
                "writers" => [
                    "Geoff Johns"
                ],
            ],
            [
                "title" => "Batman: White Knight Presents: Harley Quinn #1",
                "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
                "price" => "$4.99",
                "series" => "Batman: White Knight Presents: Harley Quinn",
                "sale_date" => "2020-10-20",
                "type" => "comic book",
                "artists" => [
                    "Matteo Scalera"
                ],
                "writers" => [
                    "Katana Collins"
                ],
            ],
            [
                "title" => "Catwoman Vol. 1: Copycats",
                "description" => "Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
                "price" => "$16.99",
                "series" => "Catwoman",
                "sale_date" => "2019-04-10",
                "type" => "graphic novel",
                "artists" => [
                    "Fernando Blanco",
                    "Joëlle Jones"
                ],
                "writers" => [
                    "Joëlle Jones"
                ],
            ]
        ];

    $data = [
        'links'=>[
            '/',
            'characters',
            'comics',
            'shop'
        ],
        'fumetti'=>$comics
        ];
    return view('comics',$data);
})->name('comics');

Route::get('shop', function () {
    $comics =
    [
        [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
            "artists" => [
                "José Luis García-López",
                "Clay Mann",
                "Rafael Albuquerque",
                "Patrick Gleason",
                "Dan Jurgens",
                "Joe Shuster",
                "Neal Adams",
                "Curt Swan",
                "John Cassaday",
                "Olivier Coipel",
                "Jim Lee"
            ],
            "writers" => [
                "Brad Meltzer",
                "Tom King",
                "Scott Snyder",
                "Geoff Johns",
                "Brian Michael Bendis",
                "Paul Dini",
                "Louise Simonson",
                "Richard Donner",
                "Marv Wolfman",
                "Peter J. Tomasi",
                "Dan Jurgens",
                "Jerry Siegel",
                "Paul Levitz"
            ],
        ],
        [
            "title" => "American Vampire 1976 #1",
            "description" => "America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
            "price" => "$3.99",
            "series" => "American Vampire 1976",
            "sale_date" => "2020-10-06",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Scott Snyder"
            ],
        ],
        [
            "title" => "Aquaman Vol. 4: Underworld",
            "description" => "Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb",
            "price" => "$16.99",
            "series" => "Aquaman",
            "sale_date" => "2018-01-24",
            "type" => "graphic novel",
            "artists" => [
                "Stjepan Sejic"
            ],
            "writers" => [
                "Dan Abnett"
            ],
        ],
        [
            "title" => "Batgirl #1",
            "description" => "“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76",
            "price" => "$2.99",
            "series" => "Batgirl",
            "sale_date" => "2016-07-27",
            "type" => "comic book",
            "artists" => [
                "Rafael Albuquerque"
            ],
            "writers" => [
                "Hope Larson"
            ],
        ],
        [
            "title" => "Batman #56",
            "description" => "The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast, whose rampage across Gotham City takes a toll on Nightwing when he’s injured in the fray. Blaming himself for his ward’s fate, Batman gets grimmer than usual—and vows to take the Russian assassin down like the Berlin Wall. Is even Gotham City ready for that much violence? The streets will run red like borscht if the Dark Knight gets his way against this Soviet scourge.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
            "price" => "$3.99",
            "series" => "Batman",
            "sale_date" => "2018-10-03",
            "type" => "comic book",
            "artists" => [
                "Tony S. Daniel"
            ],
            "writers" => [
                "Tom King"
            ],
        ],
        [
            "title" => "Batman Beyond #1",
            "description" => "“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends. But is the original Joker really back as well? Inspired by the possible return of their role model, the Jokerz have taken over an entire section of Gotham City and are determined to wreak havoc in the still-rebuilding city. While Batman battles chaos on the streets, his friend Dana is at the mercy of the new leader of the now-unified gang.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
            "price" => "$2.99",
            "series" => "Batman Beyond",
            "sale_date" => "2016-10-26",
            "type" => "comic book",
            "artists" => [
                "Bernard Chang"
            ],
            "writers" => [
                "Dan Jurgens"
            ],
        ],
        [
            "title" => "Batman/Superman #1",
            "description" => "Up in the sky, in the dark of the night, trust no one - for the infected walk among us. Spinning out of the devastating events of THE BATMAN WHO LAUGHS, Superman and Batman are together once more in an all-new monthly series - and they're facing a terrifying new threat that could strike from anywhere. The Dark Knight and the Man of Steel must journey into the depths of Gotham City to learn which of their fellow heroes has been transformed into the horrifying horseman of their most dangerous and deranged foe ever. Our heroes will need to fight to survive, but an even more dangerous question lurkes in the shadows: Can Superman and Batman even trust each other?",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8",
            "price" => "$3.99",
            "series" => "Batman/Superman",
            "sale_date" => "2019-08-28",
            "type" => "comic book",
            "artists" => [
                "David Marquez"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "Batman/Superman Annual #1",
            "description" => "On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman, who would win? The combatants? Mr. Mxyzptlk and Bat-Mite. And in this battle for the ages, you will find out if a fifth-dimensional imp can bleed. It’s all in this, the ultimate slugfest between the Dark Knight and the Man of Steel-plus a whole lot of magic!",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk",
            "price" => "$4.99",
            "series" => "Batman/Superman Annual",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Clayton Henry",
                "Gleb Melnikov",
                "Dale Eaglesham"
            ],
            "writers" => [
                "Joshua Williamson"
            ],
        ],
        [
            "title" => "Batman: The Joker War Zone #1",
            "description" => "Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight and his allies! Enter the “war zone” with short stories featuring characters like Cassandra Cain, Stephanie Brown, and Luke Fox and see how they’re fighting back in a city under siege! Also, the brutal full debut of the mysterious new anti-hero known as Clownhunter!",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8",
            "price" => "$5.99",
            "series" => "Batman: The Joker War Zone",
            "sale_date" => "2020-09-29",
            "type" => "comic book",
            "artists" => [
                "Guillem March",
                "Ashley A. Woods",
                "Olivier Coipel",
                "James Stokoe",
                "Darko Lafuente"
            ],
            "writers" => [
                "Sam Johns",
                "Joshua Williamson",
                "John Ridley"
            ],
        ],
        [
            "title" => "Batman: Three Jokers #1",
            "description" => "Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
            "price" => "$6.99",
            "series" => "Batman: Three Jokers",
            "sale_date" => "2020-08-25",
            "type" => "comic book",
            "artists" => [
                "Jason Fabok"
            ],
            "writers" => [
                "Geoff Johns"
            ],
        ],
        [
            "title" => "Batman: White Knight Presents: Harley Quinn #1",
            "description" => "The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
            "price" => "$4.99",
            "series" => "Batman: White Knight Presents: Harley Quinn",
            "sale_date" => "2020-10-20",
            "type" => "comic book",
            "artists" => [
                "Matteo Scalera"
            ],
            "writers" => [
                "Katana Collins"
            ],
        ],
        [
            "title" => "Catwoman Vol. 1: Copycats",
            "description" => "Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
            "price" => "$16.99",
            "series" => "Catwoman",
            "sale_date" => "2019-04-10",
            "type" => "graphic novel",
            "artists" => [
                "Fernando Blanco",
                "Joëlle Jones"
            ],
            "writers" => [
                "Joëlle Jones"
            ],
        ]
    ];

    $data = [
        'links'=>[
            '/',
            'characters',
            'comics',
            'shop'
        ],
        'fumetti'=>$comics
        ];
    return view('shop',$data);
})->name('shop');
