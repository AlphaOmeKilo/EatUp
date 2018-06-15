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
  
  if(!isset($_POST['first_name']) ||
    !isset($_POST['last_name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['contact_no']) ||
    !isset($_POST['address']) ||
    !isset($_POST['suburb']) ||
    !isset($_POST['state']) ||
    !isset($_POST['postcode']) ||
    !isset($_POST['card_number']) ||
    !isset($_POST['expiry_date']) ||
    !isset($_POST['cvv']) ||
    !isset($_POST['donation_amount']) ||
    !isset($_POST['monthly'])) {
    die(json_encode(array('error' => 'You are missing some mandatory fields!')));
  }
  
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $contact_no = $_POST['contact_no'];
  $address = $_POST['address'];
  $suburb = $_POST['suburb'];
  $state = $_POST['state'];
  $postcode = $_POST['postcode'];
  $card_number = $_POST['card_number'];
  $expiry_date = $_POST['expiry_date'];
  $cvv - $_POST['cvv'];
  $donation_amount = $_POST['donation_amount'] * 100;
  $monthly = $_POST['monthly'];

  $expiry = explode("/", $expiry_date);
  $expiry_month = (int)$expiry[0];
  $expiry_year = "20" . $expiry[1];
  
  if(isset($_POST['checkbox']) && $_POST['checkbox'] == 1) {
    add_to_mailing_list($email);
  }

  try {
     
    //START CREATE TOKEN
      \Stripe\Stripe::setApiKey("sk_test_UZWhjbJKA2UgF5UCJbL8D5HF");

      $tokenResponse = \Stripe\Token::create(array(
                          "card" => array(
                            "number" => $card_number,
                            "exp_month" => $expiry_month,
                            "exp_year" => (int)$expiry_year,
                            "cvc" => $cvv,
                            "address_line1" => $address,
                            "address_state" => $state,
                            "address_zip" => $postcode
                          )
                        ));
    

      $token = $tokenResponse['id'];
    //END CREATE TOKEN
    
    if ($monthly == 0) { // THE USER WANTS TO PERFORM A ONE TIME PAYMENT
      //START CHARGE
        $chargeResponse = \Stripe\Charge::create(array(
                            "amount" => $donation_amount,
                            "currency" => "aud",
                            "source" => $token, 
                            "description" => "Charge for ".$email
                          ));


        $charge = $chargeResponse['id'];
      
        echo json_encode(array('success' => "Thank you! Your donation was successful!\r\r Your reference number is: " . $charge));

      //END CHARGE
    } else { // THE USER WOULD LIKE TO SET UP A MONTHLY SUBSCRIPTION
      //START CREATE CUSTOMER
        $customerResponse = \Stripe\Customer::create(array(
                              "description" => "Customer for ".$email,
                              "source" => $token
                            ));

        $customer = $customerResponse['id'];
      //END CREATE CUSTOMER
      
      //START GET PLAN
        $plan = "";

        try {
          $getPlanResponse = \Stripe\Plan::retrieve($donation_amount/100);
          $plan = $getPlanResponse['id'];
        } catch (Exception $e) { //If plan does not exist, create it.
          $createPlanResponse = \Stripe\Plan::create(array(
                                  "amount" => $donation_amount,
                                  "interval" => "month",
                                  "product" => array(
                                    "name" => $donation_amount/100 ." Monthly Subscription"
                                  ),
                                  "currency" => "aud",
                                  "id" => $donation_amount/100
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
      
      echo json_encode(array('success' => "Thank you! Your monthly donation of $" . $donation_amount/100 . " was successful\r\r Your reference number is: " .$subscription));
    }
    
  } catch(\Stripe\Error\Card $e) {
    // Since it's a decline, \Stripe\Error\Card will be caught
    $body = $e->getJsonBody();
    $err  = $body['error'];
    
    die(json_encode(array('error' => $err['message'])));

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
  
}

add_action('admin_post_nopriv_donate', 'donate'); 
add_action('admin_post_donate', 'donate');
?>