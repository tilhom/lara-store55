						<div class="cart-detail">
							<h2>Payment Method</h2>
							<div class="form-group">
								<form action="/charge" method="post" id="payment-form">
								  <div class="form-row">
								    <label for="card-element">
								      Credit or debit card
								    </label>
								    <div id="card-element">
								      <!-- A Stripe Element will be inserted here. -->
								    </div>

								    <!-- Used to display form errors. -->
								    <div id="card-errors" role="alert"></div>
								  </div>

								  <button>Submit Payment</button>
								</form>
							</div>
						</div>