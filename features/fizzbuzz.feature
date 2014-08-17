Feature: FizzBuzz kata
    In order to pass an interview
    As a programmer
    I should be able to convert numbers with FizzBuzz

    Scenario: 3 is Fizz
        Given the input is 3
        When it is converted
        Then it becomes Fizz

    Scenario: 6 is Fizz too because it's multiple of 3
        Given the input is 6
        When it is converted
        Then it becomes Fizz
