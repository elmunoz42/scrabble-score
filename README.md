# Scrabble Score Counter

#### _A webpage that returns the score for a Scrabble word, 16 February 2017_

#### By _**Carlos Munoz Kampff & Matt Kelley**_

## Description

This webpage will allow two users to

## Setup/Installation Requirements

1. _Fork and clone this repository from_
[gitHub]
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

* Or open [Live Site]

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| User inputs a one point letter and receives score | "A" | 1 |
| User inputs a two point letter and receives score | "D" | 2 |
| User inputs a three point letter and receives score | "B" | 3 |
| User inputs a four point letter and receives score | "F" | 4 |
| User inputs a five point letter and receives score | "K" | 5 |
| User inputs a eight point letter and receives score | "J" | 8 |
| User inputs a ten point letter and receives score | "Q" | 10 |
| User inputs a word | "Apple" | 9 |
| user enters any non-letter characters | "P.L" | "4" |




## Known Bugs

No known bugs.


## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Carlos Munoz Kampff & Matt Kelley**} All Rights Reserved.
