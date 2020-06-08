<?php


namespace Drupal\webform_custom_submissions;

use Drupal\webform\webformSubmissionInterface;

// Used to declutter the handler service by providing mappings here
class FieldHelper {
  private $form_data = [];
  private $webform_id;
  private $jira_data = [];


  public function is_checkbox_field($key) {
    return ($key == 'customfield_10411' ||
      $key == 'customfield_10415' ||
      $key == 'customfield_10150' ||
      $key == 'customfield_10149' ||
      $key == 'customfield_10148' ||
      $key == 'customfield_10151' ||
      $key == 'customfield_10278' ||
      $key == 'customfield_10280' ||
      $key == 'customfield_10103');
  }


  public function get_dropdown_fields() {
    return array(
      'customfield_10093',
      'customfield_10098',
      'customfield_10112',
      'customfield_10120',
      'customfield_10140',
      'customfield_10190',
      'customfield_10191',
      'customfield_10193',
      'customfield_10199',
      'customfield_10246',
      'customfield_10262',
      'customfield_10263',
      'customfield_10269',
      'customfield_10277',
      'customfield_10294',
      'customfield_10297',
      'customfield_10302',
      'customfield_10304',
      'customfield_10315',
      'customfield_10316',
      'customfield_10318',
      'customfield_10320',
      'customfield_10322',
      'customfield_10324',
      'customfield_10423',
      'customfield_10424',
      'customfield_10426',
      'customfield_10427',
      'customfield_10428',
      'customfield_10431',
      'customfield_10435',
      'customfield_10501',
      'customfield_10922',
      'customfield_11424',
      'customfield_11428',
      'customfield_11826',
      'customfield_11827',
    );
  }

