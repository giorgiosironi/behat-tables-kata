Feature: FizzBuzz kata
    In order to pass an interview
    As a programmer
    I should be able to convert numbers with FizzBuzz

    Scenario Outline: conversion of numbers
        Given the input is <input>
        When it is converted
        Then it becomes <output>

        Examples:
            | input | output |
            | 2     | 2      |
            | 3     | Fizz   |
            | 6     | Fizz   |
