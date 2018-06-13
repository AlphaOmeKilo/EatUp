<?php
/**
 * Stripe Functions
 *
 * @package eatup
 * @since eatup 1.0
 */


/**
 * Donate function to interact with Stripe for 
 * single charges and subscriptions.
 *
 * For CHARGES:
 *   1. Create Token
 *   2. Create Charge
 *
 * For SUBSCRIPTIONS
 *   1. Create Token
 *   2. Create Customer
 *   3. Get/Create Plan
 *   4. Subscribe customer to plan
 */
function donate() {
  
  try {
     
    //START CREATE TOKEN
      \Stripe\Stripe::setApiKey("sk_test_UZWhjbJKA2UgF5UCJbL8D5HF");

      $tokenResponse = \Stripe\Token::create(array(
                          "card" => array(
                            "number" => "4242424242424243",
                            "exp_month" => 6,
                            "exp_year" => 2019,
                            "cvc" => 123
                          )
                        ));

      $token = $tokenResponse['id'];
    //END CREATE TOKEN
    
//    //START CHARGE
//      $chargeResponse = \Stripe\Charge::create(array(
//                          "amount" => 2000,
//                          "currency" => "aud",
//                          "source" => $token, // obtained with Stripe.js
//                          "description" => "Charge for alex.okeeffe@example.com"
//                        ));
//    
//    
//      $charge = $chargeResponse['id'];
//    
//      echo $charge;
//    //END CHARGE
    
    //START CREATE CUSTOMER
      $customerResponse = \Stripe\Customer::create(array(
                            "description" => "Customer for alex.okeeffe@example.com",
                            "source" => $token
                          ));
    
      $customer = $customerResponse['id'];
    //END CREATE CUSTOMER

    //START GET PLAN
      $plan = "";

      try {
        $getPlanResponse = \Stripe\Plan::retrieve("20");
        $plan = $getPlanResponse['id'];
      } catch (Exception $e) { //If plan does not exist, create it.
        $createPlanResponse = \Stripe\Plan::create(array(
                                "amount" => 2000,
                                "interval" => "month",
                                "product" => array(
                                  "name" => "20 Monthly Subscription"
                                ),
                                "currency" => "aud",
                                "id" => "20"
                              ));

        $plan = $createPlanResponse['id'];
      }
    //END GET PLAN
    
    //START ADD CUSTOMER TO PLAN
      $subscriptionResponse = \Stripe\Subscription::create(array(
                                "customer" => $customer,
                                "items" => array(
                                  array(
                                    "plan" => $plan,
                                  ),
                                )
                              ));
    
      $subscription = $subscriptionResponse['id'];
    //END ADD CUSTOMER TO PLAN
    
      echo $subscription;
    
  } catch(\Stripe\Error\Card $e) {
    // Since it's a decline, \Stripe\Error\Card will be caught
    $body = $e->getJsonBody();
    $err  = $body['error'];
    
    die(json_encode(array('error' => $err['message'])));

//    print('Status is:' . $e->getHttpStatus() . "\n");
//    print('Type is:' . $err['type'] . "\n");
//    print('Code is:' . $err['code'] . "\n");
//    // param is '' in this case
//    print('Param is:' . $err['param'] . "\n");
//    print('Message is:' . $err['message'] . "\n");
  } catch (\Stripe\Error\RateLimit $e) {
    // Too many requests made to the API too quickly
  } catch (\Stripe\Error\InvalidRequest $e) {
    // Invalid parameters were supplied to Stripe's API
  } catch (\Stripe\Error\Authentication $e) {
    // Authentication with Stripe's API failed
    // (maybe you changed API keys recently)
  } catch (\Stripe\Error\ApiConnection $e) {
    // Network communication with Stripe failed
  } catch (\Stripe\Error\Base $e) {
    // Display a very generic error to the user, and maybe send
    // yourself an email
  } catch (Exception $e) {
    // Something else happened, completely unrelated to Stripe
  }
  
  return;
  die();
  
//  \Stripe\Subscription::create(array(
//    "customer" => "cus_D2eIVMTdfNgOtB",
//    "items" => array(
//      array(
//        "plan" => "gold",
//      ),
//    )
//  ));
  
}

add_action('admin_post_nopriv_donate', 'donate'); 
add_action('admin_post_donate', 'donate');
?>