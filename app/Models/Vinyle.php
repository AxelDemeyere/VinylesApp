<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vinyle extends Model
{
    public static function getAll() : array {
        return [
            [
                "id" => 1,
                "titre" => "Abbey Road",
                "artiste" => "The Beatles",
                "annee" => 1969,
                "label" => "Apple Records",
                "description" => "Un chef-d'œuvre du rock avec des chansons inoubliables et une production impeccable.",
                "image" => "https://i.discogs.com/T-w7wankLGM9b5kda29YgAE_X6zYBS40NLhpysXnVOQ/rs:fit/g:sm/q:90/h:600/w:590/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTY1NDQy/NzUtMTQyMTY2NzEx/My0xOTk5LmpwZWc.jpeg"
            ],
            [
                "id" => 2,
                "titre" => "Thriller",
                "artiste" => "Michael Jackson",
                "annee" => 1982,
                "label" => "Epic Records",
                "description" => "L'album le plus vendu de tous les temps, avec des hits comme 'Billie Jean' et 'Beat It'.",
                "image" => "https://i.discogs.com/dWe2AyguSxJpaaEWbK_mVLL3zs2ejuta0sJCx5BvS8o/rs:fit/g:sm/q:90/h:600/w:597/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTI5MTEy/OTMtMTU5NDI0NTgx/Mi03OTMxLmpwZWc.jpeg"
            ],
            [
                "id" => 3,
                "titre" => "The Dark Side of the Moon",
                "artiste" => "Pink Floyd",
                "annee" => 1973,
                "label" => "Harvest Records",
                "description" => "Un album emblématique du rock progressif avec une production révolutionnaire.",
                "image" => "https://i.discogs.com/f9HxltpumjQpZlcBXQzxXvurnEmyeJBM-nby8zXfXNo/rs:fit/g:sm/q:90/h:600/w:590/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTE4NzMw/MTMtMTcyNzc2NDkx/OS04NTI3LmpwZWc.jpeg"
            ],
            [
                "id" => 4,
                "titre" => "Back in Black",
                "artiste" => "AC/DC",
                "annee" => 1980,
                "label" => "Atlantic Records",
                "description" => "Un album énergique et intemporel qui a marqué le retour du groupe avec Brian Johnson.",
                "image" => "https://i.discogs.com/xf2PKezzQ243HuyRnERV8RTSzX_r9Nni7QZactGZjQY/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTQwMDU5/MS0xNTM3MDM1ODI5/LTEzOTEuanBlZw.jpeg"
            ],
            [
                "id" => 5,
                "titre" => "The Wall",
                "artiste" => "Pink Floyd",
                "annee" => 1979,
                "label" => "Columbia Records",
                "description" => "Un double album conceptuel qui explore la solitude et l'aliénation, avec des éléments théâtraux.",
                "image" => "https://i.discogs.com/2McmVnrejEzmk_q80-toCNdSD_LVBFCV6eT-sFfH6P0/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTI3Mzcx/ODU2LTE2ODY2NjQx/NzUtOTY5NC5qcGVn.jpeg"
            ],
            [
                "id" => 6,
                "titre" => "Led Zeppelin IV",
                "artiste" => "Led Zeppelin",
                "annee" => 1971,
                "label" => "Atlantic Records",
                "description" => "Un album emblématique du hard rock avec des morceaux légendaires comme 'Stairway to Heaven'.",
                "image" => "https://i.discogs.com/2rh7HpKYD0-Aqe1wR9fQcGx2xLjY4wc4vvkxBtbpQ1Q/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTEwMTU0/NjUtMTM2NjMxMTg2/Ny0yNzg1LmpwZWc.jpeg"
            ],
            [
                "id" => 7,
                "titre" => "The Queen Is Dead",
                "artiste" => "The Smiths",
                "annee" => 1986,
                "label" => "Rough Trade",
                "description" => "Un album phare du rock alternatif britannique, avec des paroles introspectives et des mélodies inoubliables.",
                "image" => "https://i.discogs.com/1FDYBwiLxcgg_bL7uQEsf4iCpfaMLQUUq6wd8pYa5Og/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTQ5NDky/Ny0xMjMwODU0MDIz/LmpwZWc.jpeg"
            ],
            [
                "id" => 8,
                "titre" => "The Velvet Underground & Nico",
                "artiste" => "The Velvet Underground",
                "annee" => 1967,
                "label" => "Verve Records",
                "description" => "Un album révolutionnaire qui a influencé toute une génération de musiciens, avec la célèbre banane de Warhol.",
                "image" => "https://i.discogs.com/X1t_etvzPsXK1WYUMIdSVfjE9PLKkAP9ELOiVylCBOU/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTUwMzQw/NDUtMTYxMDkyMjc5/MC0yNzY4LmpwZWc.jpeg"
            ],
            [
                "id" => 9,
                "titre" => "Born to Run",
                "artiste" => "Bruce Springsteen",
                "annee" => 1975,
                "label" => "Columbia Records",
                "description" => "L'album qui a propulsé Bruce Springsteen au sommet, avec des chansons pleines d'énergie et d'émotion.",
                "image" => "https://i.discogs.com/ZMq2kYiKTqDB0AUEHDZI0yEb-_nUTn62OtTi2a_Gb_A/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTgxMTAw/NDMtMTQ1NTMyMjAw/OS03MjI0LmpwZWc.jpeg"
            ],
            [
                "id" => 10,
                "titre" => "Rumours",
                "artiste" => "Fleetwood Mac",
                "annee" => 1977,
                "label" => "Warner Bros. Records",
                "description" => "Un album iconique du rock des années 70, avec des chansons intemporelles comme 'Go Your Own Way'.",
                "image" => "https://i.discogs.com/_E7ZHaC5J2_bwxDcLiMNhKlz9kD1r88Xr-6XWuJhvDk/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTUyNjM1/MS0xMjkyMjkzNjg1/LmpwZWc.jpeg"
            ],
            [
                "id" => 11,
                "titre" => "The Rise and Fall of Ziggy Stardust",
                "artiste" => "David Bowie",
                "annee" => 1972,
                "label" => "RCA Records",
                "description" => "Un album conceptuel qui raconte l'histoire du personnage Ziggy Stardust, un alter ego iconique de Bowie.",
                "image" => "https://i.discogs.com/blFgZmQIL1PCcOBGldrPNBxmJZJHt7GiWdvvnLlyccM/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTYxODk1/Mi0xNDQzNDUxNDcz/LTc4ODkuanBlZw.jpeg"
            ],
            [
                "id" => 12,
                "titre" => "The Chronic",
                "artiste" => "Dr. Dre",
                "annee" => 1992,
                "label" => "Death Row Records",
                "description" => "Un album clé dans l'histoire du hip-hop, avec des beats innovants et des collaborations marquantes.",
                "image" => "https://i.discogs.com/hHj4XUOFS_y4YA1XZ0tVwmtjGzfsrAyKktpz20JqwTQ/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTIyNjA4/Mi0xNjkxMDAxNTQ5/LTk4MTYuanBlZw.jpeg"
            ],
            [
                "id" => 13,
                "titre" => "OK Computer",
                "artiste" => "Radiohead",
                "annee" => 1997,
                "label" => "Parlophone",
                "description" => "Un album visionnaire du rock alternatif, abordant des thèmes de technologie et d'aliénation.",
                "image" => "https://i.discogs.com/k1fBOV3OHda7VLhSTxEvxfs6BTYqUpOLZALtKh2v2-w/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTQ5NTA3/OTgtMTM4ODYyMzYx/MS0yMzYyLmpwZWc.jpeg"
            ],
            [
                "id" => 14,
                "titre" => "Sticky Fingers",
                "artiste" => "The Rolling Stones",
                "annee" => 1971,
                "label" => "Rolling Stones Records",
                "description" => "Un album essentiel du rock, avec des morceaux comme 'Brown Sugar' et 'Wild Horses'.",
                "image" => "https://i.discogs.com/1ovm71RYjdsjuftvn5MZNUCXojUbgQgF1RM_69ZbrZE/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExMjcy/Njg3LTE2Mjk1Nzc1/NzQtNDYyNS5qcGVn.jpeg"
            ],
            [
                "id" => 15,
                "titre" => "Blue",
                "artiste" => "Joni Mitchell",
                "annee" => 1971,
                "label" => "Reprise Records",
                "description" => "Un album de folk introspectif, considéré comme un chef-d'œuvre de la musique féminine.",
                "image" => "https://i.discogs.com/U-pVGWIIE_dljGJWs0eDRLWz9YbB7116lWxNTGY9NkM/rs:fill/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTEwMDI4/MzgxLTE0OTAzODMz/MjEtNTc4OS5qcGVn.jpeg"
            ]
        ];
    }
}