  public function travel_voucher_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent', 'customfield_10095' => 'Departure Date',
      'customfield_10343' => 'Departure Time', 'customfield_10096' => 'Return Date', 'customfield_10342' => 'Return Time', 'customfield_10620' => 'Traveler @epa.gov Email',
      'customfield_10331' => 'Traveler name', 'customfield_10278' => 'Transportation Costs', 'customfield_10280' => 'Other Expenses',
      'customfield_10441' => 'First Taxi Date', 'customfield_10442' => 'First Taxi To', 'customfield_10443' => 'First Taxi From', 'customfield_10444' => 'Cost of First Taxi Trip',
      'customfield_10445' => 'Second Taxi Date', 'customfield_10446' => 'Second Taxi To', 'customfield_10447' => 'Second Taxi From', 'customfield_10448' => 'Cost of Second Taxi Trip',
      'customfield_10449' => 'Third Taxi Date', 'customfield_10450' => 'Third Taxi To', 'customfield_10451' => 'Third Taxi From', 'customfield_10453' => 'Cost of Third Taxi Trip',
      'customfield_10454' => 'Fourth Taxi Date', 'customfield_10455' => 'Fourth Taxi To', 'customfield_10456' => 'Fourth Taxi From', 'customfield_10457' => 'Cost of Fourth Taxi Trip',
      'customfield_10458' => 'Fifth Taxi Date', 'customfield_10480' => 'Fifth Taxi To', 'customfield_10460' => 'Fifth Taxi From', 'customfield_10461' => 'Cost of Fifth Taxi Trip',
      'customfield_10462' => 'Sixth Taxi Date', 'customfield_10463' => 'Sixth Taxi To', 'customfield_10464' => 'Sixth Taxi From', 'customfield_10465' => 'Cost of Sixth Taxi Trip',
      'customfield_10466' => 'Seventh Taxi Date', 'customfield_10481' => 'Seventh Taxi To', 'customfield_10482' => 'Seventh Taxi From', 'customfield_10469' => 'Cost of Seventh Taxi Trip',
      'customfield_10470' => 'Eighth Taxi Date', 'customfield_10471' => 'Eighth Taxi To', 'customfield_10474' => 'Eighth Taxi From', 'customfield_10475' => 'Cost of Eighth Taxi Trip',
      'customfield_10379' => 'Metro', 'customfield_10374' => 'Bus', 'customfield_10378' => 'Uber/Lyft', 'customfield_10381' => 'POV Mileage', 'customfield_10384' => 'Rental Car',
      'customfield_10385' => 'Rental Car Fuel', 'customfield_10383' => 'Rail', 'customfield_10387' => 'Tolls', 'customfield_10375' => 'Hotel Costs', 'customfield_10377' => 'Internet Fees',
      'customfield_10376' => 'Hotel Parking', 'customfield_10372' => 'Airport Parking', 'customfield_10373' => 'Cash Withdrawal Finance Fee', 'customfield_10371' => 'ATM Fees',
      'customfield_10380' => 'Other Expenses', 'customfield_10422' => 'Please Explain (Other Expenses)', 'showMealsSelect' => 'Were any meals provided through your registration costs or by the meeting sponsor?',
      'customfield_10148' => 'Breakfast', 'customfield_10149' => 'Lunch', 'customfield_10150' => 'Dinner', 'customfield_11420' => 'Reimburse to Government Credit Card', 'customfield_10151' => 'Meals Paid for All Days of Travel',
      'customfield_10141' => 'Please provide/explain any special requirements related to this travel request', 'customfield_10308' => 'Comments on Travel Experience', 'customfield_10191' => 'Travel Type',
      'customfield_11423' => "Traveler's Phone Number", 'customfield_10413' => 'Taxi, approximate cost', 'customfield_10419' => 'Baggage Fee', 'customfield_10418' => 'ATM Fees'
    );
  }

  public function traveler_id_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_11423' => "Traveler's Phone Number",
    );
  }

  public function travel_profile_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10277' => 'New Employee?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10266' => 'Preferred Home Airport', 'customfield_10263' => 'Seating Preference', 'customfield_10354' => 'Frequent Flier Airlines and Account Numbers',
      'customfield_10120' => 'Smoking Preference', 'customfield_10262' => 'Bed Size Preference', 'customfield_10273' => 'Hotel Chain Preference(s)',
      'customfield_10274' => 'Frequent Member Account Number(s)', 'customfield_10291' => 'Additional Requests', 'customfield_11429' => 'Date of Birth', 'customfield_11430' => 'Emergency Contact Name and Phone Number',
    );
  }

  public function travel_authorization_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10190' => 'Traveler type', 'customfield_10191' => 'Travel Type', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_11423' => "Traveler's Phone Number",
      'customfield_10493' => 'Verify Traveler name as it appears on government issued ID used for airline travel', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10199' => 'Another org paying?', 'customfield_11424' => 'Office', 'customfield_11425' => 'EPA office paying', 'customfield_10491' => 'Cross-funding label',
      'customfield_11426' => 'Agency Name', 'customfield_11427' => 'Name of Funding Organization', 'customfield_11428' => 'Has ethics form been prepared', 'customfield_10340' => 'Office POC',
      'customfield_10201' => 'Organization POC', 'customfield_10356' => 'Emergency contact name and phone', 'customfield_11422' => 'Daily Itinerary while Out of Country ',
      'customfield_10430' => 'List your Division Director and/or Branch Chief Name/s', 'customfield_10094' => 'Travel Description', 'customfield_10922' => 'Travel Purpose',
      'customfield_10195' => "Traveler's Qualification", 'customfield_10198' => 'Benefit to EPA', 'customfield_10357' => 'Destination Country Contact (Name/Phone/Organization)',
      'customfield_10426' => 'Is this Travel for a Conference', 'customfield_10921' => 'Conference code, if available', 'customfield_10246' => 'Will training dollars be used for this travel?',
      'customfield_10431' => 'Are others from your L/C/O attending this meeting too',
      'customfield_10431a' => 'Are others from your L/C/O attending this meeting too', 'customfield_10431b' => 'Are others from your L/C/O attending this meeting too',
      'customfield_10432a' => 'Please list other attendees names', 'customfield_10432b' => 'Please list other attendees names',
      'customfield_10432' => 'Please list other attendees names', 'customfield_10423' => 'Are there training dollars used for this travel',
      'customfield_10424' => 'Are you presenting', 'customfield_10140' => 'Is any of this travel reimbursable or in-kind', 'customfield_10193' => 'Has ethics form been approved?',
      'customfield_10492' => 'Passport Expiration Date', 'customfield_10435' => 'Have you made your own airline reservation?', 'customfield_10103' => 'Mode of Transportation',
      'customfield_10111' => 'A specific flight number or aircraft carrier or any additional transportation requirements', 'multiDestinations' => 'Multiple Destinations?',
      'customfield_10104' => 'Departing From("City, State, or Airport Code")', 'customfield_10095' => 'Date', 'customfield_10294' => 'Departure Time', 'customfield_10105c' => 'Destination Country',
      'customfield_10105' => 'Arriving At("City, State, or Airport Code")', 'customfield_10425' => 'What day/s are you presenting',
      'customfield_10247' => 'First Trip From', 'customfield_10344' => 'First Trip Arriving At("City, State, or Airport Code")', 'customfield_10316' => 'First Trip Departure Time', 'customfield_10253' => 'First Trip Departure Date',
      'customfield_10248' => 'Second Trip From', 'customfield_10345' => 'Second Trip Arriving At("City, State, or Airport Code")', 'customfield_10318' => 'Second Trip Departure Time', 'customfield_10255' => 'Second Trip Departure Date',
      'customfield_10249' => 'Third Trip From', 'customfield_10346' => 'Third Trip Arriving At("City, State, or Airport Code")', 'customfield_10320' => 'Third Trip Departure Time', 'customfield_10257' => 'Third Trip Departure Date',
      'customfield_10250' => 'Fourth Trip From', 'customfield_10347' => 'Fourth Trip Arriving At("City, State, or Airport Code")', 'customfield_10322' => 'Fourth Trip Departure Time', 'customfield_10259' => 'Fourth Trip Departure Date',
      'customfield_10251' => 'Fifth Trip From', 'customfield_10348' => 'Fifth Trip Arriving At("City, State, or Airport Code")', 'customfield_10324' => 'Fifth Trip Departure Time', 'customfield_10261' => 'Fifth Trip Departure Date',
      'customfield_10301' => 'Returning Date', 'customfield_10302' => 'Returning Time', 'customfield_10098' => 'Is Personal/Annual Leave Requested?', 'customfield_10099' => 'Dates of Approved Leave',
      'customfield_10112' => 'Have you already reserved a hotel room?', 'customfield_10281' => 'Hotel name(s) and phone number(s) for each destination', 'customfield_10370' => 'Hotel room rate(s)',
      'hotelPreference' => 'Do you have a hotel preference?', 'customfield_10434' => 'If no hotel preference, please provide the address of your meeting location',
      'customfield_10117' => 'Specify hotel name and location (street address)', 'blockOfRooms' => 'Block of rooms reserved?', 'customfield_10119' => 'Name of Block',
      'customfield_10411' => 'Mode of Transportation', 'customfield_11431' => 'Roundtrip POV, miles', 'customfield_10412' => 'Private Vehicle Parking at Airport, cost/day',
      'customfield_10413' => 'Taxi, approximate cost', 'customfield_10414' => 'Public transportation, cost', 'customfield_10415' => 'Other anticipated expenses',
      'customfield_10416' => 'Phone Calls', 'customfield_10418' => 'ATM Fees', 'customfield_10377' => 'Internet Fees', 'customfield_10417' => 'Supplies', 'customfield_10386' => 'Taxis',
      'customfield_10419' => 'Baggage Fee', 'customfield_10420' => 'Conference Registration Fee', 'customfield_10421' => 'Public Transit', 'customfield_10380' => 'Other, explain',
      'customfield_10141' => 'Special requirements related to travel request', 'customfield_11827' => 'Have you taken the HSTOS Training?',
      'customfield_11823' => 'Who is your Deputy Ethics Official?', 'customfield_10492date' => 'Passport expiration date?', 'customfield_11825' => 'Sponsoring org',
      'customfield_11822' => 'Position Title', 'customfield_11821' => 'Traveler\'s Grade', 'customfield_11826' => 'Are you traveling outside the country?',
    );
  }

  public function travel_amendment_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10208' => 'Travel Request Number', 'customfield_10303' => 'Destination', 'customfield_10095' => 'Departure Date', 'customfield_10209' => 'Requested Change', 'customfield_10191' => 'Travel Type',
      'customfield_11423' => "Traveler's Phone Number",
    );
  }

  public function travel_cancellation_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10208' => 'Travel Request Number', 'customfield_10303' => 'Destination', 'customfield_10095' => 'Departure Date', 'customfield_10290' => 'Explanation', 'customfield_10191' => 'Travel Type',
      'customfield_11423' => "Traveler's Phone Number",
    );
  }

  public function travel_question_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10390' => 'Please state your question/comment in the field below', 'customfield_11423' => "Traveler's Phone Number",
    );
  }

  public function travel_routing_change_update_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10390' => 'Please state your question/comment in the field below', 'customfield_10191' => 'Travel Type',
    );
  }

  public function travel_concur_routing_form_fields() {
    return array('proxy' => 'Completing for someone else?', 'customfield_10092' => 'Your @epa.gov Email', 'customfield_10090' => 'Your Name', 'customfield_10091' => 'Your Telephone',
      'customfield_10620' => 'Traveler @epa.gov Email', 'customfield_10331' => 'Traveler name', 'customfield_10093' => 'Traveler L/C/O', 'customfield_10501' => 'Traveler division or equivalent',
      'customfield_10209' => 'Please state your requested Concur update in the box below', 'customfield_11423' => "Traveler's Phone Number",
    );
  }

  function isInternational() {
    return strpos($this->jira_data['customfield_10191'], 'International') !== false;
  }

  function isVoucher() {
    return strpos($this->webform_id, 'voucher') !== false;
  }

  public function getJiraData() {
    return $this->jira_data;
  }

  public function prepareFormData(WebformSubmissionInterface $webform_submission) {
    $this->form_data = $webform_submission->getData();
    $this->webform_id = $webform_submission->getWebform()->getOriginalId();
  }

  public function setProjectID($project_id) {
    $this->jira_data['fields']['project'] = ['id' => $project_id];
  }

  public function setIssueType() {
    $mapping = [
      'travel_amendment' => '32',
      'travel_cancellation' => '33',
      'travel_profile' => '34',
      'travel_concur_routing' => '10100',
      'travel_question' => '37',
      'travel_authorization' => '23',
      'travel_voucher' => '24',
      'travel_id_information' => '35',
    ];

    $this->jira_data['fields']['issuetype'] = ['id' => $mapping[$this->webform_id]];
  }

  public function prepareJiraData() {
    $form_to_jira_mapping = [
      'your_information' =>
        [
          'your_name' => 'customfield_10090',
          'your_email' => 'customfield_10092',
          'your_phone' => 'customfield_10091',
        ],
      'verify_your_name' => 'customfield_10493',
      'your_office_center' => 'customfield_10093',
      'ccte_division_traveler' => 'customfield_10501',
      'cemm_division_traveler' => 'customfield_10501',
      'ceser_division_traveler' => 'customfield_10501',
      'cphea_division_traveler' => 'customfield_10501',
      'orm_division_traveker' => 'customfield_10501',
      'osape_division_traveler' => 'customfield_10501',
      'osim_division_traveler' => 'customfield_10501',
      'traveler_information' =>
        [
          'traveler_name' => 'customfield_10331',
          'traveler_email' => 'customfield_10620',
          'traveler_phone' => 'customfield_11423',
        ],
      'verify_traveler_s_name' => 'customfield_10493',
      'traveler_s_office_center' => 'customfield_10093',
      'office_point_of_contact' => 'customfield_10340',
      'traveler_type' => 'customfield_10190',
      'travel_type' => 'customfield_10191',
      'passport_expiration_date' => 'customfield_10492',
      'emergency_contact_information' => 'customfield_10356',
      'traveler_s_grade' => 'customfield_11821',
      'title_position' => 'customfield_11822',
      'is_personal_annual_leave_being_requested_' => 'customfield_10098',
      'dates_of_approved_leave' => 'customfield_10099',
      'do_you_already_have_a_room_reserved_' => 'customfield_10112',
      'mode_s_of_transportation' => 'customfield_10103',
      'have_you_made_your_own_airline_reservation_' => 'customfield_10435',
      'would_you_like_to_request_a_specific_flight_' => '',
      'information_about_specific_flight' => '',
      'additional_information_transportation' => 'customfield_10111',
      'travel_purpose' => 'customfield_10922',
      'is_this_travel_for_an_epa_conference_' => 'customfield_10426',
      'please_provide_the_conference_code' => 'customfield_10921',
      'travel_description' => 'customfield_10094',
      'how_will_this_trip_benefit_the_epa_' => 'customfield_10198',
      'has_the_traveler_taken_hstos_training_' => 'customfield_11827',
      'who_is_your_deputy_ethics_official_' => 'customfield_11823',
      'sponsoring_organization' => 'customfield_11825',
      'division_director_and_or_branch_chief_s_name' => 'customfield_10430',
      'traveler_s_qualifications' => 'customfield_10195',
      'destination_country_contact_s_name' => 'customfield_10357',
      'destination_country_contact_s_telephone' => 'customfield_10357',
      'destination_country_contact_s_org' => 'customfield_10357',
      'hosting_organization_point_of_contact' => 'customfield_10357',
      'is_someone_else_paying_for_a_portion_or_all_of_the_travel_' => 'customfield_10199',
      'who_is_paying_' => 'customfield_11424',
      'epa_office_paying' => 'customfield_11425',
      'cross_funding_label_' => 'customfield_10491',
      'agency_name' => 'customfield_11426',
      'name_of_funding_organization' => 'customfield_11427',
      'has_an_ethics_form_been_prepared_' => 'customfield_11428',
      'has_an_ethics_form_been_approved_' => 'customfield_10193',
      'will_training_dollars_be_used_for_this_travel_' => 'customfield_10246',
      'please_provide_more_information_about_the_current_status_of_the_' => '',
      'are_others_from_your_l_c_o_attending_this_meeting_as_well_' => 'customfield_10431',
      'please_provide_the_names_of_the_others_attending_this_meeting_wi' => 'customfield_10432',
      'transportation_expenses' => 'customfield_10278',
      'cost_of_taxi_uber_lyft' => 'customfield_10413',
      'cost_of_metro_bus_public_transportation' => 'customfield_10414',
      'cost_of_pov' => 'customfield_11431',
      'cost_of_rental_car_fee' => 'customfield_10384',
      'cost_of_rental_car_fuel' => 'customfield_10385',
      'cost_of_tolls' => 'customfield_10387',
      'cost_of_rail' => 'customfield_10383',
      'additional_expenses' => 'customfield_10415',
      'cost_of_hotel' => 'customfield_10375',
      'cost_of_internet_fees' => 'customfield_10377',
      'cost_of_phone_calls' => 'customfield_10416',
      'cost_of_airport_parking' => 'customfield_10412',
      'cost_of_baggage_fees' => 'customfield_10419',
      'cost_of_atm_fees' => 'customfield_10418',
      'cost_of_supplies' => 'customfield_10417',
      'cost_of_other_expenses' => 'customfield_10380',
      'additional_info_text' => 'customfield_10141',
      'attachment_s_' => 'file',
      'travel_request_number' => 'customfield_10208',
      'destination' => 'customfield_10303',
      'departure_date' => 'customfield_10095',
      'requested_change' => 'customfield_10209',
      'please_state_your_requested_concur_update_' => 'customfield_10209',
      'explanation' => 'customfield_10290',
      'please_enter_your_date_of_birth' => 'customfield_11429',
      'please_enter_the_traveler_s_date_of_birth' => 'customfield_11429',
      'emergency_contact_information_new' => 'customfield_11430',
      'preferred_home_airport_new' => 'customfield_10266',
      'have_a_frequent_flyer_account_with_an_airline_that_you_would_lik' => 'customfield_10354',
      'smoking_preference' => 'customfield_10120',
      'any_additional_requests_' => 'customfield_10291',
      'bed_size_preference' => 'customfield_10262',
      'hotel_preference' => 'customfield_10273',
      'flight_seating_preference' => 'customfield_10263',
      'please_state_you_question_or_comment_in_the_filed_below_' => 'customfield_10390',
      'receipts' => 'file',
      'required_receipts' => 'file',
      'comments_on_travel_experience' => 'customfield_10308',
      'were_all_meals_provided_through_your_registration_costs_or_by_th' => 'customfield_10151',
      'do_you_have_any_other_expense_you_would_like_to_reimburse_to_you' => 'customfield_11420',
      'round_trip_flight' => [
        'flying_from' => 'Dixisset',
        'flying_to' => 'Loremipsum',
        'departing_date' => 'customfield_10095',
        'departing_time' => 'customfield_10343',
        'returning_date' => 'customfield_10096',
        'returning_time' => 'customfield_10302',
        'comments' => 'Huius, Lyco, oratione locuples, rebus ipsis ielunior. Duo Reges: constructio interrete. Sed haec in pueris; Sed utrum hortandus es nobis, Luci, inquit, an etiam tua sponte propensus es? Sapiens autem semper beatus est et est aliquando in dolore; Immo videri fortasse. Paulum, cum regem Persem captum adduceret, eodem flumine invectio? Et ille ridens: Video, inquit, quid agas;',
      ]
    ];
    $formatted_data = [
      'files' => [],
    ];
    $jira_fields = $this->returnFieldsForJiraType();
    $allowed_custom_fields = array_keys($jira_fields);
    // Filter out values not included in Jira Type
    foreach ($this->form_data as $key => $value) {
      $jira_mapping = $form_to_jira_mapping[$key];
      if ($jira_mapping === 'file') {
        $formatted_data['files'][] = $value[0];
      }
      else if ($this->is_checkbox_field($jira_mapping)) {
        $formatted_data[$jira_mapping] = $value;
      } else {
        if (isset($jira_mapping) && !empty($value)) {
          if (is_array($value)) {
            foreach ($value as $field_name => $field_value) {
              $custom_field_id = $jira_mapping[$field_name];
              if (in_array($custom_field_id, $allowed_custom_fields)) {
                $formatted_data[$custom_field_id] = $field_value;
              }
            }
          } else {
            if (in_array($jira_mapping, $allowed_custom_fields)) {
              $formatted_data[$jira_mapping] = $value;
            }
          }
        }
      }
    }
    $this->jira_data = $formatted_data;
  }

  function print_missing_field($field_id) {
    echo $field_id . '<br />';
  }

  function returnFieldsForJiraType() {
    switch ($this->webform_id) {
      case 'travel_authorization':
        $fields = $this->travel_authorization_form_fields();
        break;
      case 'travel_question':
        $fields = $this->travel_question_form_fields();
        break;
      case 'travel_voucher':
        $fields = $this->travel_voucher_form_fields();
        break;
      case 'travel_id_information':
        $fields = $this->traveler_id_form_fields();
        break;
      case 'travel_profile':
        $fields = $this->travel_profile_form_fields();
        break;
      case 'travel_cancellation':
        $fields = $this->travel_cancellation_form_fields();
        break;
      case 'travel_amendment':
        $fields = $this->travel_amendment_form_fields();
        break;
      case 'travel_concur_routing':
        $fields = $this->travel_concur_routing_form_fields();
        break;
    }
    return $fields;
  }

}