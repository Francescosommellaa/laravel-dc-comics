<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserimento di dati fittizi
        Comic::create(
            [
                'title' => 'Action Comics #1000: The Deluxe Edition',
                'description' => 'The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman\'s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!',
                'thumb' => 'https://www.coverbrowser.com/image/action-comics/1-1.jpg',
                'price' => '19.99',
                'series' => 'Action Comics',
                'sale_date' => '2018-10-02',
                'type' => 'comic book'
            ]
        );
        Comic::create(
            [
                'title' => 'American Vampire 1976 #1',
                'description' => 'America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It\'s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he\'s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America\'s bicentennial. With catastrophe looming, it\'s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.',
                'thumb' => 'https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg',
                'price' => '3.99',
                'series' => 'American Vampire 1976',
                'sale_date' => '2020-10-06',
                'type' => 'comic book'
            ]
        );
        Comic::create(
            [
                'title' => 'Aquaman Vol. 4: Underworld',
                'description' => 'Enraged by rumors of Arthur\'s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can\'t hide for long when his fate collides with that of a mysterious young woman on the run from Rath\'s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.',
                'thumb' => 'https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg',
                'price' => '16.99',
                'series' => 'Aquaman',
                'sale_date' => '2018-01-24',
                'type' => 'graphic novel'
            ]
        );
        Comic::create(
            [
                'title' => 'Action Comics #1000: The Deluxe Edition',
                'description' => 'The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman\'s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!',
                'thumb' => 'https://www.coverbrowser.com/image/action-comics/1-1.jpg',
                'price' => '19.99',
                'series' => 'Action Comics',
                'sale_date' => '2018-10-02',
                'type' => 'comic book'
            ]
        );
        Comic::create(
            [
                'title' => 'American Vampire 1976 #1',
                'description' => 'America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It\'s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he\'s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America\'s bicentennial. With catastrophe looming, it\'s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.',
                'thumb' => 'https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg',
                'price' => '3.99',
                'series' => 'American Vampire 1976',
                'sale_date' => '2020-10-06',
                'type' => 'comic book'
            ]
        );
        Comic::create(
            [
                'title' => 'Aquaman Vol. 4: Underworld',
                'description' => 'Enraged by rumors of Arthur\'s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can\'t hide for long when his fate collides with that of a mysterious young woman on the run from Rath\'s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.',
                'thumb' => 'https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg',
                'price' => '16.99',
                'series' => 'Aquaman',
                'sale_date' => '2018-01-24',
                'type' => 'graphic novel'
            ]
        );
        Comic::create(
            [
                'title' => 'Batman: The Joker War Zone #1',
                'description' => 'Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight and his allies! Enter the “war zone” with short stories featuring characters like Cassandra Cain, Stephanie Brown, and Luke Fox and see how they\'re fighting back in a city under siege! Also, the brutal full debut of the mysterious new anti-hero known as Clownhunter!',
                'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg',
                'price' => '5.99',
                'series' => 'Batman: The Joker War Zone',
                'sale_date' => '2020-09-29',
                'type' => 'comic book'
            ]
        );
        Comic::create(
            [
                'title' => 'Batman: Three Jokers #1',
                'description' => 'Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you\'ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It\'s a mystery unlike any Batman has ever faced!',
                'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg',
                'price' => '6.99',
                'series' => 'Batman: Three Jokers',
                'sale_date' => '2020-08-25',
                'type' => 'comic book'
            ]
        );
        Comic::create(
            [
                'title' => 'Batman: White Knight Presents: Harley Quinn #1',
                'description' => 'The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier\'s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham\'s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.',
                'thumb' => 'https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg',
                'price' => '4.99',
                'series' => 'Batman: White Knight Presents: Harley Quinn',
                'sale_date' => '2020-10-20',
                'type' => 'comic book'
            ]
        );
    }
}
