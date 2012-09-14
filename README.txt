This module makes it possible to import RDF vocabularies via the taxonomy_xml module.


=== RDF ===

To store predicates of RDF, create fields in the form of 'field_tx_<namespace abbreviation>_<term_name>'

for instance, if the namespace xmlns:dc="http://purl.org/dc/elements/1.1/" is declared in the vocabulary, 

and dc:identifier is a property in the RDF, you can define a field to save that information by creating a field:

field_tx_dc_identifier



=== TO DO ===

1) describe administrative and end-user access, functionality, and module usage, showing new users where to get started, to find the new functionality provided by your module.

2) If the module provides general menu items (ie, non-admin interface links), list the paths, so the user doesn't have to search through the code or admin interface to find them.

3) If the module modifies existing user interface forms using Form API, tell the user what to look for to ensure it is working.

4) If the module requires configuration, provide a link to the settings page and write a small walkthrough on how to get it started.