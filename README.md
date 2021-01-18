# Test-Driven Development
## Sebastian Bergmann and Stefan Priebsch

> Writing good code with automated tests does pay off, even more on the long run, when major changes to your software become necessary. In this live coding session, we will introduce you to Test-Driven Development as it was meant to be. You will not only understand how TDD fundamentally challenges how you have thought about software to this day, but also experience the joy of the red-green-refactor cycle. Join Sebastian and Stefan on a journey that might forever change the way you think about code. And tests, for that matter.
>
> https://thephp.cc/dates/2021/01/the-online-php-conference/test-driven-development

Code written for/during the "Test-Driven Development" live session at The Online PHP Conference 2021.

This is example code that is not production-ready. It is intended for studying and learning purposes.

(c) 2021 thePHP.cc. All rights reserved.

### Greed

From https://codingdojo.org/kata/Greed/

> Write a class Greed with a score() method that accepts an array of die values (up to 6). Scoring rules are as follows:
>
> * A single one (100)
> * A single five (50)
> * Triple ones [1,1,1] (1000)
> * Triple twos [2,2,2] (200)
> * Triple threes [3,3,3] (300)
> * Triple fours [4,4,4] (400)
> * Triple fives [5,5,5] (500)
> * Triple sixes [6,6,6] (600)
> 
> Note that the scorer should work for any number of dice up to 6.
>
> * Four-of-a-kind (Multiply Triple Score by 2)
> * Five-of-a-kind (Multiply Triple Score by 4)
> * Six-of-a-kind (Multiply Triple Score by 8)
> * Three Pairs [2,2,3,3,4,4] (800)
> * Straight [1,2,3,4,5,6] (1200)
