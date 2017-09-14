$(document).ready(function () {

  // Localize DOM elements.
  var newCustomer = $('#new-customer');
  var returningCustomer = $('#returning-customer');

  var email = $('#email');
  var password = $('#password');
  var address = $('#address');
  var city = $('#city');
  var state = $('#state');
  var zipcode = $('#zipcode');

  // By default, hide new customer fields.
  address.hide();
  city.hide();
  state.hide();
  zipcode.hide();

  newCustomer.on('click', function () {
    password.show();
    address.show();
    city.show();
    state.show();
    zipcode.show();
  });
  returningCustomer.on('click', function () {
    address.hide();
    city.hide();
    state.hide();
    zipcode.hide();
  });

});
