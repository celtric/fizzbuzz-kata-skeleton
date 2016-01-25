Feature: FizzBuzz

  Scenario Outline: Normal Numbers Return Same Number
    Given I have started the game
     When I enter <number>
     Then <result> is returned

    Examples:
      | number | result    |
      |     15 | fizz buzz |
      |     45 | fizz buzz |
      |    315 | fizz buzz |
