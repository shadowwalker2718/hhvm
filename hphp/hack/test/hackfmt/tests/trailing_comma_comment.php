<?hh

function foo() {
  return array(
    // array begin:
    array(
      $long_identifier_one,
      $long_identifier_two,
      $long_identifier_three,
      $long_identifier_four,
    ) // array end
, // comma
  );
}

function foo() {
  return array(
    // array begin:
    array(
      $long_identifier_one,
      $long_identifier_two,
      $long_identifier_three,
      $long_identifier_four,
    ) // array end
// no comma
  );
}

function foo() {
  return array(
    /* array begin: */
    array(
      $long_identifier_one,
      $long_identifier_two,
      $long_identifier_three,
      $long_identifier_four,
    ) /* array end */
, /* comma */
  );
}
