<link rel="stylesheet" href="plugins/widget/core/template/dashboard/cmd.info.string.BlueConnectPool/Pool.css">

<div class="poolwidget" data-type="info" data-subtype="other" data-cmd_id="#id#" data-cmd_uid="#uid#" data-version="#version#">
	<div class="poolShadow">
		<div class="poolTemperature">
          <div class="poolTemperatureHeader"><span>Température des 2 dernières semaines</span></div>
			<div class="poolTemperatureGraph">
				<div class="poolTemperatureDisplay"><span class="poolActualTemperature"></span><span class="poolTemperatureSubDisplay"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzODQgNTEyIj48cGF0aCBmaWxsPSIjMDAwMDAwIiBkPSJNMzYwIDQ4MEgyNGMtMTMuMyAwLTI0LTEwLjctMjQtMjR2LTI0YzAtMTMuMyAxMC43LTI0IDI0LTI0aDMzNmMxMy4zIDAgMjQgMTAuNyAyNCAyNHYyNGMwIDEzLjMtMTAuNyAyNC0yNCAyNHpNMTI4IDU2djEzNkg0MC4zYy0xNy44IDAtMjYuNyAyMS41LTE0LjEgMzQuMWwxNTIuMiAxNTIuMmM3LjUgNy41IDE5LjggNy41IDI3LjMgMGwxNTIuMi0xNTIuMmMxMi42LTEyLjYgMy43LTM0LjEtMTQuMS0zNC4xSDI1NlY1NmMwLTEzLjMtMTAuNy0yNC0yNC0yNGgtODBjLTEzLjMgMC0yNCAxMC43LTI0IDI0eiIvPjwvc3ZnPg==" width="10" height="10"> : <span class="poolMinTemperature2Weeks"></span> &nbsp;-&nbsp; <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzODQgNTEyIj48cGF0aCBmaWxsPSIjMDAwMDAwIiBkPSJNMjQgMzJoMzM2YzEzLjMgMCAyNCAxMC43IDI0IDI0djI0YzAgMTMuMy0xMC43IDI0LTI0IDI0SDI0QzEwLjcgMTA0IDAgOTMuMyAwIDgwVjU2YzAtMTMuMyAxMC43LTI0IDI0LTI0em0yMzIgNDI0VjMyMGg4Ny43YzE3LjggMCAyNi43LTIxLjUgMTQuMS0zNC4xTDIwNS43IDEzMy43Yy03LjUtNy41LTE5LjgtNy41LTI3LjMgMEwyNi4xIDI4NS45QzEzLjUgMjk4LjUgMjIuNSAzMjAgNDAuMyAzMjBIMTI4djEzNmMwIDEzLjMgMTAuNyAyNCAyNCAyNGg4MGMxMy4zIDAgMjQtMTAuNyAyNC0yNHoiLz48L3N2Zz4=" width="10" height="10"> : <span class="poolMaxTemperature2Weeks"></span><br>PAC : <span class="poolActualPAC"></span></span></div>
				<div class="poolTemperatureCanvas"><canvas id="poolTempChart" width="400" height="150"></canvas></div>
			</div>
		</div>
		<div class="poolOthersData">
			<div class="poolDataBox poolBoxPh">
				<div class="poolDataTitle">pH</div>
				<div class="poolDataValue"></div>
				<div class="poolDataDurationState"></div>
				<div class="poolDataProgress">
					<svg width='100px' height='20px' viewBox='0 0 100 20'>
						<g class='bars'>
							<rect class='data' fill='#DE4367' width='100%' height='5'></rect>
							<rect class='data' fill='#F39F4F' width='80%' height='5'></rect>
							<rect class='data' fill='#3286CC' width='60%' height='5'></rect>
							<rect class='data' fill='#F39F4F' width='40%' height='5'></rect>
							<rect class='data' fill='#DE4367' width='20%' height='5'></rect>
						</g>
						<g text-anchor='middle'>
							<text x='20%' y='15' class="poolCaptionBar">6.8</text>
							<text x='40%' y='15' class="poolCaptionBar">7.2</text>
							<text x='60%' y='15' class="poolCaptionBar">7.6</text>
							<text x='80%' y='15' class="poolCaptionBar">8.0</text>
						</g>
					</svg>
				</div>			
			</div>
			<div class="poolDataBox poolBoxRedox">
				<div class="poolDataTitle">Redox</div>
				<div class="poolDataValue"></div>
				<div class="poolDataDurationState"></div>
				<div class="poolDataProgress">
					<svg width='100px' height='20px' viewBox='0 0 100 20'>
						<g class='bars'>
							<rect class='data' fill='#DE4367' width='100%' height='5'></rect>
							<rect class='data' fill='#F39F4F' width='80%' height='5'></rect>
							<rect class='data' fill='#3286CC' width='60%' height='5'></rect>
							<rect class='data' fill='#F39F4F' width='40%' height='5'></rect>
							<rect class='data' fill='#DE4367' width='20%' height='5'></rect>
						</g>
						<g text-anchor='middle'>
							<text x='20%' y='15' class="poolCaptionBar">500</text>
							<text x='40%' y='15' class="poolCaptionBar">650</text>
							<text x='60%' y='15' class="poolCaptionBar">750</text>
							<text x='80%' y='15' class="poolCaptionBar">900</text>
						</g>
					</svg>
				</div>			
			</div>
			<div class="poolDataBox poolBoxSalinite">
				<div class="poolDataTitle">Salinité</div>
				<div class="poolDataValue"></div>
				<div class="poolDataDurationState"></div>
				<div class="poolDataProgress">
					<svg width='100px' height='20px' viewBox='0 0 100 20'>
						<g class='bars'>
							<rect class='data' fill='#DE4367' width='100%' height='5'></rect>
							<rect class='data' fill='#F39F4F' width='80%' height='5'></rect>
							<rect class='data' fill='#3286CC' width='60%' height='5'></rect>
							<rect class='data' fill='#F39F4F' width='40%' height='5'></rect>
							<rect class='data' fill='#DE4367' width='20%' height='5'></rect>
						</g>
						<g text-anchor='middle'>
							<text x='20%' y='15' class="poolCaptionBar">2.7</text>
							<text x='40%' y='15' class="poolCaptionBar">3.0</text>
							<text x='60%' y='15' class="poolCaptionBar">3.4</text>
							<text x='80%' y='15' class="poolCaptionBar">3.7</text>
						</g>
					</svg>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="plugins/widget/core/template/dashboard/cmd.info.string.BlueConnectPool/Chart.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var data = '#state#';
		var temperatureData = [], minTemp = 99, maxTemp = -99, stateClass = "", actualTemp = -99;

		data.split('¤').forEach(function(item) {
			var entries = item.split(":");

			switch(entries[0].trim()) {
				case 'Temperature':
                	actualTemp = entries[1].trim();
					$('.poolwidget[data-cmd_uid=#uid#] .poolActualTemperature').empty().append(entries[1].trim() + "°C");
					break;
	            
				case 'HistTemperature':
					temperatureData = entries[1].trim().split(";");
					temperatureData.forEach(function(item) {
						if (item < minTemp) minTemp = item;
						if (item > maxTemp) maxTemp = item;
					});
					$('.poolwidget[data-cmd_uid=#uid#] .poolMinTemperature2Weeks').empty().append(minTemp + "°C");
					$('.poolwidget[data-cmd_uid=#uid#] .poolMaxTemperature2Weeks').empty().append(maxTemp + "°C");
					break;
	            
				case 'SortiePAC':
                	var gainPAC = entries[1].trim() - actualTemp;
					$('.poolwidget[data-cmd_uid=#uid#] .poolActualPAC').empty().append((gainPAC >=0 ? "+" : "-") + Number.parseFloat(gainPAC).toFixed(1) + "°C");
					break;
	            
				case 'pH':
					var pHData = entries[1].trim().split(";");
					var pH = pHData[0].trim();
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxPh .poolDataValue').empty().append(pH);
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxPh .poolDataDurationState').empty().append(pHData[1].trim().replace(/\"/g, ''));
					if (pH < 6.8 || pH > 8) {
						stateClass = "poolDataStateDanger";
					} else if (pH < 7.2 || pH > 7.6) {
						stateClass = "poolDataStateWarning";
					} else {
						stateClass = "poolDataStateOK";					
					}
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxPh .poolDataValue').addClass(stateClass);
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxPh .poolDataDurationState').addClass(stateClass);
					break;
	            
				case 'Redox':
					var redoxData = entries[1].trim().split(";");
					var redox = redoxData[0].trim();
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxRedox .poolDataValue').empty().append(redox + " mv");
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxRedox .poolDataDurationState').empty().append(redoxData[1].trim().replace(/\"/g, ''));
					if (redox < 500 || redox > 900) {
						stateClass = "poolDataStateDanger";
					} else if (redox < 650 || redox > 750) {
						stateClass = "poolDataStateWarning";
					} else {
						stateClass = "poolDataStateOK";					
					}
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxRedox .poolDataValue').addClass(stateClass);
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxRedox .poolDataDurationState').addClass(stateClass);
					break;

				case 'Salinité':
					var saliniteData = entries[1].trim().split(";");
					var salinite = saliniteData[0].trim();
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxSalinite .poolDataValue').empty().append(salinite + " g/L");
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxSalinite .poolDataDurationState').empty().append(saliniteData[1].trim().replace(/\"/g, ''));
					if (salinite < 2.7 || salinite > 3.7) {
						stateClass = "poolDataStateDanger";
					} else if (salinite < 3.0 || salinite > 3.4) {
						stateClass = "poolDataStateWarning";
					} else {
						stateClass = "poolDataStateOK";					
					}
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxSalinite .poolDataValue').addClass(stateClass);
					$('.poolwidget[data-cmd_uid=#uid#] .poolBoxSalinite .poolDataDurationState').addClass(stateClass);
					break;
			}
		});

		var ctx = document.getElementById("poolTempChart").getContext("2d");
		var gradient = ctx.createLinearGradient(0, 0, 0, 150);
		gradient.addColorStop(0, 'rgba(255, 255, 255, 0.1)');
		gradient.addColorStop(0.5, 'rgba(255, 255, 255, 0.3)');
		gradient.addColorStop(1, 'rgba(255, 255, 255, 1)');

		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		    	labels: ['', '', '', '', '', '', '', '', '', '', '', '', '', ''],
		        datasets: [{data : temperatureData, borderWidth: 1, fill: true, pointRadius: 4, backgroundColor: gradient, pointBackgroundColor: "rgba(255,255,255,0.9)"}]
		    },
		    options: {
		    	responsive: true,
		    	legend: { display: false },
		    	tooltips: {
		    		mode: 'label',
		    		intersect: false,
		    		callbacks: {
		    			label: function(tooltipItem, data) {
		    				var indice = tooltipItem.index;
		    				return temperatureData[indice] + "°C";
		    			}
		    		},
		    		displayColors: false
		    	},
		    	hover: { mode: 'nearest', intersect: true},
		        scales: {
		        	xAxes: [{display: false}],
		            yAxes: [{display: false, ticks: { min : Math.floor(minTemp)-8, max : Math.ceil(maxTemp)+3 }}]
		        },
		        elements: {
		        	point: { pointStyle: 'circle' }
		        }
		    }
		});
	});
</script>
