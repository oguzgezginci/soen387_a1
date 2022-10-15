// Wait for the DOM to be ready
$(function () {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $(".validated_form").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      first_Name: 'required',
      last_Name: 'required',
      address: 'required',
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true,
      },
      phone_Number: {
        required: true,
        minlength: 10,
        maxlength: 10,
      },
      date_of_birth: {
        required: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
      id: {
        required: true,
        number: true,
      },
      course_code: {
        required: true,
        number: true,
      },
      title: {
        required: true,
        maxlength: 250,
      },
      semester: {
        required: true,
      },
      days: {
        required: true,
      },
      time: {
        required: true,
      },
      instructor: {
        required: true,
        maxlength: 250,
      },
      room: {
        required: true,
        maxlength: 3,
      },
      start_date: {
        required: true,
      },
      end_date: {
        required: true,
      },
    },
    // Specify validation error messages
    messages: {
      firstname: 'Please enter your firstname',
      lastname: 'Please enter your lastname',
      password: {
        required: 'Please provide a password',
        minlength: 'Your password must be at least 5 characters long',
      },
      email: 'Please enter a valid email address',
      id: {
        required: 'Please enter id',
        number: 'Your id must be a number',
      },
      course_code: {
        required: 'Please enter a course code',
        number: 'The course code must be a number',
      },
      title: {
        required: 'Please enter a course title',
        maxlength: "The course title can't be longer than 250 characters",
      },
      semester: {
        required: 'Please choose a semester',
      },
      days: {
        required: 'Please choose class days',
      },
      time: {
        required: 'Please choose a class start time',
      },
      instructor: {
        required: 'Please enter instructor name',
        maxlength: "The instructor's name can't be longer than 250 characters",
      },
      room: {
        required: 'Please enter a room number',
        maxlength: "The room number can't be longer than 3 characters",
      },
      start_date: {
        required: 'Please choose a start date',
      },
      end_date: {
        required: 'Please choose an end date',
      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      form.submit()
    },
  })
})
