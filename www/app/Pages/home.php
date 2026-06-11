<div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/img/c1-picture.png" 
        class="d-block w-100 rounded" 
          alt="Landview">
			<!--img src="..." class="img-fluid" alt="..."-->
    </div>
    <div class="carousel-item">
      <img src="/assets/img/c2-picture.png" 
        class="d-block w-100 rounded" 
          alt="Photovoltaic Solar Panels">
    </div>
    <!--div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div-->
  </div>
</div>
<!-- Modal 1 -->
<div class="modal fade" 
	id="modalToggle1" aria-hidden="true" 
		aria-labelledby="modalToggleLabel1" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" 
					id="modalToggleLabel1">Choose your Service</h1>
				<button type="button" class="btn-close" 
					data-bs-dismiss="modal" 
						aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="d-flex flex-column flex-md-row p-4 gap-4 
					py-md-5 align-items-center justify-content-center">
					<div class="list-group list-group-checkable d-grid gap-2 border-0">
						<input class="list-group-item-check pe-none" 
							type="radio" name="listGroupCheckableRadios" 
								id="listGroupCheckableRadios1" value="" checked>
						<label class="list-group-item rounded-3 py-3" 
							for="listGroupCheckableRadios1">Ship and install
								<span class="d-block small opacity-50">
									We manage all with full support</span>
						</label>
						<input class="list-group-item-check pe-none" 
							type="radio" name="listGroupCheckableRadios" 
								id="listGroupCheckableRadios2" value="">
						<label class="list-group-item rounded-3 py-3" 
							for="listGroupCheckableRadios2">Ship only
								<span class="d-block small opacity-50">
									We provide transport </span>
						</label>
						<input class="list-group-item-check pe-none" 
							type="radio" name="listGroupCheckableRadios" 
								id="listGroupCheckableRadios3" value="" disabled>
						<label class="list-group-item rounded-3 py-3" 
							for="listGroupCheckableRadios3">Members
								<span class="d-block small opacity-50">
									Cooperation and Benefits included</span>
						</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" 
					data-bs-target="#modalToggle2" 
						data-bs-toggle="modal">Next Step</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal 2 -->
<div class="modal fade" 
	id="modalToggle2" aria-hidden="true" 
		aria-labelledby="modalToggleLabel2" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" 
					id="modalToggleLabel2">How can we contact you?</h1>
				<button type="button" class="btn-close" 
					data-bs-dismiss="modal" 
						aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="d-flex flex-column flex-md-row p-4 gap-4 
					py-md-5 align-items-center justify-content-center">
					<form class="needs-validation" novalidate>
						<fieldset>
							<p>
								<label for="email">Email-Address</label>
								<input class="form-control" type="email" id="email" placeholder="your@email.com" required>
							</p>
							<p>
								<label for="tel">Telephone</label>
								<input class="form-control" type="tel" id="tel" placeholder="0049 15123456789" required>
							</p>
							<p>
								<label for="date">Prefered Date of Contact</label>
								<input type="date" 
									id="date"/>
							</p>
							<div class="col-12">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
									<label class="form-check-label" for="invalidCheck">
										Agree to terms and conditions
									</label>
									<div class="invalid-feedback">
										You must agree before submitting.
									</div>
								</div>
							</div>
							<p>
								<label for="textarea">Message</label><br>
								<textarea 
									id="textarea" rows="3"></textarea>
							</p>
						</fieldset>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" 
					data-bs-target="#modalToggle1" 
						data-bs-toggle="modal">Back</button>
			</div>
		</div>
	</div>
</div>