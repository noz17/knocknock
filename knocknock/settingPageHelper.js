$(document).ready(function() {
	

var initialInput;
var database;
var device;
var action;
var clock;
var submit;


	var config = {
	    apiKey: "AIzaSyC3xzwWStNNoHXu8ZezS9-NJmW3-FOma3Q",
	    authDomain: "noknocknoz.firebaseapp.com",
	    databaseURL: "https://noknocknoz.firebaseio.com",
	    projectId: "noknocknoz",
	    storageBucket: "noknocknoz.appspot.com",
	    messagingSenderId: "163863157898"
	  };
  firebase.initializeApp(config);
  database = firebase.database();
  console.log(firebase);

  device = $("#form_device");
  action = $("#form_action");
  clock = $("#form_clock");
  submit = $("#submit");
 

  //submit.mousePressed(submitTimer);
 

		function loadDeviceList(){
			var myFirebaseRef = new Firebase("https://noknocknoz.firebaseio.com/lights");
			myFirebaseRef.on("value",function(snapshot){
				var combo_box_select_device = $("#form_device");

				combo_box_select_device.html("");
				combo_box_select_device.append("<option value='0' disabled selected='true'>Choose Device</option>");
				snapshot.forEach(function(childSnapshot){
					var node = childSnapshot.key();
					
					combo_box_select_device.append("<option value='"+node+"'>"+node+"</option>");

				});
			});
		}

		loadDeviceList();

		function loadContent(){
			var myFirebaseRef = new Firebase("https://noknocknoz.firebaseio.com/Timer");
			myFirebaseRef.on("value", function(snapshot) {

			
				var timer_table = $("#tbody-timer");


				//clear forms
			
				timer_table.html("");

				snapshot.forEach(function(childSnapshot) {
				    
				    
				    var node = childSnapshot.key();



				    	var node_child_key = childSnapshot.key();
				    	var node_child_value = childSnapshot.val();
				    	// var node_child_remove = childSnapshot.key().remove();
				    	
				    	console.log(childSnapshot);
				    	
				    	timer_table.append("<tr><td>"+node_child_value.device_name+"</td><td>"+node_child_value.Action+"</td><td>"+node_child_value.time+"</td><td>Cancel</td></tr>");

				  });

	  		});
		}

		loadContent();





		function deletetimer(){
			var myFirebaseRef = new Firebase("https://noknocknoz.firebaseio.com/Timer");
			myFirebaseRef.on("value", function(snapshot) {

			
				var timer_table = $("#tbody-timer");


				//clear forms
			
				timer_table.html("");

				snapshot.forEach(function(childSnapshot) {
				    
				    
				    var node = childSnapshot.key();



				    	var node_child_key = childSnapshot.key();
				    	var node_child_value = childSnapshot.val();
				    	// var node_child_remove = childSnapshot.key().remove();
				    	
				    	console.log(childSnapshot);
				    	
				    	timer_table.append("<tr><td>"+node_child_value.device_name+"</td><td>"+node_child_value.Action+"</td><td>"+node_child_value.time+"</td><td><button type='button' id='cancel' name='cancel' class='btn btn-block btn-primary btn-sm'>Cancel</button></td></tr>");

				  });

	  		});
		}

		deletetimer();





		

				  




		//Load settings first
		var mySettingsRef = new Firebase("https://nozcpanel.firebaseio.com/Settings");
		mySettingsRef.on("value", function(snapshot) {

			var settings = $("#setting-list");
			settings.html("");

			snapshot.forEach(function(childSnapshot) {

				// console.log("child of settings ["+childSnapshot.key()+"]");
				switch(childSnapshot.key()){
					case "last_update_datetime":

						$("#dashboard_title").html("last update: "+childSnapshot.val()+"");
					break;
				}

				//Add setting to the setting list
				settings.append('<li class="list-group-item">'+childSnapshot.key()+': '+childSnapshot.val()+'</li>');

			});	
		});


		



		
		$('#submit').click(function(){
			if($('#form_device').val()==null){
				alert('Please select devices!');
				return;	
			}

			else if($('#form_action').val()==null){
				alert('Please select action!');
				return;	
			}

			else if($('#form_clock').val()==""){
				alert('Please insert clock');
				return;	
			}
			else {

					var data = {
						device_name: ($('#form_device').val()),
						Action: ($('#form_action').val()),
						time: ($('#form_clock').val())
								}
					console.log(data);
				  	var ref = database.ref('Timer');
				  	ref.push(data);
				}
			
		});


		// 	function submitTimer()
		// 	{	
		// 	//do action to save data to firebase	
					
			
			
		// }

		// submitTimer();





		// //Load settings first
		// var mySettingsRef = new Firebase("https://nozcpanel.firebaseio.com/Timer/timer-1");
		// mySettingsRef.on("value", function(snapshot) {

		// 	snapshot.forEach(function(childSnapshot) {

		// 		console.log("child of settings ["+childSnapshot.key()+"]");
				
		// 		console.log("pi_address ["+childSnapshot.val()+"]")

		// 				//Once i've got the ip we are ready to load the content
		// 		loadContent();

		// 		//Add setting to the setting list
		
		// 	});	
		// });



	});