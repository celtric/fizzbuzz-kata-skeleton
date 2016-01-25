Feature: FizzBuzz

  Scenario: Normal Numbers Return Same Number
    Given I have started the game
     When I enter <number>
     Then <result> is returned

    Examples:
      | number | result |
      |      5 |   buzz |
      |     20 |   buzz |
      |    200 |   buzz |
