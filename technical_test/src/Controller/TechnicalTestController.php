<?php
/**
 * @file
 * Contains \Drupal\ technical_test\Controller\TechnicalTestController.
 */


namespace Drupal\technical_test\Controller;
use Drupal\node\NodeInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class TechnicalTestController{
    /**
     * @param $site_api_key - the API key parameter
     * @param NodeInterface $node - the node built from the node id parameter
     * @return JsonResponse
     */
    public function content($site_api_key, NodeInterface $node){
        // Site API Key configuration value
        $site_api_key_update = \Drupal::config('technicaltest.config')->get('siteapikey');

        // Make sure the supplied node is a page, the configuration key is set and matches the supplied key
        if($node->getType() == 'page' && $site_api_key_update != 'No API Key yet' && $site_api_key_update == $site_api_key){

            // Respond with the json representation of the node
            return new JsonResponse($node->toArray(), 200, ['Content-Type'=> 'application/json']);
        }

        // Respond with access denied
        return new JsonResponse(array("error" => "access denied"), 401, ['Content-Type'=> 'application/json']);
    }
}