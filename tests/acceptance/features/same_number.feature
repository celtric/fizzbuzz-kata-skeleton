Feature: FizzBuzz

  Scenario: Normal Numbers Return Same Number
    Given I have started the game
     When I enter <number>
     Then <result> is returned

    Examples:
      | number | result |
      |      1 |      1 |
      |      2 |      2 |
      |      4 |      4 |
