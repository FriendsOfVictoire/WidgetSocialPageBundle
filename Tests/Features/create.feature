@mink:selenium2 @alice(Page)  @reset-schema
Feature: Create a SocialPage widget

    Background:
        Given I maximize the window
        And I am on homepage

    Scenario: I create a new SocialPage widget
        When I switch to "layout" mode
        Then I should see "New content"
        When I select "Social Page" from the "1" select of "main_content" slot
        Then I should see "Widget (Social Page)"
        And I should see "1" quantum