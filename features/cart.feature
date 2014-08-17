Feature: checking out a shopping cart
    In order to buy several goods
    As a customer
    I need to pay for my cart in a single transaction

    Scenario: two items in the cart
        Given the following items are in the cart:
            | name    | price |
            | Cake    |     4 |
            | Shrimps |    10 |
        When I check out
        Then I pay 14

    Scenario: 3x2 items have a discount
        Given the following items are in the cart:
            | name    | price |
            | Cake    |     4 |
            | Cake    |     4 |
            | Cake    |     4 |
        When I check out
        Then I pay 8
