$(document).ready(function() {

  // firebase object, and passed the URL as parameter
  var garage = new Firebase("https://noknocknoz.firebaseio.com/lights/garage");
  var livingroom = new Firebase("https://noknocknoz.firebaseio.com/lights/livingroom");
  var familyroom = new Firebase("https://noknocknoz.firebaseio.com/lights/familyroom");
  var bedroom2 = new Firebase("https://noknocknoz.firebaseio.com/lights/bedroom2");
  var bedroom1 = new Firebase("https://noknocknoz.firebaseio.com/lights/bedroom1");
  var kitchen = new Firebase("https://noknocknoz.firebaseio.com/lights/kitchen");
  var bathroom = new Firebase("https://noknocknoz.firebaseio.com/lights/bathroom");
  var backyard = new Firebase("https://noknocknoz.firebaseio.com/lights/backyard");
  var waterpump = new Firebase("https://noknocknoz.firebaseio.com/devices/waterpump");
  var fan = new Firebase("https://noknocknoz.firebaseio.com/devices/fan");
  var ldr = new Firebase("https://noknocknoz.firebaseio.com/lights/garage");

  /*****************************************************************
  get the value of the last state
  ******************************************************************/

  garage.once("value", function(res) {

    var garage = res.child("garage").val();
    $('#garage').attr('checked', garage); // 
    console.log("Status terkini garage: " +garage)

  });

  livingroom.once("value", function(res) {

    var livingroom = res.child("livingroom").val();
    $('#livingroom').attr('checked', livingroom); // 
    console.log("Status terkini livingroom: " +livingroom)

  });

   familyroom.once("value", function(res) {

    var familyroom = res.child("familyroom").val();
    $('#familyroom').attr('checked', familyroom); // 
    console.log("Status terkini familyroom: " +familyroom)

  });

    bedroom2.once("value", function(res) {

    var bedroom2 = res.child("bedroom2").val();
    $('#bedroom2').attr('checked', bedroom2); // 
    console.log("Status terkini bedroom2: " +bedroom2)

  });

   bedroom1.once("value", function(res) {

    var bedroom1 = res.child("bedroom1").val();
    $('#bedroom1').attr('checked', bedroom1); // 
    console.log("Status terkini bedroom1: " +bedroom1)

  });

   kitchen.once("value", function(res) {

    var kitchen = res.child("kitchen").val();
    $('#kitchen').attr('checked', kitchen); // 
    console.log("Status terkini kitchen: " +kitchen)

  });

   bathroom.once("value", function(res) {

    var bathroom = res.child("bathroom").val();
    $('#bathroom').attr('checked', bathroom); // 
    console.log("Status terkini bathroom: " +bathroom)

  });

   backyard.once("value", function(res) {

    var backyard = res.child("backyard").val();
    $('#backyard').attr('checked', backyard); // 
    console.log("Status terkini backyard: " +backyard)

  });

   waterpump.once("value", function(res) {

    var waterpump = res.child("waterpump").val();
    $('#waterpump').attr('checked', waterpump); // 
    console.log("Status terkini waterpump: " +waterpump)

  });

   fan.once("value", function(res) {

    var fan = res.child("fan").val();
    $('#fan').attr('checked', fan); // 
    console.log("Status terkini fan: " +fan)

  });

   ldr.once("value", function(res) {

    var ldr = res.child("ldr").val();
    $('#ldr').attr('checked', ldr); // 
    console.log("Status terkini ldr: " +ldr)

  });

  /*****************************************************************
    value of the state of light in real time,
    Every time there is change
  ******************************************************************/
 
  garage.on("child_changed", function(res) {

    var garage = res.val();
    $('#garage').prop('checked', garage);
    console.log("garage state changed: " +garage)

  });

  livingroom.on("child_changed", function(res) {

    var livingroom = res.val();
    $('#livingroom').prop('checked', livingroom);
    console.log("livingroom state changed: " +livingroom)

  });

  familyroom.on("child_changed", function(res) {

    var familyroom = res.val();
    $('#familyroom').prop('checked', familyroom);
    console.log("familyroom state changed: " +familyroom)

  });

  bedroom2.on("child_changed", function(res) {

    var bedroom2 = res.val();
    $('#bedroom2').prop('checked', bedroom2);
    console.log("bedroom2 state changed: " +bedroom2)

  });

  bedroom1.on("child_changed", function(res) {

    var bedroom1 = res.val();
    $('#bedroom1').prop('checked', bedroom1);
    console.log("bedroom1 state changed: " +bedroom1)

  });

  kitchen.on("child_changed", function(res) {

    var kitchen = res.val();
    $('#kitchen').prop('checked', kitchen);
    console.log("kitchen state changed: " +kitchen)

  });

  bathroom.on("child_changed", function(res) {

    var bathroom = res.val();
    $('#bathroom').prop('checked', bathroom);
    console.log("bathroom state changed: " +bathroom)

  });

  backyard.on("child_changed", function(res) {

    var backyard = res.val();
    $('#backyard').prop('checked', backyard);
    console.log("backyard state changed: " +backyard)

  });

  waterpump.on("child_changed", function(res) {

    var waterpump = res.val();
    $('#waterpump').prop('checked', waterpump);
    console.log("waterpump state changed: " +waterpump)

  });

  fan.on("child_changed", function(res) {

    var fan = res.val();
    $('#fan').prop('checked', fan);
    console.log("fan state changed: " +fan)

  });  

   ldr.on("child_changed", function(res) {

    var ldr = res.val();
    $('#ldr').prop('checked', ldr);
    console.log("ldr state changed: " +ldr)

  });
        


 /*****************************************************************
   update the value, changed the state of the Switch
  ******************************************************************/
  /**garage**/
  $('#garage').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          garage.update({ garage: true });
      }
      else{
          console.log("Off")
          garage.update({ garage: false });
      }
    });


  $('#livingroom').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          livingroom.update({ livingroom: true });
      }
      else{
          console.log("Off")
          livingroom.update({ livingroom: false });
      }
    });

  $('#familyroom').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          familyroom.update({ familyroom: true });
      }
      else{
          console.log("Off")
          familyroom.update({ familyroom: false });
      }
    });

  $('#bedroom2').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          bedroom2.update({ bedroom2: true });
      }
      else{
          console.log("Off")
          bedroom2.update({ bedroom2: false });
      }
    });

  $('#bedroom1').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          bedroom1.update({ bedroom1: true });
      }
      else{
          console.log("Off")
          bedroom1.update({ bedroom1: false });
      }
    });

  $('#kitchen').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          kitchen.update({ kitchen: true });
      }
      else{
          console.log("Off")
          kitchen.update({ kitchen: false });
      }
    });

  $('#bathroom').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          bathroom.update({ bathroom: true });
      }
      else{
          console.log("Off")
          bathroom.update({ bathroom: false });
      }
    });


  $('#backyard').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          backyard.update({ backyard: true });
      }
      else{
          console.log("Off")
          backyard.update({ backyard: false });
      }
    });

  $('#waterpump').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          waterpump.update({ waterpump: true });
      }
      else{
          console.log("Off")
          waterpump.update({ waterpump: false });
      }
    });

  $('#fan').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          fan.update({ fan: true });
      }
      else{
          console.log("Off")
          fan.update({ fan: false });
      }
    });

  $('#ldr').on('change', function(){ 
     if(this.checked) 
      {
          console.log("On")
          ldr.update({ ldr: true });
      }
      else{
          console.log("Off")
          ldr.update({ ldr: false });
      }
    });


});