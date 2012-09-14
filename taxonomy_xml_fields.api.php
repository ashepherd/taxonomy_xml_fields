<?php

/**
 * @file
 * API documentation for taxonomy_xml_fields module.
 */

/**
 * HOOKS
 */

/**
 * Respond to the namespaces being declared for a taxonomy import.
 *
 * This hook is invoked right before taxonomy_term_save for processing RDF predicates for updating term fields.
 *
 * @param &$namespaces
 *   The array of namespaces to look for in the format:
 *   $namespaces[<abbreviation>] = <uri>
 *   
 *   i.e. $namespaces['skos'] = 'http://www.w3.org/2004/02/skos/core#';
 */
function hook_taxonomy_xml_fields_namespaces($namepsaces) {
  return $namespaces;
}