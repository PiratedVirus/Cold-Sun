<?php
       include '../scheme_header.php';
       include '../auth/dbconnect.php';
//       include '../auth/admin_home/lite/send_db.php';
    include "../helpers/sql_functions.php";
?>
		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="../img/img/recurring_deposits.png">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<span class="text-white alt-font">vighnaharta nidhi&nbsp;</span>
							<h1 class="text-white">Bitiya Nidhi Bond</h1>
							<p class="lead text-white">All you need to know about Vighnaharta Nidhi's <br>Bitiya Nidhi Bond</p>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="duplicatable-content">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 class="orangeText textCaps">Details about Schemes</h1>
						</div>
					</div><!--end of row-->
		
					<div class="row">
						<div class="col-sm-12">
							<div class="feature feature-icon-large">
								<!-- <div class="pull-left">
									<i class="icon icon-genius"></i>
								</div> -->
								<div class="pu">
									<h5 class="orangeText">Tenure of Payment</h5>
									<p>
										 The tenure of the account is 12 months and above.
									</p>
								</div>
							</div>
						</div><!--end 6 col-->
						
						<div class="col-sm-12">
							<div class="feature feature-icon-large">
								<!-- <div class="pull-left">
									<i class="icon icon-linegraph"></i>
								</div> -->
								<div class="pu">
									<h5 class="orangeText">Mode Of Payment</h5>
									<p>
										 All payments to the company shall be made either in cash or by cheque/draft against the receipt countersigned by its authorized
										signatory payments by any mode or media other than mentioned above shall be at the member account holder’s own risk. The
										cheque/draft shall be credited in the name of member Account Holder subject to clearance by the bank. Out station cheques
										shall not be accepted.
									</p>
								</div>
							</div>
						</div><!--end 6 col-->
						
						<div class="col-sm-12">
							<div class="feature feature-icon-large">
								<!-- <div class="pull-left">
									<i class="icon icon-tools-2"></i>
								</div> -->
								<div class="pu">
									<h5 class="orangeText">Issue of Passbook</h5>
									<p>
A passbook will be issued to every Member Account Holder. The Member Account Holder shall get the pass book updated at regular
intervals. If any discrepancy or difference in the amount is found between the entries made in the passbook and receipts
duly countersigned by the authorized signatory of the branch office bearing seal. Payment shall be made on the basis of receipts
only.									</p>
								</div>
							</div>
						</div><!--end 6 col-->
						
						<div class="col-sm-12">
							<div class="feature feature-icon-large">
								<!-- <div class="pull-left">
									<i class="icon icon-desktop"></i>
								</div> -->
								<div class="pu">
									<h5 class="orangeText">Terms & Conditions</h5>
									<p>
										1. Interest will be calculated on yearly basis. Recurring Deposit minimum amount Rs 100/-, thereafter in multiples of Rs 100/-
										<br>2. Loan on deposits will be charged at 18% yearly compound interest basis. Lapse on payment of installment amount will make
										<br> 3. the defaulter pay Rs 2 per 100 per month with installment amount. 1 month after paying last installment or maturity amount
										<br> 4.due date whichever is more will be applicable for payment of maturity amount. Irregular deposits are not entitled for pre
										<br> 5.mature payment and loan facility against it. On irregular deposits if all irregular pending deposits are paid then such account
										<br> 6.will be treated as regular. Even if there is default in payment of 1 installment, the said account will be treated as irregular.
										<br> 7.After maturity date, payment on irregular accounts will be made after deducting the penalty amount maximum to the limit of
										<br> 8.interest earned on such account. No deductions will be made on principle amount of such accounts.
									</p>
								</div>
							</div>
						</div><!--end 6 col-->
						<div class="col-sm-12">
							<div class="feature feature-icon-large">
								<!-- <div class="pull-left">
									<i class="icon icon-desktop"></i>
								</div> -->
								<div class="pu">
									<h5 class="orangeText">Loan facility on Recurring Deposits</h5>
									<p>
										1. On 24 month and 36 month deposit schemes, after 1 year (after receiving of 12 installments) loan up to 60% of deposited amount
										will be given.
										2. On 48 month and 60 month deposit schemes, after 1.5 years (after receiving of 18 installments) loan up to 60% of deposited
										amount will be given
									</p>
								</div>
							</div>
						</div><!--end 6 col-->
						<div class="col-sm-12">
							<div class="feature feature-icon-large">
								
								<div class="pu">
									<h5 class="orangeText">Pre Mature Closure Of Deposits</h5>
									<p>
										 Fore closure of Deposits will not be permitted until completion of 3 months From the date of Deposits. Deposits foreclosed
										after 3 months but before 6 months from the date of Deposits no Interest will be paid. Deposits foreclosed after 6 months,
										interest at 2% shall be deducted from the normal rate of Simple Interest for the period of Deposit.
									</p>
								</div>
							</div>
						</div>
						<!--end 6 col-->
						
					</div><!--end of row-->
				</div>
			
			</section>
			
			
			<section class="pricing-1">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1> <span class="orangeText textCaps ">Recurring Deposit Scheme</span><br>On Deposit Of Rs. 1000/- Par Month</h1>
						</div>
					</div><!--end of row-->
					
					<div class="row clearfix  pricing-tables">
						<table class="table table-stripede ">
							<thead class="orangeText textCaps">
								<tr>
									<th>Period</th>
									<th>Rate of Interest</th>
									<th>Maturity</th>
								</tr>
							</thead>
							<tbody class="textBold">
								<?php printRD($conn); ?>

							</tbody>
						</table>
						
						
					</div><!--end of row-->
					
				</div><!--end of container-->
			
			</section>
		</div>
		<?php include '../footer.php' ?>