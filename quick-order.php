
      <div class="modal fade details-6" id="details-6" tabindex="-1" role="dialog" aria-labelledby="details-6" aria-hidden="false">

	<div class=" modal-content">
		<div class="container-fluid">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center"><i class="fa fa-handshake-o"></i> Make purchase:</h4>
			</div>
			<div class="container modal-body">
				<section class="reg-legend mt-4">
      			<div class="row">

      			 <form class="col-lg-12" id="contact-form" method="POST" action="https://formspree.io/agbobakehinde@gmail.com"> 


		            <div class="row modal-dialog"> 
		               <div class="input-field col-lg-6">  
		                  <input placeholder="Full name" id="firstname" name="fullname" type="text" class="text-center active validate  green-font" required> 
		                  <label for="name">First  name</label> 
		               </div> 
		               <div class="input-field col-lg-6">      
		                  <label for="lastname">Last name</label> 
		                  <input id="lastname" type="text" placeholder="Lastname" name="lastname" class="text-center validate  green-font" required>           
		               </div> 
		            </div> 
		            <div class="row"> 
		               <div class="input-field col-lg-6"> 
		                  <input placeholder="Email" id="email" name="email" type="email" class="validate  green-fonte text-center" required> 
		                  <label for="email">Email</label> 
		               </div>  
		               <div class="input-field col-lg-6">
		                  <input placeholder="Telephone no" id="number" name="number" type="number" class="validate text-center  green-font" required> 
		                  <label for="number">Telephone no</label> 
		               </div> 
		            </div> 
		            <div class="row green-body" style="border-radius: 5px;padding: 5px;">
		            		<h5 class="text-center text-white">Single purchase:</h5>
		            		<hr class="container">	 
		               <div class="input-field col-lg-6"> 
		                  <input placeholder="Quantity" id="quantity" type="number" name="quantity" class="validate  text-muted text-center"> 
		                  <label for="quantity " class="text-white">Quantity:</label> 
		               </div>  
		               <div class="input-field col-lg-6">
		                  <input placeholder="Item" id="item" type="text" class="validate text-center text-muted" name="item"> 
		                  <label for="item" class="text-white">Item:</label> 
		               </div> 
		            </div> 
		            <div class="row green-body mt-2 mb-2" style="border-radius: 5px;padding: 5px;">
		            		<h5 class="text-center text-white">Multi purchase:</h5>
		            		<hr class="container">	
		               <div class="input-field col-lg-12"> 
		                  <input placeholder="itmes" id="items" name="items" type="text" class="validate text-white text-center"> 
		                  <label for="items" class="text-white">Items:</label> 
		               </div>
		           </div>
		            <div class="row"> 
		               <div class="input-field col-lg-12"> 
		                  <input placeholder="Address" id="address" name="address" type="text" class="validate  green-font text-center" required> 
		                  <label for="address">Address:</label> 
		               </div>
		           </div>
		            <div class="row"> 
		               <div class="input-field col-lg-12"> 
		                  <input placeholder="bio" id="bio" name="bio" type="text" class="validate green-font text-center" required> 
		                  <label for="bio">Bio</label> 
		               </div>
		           </div>

					<div class="container modal-footer">
						<button class="btn btn-danger mr-3" data-dismiss="modal">Cancle</button>	
						<button type="submit" name="send" class="btn green-body text-white">Checkout<span class="fa fa-shopping-cart"></span></button>
					</div>
		         </form>        
		      </div>
      		</section>
		</div>
		</div>

		</div>
	</div>
<script>
	$("#contact-form").submit(function(e)){
		var firstname = document.getElementById("firstname"),
		var lastname = document.getElementById("lastname"),
		var email = document.getElementById("email"),
		var number = document.getElementById("number"),
		var quantity = document.getElementById("quantity"),
		var item = document.getElementById("item"),
		var items = document.getElementById("items"),
		var address = document.getElementById("address"),
		var bio = document.getElementById("bio");

		if(!firstname.value || !lastname.value || !email.value || !number.value || !quantity.value || !item.value || !items.value || !address.value || !bio.value ){
			alertify.error("Please check your entries "); 
		}else{
			$.ajax({
				url: "https://formspree.io/agbobakehinde@gmail.com",
				method: "POST",
				data: $(this).serialize(),
				dataType: "json"
			});
			e.preventDefault()
			$(this).get(0).reset() 
			alertify.success("Order placed successfully")
		}
	}
</script>