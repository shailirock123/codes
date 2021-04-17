<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.contact{
			padding: 4%;
			background-color: #25274d;
		}
		.col-md-3{
			background: #ff9b00;
			padding: 4%;
			border-top-left-radius: 0.5rem;
			border-bottom-left-radius: 0.5rem;
		}
		.contact-info{
			margin-top:10%;
		}
		.contact-info img{
			margin-bottom: 15%;
		}
		.contact-info h2{
			margin-bottom: 10%;
		}
		.col-md-9{
			background: #fff;
			padding: 3%;
			border-top-right-radius: 0.5rem;
			border-bottom-right-radius: 0.5rem;
		}
		.contact-form label{
			font-weight:600;
		}
		.contact-form button{
			background: #25274d;
			color: #fff;
			font-weight: 600;
			width: 25%;
		}
		.contact-form button:focus{
			box-shadow:none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row" style="margin-top: 50px; border: 10px solid;border-style: ridge;">
					<button type="button" class="btn-primary" onclick="openmodal();" >Add Data</button>
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog" style="max-width: 1500px">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"></h4>
								</div>
								<div class="modal-body">
									<div class="container contact">
										<div class="row">
											<div class="col-md-3">
												<div class="contact-info">
													<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
													<h2>Contact Us</h2>
													<h4>We would love to hear from you !</h4>
												</div>
											</div>
											<div class="col-md-9">
												<div class="contact-form">
													<form id="add_data">
														<div class="form-group">
															<label >Name</label>
															<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
														</div>
														<div class="form-group">
															<label >Email</label>
															<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
														</div>
														<label>Qualification</label>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="qualification[]" value="MCA">
															<label class="form-check-label" for="defaultCheck1">
																Mca
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="qualification[]" value="BCA" >
															<label class="form-check-label" for="defaultCheck2">
																BCA
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="qualification[]" value="BA">
															<label class="form-check-label" for="defaultCheck2">
																BA
															</label>
														</div>
														<label>Gender</label>
														<div class="form-check">
															<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
															<label class="form-check-label" for="exampleRadios1">
																Male
															</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
															<label class="form-check-label" for="exampleRadios2">
																Female
															</label>
														</div>
														<div class="form-group">
										                  <input type="hidden" class="form-control" id="hidden_id"  name="hidden_id">
										                </div>
														<div class="form-group">        
															<div class="col-sm-offset-2 col-sm-10">
																<button type="button" class="btn btn-primary" id="submit" >Submit</button>
															</div>
														</div>
														<button type="button" class="btn btn-default" id="update" onclick="updateData();">Update</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
								</div>
							</div>
						</div>
					</div>

				</div>


				<div class="modal fade" id="myModal1" role="dialog">
					<div class="modal-dialog" style="max-width: 1500px">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"></h4>
							</div>
							<div class="modal-body">
								<div class="container">
									<!-- <div class="row" id="qualifications">

									</div> -->
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Qualification</th>
											</tr>
										</thead>
										<tbody id="qualificationtable1">
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
							</div>
						</div>
					</div>
				</div>

				<div class="row" >
					<table class="table table-bordered table-dark">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Qualification</th>
								<th>Action1</th>
								<th>Action2</th>
							</tr>
						</thead>
						<tbody id="usertable">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function openmodal() {
		$('#myModal').modal('show');
	}

	$(document).ready(function(){
		getuserList();
		$('#submit').click(function(){
			$.ajax({
				type: 'post',
				url: 'mainajax.php',
				data: $('#add_data').serialize(),
				success: function (res) {
					console.log(res);
					$("#name").val('');
					$("#email").val('');
					getuserList();
					$('#myModal').modal('show');

				}
			});
			
		});
	});

	function getuserList()
	{
		$.ajax({
			type: 'post',
			url: 'userajax.php',
			data: {},
			success: function (res) {
				console.log(res);
				var data = JSON.parse(res);
				var html = ``;
				$.each( data, function( key, val ) {
					html += `<tr>
					<td>`+val.name+`</td>
					<td>`+val.email+`</td>
					<td>`+val.gender+`</td>
					<td><i class="fa fa-eye" onclick="showqualification(`+val.id+`)"></i></td>
					<td><button type="button" class="btn btn-info" onclick="editData(`+val.id+`);">Edit</button></td>
                    <td><button type="button" class="btn btn-danger" onclick="deleteData(`+val.id+`);">Delete</button></td>
					</tr>`;
				});
				$("#usertable").html(html);
			}
		});
	}
	function showqualification(userid)
	{
		$.ajax({
			type: 'post',
			url: 'showqualificationajax.php',
			data: {'userid':userid},
			success: function (res) {
				console.log(res);
				var qualihtml = ``;
				var data = JSON.parse(res);
				$.each( data, function( key, val ) {
					qualihtml += `<tr>
					<td>`+val.qualification+`</td>
					
					</tr>`;;
				});
				$("#qualificationtable1").html(qualihtml);
				$('#myModal1').modal('show');


			}
		});
	}

	     function deleteData(id)
  {
    $.ajax({
            type: 'post',
            url: 'ajax_delete.php',
            data: {id:id},
            success: function (res) {
               getuserList();
            }
          });
    }

    function editData(id)
            {
            $.ajax({
                  type: 'post',
                  url: 'ajax_edit.php',
                  data: {id:id},
                  success: function(res){
                    modalopen();
                  var data2 = JSON.parse(res);
                  var html = ``;
                  $( "#name").val(data2.name)
                  $("#email").val(data2.email);
                  $("#phone").val(data2.phone_no);
                  $("#hidden_id").val(data2.id);
                  $("#btn").css({'display':'none'});
                  $("#btn1").css({'display':'block'});
                }
              });
          }

	
</script>