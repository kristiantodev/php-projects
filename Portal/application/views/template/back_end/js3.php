 <!-- jQuery 3 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url();?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Superieur Admin App -->
	<script src="<?php echo base_url();?>assets/js/template.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url();?>assets/vendor_components/chart.js-master/Chart.min.js"></script>
	
	<!-- Superieur Admin for demo purposes -->
	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
	
	
	
	<!-- Superieur Admin for editor -->
	<script src="<?php echo base_url();?>assets/js/pages/editor.js"></script>
	<!-- gallery -->
    <!-- fancybox -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor_components/lightbox-master/dist/ekko-lightbox.js"></script>
	<script src="<?php echo base_url();?>assets/js/pages/gallery.js"></script>    
	<!-- Superieur Admin dashboard demo-->
	<script>
//[Dashboard Javascript]

//Project:	Superieur Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
    
	
	// Bar chart
	
	
	if( $('#chart_8').length > 0 ){
		var ctx2 = document.getElementById("chart_8").getContext("2d");

		<?php if ($this->session->userdata('level') == "Administrator"){ ?>

		var data2 = {
			labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
			datasets: [
				{
					label: "Dikunjungi",
					backgroundColor: ['#0285b4', '#40606d', '#0285b4', '#40606d','#0285b4', '#40606d', '#0285b4', '#40606d',
					'#0285b4', '#40606d','#0285b4', '#40606d'],
					borderColor: "#0285b4",
					data:  <?php echo json_encode($grafik); ?>
				}
			]
		};

		<?php }else{ ?>

			var data2 = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
			datasets: [
				{
					label: "Dikunjungi",
					backgroundColor: ['#0285b4', '#40606d', '#0285b4', '#40606d','#0285b4', '#40606d', '#0285b4', '#40606d',
					'#0285b4', '#40606d','#0285b4', '#40606d'],
					borderColor: "#0285b4",
					data:  <?php echo json_encode($grafik); ?>
				}
			]
		};
   

			<?php } ?>
		
		var hBar = new Chart(ctx2, {
			type:"bar",
			data:data2,
			
			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					
				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display: false,
				},
				
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
				
			}
		});
	}	
	
}); // End of use strict

	</script>

		<script>
//[Dashboard Javascript]

//Project:	Superieur Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
    
	
	// Bar chart
	
	
	if( $('#chart_9').length > 0 ){
		var ctx2 = document.getElementById("chart_9").getContext("2d");

		var data2 = {
			labels: ['tgl 1', 'tgl 2', 'tgl 3', 'tgl 4', 'tgl 5', 'tgl 6',
                    'tgl 7', 'tgl 8', 'tgl 9', 'tgl 10', 'tgl 11', 'tgl 12',
                    'tgl 13', 'tgl 14', 'tgl 15', 'tgl 16', 'tgl 17', 'tgl 18',
                    'tgl 19', 'tgl 20', 'tgl 21', 'tgl 22', 'tgl 23', 'tgl 24',
                    'tgl 25',
                    'tgl 26', 'tgl 27', 'tgl 28', 'tgl 29', 'tgl 30', 'tgl 31'],
			datasets: [
				{
					label: "Dikunjungi",
					backgroundColor: ['#0285b4', '#40606d', '#0285b4', '#40606d','#0285b4', '#40606d', '#0285b4', '#40606d',
					'#0285b4', '#40606d','#0285b4', '#40606d', 
					'#0285b4', '#40606d', '#0285b4', '#40606d','#0285b4', '#40606d', '#0285b4', '#40606d',
					'#0285b4', '#40606d','#0285b4', '#40606d', '#0285b4', '#40606d', '#0285b4', '#40606d',
					'#0285b4', '#40606d','#0285b4'],
					borderColor: "#0285b4",
					data:  <?php echo json_encode($grafik); ?>
				}
			]
		};

		
		var hBar = new Chart(ctx2, {
			type:"bar",
			data:data2,
			
			options: {
				tooltips: {
					mode:"label"
				},
				scales: {
					yAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					xAxes: [{
						stacked: true,
						gridLines: {
							color: "rgba(135,135,135,0)",
						},
						ticks: {
							fontFamily: "Nunito Sans",
							fontColor:"#878787"
						}
					}],
					
				},
				elements:{
					point: {
						hitRadius:40
					}
				},
				animation: {
					duration:	3000
				},
				responsive: true,
				maintainAspectRatio:false,
				legend: {
					display: false,
				},
				
				tooltip: {
					backgroundColor:'rgba(33,33,33,1)',
					cornerRadius:0,
					footerFontFamily:"'Nunito Sans'"
				}
				
			}
		});
	}	
	
}); // End of use strict

	</script>

	
</body>
</html>