Feature: FizzBuzz

  Scenario: Normal Numbers Return Same Number
    Given I have started the game
     When I enter <number>
     Then <result> is returned

    Examples:
      | number | result |
      |      3 |   fizz |
      |      9 |   fizz |
      |    123 |   fizz |
