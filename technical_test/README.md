
After login as the administrator, Site Information form can be found at the path `/admin/config/system/site-information`.

## Requirements

This module needs to alter the existing Drupal "Site Information" form:

  - [1] A new form text field named "Site API Key" needs to be added to the "Site Information" form with the default value of “No API Key yet”.
  - [2] When this form is submitted, the value that the user entered for this field should be saved as the system variable named "siteapikey".
  - [3] A Drupal message should inform the user that the Site API Key has been saved with that value.
  - [4] When this form is visited after the "Site API Key" is saved, the field should be populated with the correct value.
  - [5] The text of the "Save configuration" button should change to "Update Configuration".
  - [6] This module also provides a URL that responds with a JSON representation of a given node only if the previously submitted API Key and a node id of an appropriate node are present, otherwise it will respond with "access denied".

## Example URL

"http://localhost/page_json/FOOBAR12345/17"

## Resources

  - [Creating custom modules](https://www.drupal.org/docs/8/creating-custom-modules)
  - [Drupal 8 node serialization to JSON](https://drupal.stackexchange.com/questions/191419/drupal-8-node-serialization-to-json)
  - [Using parameters in routes](https://www.drupal.org/docs/8/api/routing-system/using-parameters-in-routes)
  
## Time Taken
Time taken 4 hours and 30 minutes to implement this module.